{{-- resources/views/components/achievement-card.blade.php --}}
@props(['icon', 'title', 'description'])

@php
$iconSvgs = [
'trophy' => '
<path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6" />
<path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18" />
<path d="M4 22h16" />
<path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22" />
<path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22" />
<path d="M18 2H6v7a6 6 0 0 0 12 0V2Z" />',
'music' => '
<path d="M9 18V5l12-2v13" />
<circle cx="6" cy="18" r="3" />
<circle cx="18" cy="16" r="3" />',
'star' => '
<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />',
'sparkles' => '
<path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
<path d="M5 3v4" />
<path d="M19 17v4" />
<path d="M3 5h4" />
<path d="M17 19h4" />'
];
@endphp

<div class="rounded-lg border bg-white p-6 shadow-sm text-center hover:shadow-lg transition-shadow">
    <div class="flex justify-center text-purple-600 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            {!! $iconSvgs[$icon] ?? '' !!}
        </svg>
    </div>
    <h4 class="mb-2">{{ $title }}</h4>
    <p class="text-sm text-gray-600">{{ $description }}</p>
</div>