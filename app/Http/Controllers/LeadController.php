<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Requests\StoreLeadRequest;

class LeadController extends Controller
{
    public function create()
    {
        return view('start-project');
    }

    public function store(StoreLeadRequest $request)
    {
        Lead::create($request->validated());

        return redirect()->route('thank-you')->with('success', 'Your project request has been submitted successfully!');
    }

    public function thankYou()
    {
        return view('thank-you');
    }

    public function storeQuote(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'nullable|email|max:255',
            'budget' => 'nullable|string|max:255',
            'service' => 'required|string|max:255',
            'contact_timing' => 'required|in:immediately,schedule',
            'schedule_date' => 'nullable|required_if:contact_timing,schedule|date',
            'schedule_time' => 'nullable|required_if:contact_timing,schedule|string',
            'country' => 'nullable|required_if:contact_timing,schedule|string|max:255',
        ]);

        $description = "Quote Request for: " . $validated['service'] . "\n";
        $description .= "Contact Timing: " . ucfirst($validated['contact_timing']) . "\n";
        
        if ($validated['contact_timing'] === 'schedule') {
            $description .= "Scheduled Date: " . $validated['schedule_date'] . "\n";
            $description .= "Scheduled Time: " . $validated['schedule_time'] . "\n";
            $description .= "Country: " . $validated['country'] . "\n";
        }

        Lead::create([
            'name' => $validated['name'],
            'email' => $validated['email'] ?? 'no-email@provided.com',
            'phone' => $validated['phone'],
            'project_type' => $validated['service'],
            'budget' => $validated['budget'] ?? 'Not specified',
            'timeline' => $validated['contact_timing'] === 'immediately' ? 'ASAP' : 'Scheduled',
            'description' => $description,
        ]);

        return response()->json(['success' => true]);
    }
}
