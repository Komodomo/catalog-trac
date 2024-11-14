<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $adminName = auth()->user()->name; // atau sesuai dengan cara Anda mendapatkan nama admin
        return view('admin.dashboard', compact('adminName'));
    }
}
