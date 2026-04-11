<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Setting;

class ChatbotController extends Controller
{
    public function ask(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $apiKey = env('OPENAI_API_KEY');
        if (!$apiKey) {
            return response()->json(['reply' => 'Chatbot is currently disabled.'], 200);
        }

        // Get optional training text from settings
        $trainingData = Setting::where('key', 'chatbot_training_data')->value('value') ?? "You are a helpful AI assistant for an Optical Mark Recognition (OMR) software product. Answer questions about OMR usage, pricing, and demo processes.";

        $messages = [
            ['role' => 'system', 'content' => $trainingData],
            ['role' => 'user', 'content' => $request->message],
        ];

        try {
            $response = Http::withToken($apiKey)->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => $messages,
                'max_tokens' => 150,
            ]);

            $reply = $response->json('choices.0.message.content') ?? 'I could not process that request.';
            
            return response()->json(['reply' => $reply]);
        } catch (\Exception $e) {
            return response()->json(['reply' => 'Error communicating with AI service.'], 500);
        }
    }
}
