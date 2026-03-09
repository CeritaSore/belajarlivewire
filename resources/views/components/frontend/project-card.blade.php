@props([
    'title',
    'year',
    'description',
    'technologies' => [],
    'features' => [],
    'gradient' => 'from-blue-500 to-indigo-600',
    'icon' => 'shopping-cart'
])

@php
    $icons = [
        'shopping-cart' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />',
        'server' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />',
        'cloud' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />',
        'pipeline' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />',
        'vpn' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />',
        'analytics' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />',
    ];
    $iconSvg = $icons[$icon] ?? $icons['shopping-cart'];
@endphp

<div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
    <div class="md:flex">
        <div class="md:w-1/3 bg-gradient-to-br {{ $gradient }} p-8 flex items-center justify-center">
            <svg class="w-24 h-24 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                {!! $iconSvg !!}
            </svg>
        </div>
        <div class="md:w-2/3 p-8">
            <div class="flex items-center gap-3 mb-3">
                <h3 class="text-2xl font-bold text-gray-900">{{ $title }}</h3>
                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-medium">{{ $year }}</span>
            </div>
            <p class="text-gray-600 mb-4">{{ $description }}</p>
            
            @if(count($technologies) > 0)
                <div class="flex flex-wrap gap-2 mb-4">
                    @foreach($technologies as $tech)
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">{{ $tech }}</span>
                    @endforeach
                </div>
            @endif
            
            @if(count($features) > 0)
                <div class="flex gap-4 text-sm text-gray-500">
                    @foreach($features as $feature)
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            {{ $feature }}
                        </span>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
