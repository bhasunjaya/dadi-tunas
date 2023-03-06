<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardGet extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('dashboard');
    }
}
