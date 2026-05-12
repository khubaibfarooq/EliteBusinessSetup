<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Service;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalInquiries'    => Inquiry::count(),
            'newInquiries'      => Inquiry::where('status', 'new')->count(),
            'totalServices'     => Service::count(),
            'totalTestimonials' => Testimonial::count(),
            'recentInquiries'   => Inquiry::latest()->take(8)->get(),
        ]);
    }
}
