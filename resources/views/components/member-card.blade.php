@props(['name', 'koreanName', 'position', 'birthdate', 'nationality', 'imageUrl', 'color'])

<div class="overflow-hidden rounded-lg border bg-white shadow-sm hover:shadow-lg transition-shadow">
    <div class="relative h-80 overflow-hidden">
        <img
            src="{{ $imageUrl }}"
            alt="{{ $name }}"
            class="w-full h-full object-cover transition-transform hover:scale-105">
        <div
            class="absolute bottom-0 left-0 right-0 h-1"
            style="background-color: {{ $color }}"></div>
    </div>
    <div class="p-6">
        <div class="flex items-start justify-between mb-3">
            <div>
                <h3 class="text-xl mb-1">{{ $name }}</h3>
                <p class="text-gray-500">{{ $koreanName }}</p>
            </div>
            <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs">
                {{ $nationality }}
            </span>
        </div>
        <div class="space-y-2">
            <div class="flex flex-wrap gap-2">
                @foreach($position as $pos)
                <span
                    class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs text-white"
                    style="background-color: {{ $color }}">
                    {{ $pos }}
                </span>
                @endforeach
            </div>
            <p class="text-sm text-gray-600">Born: {{ $birthdate }}</p>
        </div>
    </div>
</div>