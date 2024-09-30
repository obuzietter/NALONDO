<?php

if (!function_exists('inline_svg')) {
    function inline_svg($filename) {
        $path = public_path('images/' . $filename);
        if (file_exists($path)) {
            return file_get_contents($path);
        }
        return ''; // Return empty string if file doesn't exist
    }
}
