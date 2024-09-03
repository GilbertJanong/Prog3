<?php

namespace App\Http\Controllers;

use App\Models\RumahMakan;
use Illuminate\Http\Request;

class RumahMakanController extends Controller
{
    public function index()
    {
        $rumahmakans = RumahMakan::all();
        return response()->json($rumahmakans);
    }

    public function store(Request $request)
    {
        $rumahmakans = RumahMakan::create([
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'rating' => $request->input('rating'),
            'jadwal' => $request->input('jadwal'),
        ]);
        return response()->json($rumahmakans, 201);
    }

    public function show($id)
    {
        $rumahmakans = RumahMakan::findOrFail($id);
        return response()->json($rumahmakans);
    }

    public function update(Request $request, $id)
    {
        $rumahmakans = RumahMakan::findOrFail($id);
        $rumahmakans->update([
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'rating' => $request->input('rating'),
            'jadwal' => $request->input('jadwal'),
        ]);
        return response()->json($rumahmakans);
    }

    public function destroy($id)
    {
        $rumahmakans = RumahMakan::findOrFail($id);
        $rumahmakans->delete();
        return response()->json(null, 204);
    }
}
