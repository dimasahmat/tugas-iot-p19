<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        return Device::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        return Device::create($request->all());
    }

    public function show($id)
    {
        return Device::with('logs')->find($id);
    }

    public function update(Request $request, $id)
    {
        $device = Device::findOrFail($id);
        $device->update($request->all());
        return $device;
    }

    public function destroy($id)
    {
        Device::destroy($id);
        return response()->noContent();
    }
}
