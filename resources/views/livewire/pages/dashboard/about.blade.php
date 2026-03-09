<section id="about-section" class="content-section">
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800">About</h2>
        <p class="text-gray-600 mt-1">Manage your about information</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <form id="about-form" class="space-y-6">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Short Bio</label>
                <textarea id="about-bio" rows="4"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Location</label>
                <input type="text" id="about-location"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="about-email"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Phone</label>
                <input type="text" id="about-phone"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
            </div>
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Save
                Changes</button>
        </form>
    </div>
</section>
