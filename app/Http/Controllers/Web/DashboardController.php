<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Dashboard";

        return view('dashboard.admin')->with('title', $title);
    }



    public function staffProfile()
    {
        $title = "My Profile";

        return view('dashboard.admin')->with('title', $title);
    }
    public function parentProfile()
    {
        $title = "My Profile";

        return view('dashboard.admin')->with('title', $title);
    }

    public function studentProfile()
    {
        $title = "My Profile";

        return view('dashboard.admin')->with('title', $title);
    }
}
