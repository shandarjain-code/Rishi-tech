@props([
    'title',
    'subtitle' => null,
    'align' => 'center',
])

@php
    $center = ($align ?? 'center') === 'center';
@endphp

<section {{ $attributes->merge(['class' => 'section-light relative overflow-hidden border-b border-black/10']) }}>
    <span class="ui-decor-circle -right-24 -top-24 h-72 w-72" aria-hidden="true"></span>
    <span class="ui-decor-circle left-10 bottom-0 h-40 w-40" aria-hidden="true"></span>
    <div @class([
        'relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 md:py-20',
        'text-center' => $center,
        'text-center md:text-left' => ! $center,
    ])>
        <h1 class="ui-heading-main mb-3">{{ $title }}</h1>
        @if (filled($subtitle))
            <p class="ui-copy max-w-2xl leading-relaxed {{ $center ? 'mx-auto' : 'md:mx-0' }}">{{ $subtitle }}</p>
        @endif
    </div>
</section>
