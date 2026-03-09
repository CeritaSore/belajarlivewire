@props(['title' => 'Projects', 'description' => ''])

<div class="text-center mb-16">
    <h2 class="text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h2>
    <div class="w-20 h-1 bg-blue-600 mx-auto"></div>
    @if($description)
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto">{{ $description }}</p>
    @endif
</div>
