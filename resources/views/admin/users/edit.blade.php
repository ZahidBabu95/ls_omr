<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl font-outfit text-slate-900 leading-tight">
            Edit User: {{ $user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-slate-100 p-8">
                <form method="POST" action="{{ route('admin.users.update', $user) }}" class="space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label for="name" class="block font-bold text-sm text-slate-700">Name</label>
                        <input id="name" class="block mt-1 w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 shadow-sm" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus />
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="email" class="block font-bold text-sm text-slate-700">Email Address</label>
                        <input id="email" class="block mt-1 w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 shadow-sm" type="email" name="email" value="{{ old('email', $user->email) }}" required />
                        @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="role" class="block font-bold text-sm text-slate-700">Assign Role</label>
                        <select id="role" name="role" class="block mt-1 w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 shadow-sm" required>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                    {{ ucwords(str_replace('_', ' ', $role->name)) }}
                                </option>
                            @endforeach
                        </select>
                        @error('role') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="border-t border-slate-100 pt-6 mt-6">
                        <p class="text-sm text-slate-500 mb-4 font-bold">Change Password (leave blank to keep current)</p>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block font-bold text-sm text-slate-700">New Password</label>
                                <input id="password" class="block mt-1 w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 shadow-sm" type="password" name="password" />
                                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="password_confirmation" class="block font-bold text-sm text-slate-700">Confirm New Password</label>
                                <input id="password_confirmation" class="block mt-1 w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500 shadow-sm" type="password" name="password_confirmation" />
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4 pt-4 border-t border-slate-100">
                        <a href="{{ route('admin.users.index') }}" class="mr-4 text-sm font-medium text-slate-500 hover:text-slate-800">Cancel</a>
                        <x-primary-button>
                            {{ __('Update User') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
