<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order', 'asc')->get();
        return view('services', compact('services'));
    }
}
