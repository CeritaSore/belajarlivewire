@props(['items' => []])

<div class="max-w-4xl mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center gap-3">
        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
        Work Experience
    </h3>
    <div class="space-y-4">
        @foreach($items as $item)
            <div class="bg-gray-50 rounded-xl p-6 border-l-4 {{ $item['borderColor'] ?? 'border-blue-600' }}">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                    <h4 class="text-lg font-semibold text-gray-900">{{ $item['position'] }}</h4>
                    <span class="{{ $item['dateClass'] ?? 'text-blue-600' }} font-medium">{{ $item['period'] }}</span>
                </div>
                <p class="text-gray-600 mb-2">{{ $item['company'] }}</p>
                @if(isset($item['responsibilities']) && is_array($item['responsibilities']))
                    <ul class="text-gray-500 text-sm list-disc list-inside space-y-1">
                        @foreach($item['responsibilities'] as $responsibility)
                            <li>{{ $responsibility }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
</div>
