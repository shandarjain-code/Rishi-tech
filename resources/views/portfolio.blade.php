@extends('layouts.app')

@section('title', 'Portfolio | Web & Mobile Projects — Laravel, React, Flutter')
@section('description', 'Portfolio of Laravel, React, Next.js, Flutter, and Node.js projects: web apps, SaaS, e‑commerce, and APIs. See live work and case-ready delivery.')

@section('content')
    <x-page-hero
        title="My portfolio"
        subtitle="Web apps, mobile products, and SaaS — built for clarity, speed, and measurable outcomes."
    />

    <section
        class="portfolio-section section-light py-16 md:py-20"
        x-data="projectShowcase(@js($projects->map(fn ($project) => $project->tech_stack ?: [])->values()), @js($projects->pluck('category')->values()))"
    >
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="project-showcase">
                <div class="project-showcase__header">
                    <div class="max-w-2xl">
                        <p class="section-kicker">Selected work</p>
                        <h2 class="ui-heading-secondary mb-3">Explore one project at a time</h2>
                        <p class="ui-copy">Filter by stack, then move through each build in a clean focused view.</p>
                    </div>
                    <a href="{{ route('start-project') }}" class="project-showcase__all">Start a project</a>
                </div>

                <div class="project-filters project-filter-dropdowns" aria-label="Project filters">
                    <label>
                        <span>Tech Stack</span>
                        <select x-model="activeTech" @change="resetToFirst()">
                            <option value="">All Tech Stacks</option>
                            @foreach($techFilters as $tech)
                                <option value="{{ $tech }}">{{ $tech }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label>
                        <span>Category</span>
                        <select x-model="activeCategory" @change="resetToFirst()">
                            <option value="">All Categories</option>
                            @foreach($categoryFilters as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                @if($projects->count() > 0)
                    <div class="project-focus-shell" aria-live="polite">
                        <button type="button" class="project-focus-nav" @click="prev()" aria-label="Previous project">
                            <span aria-hidden="true">&lsaquo;</span>
                        </button>

                        <div class="project-slider-viewport">
                            <div class="project-empty-state" x-show="filteredIndexes.length === 0">
                                <p class="text-lg text-slate-500">No projects match the selected filters yet.</p>
                            </div>
                            <div
                                class="project-slider-track"
                                x-show="filteredIndexes.length > 0"
                                :style="`transform: translateX(-${activePosition * 100}%);`"
                            >
                            @foreach($projects as $project)
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
                                                {{ str_pad($projects->count(), 2, '0', STR_PAD_LEFT) }}
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
                                                @if($project->live_link)
                                                    <a href="{{ $project->live_link }}" target="_blank" rel="noopener noreferrer" class="project-link">Live Preview</a>
                                                @endif
                                                @if($project->github_link)
                                                    <a href="{{ $project->github_link }}" target="_blank" rel="noopener noreferrer" class="project-link project-link-muted">GitHub</a>
                                                @endif
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
                        <p class="text-lg text-slate-500">No projects available yet. Check back soon!</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section class="cta-band section-soft py-16 md:py-20">
        <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="mb-4 text-3xl font-bold tracking-tight md:text-4xl">Like what you see?</h2>
            <p class="mb-8 text-lg text-slate-600 md:text-xl">
                Let's discuss your project and create something amazing together.
            </p>
            <a href="{{ route('start-project') }}" class="inline-flex rounded-xl bg-rose-500 px-8 py-4 text-base font-semibold text-white shadow-md shadow-rose-300/40 transition hover:bg-rose-600">
                Start Your Project
            </a>
        </div>
    </section>

    <script>
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
@endsection
