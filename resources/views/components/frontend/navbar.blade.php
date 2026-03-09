<div>
    <nav class="fixed w-full bg-white/90 backdrop-blur-sm shadow-sm z-50">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold text-blue-600">FS</a>
                <div class="hidden md:flex space-x-8">
                    @foreach ($menus as $items)
                        <a href="{{ $items['link'] }}" class="hover:text-blue-600 transition">{{ $items['name'] }}</a>
                    @endforeach

                </div>
                <button id="mobile-menu-btn" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                @foreach ($menus as $items)
                    <a href="{{ $items['link'] }}"
                        class="block py-2 hover:text-blue-600 transition">{{ $items['name'] }}</a>
                @endforeach
            </div>
        </div>
    </nav>
</div>
