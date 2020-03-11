<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_index()
    {
        $applications = Application::paginate(5);
        return view('admin.index', compact('applications', $applications));
    }
}
