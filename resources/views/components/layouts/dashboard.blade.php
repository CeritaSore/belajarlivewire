<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Landing Page' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex min-h-screen">
        @php
            $currentPath = request()->path();
            $menu = [
                ['link' => '/dashboard', 'name' => 'Dashboard', 'active' => $currentPath === 'dashboard'],
                [
                    'link' => '/dashboard/hero',
                    'name' => 'Hero Section',
                    'active' => str_starts_with($currentPath, 'dashboard/hero'),
                ],
                [
                    'link' => '/dashboard/about',
                    'name' => 'About Section',
                    'active' => str_starts_with($currentPath, 'dashboard/about'),
                ],
                [
                    'link' => '/dashboard/education',
                    'name' => 'Education Section',
                    'active' => str_starts_with($currentPath, 'dashboard/education'),
                ],
                [
                    'link' => '/dashboard/work-experiences',
                    'name' => 'Work Section',
                    'active' => str_starts_with($currentPath, 'dashboard/work-experiences'),
                ],
                [
                    'link' => '/dashboard/projects',
                    'name' => 'Projects Section',
                    'active' => str_starts_with($currentPath, 'dashboard/projects'),
                ],
                [
                    'link' => '/dashboard/contact',
                    'name' => 'Contact Section',
                    'active' => str_starts_with($currentPath, 'dashboard/contact'),
                ],
            ];
        @endphp
        <x-backend.sidebar sidebarTitle="Dashboard" sidebarTagline="Management Profile" :sidebarMenu="$menu" />
        <main class="ml-64 flex-1 p-8">
            <!-- Dashboard Section -->
            {{ $slot }}
        </main>
    </div>
</body>

</html>
