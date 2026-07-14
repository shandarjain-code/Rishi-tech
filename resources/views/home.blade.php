@extends('layouts.app')

@section('title', 'Rishi Jain | Full Stack Developer — Laravel, React, Flutter & SaaS')
@section('description', 'Full stack developer with 8+ years building Laravel & React web apps, Flutter mobile apps, Node.js backends, WordPress, and SaaS. Hire for fast MVPs and production-ready products — clients worldwide.')

@section('content')
<!-- Hero -->
<section
    class="hero-section section-light relative flex min-h-[calc(100svh-4.5rem)] items-center overflow-hidden"
>
    <span class="hero-grid" aria-hidden="true"></span>
    <span class="hero-shape hero-shape-one" aria-hidden="true"></span>
    <span class="hero-shape hero-shape-two" aria-hidden="true"></span>

    <div class="relative z-10 mx-auto grid w-full max-w-7xl grid-cols-1 items-center gap-12 px-4 py-20 sm:px-6 lg:grid-cols-[1fr_.82fr] lg:px-8">
        <div class="max-w-[680px]">
            <p class="ui-eyebrow mb-5 inline-flex items-center gap-2 rounded-full border px-4 py-2 text-sm backdrop-blur-md">
                <span class="h-2 w-2 shrink-0 rounded-full bg-[#FF001A] shadow shadow-[#FF001A]/50" aria-hidden="true"></span>
                Web and mobile products
            </p>
            <h1 class="ui-heading-main mb-4">
                Build a sharper digital product.
            </h1>
            <p class="ui-copy mb-7 max-w-lg">
                Premium websites, apps, and SaaS platforms for teams ready to launch with confidence.
            </p>
            <div class="mb-8 grid max-w-md grid-cols-3 gap-3">
                <div class="hero-stat"><strong>8+</strong><span>Years</span></div>
                <div class="hero-stat"><strong>100+</strong><span>Projects</span></div>
                <div class="hero-stat"><strong>50+</strong><span>Clients</span></div>
            </div>
            <div class="flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                <a href="{{ route('start-project') }}" class="ui-btn px-7 py-3.5">
                    Start Your Project
                </a>
                <a href="{{ route('portfolio') }}" class="ui-btn ui-btn-secondary px-7 py-3.5">
                    See Portfolio
                </a>
            </div>
        </div>
        <div class="hero-portrait-wrap">
            <div class="hero-portrait-ring" aria-hidden="true"></div>
            <div class="hero-portrait-card">
                <img
                    src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=900&q=82"
                    alt="Profile placeholder"
                    width="900"
                    height="900"
                    loading="eager"
                    decoding="async"
                >
            </div>
            <div class="hero-floating-note">
                <strong>Available</strong>
                <span>for select builds</span>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section
    class="portfolio-section section-light py-16 md:py-20"
    x-data="projectShowcase(@js($featuredProjects->map(fn ($project) => $project->tech_stack ?: [])->values()), @js($featuredProjects->pluck('category')->values()))"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="project-showcase">
            <div class="project-showcase__header">
                <div class="max-w-2xl">
                    <p class="section-kicker">Portfolio</p>
                    <h2 class="ui-heading-secondary mb-3">Featured Projects</h2>
                    <p class="ui-copy">A focused project showcase of recent work.</p>
                </div>
                <a href="{{ route('portfolio') }}" class="project-showcase__all">View all work</a>
            </div>
        </div>



        @if($featuredProjects->count() > 0)
            <div class="project-focus-shell" aria-live="polite">
                <button type="button" class="project-focus-nav" @click="prev()" aria-label="Previous project">
                    <span aria-hidden="true">&lsaquo;</span>
                </button>

                <div class="project-slider-viewport">
                    <div class="project-empty-state" x-show="filteredIndexes.length === 0">
                        <p class="text-slate-500 text-lg">No projects match the selected filters yet.</p>
                    </div>
                    <div
                        class="project-slider-track"
                        x-show="filteredIndexes.length > 0"
                        :style="`transform: translateX(-${activePosition * 100}%);`"
                    >
                        @foreach($featuredProjects as $project)
                            <article
                                class="project-slide"
                                x-show="isFiltered({{ $loop->index }})"
                            >
                                <div class="project-focus-card">
                                    <div class="project-focus-card__media">
                                        @if($project->cover_image_url)
                                            <img
                                                src="{{ $project->cover_image_url }}"
                                                alt="{{ $project->title }}"
                                                width="1200"
                                                height="900"
                                                loading="{{ $loop->first ? 'eager' : 'lazy' }}"
                                                decoding="async"
                                            >
                                        @else
                                            <div class="flex h-full min-h-[500px] items-center justify-center bg-[radial-gradient(circle_at_30%_20%,rgba(255,0,26,0.42),#111_62%)] px-6 text-center">
                                                <span class="ui-logo text-5xl text-white">{{ $project->title }}</span>
                                            </div>
                                        @endif
                                        @if($project->category)
                                            <span class="project-focus-card__category">{{ $project->category }}</span>
                                        @endif
                                    </div>
                                    <span class="project-focus-card__divider" aria-hidden="true"></span>
                                    <div class="project-focus-card__body">
                                        <span class="project-focus-card__count">
                                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                            <span>/</span>
                                            {{ str_pad($featuredProjects->count(), 2, '0', STR_PAD_LEFT) }}
                                        </span>
                                        <h3>{{ $project->title }}</h3>
                                        <p>{{ $project->summary }}</p>
                                        @if($project->tech_stack)
                                            <div class="project-tech-list mt-5">
                                                @foreach($project->tech_stack as $tech)
                                                    <span>{{ $tech }}</span>
                                                @endforeach
                                            </div>
                                        @endif
                                        <div class="project-actions mt-6">
                                            <a href="{{ route('project.show', $project->detail_route_key) }}" class="project-link project-link-muted">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                <button type="button" class="project-focus-nav" @click="next()" aria-label="Next project">
                    <span aria-hidden="true">&rsaquo;</span>
                </button>
            </div>
        @else
            <div class="project-empty-state">
                <p class="text-slate-500 text-lg">Featured projects will be displayed here soon.</p>
            </div>
        @endif
    </div>
