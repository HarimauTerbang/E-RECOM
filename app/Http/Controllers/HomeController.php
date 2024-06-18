<?php

namespace App\Http\Controllers;

use App\Models\ApplicationRating;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Mendapatkan daftar jenis bisnis yang ada
        $businessTypes = ApplicationRating::select('business_type')->distinct()->get();

        return view('home', compact('businessTypes'));
    }

    public function showRating(Request $request)
    {
        // Validasi input
        $request->validate([
            'business_type' => 'required|string|exists:application_ratings,business_type',
        ]);

        // Ambil jenis bisnis dari input
        $businessType = $request->input('business_type');

        // Ambil rating aplikasi berdasarkan jenis bisnis
        $applications = ApplicationRating::where('business_type', $businessType)->get();

        return view('rating', compact('applications', 'businessType'));
    }
}
