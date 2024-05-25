<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\News;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAdmin = Admin::count();
        $totalNews = News::count();
        $totalReports = Report::count();
        // $totalOnlineUsers = User::where('online', true)->count();

        return view('admin.dashboard', compact('totalAdmin', 'totalNews', 'totalReports'));
    }
}
