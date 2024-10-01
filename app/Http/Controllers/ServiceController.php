<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // Afficher la liste des services
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    // Afficher un service individuel
    public function show($id)
    {
        $service = Service::with(['benefits', 'process_steps', 'testimonials', 'faqs'])->findOrFail($id);
        return view('services.show', compact('service'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'benefits.*' => 'required|string',
            'process_steps.*.title' => 'required|string',
            'process_steps.*.description' => 'required|string',
            'testimonials.*.text' => 'required|string',
            'testimonials.*.author' => 'required|string|max:255',
            'faqs.*.question' => 'required|string',
            'faqs.*.answer' => 'required|string',
        ]);

        // Stockage de l'image de fond
        $path = $request->file('background_image')->store('images/services', 'public');

        // Création du service
        $service = Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
            'background_image' => $path,
        ]);

        // Enregistrement des avantages, étapes, témoignages, et FAQs
        $service->benefits()->createMany(array_map(function ($benefit) {
            return ['description' => $benefit];
        }, $request->benefits));

        $service->processSteps()->createMany($request->process_steps);
        $service->testimonials()->createMany($request->testimonials);
        $service->faqs()->createMany($request->faqs);

        return redirect()->route('services.index')->with('success', 'Service créé avec succès.');
    }
}
