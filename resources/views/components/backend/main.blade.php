<main class="ml-64 flex-1 p-8">
    <!-- Dashboard Section -->
    <section id="dashboard-section" class="content-section">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Dashboard</h2>
            <p class="text-gray-600 mt-1">Overview of your portfolio content</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Projects</p>
                        <p class="text-3xl font-bold text-gray-800" id="stat-projects">6</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Education</p>
                        <p class="text-3xl font-bold text-gray-800" id="stat-education">3</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Work Experience</p>
                        <p class="text-3xl font-bold text-gray-800" id="stat-experience">3</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Last Updated</p>
                        <p class="text-lg font-bold text-gray-800" id="stat-updated">Today</p>
                    </div>
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button onclick="showSection('projects')"
                    class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="text-blue-700 font-medium">Add Project</span>
                </button>
                <button onclick="showSection('experience')"
                    class="flex items-center gap-3 p-4 bg-green-50 rounded-lg hover:bg-green-100 transition">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="text-green-700 font-medium">Add Experience</span>
                </button>
                <button onclick="showSection('education')"
                    class="flex items-center gap-3 p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="text-purple-700 font-medium">Add Education</span>
                </button>
                <button onclick="exportData()"
                    class="flex items-center gap-3 p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <span class="text-orange-700 font-medium">Export Data</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <section id="hero-section" class="content-section hidden">
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

    <!-- About Section -->
    <section id="about-section" class="content-section hidden">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">About & Overview</h2>
            <p class="text-gray-600 mt-1">Manage your about section and statistics</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6">
            <form id="about-form" class="space-y-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Overview Description</label>
                    <textarea id="about-description" rows="6"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">Saya adalah seorang profesional IT dengan pengalaman lebih dari 5 tahun di bidang pengembangan web, DevOps, sistem administrasi, dan dukungan jaringan.</textarea>
                </div>

                <h4 class="text-lg font-semibold text-gray-800 pt-4">Statistics</h4>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Years Experience</label>
                        <input type="text" id="stat-years" value="5+"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Projects Done</label>
                        <input type="text" id="stat-projects-done" value="80+"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Happy Clients</label>
                        <input type="text" id="stat-clients" value="40+"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Commitment</label>
                        <input type="text" id="stat-commitment" value="100%"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" />
                    </div>
                </div>
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">Save
                    Changes</button>
            </form>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education-section" class="content-section hidden">
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

    <!-- Experience Section -->
    <section id="experience-section" class="content-section hidden">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Work Experience</h2>
            <p class="text-gray-600 mt-1">Manage your work experience</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
            <button onclick="addExperience()"
                class="flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-700 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Experience
            </button>
        </div>

        <div id="experience-list" class="space-y-4">
            <!-- Experience items will be rendered here -->
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects-section" class="content-section hidden">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Projects</h2>
            <p class="text-gray-600 mt-1">Manage your portfolio projects</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
            <button onclick="addProject()"
                class="flex items-center gap-2 bg-green-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-700 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Add Project
            </button>
        </div>

        <div id="projects-list" class="space-y-4">
            <!-- Projects will be rendered here -->
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-section" class="content-section hidden">
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
</main>
