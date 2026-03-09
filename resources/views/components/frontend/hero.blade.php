<div>
    <section id="home"
        class="min-h-screen flex items-center justify-center pt-16 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="max-w-6xl mx-auto px-4 py-20">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1 text-center md:text-left">
                    <p class="text-blue-600 font-medium mb-2">Hello, I'm</p>
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-4">{{ $name }}</h1>
                    <p class="text-xl text-gray-600 mb-8">{{ $title }}</p>
                    <p class="text-gray-600 mb-8 max-w-md">{{ $description }}
                    </p>
                    <div class="flex gap-4 justify-center md:justify-start">
                        <a href="#contact"
                            class="bg-blue-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-700 transition shadow-lg shadow-blue-600/30">
                            Get In Touch
                        </a>
                        <a href="#projects"
                            class="border border-gray-300 px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition">
                            View Projects
                        </a>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute inset-0 bg-blue-600 rounded-full blur-3xl opacity-20"></div>
                        <img src="profilepicture.png" alt="Fajar Septianto"
                            class="relative w-64 h-64 md:w-80 md:h-80 object-cover rounded-full mx-auto border-4 border-white shadow-2xl"
                            src="{{ $image }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
