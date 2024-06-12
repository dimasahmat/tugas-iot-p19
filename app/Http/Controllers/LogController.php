<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        return Log::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'device_id' => 'required|exists:devices,id',
            'log_time' => 'required|date',
            'data' => 'required'
        ]);
        return Log::create($request->all());
    }

    public function show($id)
    {
        return Log::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $log = Log::findOrFail($id);
        $log->update($request->all());
        return $log;
    }

    public function destroy($id)
    {
        Log::destroy($id);
        return response()->noContent();
    }
}
