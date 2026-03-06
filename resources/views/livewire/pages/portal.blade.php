<div>
    <div class="bg-gray-900 w-screen h-screen">
        <div class="container m-auto flex justify-center items-center w-full h-full">
            <div class="card border border-gray-800 bg-slate-900 w-120 h-80 rounded-xl shadow-xl  px-5 py-5">
                <h2 class="text-neutral-100 text-center text-2xl font-semibold">Portal Login</h2>
                <div class="menu flex flex-col gap-3 justify-center w-full h-full">
                    <a href="{{ route('project.index') }}"
                        class="w-full border border-gray-500 p-4 text-center bg-blue-700 rounded-md text-neutral-50">Project
                        Management</a>
                    <a href="{{ route('profile.index') }}"
                        class="w-full border border-gray-500 p-4 text-center bg-blue-700 rounded-md text-neutral-50">Profile
                        Management</a>
                    <a href="{{ route('expense.index') }}"
                        class="w-full border border-gray-500 p-4 text-center bg-blue-700 rounded-md text-neutral-50">Money
                        Management</a>

                </div>
            </div>
        </div>
    </div>
</div>
