@props([
    'title' => null,
    'class' => '',
])

<div class="bg-white dark:bg-zinc-800 rounded-lg shadow-md p-6 border border-zinc-200 dark:border-zinc-700 {{ $class }}">
    @if($title)
        <h3 class="text-lg font-semibold mb-4 text-zinc-900 dark:text-white">{{ $title }}</h3>
    @endif
    
    {{-- Slot default: konten utama --}}
    <div class="text-zinc-700 dark:text-zinc-300">
        {{ $slot }}
    </div>
</div>

