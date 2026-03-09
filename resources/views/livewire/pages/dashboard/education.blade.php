<section id="education-section" class="content-section">
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-gray-800">Education</h2>
        <p class="text-gray-600 mt-1">Manage your education and certifications</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
        <button onclick="addEducation()"
            class="flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-700 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add Education
        </button>
    </div>

    <div id="education-list" class="space-y-4">
        <!-- Education items will be rendered here -->
    </div>
</section>
