<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000/',
    'title' => 'The Chunk List - OneOffTech',
    'description' => 'Open-Source database of document parsers, their pricing, and capabilities.',
    'collections' => [
        'providers' => [
            'extends' => null,
            'items' => function ($config) {
                $provider_files = glob('../providers/*/*.toml');

                return collect($provider_files)->map(function ($post) {

                    $content = toml_decode(file_get_contents($post), asArray: true);

                    return $content;

                });
            },
        ],
    ],

    'absoluteUrl' => function ($page, $path) {
        if(Str::startsWith($path, 'http')){
            return $path;
        }
        
        return  rtrim($page->baseUrl, '/') . '/' . trimPath($path);
    },
];
