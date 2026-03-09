<section id="hero-section" class="content-section">
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800">Hero Section</h2>
        <p class="text-gray-600 mt-1">Manage your hero/intro content</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <form id="hero-form" class="space-y-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" id="hero-name" value="Fajar Septianto"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Title/Tagline</label>
                <input type="text" id="hero-title" value="Web Developer | DevOps | SysAdmin | Network Support"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea id="hero-description" rows="4"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">IT professional dengan pengalaman lebih dari 5 tahun di bidang pengembangan web, DevOps, sistem administrasi, dan jaringan.</textarea>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Profile Picture Path</label>
                <input type="text" id="hero-image" value="profilepicture.png"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
            </div>
            <div class="flex gap-4">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Save
                    Changes</button>
                <button type="button" onclick="previewHero()"
                    class="border border-gray-300 px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition">Preview</button>
            </div>
        </form>
    </div>
</section>
