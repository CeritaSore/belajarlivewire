<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Dashboard' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

@php
    $menu = [
        ['name' => 'Dashboard', 'link' => '/profile/dashboard'],
        ['name' => 'Content', 'link' => '/profile/dashboard/content'],
        ['name' => 'Profile', 'link' => '/profile/dashboard/profile'],
        ['name' => 'Settings', 'link' => '/profile/dashboard/settings'],
    ];
    $navmenu = [
        ['name' => 'Profile', 'link' => '/profile/dashboard/profile'],
        ['name' => 'Signout', 'link' => '/profile/dashboard/signout'],
    ];
@endphp

<body class="">

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
