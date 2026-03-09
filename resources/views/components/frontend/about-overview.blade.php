@props([
    'description' => [],
    'stats' => []
])

<div class="max-w-4xl mx-auto mb-16">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center gap-3">
        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
        Overview
    </h3>
    <div class="bg-gray-50 rounded-xl p-8">
        @foreach($description as $paragraph)
            <p class="text-gray-600 text-lg leading-relaxed mb-6">{{ $paragraph }}</p>
        @endforeach
        
        @if(count($stats) > 0)
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
                @foreach($stats as $stat)
                    <div class="text-center">
                        <p class="text-3xl font-bold text-blue-600">{{ $stat['value'] }}</p>
                        <p class="text-gray-600 text-sm">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
