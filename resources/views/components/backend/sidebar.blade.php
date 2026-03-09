<div>
    <aside class="w-64 bg-gray-900 text-white fixed h-full overflow-y-auto">
        <div class="p-6">
            <h1 class="text-xl font-bold text-blue-400">{{ $sidebarTitle }}</h1>
            <p class="text-gray-400 text-sm mt-1">{{ $sidebarTagline }}</p>
        </div>
        <nav class="mt-6">
            @foreach ($sidebarMenu as $item)
                <a href="{{ $item['link'] }}" wire:navigate
                    class="nav-item flex items-center gap-3 px-6 py-3 text-gray-300 hover:bg-gray-800 hover:text-white transition {{ $item['active'] ? 'bg-gray-800 text-white' : 'text-white' }}">

                    {{ $item['name'] }}
                </a>
            @endforeach

        </nav>
    </aside>

</div>
