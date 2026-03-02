<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

@php
    $menu = [
        ['name' => 'Dashboard', 'link' => '/dashboard'],
        ['name' => 'Content', 'link' => '/dashboard/content'],
        ['name' => 'Profile', 'link' => '/dashboard/profile'],
        ['name' => 'Settings', 'link' => '/dashboard/settings'],
    ];
    $navmenu = [
        ['name' => 'Profile', 'link' => '/dashboard/profile'],
        ['name' => 'Signout', 'link' => '/dashboard/signout'],
    ];
@endphp

<body>
    <livewire:components.sidebar :menu='$menu' :navmenu='$navmenu' />
    <div class="p-4 sm:ml-64 mt-14">
        <livewire:components.breadcrump />
        <div class="p-4 ">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>

</html>
