<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\SocialLink;
use App\Models\Testimonial;
use App\Models\HomepageFaq;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::query()
            ->with(['images' => fn ($q) => $q->orderBy('sort_order')])
            ->where('is_featured', true)
            ->orderBy('sort_order', 'asc')
            ->orderByDesc('id')
            ->get();
        $services = Service::orderBy('sort_order', 'asc')->get();
        $testimonials = Testimonial::query()
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get();
        $homepageFaqs = HomepageFaq::query()
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get();
        $socialLinks = SocialLink::query()
            ->where('is_active', true)
            ->whereIn('platform', array_keys(SocialLink::PLATFORMS))
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();
        $techFilters = $featuredProjects
            ->flatMap(fn (Project $project) => $project->tech_stack ?: [])
            ->filter()
            ->map(fn (string $tech) => trim($tech))
            ->unique(fn (string $tech) => strtolower($tech))
            ->values();
        $categoryFilters = $featuredProjects
            ->pluck('category')
            ->filter()
            ->map(fn (string $category) => trim($category))
            ->unique(fn (string $category) => strtolower($category))
            ->values();

        $about = \App\Models\About::first();

        return view('home', compact('featuredProjects', 'services', 'testimonials', 'homepageFaqs', 'socialLinks', 'techFilters', 'categoryFilters', 'about'));
    }
}
