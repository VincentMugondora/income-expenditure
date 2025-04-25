<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::where('user_id', Auth::id())->get();
        return view('logs.index', compact('logs'));
    }
}
