<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devices;

class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Devices::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $devices = new Devices;
        $devices->nama_device = $request->nama_device;
        $devices->save();
        return response()->json([
            "message" => "Device berhasil ditambahkan."
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Devices::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Device::where('id', $id)->exists()){
            $devices = Devices::find($id);
            $devices ->nama_device = is_null($request->nama_device) ? $device->nama_device : $request->nama_device;
            $devices ->save();

            return response()->json([
                "message" => "Device berhasil diupdate"
            ], 201);
        } else {

            return response()->json([
                "message" => "Device tidak ditemukan"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Devices::where('id', $id)->exists()){
            $devices = Device::find($id);
            $devices->delete();

            return response()->json([
                "message" => "Device telah dihapus."
            ], 201);
            } else {

            return response()->json([
            "message" => "Device tidak ditemukan."
            ], 404);
            }
    }
}
