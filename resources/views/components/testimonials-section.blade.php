@props(['testimonials'])

@if ($testimonials->isNotEmpty())
    <section class="testimonials-section section-light border-y py-16 md:py-20">
        <span class="ui-decor-circle -left-20 top-20 h-64 w-64" aria-hidden="true"></span>
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12 w-full text-left">
                <p class="section-kicker">Testimonials</p>
                <h2 class="ui-heading-secondary mb-0">
                    What Customers Say
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($testimonials as $t)
                    <article class="testimonial-card">
                        <div class="testimonial-card__quote" aria-hidden="true">“</div>
                        <div class="mb-5 flex items-start gap-4">
                            <div class="testimonial-avatar">
                                @if ($t->image_url)
                                    <img
                                        src="{{ $t->image_url }}"
                                        alt="{{ $t->name }}"
                                        width="112"
                                        height="112"
                                        loading="lazy"
                                        decoding="async"
                                        class="h-full w-full object-cover"
                                    />
                                @else
                                    <span aria-hidden="true">
                                        {{ Str::substr($t->name, 0, 1) }}
                                    </span>
                                @endif
                            </div>
                            <div class="min-w-0 flex-1">
                                <p class="testimonial-name">{{ $t->name }}</p>
                                @if ($t->rating)
                                    <div class="testimonial-stars" aria-label="Rating: {{ $t->rating }} out of 5">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <svg class="{{ $i <= $t->rating ? 'is-active' : '' }}" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        @endfor
                                    </div>
                                @endif
                            </div>
                        </div>
                        <blockquote>
                            <p>{{ $t->feedback }}</p>
                        </blockquote>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endif
