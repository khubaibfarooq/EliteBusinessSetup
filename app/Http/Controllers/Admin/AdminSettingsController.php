<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminSettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('admin.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'phone'            => 'nullable|string|max:30',
            'whatsapp'         => 'nullable|string|max:30',
            'email'            => 'nullable|email',
            'address'          => 'nullable|string|max:255',
            'hero_title'       => 'nullable|string|max:255',
            'hero_sub'         => 'nullable|string|max:500',
            'about_text'       => 'nullable|string',
            'meta_description' => 'nullable|string|max:500',
        ]);

        foreach ($data as $key => $value) {
            Setting::set($key, $value ?? '');
        }

        return back()->with('success', 'Settings updated successfully!');
    }
}
