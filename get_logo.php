<?php
$html = @file_get_contents('https://amarschool.co/');
if ($html) {
    preg_match_all('/<img[^>]+src=["\']([^"\']+)["\']/i', $html, $matches);
    print_r($matches[1]);
} else {
    echo "Fail to download";
}
