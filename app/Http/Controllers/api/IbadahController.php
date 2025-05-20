<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ibadah;
use Illuminate\Http\Request;

class IbadahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(ibadah::all(), 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'waktu' => 'required|string|max:255',
        ]);

        $ibadah = ibadah::create($request->all());

       return response()->json([
            'message' => 'Data Berhasil ditambahkan',
            'data' => $ibadah,
        ], 201);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ibadah = ibadah::find($id);

        if (!$ibadah) {
            return response()->json([
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        return response()->json($ibadah);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jenis' => 'required|string|max:255',
            'waktu' => 'required|string|max:255',
        ]);

        $ibadah = ibadah::find($id);

        if (!$ibadah) {
            return response()->json([
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $ibadah->update($request->all());

        return response()->json([
            'message' => 'Data berhasil diupdate',
            'data' => $ibadah,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ibadah = ibadah::find($id);

        if (!$ibadah) {
            return response()->json([
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        $ibadah->delete();

        return response()->json([
            'message' => 'Data berhasil dihapus',
        ], 200);
    }
}
