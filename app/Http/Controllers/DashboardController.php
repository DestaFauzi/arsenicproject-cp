<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function userDashboard()
    {
        if (!Auth::user()->isUser()) {
            abort(403, 'Unauthorized access');
        }
        
        return view('dashboard.user');
    }

    public function adminDashboard()
    {
        if (!Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized access');
        }
        
        $stats = [
            'total_users' => User::users()->count(),
            'active_users' => User::users()->active()->count(),
            'total_admins' => User::admins()->count(),
            'active_admins' => User::admins()->active()->count(),
        ];
        
        return view('dashboard.admin', compact('stats'));
    }
}