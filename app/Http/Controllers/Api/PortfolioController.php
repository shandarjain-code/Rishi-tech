<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function getProjects()
    {
        return response()->json(
            Project::query()
                ->with(['images' => fn ($q) => $q->orderBy('sort_order')])
                ->orderBy('sort_order')
                ->orderByDesc('id')
                ->get()
        );
    }

    public function getServices()
    {
        return response()->json(Service::orderBy('sort_order')->get());
    }

    public function getSkills()
    {
        return response()->json(Skill::orderBy('sort_order')->get());
    }

    public function submitLead(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'project_type' => 'required|string',
            'budget' => 'required|string',
            'timeline' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $lead = Lead::create($request->all());

        return response()->json([
            'message' => 'Lead submitted successfully!',
            'lead' => $lead
        ], 201);
    }
}
