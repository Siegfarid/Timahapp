<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penduduk = DB::table('warga')
            ->join('kartu_keluarga', 'warga.kartu_keluarga_id', '=', 'kartu_keluarga.id')
            ->select('warga.*', 'kartu_keluarga.nomor_kk', 'kartu_keluarga.alamat')
            ->get()->toArray();

        dd($penduduk);
    }

    public function findWargaWithKeluarga($id)
    {
        $penduduk = DB::table('warga')
            ->join('kartu_keluarga', 'warga.kartu_keluarga_id', '=', 'kartu_keluarga.id')
            ->select('warga.*', 'kartu_keluarga.nomor_kk', 'kartu_keluarga.alamat')
            ->where('warga.id', '=', $id)
            ->first();

        $anggotaLain = DB::table('warga')
            ->join('kartu_keluarga', 'warga.kartu_keluarga_id', '=', 'kartu_keluarga.id')
            ->select('warga.*', 'kartu_keluarga.nomor_kk', 'kartu_keluarga.alamat')
            ->where('warga.id', '!=', $id)
            ->get()->toArray();

        dd($penduduk, $anggotaLain);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
