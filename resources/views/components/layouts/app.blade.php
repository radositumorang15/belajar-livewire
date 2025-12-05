<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Toko Ban System' }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        
        <flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Toko Ban" class="px-2" />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="home" href="/" :current="request()->is('/')">Dashboard</flux:navlist.item>
                <flux:navlist.item icon="tag" href="/categories" :current="request()->is('categories*')">Kategori</flux:navlist.item>
                <flux:navlist.item icon="truck" href="/ban-add">Data Ban</flux:navlist.item>
                <flux:navlist.item icon="book-open" href="/alpine-1">Artikel</flux:navlist.item>
                <flux:navlist.item icon="shopping-bag" href="/alpine-form">Beli ban</flux:navlist.item>
                <flux:navlist.item icon="cube" href="/post-list">alpine</flux:navlist.item>
            </flux:navlist>

            <flux:spacer />
        </flux:sidebar>

        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" />
            <flux:spacer />
        </flux:header>

        <flux:main>
            {{ $slot }}
        </flux:main>
        <flux:toast />
        @fluxScripts
     

     
    </body>
</html>