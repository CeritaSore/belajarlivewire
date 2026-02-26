<?php

use Livewire\Component;

new class extends Component {
    public $title;
    public $navmenu = [];
};
?>

<div>
    {{-- @dd($navmenu) --}}
    <nav class="navbar flex bg-slate-600 h-20 justify-between items-center px-20">
        <a href="#" class="text-white text-xl font-semibold">{{ $title }}</a>
        <button class="navbar-button hidden"></button>
        <div class="nav-menu flex w-60 gap-2 justify-between">
            @foreach ($navmenu as $navMenu)
                <a href="{{ $navMenu['url'] }}" class="text-white font-semibold">{{ $navMenu['names'] }}</a>
            @endforeach
        </div>
    </nav>
</div>
