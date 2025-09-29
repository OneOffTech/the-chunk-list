@extends('_layouts.main')

@section('body')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center mb-16">
        <p class="flex justify-center mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 120" class="block text-stone-600 fill-current w-24 group" aria-hidden="true">
                <path class="" d="M414.4 18.8h-44.8c-4.9 0-8.9 4-8.9 8.9v63.1c0 4.9 4 8.8 8.9 8.8s8.9-3.9 8.9-8.8v-23h30.8c4.5 0 8-3.6 8-8 0-4.5-3.5-8-8-8h-30.8V34.9h35.9c4.5 0 8-3.6 8-8 0-4.5-3.6-8.1-8-8.1z"/>
                <path class="" d="M487 34.9c4.5 0 8-3.6 8-8 0-4.5-3.5-8-8-8h-44.8c-4.9 0-8.6 4-8.6 8.9v63.1c0 4.9 3.8 8.8 8.7 8.8 4.9 0 8.7-3.9 8.7-8.8v-23h30.9c4.5 0 8-3.6 8-8 0-4.5-3.5-8-8-8H451v-17h36z"/>
                <path class="" d="M306 17.6c-22.1 0-38.8 14.9-42.1 34.3h-15.1c-4 .1-7.2 3.4-7.2 7.4s3.2 7.3 7.2 7.4H264c3.4 19.2 19.9 33.8 41.9 33.8 24.7 0 42.7-18.6 42.7-41.4-.1-23.1-17.9-41.5-42.6-41.5zm23.9 41.6c0 13.7-9.8 24.9-24 24.9-11.4 0-20.2-7.4-23.1-17.5h23.1c4.1 0 7.5-3.2 7.5-7.3s-3.4-7.4-7.5-7.4h-23.3c2.7-10.4 11.4-18 23.1-18 14.2 0 24.2 11.4 24.2 25.2v.1z"/>
                <path class="" d="M260.6 4.8l-10.5 15.5c-11.9 0-50-.1-50.2-.1-3.9.2-6.9 3.4-6.9 7.4 0 4.1 3.3 7.4 7.4 7.4h39.9L229 51.7h-29v-.1c-3.9.1-7.1 3.4-7.1 7.4s3.2 7.2 7.1 7.4h18.9L207 84.1h-6.4c-4 0-7.5 3.1-7.7 7.1-.1 3.2 1.8 5.9 4.6 7.1l-11.2 16.5c-.2.3 0 .7.4.7h3.9c.2 0 .4-.1.5-.3L265.7 4.7c.2-.3 0-.7-.4-.7H262c-.6 0-1.1.3-1.4.8z"/>
                <path class="" d="M47.6 17.6C22.9 17.6 5 36.2 5 59v.2c0 22.8 17.7 41.2 42.4 41.2S90 81.7 90 59v-.2C90 36 72.3 17.6 47.6 17.6zm24.2 41.6c0 13.7-10 24.9-24.2 24.9S23.2 72.7 23.2 58.9v-.2c0-13.7 10-24.9 24.2-24.9S71.8 45.2 71.8 59v.2z"/>
                <ellipse class="" cx="47.1" cy="59" rx="7.5" ry="7.5"/>
                <path class="" d="M167.7 18.2c-4.8 0-8.7 3.9-8.7 8.7v41.3l-33.9-44.6c-2.4-3.1-4.8-5.2-9.1-5.2h-1.8c-4.9 0-9 3.9-9 8.9V91c0 4.8 4.1 8.7 8.9 8.7 4.8 0 8.9-3.9 8.9-8.7V48.1l35.1 46.3c2.4 3.1 4.8 5.2 9 5.2h.6c4.9 0 8.6-4 8.6-8.9V26.9c.1-4.8-3.8-8.7-8.6-8.7z"/>
            </svg>
            <span class="sr-only">OneOffTech's</span>
        </p>
        <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">
            The Chunk List
        </h1>
        <p class="mt-4 text-xl text-gray-600">
            Open-Source database of document parsers, their pricing, and capabilities
        </p>
    </div>

    <div class="space-y-16">
        @foreach($providers as $provider)
        
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="px-6 py-8 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">{{ $provider->name }}</h2>
                            @if($provider->description)
                                <p class="mt-2 text-gray-600">{{ $provider->description }}</p>
                            @endif

                            <ul class="mt-2 flex items-center gap-4">
                                <li>
                                    <a href="{{ $provider->url }}" target="_blank" class="text-blue-600 hover:text-blue-800 inline-flex gap-1 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                        </svg>
                                        {{ str_replace('https://', '', rtrim($provider->url, '/')) }}
                                    </a>
                                </li>

                                @if($provider->docs)
                                    <li>
                                        <a href="{{ $provider->docs }}" target="_blank" class="text-blue-600 hover:text-blue-800 inline-flex gap-1 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                            </svg>

                                            Documentation
                                        </a>
                                    </li>
                                @endif

                                @if($provider->github)
                                    <li>
                                        <a href="{{ $provider->github }}" target="_blank" class="text-blue-600 hover:text-blue-800 inline-flex gap-1 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"  class="size-6"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                            GitHub
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    @if($provider->type || isset($provider->compliance))
                        <div class="mt-4 flex flex-wrap gap-2">
                            @if($provider->type)
                                @if (is_array($provider->type))
                                    @foreach ($provider->type as $type)
                                        
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                        {{ $type }}
                                    </span>
                                    @endforeach
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                        {{ $provider->type }}
                                    </span>
                                @endif
                            @endif
                            @if($provider->compliance)
                                @if($provider->compliance->hipaa ?? false)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                        HIPAA
                                    </span>
                                @endif
                                @if($provider->compliance->soc_two ?? false)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                        SOC 2
                                    </span>
                                @endif
                                @if($provider->compliance->gdpr ?? false)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                        GDPR
                                    </span>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>

                <div class="px-6 pb-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quota</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Features</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($provider->tiers as $tier)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $tier['name'] }}
                                            @if($tier['billing_type'])
                                                <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                                    {{ $tier['billing_type'] }}
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $tier['price'] }}
                                            @if($tier['cost_per_unit'])
                                                <div class="text-xs text-gray-500 mt-1">
                                                    {{ $tier['cost_per_unit'] }}
                                                </div>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $tier['included_quota'] ?? 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            @if(isset($tier['features']) && count($tier['features']))
                                                <ul class="list-disc list-inside space-y-1">
                                                    @foreach($tier['features'] as $feature)
                                                        <li class="text-sm">{{ $feature }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection



