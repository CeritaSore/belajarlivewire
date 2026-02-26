<?php

use Livewire\Component;

new class extends Component {
    public $title;
    public $message;
    public $imagesPath;
    public $imageAlt;
};
?>

<div>
    <div class="jumbotron bg-gray-100 h-[90vh]">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-full">
            <div class="jumbotron-text flex flex-col justify-center items-center h-full">
                <h1 class="text-4xl font-semibold ">{{ $title }}</h1>
                <p class="text-lg">{{ $message }}</p>
            </div>
            <div class="jumbotron-img m-auto">
                <span class="w-90 h-90 block overflow-hidden rounded-full mx-auto border-5 border-slate-700 bg-slate-700">
                    <img src="{{ $imagesPath }}" alt="{{ $imageAlt }}"
                        class="w-full h-full object-cover overflow-hidden">
                </span>
            </div>
        </div>
    </div>
</div>
