<div>
    <h2 class="text-xl font-semibold mb-3">Belum Ada Konten Dibuat</h2>
    <div class="flex gap-2 mb-5">
        <span>
            Buat konten
        </span>
        <livewire:components.buttonlink text="sekarang" link="/profile/dashboard/content/create" />
    </div>
    @php
        $menu = ['No', 'Judul', 'Status', 'Aksi'];
        $linkAction = [['edit' => '/profile/dashboard/edit'], ['delete' => '/profile/dashboard/delete']];
    @endphp
    <livewire:components.table :header='$menu' :content='$postcontent' :action='$linkAction'
        edit='/profile/dashboard/content/edit' delete='/profile/dashboard/content/delete' />

</div>
