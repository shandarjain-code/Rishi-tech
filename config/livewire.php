<?php

return [
    'temporary_file_upload' => [
        'disk' => 'livewire-tmp',
        'rules' => ['required', 'file', 'max:2097152'],
        'directory' => '/',
        'middleware' => null,
        'preview_mimes' => [
            'mp4', 'm4v', 'mov', 'webm', 'ogg', 'ogv', 'avi', 'wmv', 'mkv', 'flv',
            '3gp', '3g2', 'mpeg', 'mpg', 'mpe', 'm2v', 'ts', 'mts', 'm2ts',
            'jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg', 'webp',
            'mp3', 'm4a', 'wav', 'wma', 'mpga',
        ],
        'max_upload_time' => 60,
        'cleanup' => true,
    ],
];
