<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $user = auth()->user()->name ?? '';
        return view('pages.dashboard', [
            'name' => $user
        ]);
    }
}
