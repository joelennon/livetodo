<?php

namespace App\Http\Controllers;

use App\Broadcast;

class HomeController extends Controller
{
    public function index()
    {
        $currentBroadcast = Broadcast::with('tasks')->where('live', true)->firstOrFail();

        return view('home.index')->with(['currentBroadcast' => $currentBroadcast]);
    }
}
