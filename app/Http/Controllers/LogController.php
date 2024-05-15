<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Log::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $log_data = new Devices;
        $log_data->log_data = $request->log_data;
        $log_data->save();
        return response()->json([
            "message" => "Data berhasil ditambahkan."
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(number $log_data)
    {
        return Log::find($log_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Log::where('log_data', $log_data)->exists()){
            $devices = Log::find($log_data);
            $devices ->log_data = is_null($request->log_data) ? $log->log_data : $request->log_data;
            $devices ->save();

            return response()->json([
                "message" => "Data berhasil diupdate"
            ], 201);
        } else {

            return response()->json([
                "message" => "Data tidak ditemukan"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Log::where('log_data', $log_data)->exists()){
            $log_data = Log::find($log_data);
            $log_data->delete();

            return response()->json([
                "message" => "Data telah dihapus."
            ], 201);
            } else {

            return response()->json([
            "message" => "Data tidak ditemukan."
            ], 404);
            }
    }
}
