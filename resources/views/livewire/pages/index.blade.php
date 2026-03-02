<div>
    @php
        $menu = [['name' => 'Home', 'link' => '#hero'], ['name' => 'About', 'link' => '#about']];
    @endphp
    <livewire:components.navbar :menu='$menu' />
    <livewire:components.jumbotron />
    {{-- <div class="about bg-neutral-primary">
        <div class="container">
            <h2 class="text-lg text-gray-600">tentang saya</h2>
            <p class="text-3xl font-semibold w-1/2">Fresh Graduate yang menantang diri untuk <br>menyelesaikan banyak proyek dengan efisien
                dan
                efektif</p>
            <span> </span>
        </div>
    </div> --}}
    <div class="about bg-neutral-primary">
        <div class="container px-15 py-16 w-screen h-fit">
            <h2 class="text-lg text-gray-600">Kontak Saya</h2>
            <p class="text-3xl font-semibold w-1/2">Ayo terhubung untuk saling kenal satu sama lain.</p>
            <div class="contact-person flex gap-5">
                <span class="block w-1/2">
                    <form action="#">
                        <div class="form-group mb-5">
                            <label for="nama" class="block mb-2.5 text-sm font-medium text-heading">Nama</label>
                            <input type="text" id="nama"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Masukan Nama" required />
                        </div>
                        <div class="form-group mb-5">
                            <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Email</label>
                            <input type="email" id="email"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Masukan Email" required />
                        </div>
                        <div class="form-group mb-5">
                            <label for="message" class="block mb-2.5 text-sm font-medium text-heading">Masukan
                                Pesan</label>
                            <textarea id="message" x-data="{
                                resize() {
                                    $el.style.height = 'auto';
                                    $el.style.height = $el.scrollHeight + 'px'
                                }
                            }" x-init="resize()" @input="resize()" rows="1"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body resize-none overflow-hidden"
                                placeholder="Tulis Pesanmu Disini"></textarea>
                        </div>
                        <button type="submit"
                            class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Default</button>
                    </form>
                </span>
                <span class="block w-1/2">
                    <h1 class="text-2xl font-semibold">Bisa Juga Kontak Disini</h1>
                    <ul>
                        <li class="bi bi-threads flex gap-2 items-center text-gray-600 "><a
                                class="text-lg text-gray-600" href="https://www.threads.com/@septiantfajar"
                                target="_blank" rel="noopener noreferrer">septiantfajar</a></li>
                        <li class="bi bi-github flex gap-2 items-center text-gray-600"><a class="text-lg text-gray-600"
                                href="https://github.com/ceritaSore" target="_blank"
                                rel="noopener noreferrer">CeritaSore</a></li>
                        <li class="bi bi-envelope flex gap-2 items-center text-gray-600"><a
                                class="text-lg text-gray-600" href="mailto:fajar23.septianto@gmail.com" target="_blank"
                                rel="noopener noreferrer">fajar23.septianto@gmail.com</a></li>
                    </ul>
                </span>
            </div>
        </div>
    </div>


    <footer class="bg-neutral-900 rounded-base shadow-xs border border-default m-4">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-center">
            <span class="text-sm text-gray-300 sm:text-center">© 2026 <a href="http://fajarseptianto.my.id"
                    class="hover:underline">Fajar Septianto</a>. All Rights Reserved.
            </span>
            {{-- <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-body sm:mt-0">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul> --}}
        </div>
    </footer>

</div>
