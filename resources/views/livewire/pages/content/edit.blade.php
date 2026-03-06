@php
    $select = ['published', 'draft'];
@endphp
<div>
    <form wire:submit="save" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-5">
            <x-input name='Nama' type='text' placeholder='Masukan Nama' :required='true' model='name' />
            <x-input name='Status' type='dropdown' required='false' :dropdownOptions='$select' model='status' />
        </div>
        <div class="grid grid-cols-2 gap-5">
            <x-input name='Upload File' type='file' fileType='image/*' :required='false' model='image' />
        </div>
        <x-input name='Konten' type='textarea' placeholder='Tulis disini' required='false' model='content' />
        <div class="flex items-center gap-2">
            <livewire:components.button type='submit' name='Simpan' />
            <livewire:components.buttonlink link='/profile/dashboard/content' text='Kembali' />
        </div>
    </form>
</div>
