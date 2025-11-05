{{-- resources/views/components/album-card.blade.php --}}
@props(['title', 'releaseDate', 'type', 'tracks', 'imageUrl'])

<div class="overflow-hidden rounded-lg border bg-white shadow-sm hover:shadow-lg transition-shadow">
    <div class="relative h-64 overflow-hidden bg-gradient-to-br from-purple-500 to-pink-500">
        <img
            src="{{ $imageUrl }}"
            alt="{{ $title }}"
            class="w-full h-full object-cover mix-blend-overlay opacity-70">
        <div class="absolute top-4 right-4">
            <span class="inline-flex items-center rounded-full bg-white text-black px-2.5 py-0.5 text-xs">
                {{ $type }}
            </span>
        </div>
    </div>
    <div class="p-6">
        <h3 class="text-xl mb-2">{{ $title }}</h3>
        <p class="text-sm text-gray-600 mb-4">{{ $releaseDate }}</p>
        <div class="space-y-2">
            <p class="text-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 18V5l12-2v13" />
                    <circle cx="6" cy="18" r="3" />
                    <circle cx="18" cy="16" r="3" />
                </svg>
                <span>{{ count($tracks) }} Track{{ count($tracks) > 1 ? 's' : '' }}</span>
            </p>
            <div class="space-y-1 pt-2">
                @foreach($tracks as $index => $track)
                <p class="text-sm text-gray-700">{{ $index + 1 }}. {{ $track }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>