<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::query()
            ->with(['images' => fn ($q) => $q->orderBy('sort_order')])
            ->orderBy('sort_order', 'asc')
            ->orderByDesc('id')
            ->get();
        $techFilters = $projects
            ->flatMap(fn (Project $project) => $project->tech_stack ?: [])
            ->filter()
            ->map(fn (string $tech) => trim($tech))
            ->unique(fn (string $tech) => strtolower($tech))
            ->values();
        $categoryFilters = $projects
            ->pluck('category')
            ->filter()
            ->map(fn (string $category) => trim($category))
            ->unique(fn (string $category) => strtolower($category))
            ->values();

        return view('portfolio', compact('projects', 'techFilters', 'categoryFilters'));
    }

    public function show(string $project)
    {
        $project = Project::query()
            ->with(['images' => fn ($q) => $q->orderBy('sort_order')])
            ->where('slug', $project)
            ->when(is_numeric($project), fn ($query) => $query->orWhere('id', $project))
            ->firstOrFail();
        $nextProject = Project::query()
            ->where(function($q) use ($project) {
                $q->where('sort_order', '>', $project->sort_order)
                  ->orWhere(function($q2) use ($project) {
                      $q2->where('sort_order', '=', $project->sort_order)
                         ->where('id', '<', $project->id);
                  });
            })
            ->orderBy('sort_order', 'asc')
            ->orderByDesc('id')
            ->first();

        return view('project-detail', compact('project', 'nextProject'));
    }
}
