<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminServicesController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'      => 'required|string|max:100',
            'icon'       => 'nullable|string|max:50',
            'category'   => 'required|string',
            'description'=> 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);
        Service::create($data);
        return back()->with('success', 'Service added.');
    }

    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'title'      => 'required|string|max:100',
            'is_active'  => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);
        $data['is_active'] = $request->boolean('is_active');
        $service->update($data);
        return back()->with('success', 'Service updated.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return back()->with('success', 'Service deleted.');
    }

    public function create() { return view('admin.services.index'); }
    public function edit(Service $service) { return view('admin.services.index'); }
    public function show(Service $service) { return view('admin.services.index'); }
}
