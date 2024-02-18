<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $status)
    {
        return view('penelitian.status', compact('status'));
    }
}
