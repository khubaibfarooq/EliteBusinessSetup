<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class AdminInquiriesController extends Controller
{
    public function index()
    {
        $inquiries = Inquiry::latest()->paginate(15);
        return view('admin.inquiries.index', compact('inquiries'));
    }

    public function show(Inquiry $inquiry)
    {
        $inquiry->update(['status' => 'read']);
        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function destroy(Inquiry $inquiry)
    {
        $inquiry->delete();
        return back()->with('success', 'Inquiry deleted.');
    }
}
