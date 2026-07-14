@extends('layouts.app')

@php
    $metaTitle = $project->meta_title ?: $project->title.' | Project - Rishi Jain';
    $metaDescription = $project->meta_description ?: Str::limit(strip_tags($project->description), 158);
    $projectImage = $project->cover_image_url ?: 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1400&q=82';
    $hasLinks = filled($project->live_link) || filled($project->github_link);
@endphp

@section('title', $metaTitle)
@section('description', $metaDescription)
@section('og_type', 'article')
@section('og_image', $projectImage)

@push('jsonld')
    @php
        $creativeWork = [
            '@context' => 'https://schema.org',
            '@type' => 'CreativeWork',
            'name' => $project->title,
            'description' => Str::limit(strip_tags($project->description), 500),
            'url' => url()->current(),
            'image' => $projectImage,
            'author' => [
                '@type' => 'Person',
                'name' => 'Rishi Jain',
                'url' => rtrim(config('app.url'), '/').'/',
            ],
        ];
        if (is_array($project->tech_stack) && count($project->tech_stack) > 0) {
            $creativeWork['keywords'] = implode(', ', $project->tech_stack);
        }
    @endphp
    <script type="application/ld+json">
{!! json_encode($creativeWork, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
@endpush

@section('content')
<section class="project-detail-hero section-light">
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
        <nav class="project-detail-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span aria-hidden="true">/</span>
            <a href="{{ route('portfolio') }}">Portfolio</a>
            <span aria-hidden="true">/</span>
            <span>{{ Str::limit($project->title, 48) }}</span>
        </nav>

        <div class="project-detail-hero__grid">
            <div class="project-detail-hero__content">
                @if($project->category)
                    <div class="mb-6 flex flex-wrap items-center gap-2">
                        @foreach(explode(',', $project->category) as $cat)
                            @if(trim($cat))
                                <span class="rounded-md bg-blue-50/80 px-3 py-1.5 text-xs font-medium uppercase tracking-wider text-brand shadow-sm border border-blue-100/50">{{ trim($cat) }}</span>
                            @endif
                        @endforeach
                    </div>
                @else
                    <p class="section-kicker mb-6">Project case study</p>
                @endif
                
                <h1 class="mb-6 text-4xl md:text-5xl lg:text-[3.5rem] font-extrabold tracking-tight text-slate-900 leading-[1.15]">{{ $project->title }}</h1>
                <p class="ui-copy text-lg">{{ $project->summary }}</p>
                <div class="project-actions">
                    @if($project->live_link)
                        <a href="{{ $project->live_link }}" target="_blank" rel="noopener noreferrer" class="project-link">Live Preview</a>
                    @endif
                    @if($project->github_link)
                        <a href="{{ $project->github_link }}" target="_blank" rel="noopener noreferrer" class="project-link project-link-muted">Repository</a>
                    @endif
                    <a href="#project-media" class="project-link project-link-muted">Explore Details</a>
                </div>
            </div>

            <div class="project-detail-hero__media">
                <img src="{{ $projectImage }}" alt="{{ $project->title }}" width="1400" height="900" loading="eager">
            </div>
        </div>

        <div class="project-detail-nav" aria-label="Project page sections">
            <a href="#project-overview">Overview</a>
            @if($project->video_url)<a href="#project-video">Video</a>@endif
            @if($project->images->isNotEmpty())<a href="#project-gallery">Gallery</a>@endif
            @if(!empty($project->features))<a href="#project-features">Features</a>@endif
            @if($project->challenge || $project->solution)<a href="#project-solution">Solution</a>@endif
            @if(!empty($project->faqs))<a href="#project-faq">FAQ</a>@endif
        </div>
    </div>
</section>

<section id="project-media" class="project-detail-body section-soft py-16 md:py-20">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-8 px-4 sm:px-6 lg:grid-cols-[minmax(0,1fr)_360px] lg:items-start lg:px-8">
        <main class="project-detail-main">
            @if($project->video_url)
                <article id="project-video" class="case-panel case-panel--media">
                    <div class="case-panel__header">
                        <span>Walkthrough</span>
                        <h2>Project video</h2>
                        <p>Watch the uploaded project preview directly from the admin-managed media file.</p>
                    </div>
                    <x-project-video :project="$project" />
                </article>
            @endif

            @if($project->images->isNotEmpty())
                <article id="project-gallery" class="case-panel case-panel--media">
                    <div class="case-panel__header">
                        <span>Gallery</span>
                        <h2>Project screens</h2>
                        <p>Browse the uploaded screenshots and visual states for this project.</p>
                    </div>
                    <x-project-gallery :project="$project" variant="hero" />
                </article>
            @endif

            <article id="project-overview" class="case-panel">
                <div class="case-panel__header">
                    <span>Overview</span>
                    <h2>Project overview</h2>
                </div>
                <div class="case-copy">
                    {!! nl2br(e($project->description)) !!}
                </div>
            </article>

            @if(!empty($project->features))
                <article id="project-features" class="case-panel">
                    <div class="case-panel__header">
                        <span>Capabilities</span>
                        <h2>Key features</h2>
                    </div>
                    <div class="feature-grid">
                        @foreach($project->features as $feature)
                            <div class="feature-pill">{{ $feature }}</div>
                        @endforeach
                    </div>
                </article>
            @endif

            @if($project->challenge || $project->solution)
                <article id="project-solution" class="case-panel">
                    <div class="case-panel__header">
                        <span>Delivery</span>
                        <h2>Challenges and solutions</h2>
                    </div>
                    <div class="challenge-grid">
                        @if($project->challenge)
                            <div>
                                <span>Challenge</span>
                                <p>{{ $project->challenge }}</p>
                            </div>
                        @endif
                        @if($project->solution)
                            <div>
                                <span>Solution</span>
                                <p>{{ $project->solution }}</p>
                            </div>
                        @endif
                    </div>
                </article>
            @endif

            @if(!empty($project->faqs))
                <article id="project-faq" class="case-panel">
                    <div class="case-panel__header">
                        <span>Questions</span>
                        <h2>Project FAQ</h2>
                    </div>
                    <div class="faq-list" x-data="{ open: 0 }">
                        @foreach($project->faqs as $faq)
                            @if(filled($faq['question'] ?? null) && filled($faq['answer'] ?? null))
                                <article class="faq-item" :class="{ 'is-open': open === {{ $loop->index }} }">
                                    <button type="button" @click="open = open === {{ $loop->index }} ? null : {{ $loop->index }}">
                                        <span>{{ $faq['question'] }}</span>
                                        <span aria-hidden="true">+</span>
                                    </button>
                                    <div x-show="open === {{ $loop->index }}" x-transition>
                                        <p>{{ $faq['answer'] }}</p>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                </article>
            @endif
            <!-- Next Project Navigation -->
            <div class="mt-12 rounded-3xl bg-white p-8 shadow-sm ring-1 ring-slate-900/5 sm:flex sm:items-center sm:justify-between">
                @if($nextProject)
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-brand">Up Next</p>
                        <h3 class="mt-1 text-2xl font-bold text-slate-900">{{ Str::limit($nextProject->title, 40) }}</h3>
                    </div>
                    <a href="{{ route('project.show', $nextProject->slug) }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-brand px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 sm:mt-0 transition-transform hover:-translate-y-0.5">
                        Next Project <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                @else
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-wider text-slate-500">End of Portfolio</p>
                        <h3 class="mt-1 text-2xl font-bold text-slate-900">Explore more work</h3>
                    </div>
                    <a href="{{ route('home') }}" class="mt-6 inline-flex items-center justify-center rounded-full bg-slate-100 px-6 py-3 text-sm font-semibold text-slate-900 shadow-sm hover:bg-slate-200 sm:mt-0 transition-transform hover:-translate-y-0.5">
                        <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg> Back to Home
                    </a>
                @endif
            </div>
        </main>

        <aside class="project-detail-sidebar">
            <div class="case-panel case-panel--compact">
                <h2>Project guide</h2>
                <div class="sidebar-nav">
                    <a href="#project-overview">Overview</a>
                    @if($project->video_url)<a href="#project-video">Video walkthrough</a>@endif
                    @if($project->images->isNotEmpty())<a href="#project-gallery">Gallery</a>@endif
                    @if(!empty($project->features))<a href="#project-features">Features</a>@endif
                    @if($project->challenge || $project->solution)<a href="#project-solution">Solution notes</a>@endif
                </div>
            </div>

            <div class="case-panel case-panel--compact">
                <h2>Tech stack</h2>
                @if($project->tech_stack)
                    <div class="project-tech-list">
                        @foreach($project->tech_stack as $tech)
                            <span>{{ $tech }}</span>
                        @endforeach
                    </div>
                @else
                    <p>Tech stack details will be added soon.</p>
                @endif
            </div>

            <div class="case-panel case-panel--compact">
                <h2>Project links</h2>
                <div class="link-stack">
                    @if($project->live_link)
                        <a href="{{ $project->live_link }}" target="_blank" rel="noopener noreferrer">Open live project</a>
                    @endif
                    @if($project->github_link)
                        <a href="{{ $project->github_link }}" target="_blank" rel="noopener noreferrer">View repository</a>
                    @endif
                    @unless($hasLinks)
                        <p>No public links are available for this project.</p>
                    @endunless
                </div>
            </div>

            <div class="case-panel case-panel--compact case-panel--cta">
                <h2>Build something similar</h2>
                <p>Share the product idea, timeline, and features you have in mind.</p>
                <a href="{{ route('start-project') }}" class="ui-btn mt-5 w-full px-6 py-3">Start Your Project</a>
            </div>
        </aside>
    </div>
</section>
@endsection
