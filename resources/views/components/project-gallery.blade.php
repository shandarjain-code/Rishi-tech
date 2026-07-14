@props([
    'project',
    'variant' => 'card',
])

@php
    $slides = $project->orderedImageUrls();
    $round = $variant === 'hero' ? 'rounded-xl' : 'rounded-t-xl';
    $frameClass = $variant === 'hero'
        ? 'aspect-video w-full'
        : 'aspect-[16/10] w-full';
@endphp

@if ($slides === [])
    <div class="{{ $round }} {{ $frameClass }} flex w-full items-center justify-center bg-[radial-gradient(circle_at_30%_20%,rgba(255,0,26,0.55),rgba(0,0,0,1)_60%)] px-4 text-center">
        <span class="ui-logo text-4xl drop-shadow-sm">{{ $project->title }}</span>
    </div>
@else
    <div
        class="relative isolate block w-full min-w-0 overflow-hidden bg-black {{ $round }} ring-1 ring-white/10 {{ $frameClass }}"
        x-data="window.projectGallery({ slides: @js($slides), title: @js($project->title) })"
        @keydown.escape.window="lightbox && closeLightbox()"
        role="region"
        aria-roledescription="carousel"
    >
        <div class="absolute inset-0 min-h-0 overflow-hidden">
            <div
                class="flex h-full min-h-0 w-full touch-pan-y transition-transform duration-500 ease-out will-change-transform"
                :style="'width:' + (n * 100) + '%;transform:translateX(-' + (n ? (active * (100 / n)) : 0) + '%);'"
                @touchstart.passive="onTouchStart($event)"
                @touchend.passive="onTouchEnd($event)"
            >
                <template x-for="(src, idx) in slides" :key="idx">
                    <div class="relative h-full min-h-0 shrink-0" :style="'flex:0 0 ' + (n ? (100 / n) : 100) + '%;'">
                        <img
                            :src="src"
                            :alt="title + ' — image ' + (idx + 1)"
                            width="1200"
                            height="750"
                            :loading="idx === 0 ? 'eager' : 'lazy'"
                            decoding="async"
                            class="absolute inset-0 h-full w-full object-cover object-center cursor-zoom-in select-none"
                            draggable="false"
                            @click="openAt(idx)"
                        />
                    </div>
                </template>
            </div>
        </div>

        <template x-if="n > 1">
            <div class="pointer-events-none absolute inset-x-0 top-1/2 flex -translate-y-1/2 justify-between px-2">
                <button
                    type="button"
                    class="pointer-events-auto inline-flex h-9 w-9 items-center justify-center rounded-full bg-black/75 text-white shadow-md ring-1 ring-white/20 transition hover:bg-[#FF001A]"
                    aria-label="Previous image"
                    @click.stop="prev"
                >
                    <span class="text-lg leading-none" aria-hidden="true">‹</span>
                </button>
                <button
                    type="button"
                    class="pointer-events-auto inline-flex h-9 w-9 items-center justify-center rounded-full bg-black/75 text-white shadow-md ring-1 ring-white/20 transition hover:bg-[#FF001A]"
                    aria-label="Next image"
                    @click.stop="next"
                >
                    <span class="text-lg leading-none" aria-hidden="true">›</span>
                </button>
            </div>
        </template>

        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-black/35 to-transparent"></div>

        <template x-if="n > 1">
            <div class="absolute bottom-2 left-0 right-0 flex justify-center gap-1.5">
                <template x-for="(src, idx) in slides" :key="'dot-' + idx">
                    <button
                        type="button"
                        class="h-2 rounded-full transition-all"
                        :class="idx === active ? 'w-6 bg-rose-600' : 'w-2 bg-white/80 hover:bg-white'"
                        :aria-label="'Go to image ' + (idx + 1)"
                        @click.stop="goTo(idx)"
                    ></button>
                </template>
            </div>
        </template>

        <div
            x-show="lightbox"
            x-cloak
            x-transition.opacity.duration.200ms
            class="fixed inset-0 z-[90] flex items-center justify-center bg-black/90 p-4 sm:p-8"
            role="dialog"
            aria-modal="true"
            :aria-label="'Image preview: ' + title"
            @click.self="closeLightbox()"
        >
            <button
                type="button"
                class="absolute right-4 top-4 z-[91] flex h-11 w-11 items-center justify-center rounded-full bg-white text-2xl font-light text-gray-800 shadow-lg ring-1 ring-gray-200 transition hover:bg-rose-50"
                aria-label="Close"
                @click.stop="closeLightbox()"
            >
                ×
            </button>

            <template x-if="n > 1">
                <button
                    type="button"
                    class="absolute left-2 top-1/2 z-[91] hidden h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white/95 text-2xl text-rose-700 shadow-md sm:flex"
                    aria-label="Previous"
                    @click.stop="prev"
                >
                    ‹
                </button>
            </template>
            <template x-if="n > 1">
                <button
                    type="button"
                    class="absolute right-2 top-1/2 z-[91] hidden h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white/95 text-2xl text-rose-700 shadow-md sm:flex"
                    aria-label="Next"
                    @click.stop="next"
                >
                    ›
                </button>
            </template>

            <img
                :src="slides[active]"
                :alt="title + ' — enlarged'"
                class="max-h-[min(88vh,900px)] max-w-full rounded-lg object-contain shadow-2xl"
                @click.stop
            />
        </div>
    </div>
@endif
