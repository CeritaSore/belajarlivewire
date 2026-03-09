@props(['items' => []])

<div class="max-w-4xl mx-auto mb-16">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center gap-3">
        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
        </svg>
        Education
    </h3>
    <div class="space-y-4">
        @foreach($items as $item)
            <div class="bg-gray-50 rounded-xl p-6 border-l-4 {{ $item['borderColor'] ?? 'border-blue-600' }}">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                    <h4 class="text-lg font-semibold text-gray-900">{{ $item['title'] }}</h4>
                    <span class="{{ $item['dateClass'] ?? 'text-blue-600' }} font-medium">{{ $item['period'] }}</span>
                </div>
                <p class="text-gray-600 mb-2">{{ $item['institution'] }}</p>
                @if(isset($item['detail']))
                    <p class="text-gray-500 text-sm">{{ $item['detail'] }}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
