<?php

return [
    'base' => [
        'path' => 'absolute/path/to/storage',
        'url' => 'http://domain.tld/storage',
    ],
    'keys' => [
        'public' => '...public key here...',
        'private' => '...private key here...'
    ],
    'upload' => [
        'overwrite' => false,
        'maxFileSize' => return_bytes(ini_get('upload_max_filesize')),
        'allowedFileExtensions' => [
            'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'rtf', 'csv',
            // 'mp3', 'wav', 'ogg', 'wma'
            'gif', 'bmp', 'jpg', 'jpeg', 'png',
            //'mp4', 'wma', 'qt', 'mov',
            'zip', 'rar', 'tar', '7z',
        ]
    ],
    'hideHiddenFiles' => true,
    'accessControl' => [
        'allowedOrigin' => '*',
        'allowedMethods' => 'GET, POST, DELETE, PUT, OPTIONS'
    ],
    'fileTypes' => [
        'code' => ['java', 'php', 'html', 'js', 'css', 'htm', 'cpp', 'ts', 'xml', 'json', 'bat'],
        'audio' => ['mp3', 'wav', 'ogg', 'wma'],
        'image' => ['gif', 'bmp', 'jpg', 'jpeg', 'png'],
        'text' => ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'rtf', 'csv'],
        'video' => ['mp4', 'wma', 'qt', 'mov'],
        'zip' => ['zip', 'rar', 'tar', '7z'],
    ]
];