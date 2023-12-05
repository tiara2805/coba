<?php

namespace App\Http\Controllers;

use App\Models\kasir;
use App\Models\barang;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data = transaksi::all();
       $kasir = kasir::all();
       $barang = barang::all();
       return view ('transaksi.index', compact('data', 'kasir', 'barang'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = transaksi::all();
        $kasir = kasir::all();
        $barang = barang::all();
       return view ('transaksi.tambah', compact('kasir','barang', 'data'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = barang::find($request->input('idbarang'));
        $qty = $request->input('qty');
        $total_bayar= $barang->harga_barang * $qty;

        transaksi::create([
            'idkasir' => auth()->user()->id,
            'idbarang' =>$request->input('idbarang'),
            'id'=>$request->input('rand(10000,99999)'),
            'qty'=>$qty,
            'total_bayar'=>$total_bayar,
            'tgltransaksi'=>now(),
        ]);
        return redirect('transaksi');

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
        $data = transaksi::find($id);
        $data->delete();
        return redirect('/transaksi');
    }
}
