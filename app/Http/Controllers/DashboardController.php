<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            'title' => "dashboard",
            'display' => "Dashboard",
            'tblog' => Articel::count(),
            'tcategory' => Category::count(),
            'blogs' => Articel::limit(10)->get(),
            'categories' => Category::all(),
        ]);
    }

    public function profile(User $profile)
    {
        return view('dashboard.profile.index',[
            'title' => "Profile",
            'display' => 'profile'
        ],compact('profile'));
    }
}
