<?php

use Livewire\Component;

new class extends Component {
    public $nama = '';
    public $email = '';
    public $konten = '';
    public function save()
    {
        dd($this->all());
    }
};
?>

<div id="contact">
    <div class="grid grid-cols-2 ">
        <div class="form px-11 mt-10">
            <h2 class="text-4xl font-semibold">Punya Pertanyaan?</h2>
            <p class="text-lg">Tinggalkan Pertanyaan Disini.</p>
            <form wire:submit="save">
                <div class="form-group mb-3 flex flex-col">
                    <label for="#">Nama</label>
                    <input type="text" wire:model="nama" class="border px-4 py-2 rounded-lg"
                        placeholder="Masukan Nama">
                </div>
                <div class="form-group mb-3 flex flex-col">
                    <label for="#">Email</label>
                    <input type="email" wire:model="email" class="border px-4 py-2 rounded-lg"
                        placeholder="Masukan Email">
                </div>
                <div class="form-group mb-3 flex flex-col">
                    <label for="#">Isi Pesan</label>
                    <textarea wire:model="konten" x-data="{
                        resize() {
                            $el.style.height = '0px';
                            $el.style.height = $el.scrollHeight + 'px'
                        }
                    }" x-init="resize()" x-on:input="resize()"
                        class="w-full min-h-10 overflow-hidden resize-none shadow-sm border px-4 py-2 rounded-lg"
                        placeholder="Tulis sesuatu..."></textarea>
                </div>
                <button type="submit"
                    class="w-fit h-fit bg-blue-500 px-4 py-2 text-white rounded-lg font-semibold">Kirim Pesan</button>
            </form>
        </div>
        <div class="sosmed-option bg-gray-100 px-11 pt-18">
            <h1 class="text-2xl font-semibold">
                Follow aku di sosmed ini.
            </h1>
            <ul>
                <li class="bi bi-threads">
                    threads : <a href="https://www.threads.com/@septiantfajar" target="blank">@septiantfajar</a>
                </li>
                <li class="bi bi-instagram">
                    instagram : <a href="https://www.instagram.com/septiantfajar/" target="blank"></a> @septiantfajar
                </li>
                <li class="bi bi-github">
                    github : <a href="https://github.com/ceritaSore" target="blank">@septiantfajar</a>
                </li>
            </ul>
        </div>
    </div>
</div>
