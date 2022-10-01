<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{

    function laporan_penjualan(){
        return view('laporan_penjualan');
    }
    
    function tambah_motor(){
        return view('tambah_motor');
    }

    function tambah_mobil(){
        return view('tambah_mobil');
    }

    public function index()
    {
        $kendaraan['data'] = Kendaraan::all();
        $kendaraan['formAction'] = route("tambah_motor");
        return view('app',compact('kendaraan'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return null;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_motor(Request $request)
    {
        request()->validate([
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
            'mesin' => 'required',
            'tipe_suspensi' => 'required',
            'tipe_transmisi' => 'required',
        ]);


        Kendaraan::create($request->all());


        return redirect()->route('index')
                        ->with('success','Vehicle created successfully.');
    }

    public function store(Request $request)
    {
        request()->validate([
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
            'mesin' => 'required',
            'kapasitas_penumpang' => 'required',
            'tipe' => 'required',
        ]);


        Kendaraan::create($request->all());


        return redirect()->route('index')
                        ->with('success','Vehicle created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $book)
    {
        return view('books.show',compact('book'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        $book->update($request->all());


        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();


        return redirect()->route('books.index')
                        ->with('success','Book deleted successfully');
    }
}
