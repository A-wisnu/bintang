<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the appropriate dashboard based on user role.
     */
    public function index()
    {
        $user = Auth::user();
        
        if ($user->isAdmin()) {
            return view('admin.dashboard');
        } elseif ($user->isStaff()) {
            return view('staff.dashboard');
        } else {
            return view('dashboard.index');
        }
    }
    
    /**
     * Show admin dashboard
     */
    public function adminDashboard()
    {
        if (!Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized');
        }
        
        return view('admin.dashboard');
    }
    
    /**
     * Show staff dashboard
     */
    public function staffDashboard()
    {
        if (!Auth::user()->isStaff()) {
            abort(403, 'Unauthorized');
        }
        
        return view('staff.dashboard');
    }
}
