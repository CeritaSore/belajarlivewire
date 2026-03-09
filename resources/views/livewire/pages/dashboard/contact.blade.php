<section id="contact-section" class="content-section">
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800">Contact Information</h2>
        <p class="text-gray-600 mt-1">Manage your contact details</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <form id="contact-form" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="contact-email" value="fajar.septianto@email.com"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Phone</label>
                    <input type="text" id="contact-phone" value="+62 812 3456 7890"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Location</label>
                    <input type="text" id="contact-location" value="Jakarta, Indonesia"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                </div>
            </div>

            <h4 class="text-lg font-semibold text-gray-800 pt-4">Social Media Links</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Twitter/X</label>
                    <input type="url" id="social-twitter" placeholder="https://twitter.com/username"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">LinkedIn</label>
                    <input type="url" id="social-linkedin" placeholder="https://linkedin.com/in/username"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">GitHub</label>
                    <input type="url" id="social-github" placeholder="https://github.com/username"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Instagram</label>
                    <input type="url" id="social-instagram" placeholder="https://instagram.com/username"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                </div>
            </div>
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Save
                Changes</button>
        </form>
    </div>
</section>
