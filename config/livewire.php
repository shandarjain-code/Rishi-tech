<?php

return [
    'temporary_file_upload' => [
        'disk' => env('LIVEWIRE_TEMPORARY_FILE_UPLOAD_DISK', 'public'),
        'rules' => ['required', 'file', 'max:2097152'],
        'directory' => null,
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
