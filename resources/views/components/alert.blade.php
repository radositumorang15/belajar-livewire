@props([
    'type' => 'info', // info, success, warning, danger
    'dismissible' => false,
])

@php
    $colors = [
        'info' => 'bg-blue-50 border-blue-200 text-blue-800 dark:bg-blue-900/20 dark:border-blue-800 dark:text-blue-300',
        'success' => 'bg-green-50 border-green-200 text-green-800 dark:bg-green-900/20 dark:border-green-800 dark:text-green-300',
        'warning' => 'bg-yellow-50 border-yellow-200 text-yellow-800 dark:bg-yellow-900/20 dark:border-yellow-800 dark:text-yellow-300',
        'danger' => 'bg-red-50 border-red-200 text-red-800 dark:bg-red-900/20 dark:border-red-800 dark:text-red-300',
    ];
    
    $colorClass = $colors[$type] ?? $colors['info'];
@endphp

<div class="rounded-lg border p-4 {{ $colorClass }}" x-data="{ show: true }" x-show="show">
    <div class="flex items-start">
        <div class="flex-1">
            {{-- Named Slot: title --}}
            @isset($title)
                <h4 class="font-semibold mb-2">{{ $title }}</h4>
            @endisset
            
            {{-- Named Slot: message (default slot) --}}
            <div>
                {{ $slot }}
            </div>
            
            {{-- Named Slot: footer --}}
            @isset($footer)
                <div class="mt-3 pt-3 border-t border-current/20">
                    {{ $footer }}
                </div>
            @endisset
        </div>
        
        @if($dismissible)
            <button @click="show = false" class="ml-4 text-current/60 hover:text-current">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        @endif
    </div>
</div>

