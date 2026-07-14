@php
    $groups = [
        [
            'title' => 'Tech stack',
            'icon' => 'TS',
            'items' => ['PHP', 'Laravel', 'React JS', 'Node.js', 'Flutter', 'Python', 'CodeIgniter', 'Next.js', 'Angular', 'JavaScript'],
        ],
        [
            'title' => 'CMS',
            'icon' => 'CM',
            'items' => ['WordPress', 'Shopify', 'Joomla', 'PrestaShop'],
        ],
        [
            'title' => 'Databases',
            'icon' => 'DB',
            'items' => ['MongoDB', 'MySQL', 'PostgreSQL'],
        ],
    ];
@endphp

<section {{ $attributes->merge(['class' => 'skills-section ui-section py-16 md:py-20']) }}>
    <span class="ui-decor-circle right-16 top-16 h-56 w-56" aria-hidden="true"></span>
    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-10 w-full text-left">
            <p class="section-kicker">Toolkit</p>
            <h2 class="ui-heading-secondary mb-0 text-white">
                <span class="gradient-text">Skills &amp; technologies</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            @foreach ($groups as $group)
                <div class="skill-card">
                    <div class="skill-card__head">
                        <span class="skill-card__icon" aria-hidden="true">{{ $group['icon'] }}</span>
                        <div>
                            <h3>{{ $group['title'] }}</h3>
                            <p>{{ count($group['items']) }} tools</p>
                        </div>
                    </div>
                    <ul>
                        @foreach ($group['items'] as $item)
                            <li>
                                <span>
                                    {{ $item }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>