</section>

<!-- About / Experience Section -->
<section class="about-section section-light py-16 md:py-20" x-data="{ expandedAbout: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 items-center gap-10 md:grid-cols-[1.05fr_.95fr]">
            <div class="max-w-2xl">
                <p class="section-kicker">{{ $about?->small_heading ?? 'About / Experience' }}</p>
                <h2 class="ui-heading-secondary mb-5">{{ $about?->main_heading_first ?? "Hi, I'm" }} <span class="gradient-text">{{ $about?->main_heading_second ?? 'Rishi Jain' }}</span></h2>
                
                @php
                    $fullText = $about?->description ?? "Full-stack developer creating lean, scalable products across web, mobile, and SaaS platforms. With 8+ years of hands-on experience, I specialize in building premium digital products and automation solutions that deliver real business value.\n\nI work as a Full Stack Developer across product builds, automation systems, and scalable solutions.";
                    $words = preg_split('/\s+/', $fullText);
                    $limit = 40;
                    $hasMore = count($words) > $limit;
                    $shortText = implode(' ', array_slice($words, 0, $limit)) . ($hasMore ? '...' : '');
                @endphp

                <div x-show="!expandedAbout" class="about-more ui-copy">
                    {!! nl2br(e($shortText)) !!}
                </div>

                <div x-show="expandedAbout" x-cloak class="about-expanded mb-4 ui-copy">
                    {!! nl2br(e($fullText)) !!}
                </div>

                @if($hasMore)
                    <button @click="expandedAbout = !expandedAbout" class="read-more-toggle mt-3 font-semibold text-brand hover:underline">
                        <span x-text="expandedAbout ? 'Read Less' : 'Read More'"></span>
                    </button>
                @endif

                <!-- Social Media Links -->
                <div class="social-strip">
                    @foreach($socialLinks as $link)
                        <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer" class="social-link social-{{ strtolower($link->platform) }}" title="{{ $link->label ?? ucfirst($link->platform) }}" aria-label="{{ $link->label ?? ucfirst($link->platform) }}">
                            @if(strtolower($link->platform) === 'instagram')
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.914 4.914 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.913 4.913 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg>
                            @elseif(strtolower($link->platform) === 'linkedin')
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            @elseif(strtolower($link->platform) === 'facebook')
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            @elseif(strtolower($link->platform) === 'whatsapp')
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-4.782 1.176l-.308.156-3.195-.84 1.24 3.75-.236.38a9.964 9.964 0 001.512 5.738c2.773 4.528 8.956 5.701 13.327 2.908 1.82-1.084 3.3-2.629 4.356-4.326l.148-.253c1.566-2.582 1.524-5.469-.23-7.921-2.287-3.23-6.283-4.612-10.208-3.278z"/></svg>
                            @elseif(strtolower($link->platform) === 'twitter' || strtolower($link->platform) === 'x')
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            @elseif(strtolower($link->platform) === 'github')
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                            @else
                                <strong>{{ substr(strtoupper($link->platform), 0, 1) }}</strong>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Profile Image -->
            <div class="relative mx-auto w-full max-w-sm">
                <div class="profile-orbit" aria-hidden="true"></div>
                <div class="ui-card profile-frame mx-auto overflow-hidden p-2">
                    <img
                        src="{{ $about?->profile_image ? Storage::url($about->profile_image) : 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=82' }}"
                        alt="Profile Image"
                        width="900"
                        height="900"
                        loading="lazy"
                        decoding="async"
                        class="h-full w-full object-cover"
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section section-soft py-16 md:py-20" x-data="serviceCarousel()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="service-carousel flex flex-col items-center">
            <div class="service-carousel__intro mb-10 w-full flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                <div class="text-left">
                    <p class="section-kicker">Services</p>
                    <h2 class="ui-heading-secondary mb-0">What I build</h2>
                </div>
                <div class="sm:mb-2">
                    <a href="{{ route('services') }}" class="project-showcase__all">
                        View All Services
                    </a>
                </div>
            </div>

            <div class="service-carousel__stage w-full relative">
                <div class="service-track pb-4" x-ref="track">
                    <?php foreach ($services as $serviceIndex => $service): ?>
                        <?php
                            $shortDescription = Str::limit($service->description, 118);
                            $iconKey = $service->icon ?: 'code';
                            $iconMap = [
                                'web' => 'Web',
                                'mobile' => 'App',
                                'shopping-cart' => 'Shop',
                                'cloud' => 'SaaS',
                                'code' => 'API',
                                'database' => 'Data',
                            ];
                            $iconGradients = [
                                ['#2563EB', '#60A5FA'],
                                ['#2563EB', '#3B82F6'],
                                ['#1D4ED8', '#60A5FA'],
                                ['#1E40AF', '#93C5FD'],
                                ['#3B82F6', '#BFDBFE'],
                            ];
                            $gradient = $iconGradients[$serviceIndex % count($iconGradients)];
                        ?>
                        <article class="service-card group w-full sm:w-[380px] shrink-0" style="--service-icon-from: {{ $gradient[0] }}; --service-icon-to: {{ $gradient[1] }};">
                            <div class="service-card__top">
                                <span class="service-card__index">{{ str_pad($serviceIndex + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <span class="service-card__label">{{ $iconMap[$iconKey] ?? 'Build' }}</span>
                            </div>
                            <span class="service-card__icon" aria-hidden="true">
                                @if($iconKey === 'mobile')
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 2h8a2 2 0 012 2v16a2 2 0 01-2 2H8a2 2 0 01-2-2V4a2 2 0 012-2zm3 17h2"/></svg>
                                @elseif($iconKey === 'shopping-cart')
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h2l2.2 10.5a2 2 0 002 1.5h7.6a2 2 0 001.9-1.4L21 7H6M10 20h.01M17 20h.01"/></svg>
                                @elseif($iconKey === 'cloud')
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 18a4 4 0 01.7-7.9A6 6 0 0119 12a3 3 0 010 6H7z"/></svg>
                                @elseif($iconKey === 'database')
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6c0-2 3.6-4 8-4s8 2 8 4-3.6 4-8 4-8-2-8-4zm0 0v6c0 2 3.6 4 8 4s8-2 8-4V6M4 12v6c0 2 3.6 4 8 4s8-2 8-4v-6"/></svg>
                                @elseif($iconKey === 'web')
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5h16v14H4zM4 9h16M8 5v4"/></svg>
                                @else
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l-4 3 4 3m8-6l4 3-4 3M14 4l-4 16"/></svg>
                                @endif
                            </span>
                            <h3 class="mt-3 mb-2">{{ $service->title }}</h3>
                            <p class="service-description">{{ $shortDescription }}</p>
                            <a href="{{ route('services') }}" class="read-more mt-auto max-w-max">View Service</a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="service-carousel__actions flex justify-center items-center gap-4 mt-6 w-full">
                <button type="button" class="service-nav" @click="slide('prev')" aria-label="Previous service">
                    <span aria-hidden="true">&lsaquo;</span>
                </button>
                <button type="button" class="service-nav service-nav-next" @click="slide('next')" aria-label="Next service">
                    <span aria-hidden="true">&rsaquo;</span>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
function serviceCarousel() {
    return {
        slide(direction) {
            const track = this.$refs.track;
            if (!track) return;
            const card = track.querySelector('.service-card');
            const distance = card ? card.getBoundingClientRect().width + 24 : 360;
            track.scrollBy({
                left: direction === 'next' ? distance : -distance,
                behavior: 'smooth',
            });
        },
    }
}

function projectShowcase(projectTags, projectCategories) {
    return {
        activeTech: '',
        activeCategory: '',
        activeIndex: 0,
        projectTags: projectTags || [],
        projectCategories: projectCategories || [],
        get filteredIndexes() {
            return this.projectTags
                .map((tags, index) => ({
                    tags: Array.isArray(tags) ? tags : [],
                    category: this.projectCategories[index] || '',
                    index,
                }))
                .filter((item) => !this.activeTech || item.tags.includes(this.activeTech))
                .filter((item) => !this.activeCategory || item.category === this.activeCategory)
                .map((item) => item.index);
        },
        get activePosition() {
            return Math.max(this.filteredIndexes.indexOf(this.activeIndex), 0);
        },
        resetToFirst() {
            this.activeIndex = this.filteredIndexes[0] ?? 0;
        },
        isFiltered(index) {
            return this.filteredIndexes.includes(index);
        },
        next() {
            const indexes = this.filteredIndexes;
            if (!indexes.length) return;
            const position = indexes.indexOf(this.activeIndex);
            this.activeIndex = indexes[(position + 1 + indexes.length) % indexes.length];
        },
        prev() {
            const indexes = this.filteredIndexes;
            if (!indexes.length) return;
            const position = indexes.indexOf(this.activeIndex);
            this.activeIndex = indexes[(position - 1 + indexes.length) % indexes.length];
        },
    }
}
</script>

    <x-skill-categories class="section-light" />

    <x-testimonials-section :testimonials="$testimonials" />

<!-- Homepage FAQ Section -->
<section class="faq-section section-soft py-16 md:py-20">
    <div class="max-w-7xl mx-auto grid grid-cols-1 gap-10 px-4 sm:px-6 lg:grid-cols-[minmax(260px,.38fr)_minmax(0,1fr)] lg:items-start lg:px-8">
        <div class="max-w-xl">
            <p class="section-kicker">FAQ</p>
            <h2 class="ui-heading-secondary mb-3">Frequently Asked Questions</h2>
            <p class="ui-copy">Find answers to common questions about my services and process</p>

            <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6">
                <h3 class="text-xl font-semibold text-slate-900 mb-2">Still have questions?</h3>
                <p class="text-slate-600 mb-5">Can't find the answer you're looking for? Feel free to reach out.</p>
                <button type="button" x-data="{}" @click="$dispatch('open-lead-form')" class="inline-flex px-8 py-3 bg-rose-500 text-white rounded-full font-semibold hover:bg-rose-600 transition">
                    Get in Touch
                </button>
            </div>
        </div>

        <div>
            <div class="faq-list">
                @forelse($homepageFaqs as $faq)
                    <div class="faq-item" x-data="{ open: false }" :class="{ 'is-open': open }" @keydown.space.prevent="open = !open">
                        <button @click="open = !open" :aria-expanded="open" class="faq-item-button">
                            <span class="faq-question">{{ $faq->question }}</span>
                            <span class="faq-toggle-icon" aria-hidden="true">+</span>
                        </button>
                        <div x-show="open" x-transition class="faq-item-content">
                            <p>{{ $faq->answer }}</p>
                        </div>
                    </div>
                @empty
                    <div class="project-empty-state">
                        <p class="text-slate-500">FAQs will be added soon.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-band section-soft py-20 md:py-24">
    <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
        <h2 class="mb-4 text-3xl font-bold tracking-tight md:text-4xl">Ready to Start Your Project?</h2>
        <p class="mb-8 text-lg text-slate-600 md:text-xl">
            Let's discuss your requirements and build something amazing together.
        </p>
        <button type="button" x-data="{}" @click="$dispatch('open-lead-form')" class="inline-flex rounded-xl bg-rose-500 px-8 py-4 text-base font-semibold text-white shadow-md shadow-rose-300/40 transition hover:bg-rose-600">
            Get Started Now
        </button>
    </div>
</section>

<!-- Multi-step Lead Form Modal -->
<div x-data="leadFormStore()" @open-lead-form.window="open()" x-cloak>
    <div x-show="isOpen" @click.away="close()" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div @click.stop class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-bold">Start Your Project</h3>
                    <button @click="close()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Progress Bar -->
                <div class="mt-4">
                    <div class="flex justify-between mb-2">
                        <span class="text-sm text-gray-600">Step <span x-text="currentStep"></span> of 5</span>
                        <span class="text-sm text-gray-600" x-text="Math.round((currentStep / 5) * 100) + '%' "></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-rose-600 h-2 rounded-full transition-all duration-300" :style="`width: ${(currentStep / 5) * 100}%`"></div>
                    </div>
                </div>
            </div>
            
            <form method="POST" action="{{ route('leads.store') }}" x-ref="leadForm" @submit.prevent="submitForm" class="p-6">
                @csrf
                <!-- Step 1: Project Type -->
                <div x-show="currentStep === 1">
                    <h4 class="text-lg font-semibold mb-4">What type of project do you need?</h4>
                    <div class="space-y-3">
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="project_type" value="Mobile App" x-model="form.project_type" class="mr-3">
                            <div>
                                <span class="font-medium">Mobile App</span>
                                <p class="text-sm text-gray-600">iOS & Android applications</p>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="project_type" value="Website" x-model="form.project_type" class="mr-3">
                            <div>
                                <span class="font-medium">Website</span>
                                <p class="text-sm text-gray-600">Responsive web applications</p>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="project_type" value="E-commerce" x-model="form.project_type" class="mr-3">
                            <div>
                                <span class="font-medium">E-commerce</span>
                                <p class="text-sm text-gray-600">Online stores and marketplaces</p>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="project_type" value="SaaS Platform" x-model="form.project_type" class="mr-3">
                            <div>
                                <span class="font-medium">SaaS Platform</span>
                                <p class="text-sm text-gray-600">Software as a Service solutions</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Step 2: Budget -->
                <div x-show="currentStep === 2">
                    <h4 class="text-lg font-semibold mb-4">What's your budget range?</h4>
                    <div class="space-y-3">
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="budget" value="$500-$1000" x-model="form.budget" class="mr-3">
                            <div>
                                <span class="font-medium">$500 - $1000</span>
                                <p class="text-sm text-gray-600">Basic MVP or simple website</p>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="budget" value="$1000-$5000" x-model="form.budget" class="mr-3">
                            <div>
                                <span class="font-medium">$1000 - $5000</span>
                                <p class="text-sm text-gray-600">Professional web application</p>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="budget" value="$5000+" x-model="form.budget" class="mr-3">
                            <div>
                                <span class="font-medium">$5000+</span>
                                <p class="text-sm text-gray-600">Enterprise-level solution</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Step 3: Timeline -->
                <div x-show="currentStep === 3">
                    <h4 class="text-lg font-semibold mb-4">When do you need this completed?</h4>
                    <div class="space-y-3">
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="timeline" value="1 Week" x-model="form.timeline" class="mr-3">
                            <div>
                                <span class="font-medium">1 Week</span>
                                <p class="text-sm text-gray-600">Urgent project</p>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="timeline" value="1 Month" x-model="form.timeline" class="mr-3">
                            <div>
                                <span class="font-medium">1 Month</span>
                                <p class="text-sm text-gray-600">Standard timeline</p>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-rose-50">
                            <input type="radio" name="timeline" value="2-3 Months" x-model="form.timeline" class="mr-3">
                            <div>
                                <span class="font-medium">2-3 Months</span>
                                <p class="text-sm text-gray-600">Complex project</p>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Step 4: Project Description -->
                <div x-show="currentStep === 4">
                    <h4 class="text-lg font-semibold mb-4">Tell me about your project</h4>
                    <textarea name="description" x-model="form.description" rows="6" 
                        class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-rose-600 focus:border-transparent"
                        placeholder="Describe your project requirements, features, goals, etc..."></textarea>
                </div>
                
                <!-- Step 5: Contact Information -->
                <div x-show="currentStep === 5">
                    <h4 class="text-lg font-semibold mb-4">Your Contact Information</h4>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                            <input type="text" name="name" x-model="form.name" required
                                class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-rose-600 focus:border-transparent"
                                placeholder="Your full name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                            <input type="email" name="email" x-model="form.email" required
                                class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-rose-600 focus:border-transparent"
                                placeholder="your@email.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone/WhatsApp</label>
                            <input type="tel" name="phone" x-model="form.phone"
                                class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-rose-600 focus:border-transparent"
                                placeholder="+1 234 567 8900">
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-8">
                    <button type="button" @click="previousStep()" x-show="currentStep > 1"
                        class="px-6 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                        Previous
                    </button>
                    <button type="button" @click="nextStep()" x-show="currentStep < 5"
                        class="px-6 py-2 bg-rose-600 text-white rounded-lg hover:bg-rose-700 transition ml-auto">
                        Next
                    </button>
                    <button type="submit" x-show="currentStep === 5"
                        class="px-6 py-2 bg-rose-600 text-white rounded-lg hover:bg-rose-700 transition">
                        Submit Project Request
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function leadFormStore() {
    return {
        isOpen: false,
        currentStep: 1,
        form: {
            project_type: '',
            budget: '',
            timeline: '',
            description: '',
            name: '',
            email: '',
            phone: ''
        },
        open() {
            this.isOpen = true;
            this.currentStep = 1;
            this.resetForm();
        },
        close() {
            this.isOpen = false;
        },
        nextStep() {
            if (this.canProceed()) {
                this.currentStep++;
            }
        },
        previousStep() {
            this.currentStep--;
        },
        canProceed() {
            if (this.currentStep === 1) return this.form.project_type !== '';
            if (this.currentStep === 2) return this.form.budget !== '';
            if (this.currentStep === 3) return this.form.timeline !== '';
            if (this.currentStep === 4) return true; // Description is optional
            if (this.currentStep === 5) return this.form.name !== '' && this.form.email !== '';
            return false;
        },
        submitForm() {
            if (!this.canProceed()) return;

            this.$refs.leadForm.submit();
        },
        resetForm() {
            this.form = {
                project_type: '',
                budget: '',
                timeline: '',
                description: '',
                name: '',
                email: '',
                phone: ''
            };
        }
    }
}
</script>
@endsection
