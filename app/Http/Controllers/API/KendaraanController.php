<?php

namespace App\Http\Controllers\API;

use App\Models\Kendaraan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraan = Kendaraan::All();
        $kendaraan->get();
        // return response()->json(["result" => "ok"], 201);
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $kendaraan = new Kendaraan;
        $kendaraan->tahun_kaluaran = $request->tahun_keluaran;
        $kendaraan->warna = $request->warna;
        $kendaraan->harga = $request->harga;
        $kendaraan->mesin = $request->mesin;
        $kendaraan->tipe_suspensi = $request->tipe_suspensi;
        $kendaraan->tipe_transmisi = $request->tipe_transmisi;
        $kendaraan->kapasitas_penumpang = $request->kapasitas_penumpang;
        $kendaraan->tipe = $request->tipe;
        $kendaraan->jenis_kendaraan = $request->jenis_kendaraan;
        $kendaraan->stok = $request->stok;
        $kendaraan->terjual = $request->terjual;
        $kendaraan->save();

        return response()->json(["result" => "ok"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kendaraan = Kendaraan::find($id);
        $kendaraan->get();
        return response()->json(["result" => "ok"], 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $kendaraan = Kendaraan::find($id);
        $kendaraan->tahun_kaluaran = $request->tahun_keluaran;
        $kendaraan->warna = $request->warna;
        $kendaraan->harga = $request->harga;
        $kendaraan->mesin = $request->mesin;
        $kendaraan->tipe_suspensi = $request->tipe_suspensi;
        $kendaraan->tipe_transmisi = $request->tipe_transmisi;
        $kendaraan->kapasitas_penumpang = $request->kapasitas_penumpang;
        $kendaraan->tipe = $request->tipe;
        $kendaraan->jenis_kendaraan = $request->jenis_kendaraan;
        $kendaraan->stok = $request->stok;
        $kendaraan->terjual = $request->terjual;
        $kendaraan->save();

        return response()->json(["result" => "ok"], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kendaraan = Kendaraan::find($id);
        $kendaraan->delete();

        return response()->json(["result" => "ok"], 201);
    }
}
