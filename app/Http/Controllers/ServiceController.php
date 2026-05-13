<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(Service $service)
    {
        // Abort if service is not active
        if (!$service->is_active) {
            abort(404);
        }

        // Get related services from same category
        $relatedServices = Service::byCategory($service->category)
            ->active()
            ->where('id', '!=', $service->id)
            ->limit(3)
            ->get();

        return view('services.show', [
            'service' => $service,
            'relatedServices' => $relatedServices,
        ]);
    }
}
