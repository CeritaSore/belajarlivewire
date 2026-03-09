 <section id="projects-section" class="content-section">
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
