@php
    $select = ['published', 'draft'];
@endphp
<div>



    <form wire:submit.prevent="save" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-5">
            <x-input name='Nama' type='text' placeholder='Masukan Nama' required='true' model='name' />

            <x-input name='Status' type='dropdown' required='' :dropdownOptions='$select' model='status' />
        </div>
        <div class="grid grid-cols-2 gap-5">
            <span>
                <x-input name='Upload File' type='file' fileType='image/*' required='' model='image' />
                @if ($image)
                    <div class="w-full h-80 overflow-hidden rounded-base border border-brand">
                        <img class="block w-full h-full object-cover" src="{{ $image->temporaryUrl() }}">

                    </div>
                @endif
                @if ($oldimage && !$image)
                    <div class="w-full h-80 overflow-hidden rounded-base border border-brand">
                        <img class="block w-full h-full object-cover" src="{{ asset('storage/' . $oldimage) }}">
                    </div>
                @endif
            </span>
        </div>
        <x-input name='Konten' type='textarea' placeholder='Tulis disini' required='' model='content' />
        <div class="flex items-center gap-2">
            <livewire:components.button type='submit' :name="$postId ? 'Update' : 'Create'" />
            <livewire:components.button name='Kembali' type='button' action="gotoList" />
        </div>
    </form>
    @if (session('success'))
        <livewire:components.toast :message="session('success')" value="{{ session('success') }}" />
    @endif


</div>
