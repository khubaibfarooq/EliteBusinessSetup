<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stat;
use Illuminate\Http\Request;

class AdminStatsController extends Controller
{
    public function index()
    {
        $stats = Stat::orderBy('sort_order')->get();
        return view('admin.stats.index', compact('stats'));
    }

    public function update(Request $request, Stat $stat)
    {
        $data = $request->validate([
            'value' => 'required|string',
            'label' => 'required|string',
        ]);
        $stat->update($data);
        return back()->with('success', 'Stat updated.');
    }
}
