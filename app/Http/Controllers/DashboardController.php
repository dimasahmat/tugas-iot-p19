<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view('index', compact('devices'));
    }

    public function show($id)
    {
        $device = Device::with('logs')->findOrFail($id);
        return view('show', compact('device'));
    }
}
