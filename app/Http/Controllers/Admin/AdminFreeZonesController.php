<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FreeZone;
use Illuminate\Http\Request;

class AdminFreeZonesController extends Controller
{
    public function index()
    {
        $freeZones = FreeZone::orderBy('sort_order')->get();
        return view('admin.free-zones.index', compact('freeZones'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'abbreviation' => 'nullable|string|max:50',
            'emirate' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);
        FreeZone::create($data);
        return back()->with('success', 'Free Zone added.');
    }

    public function update(Request $request, FreeZone $freeZone)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);
        $data['is_active'] = $request->boolean('is_active');
        $freeZone->update($data);
        return back()->with('success', 'Free Zone updated.');
    }

    public function destroy(FreeZone $freeZone)
    {
        $freeZone->delete();
        return back()->with('success', 'Free Zone deleted.');
    }
}
