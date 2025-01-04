<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::with('satuan')->get();
        return view('barangs.index', compact('barangs'));
    }

    public function create()
    {
        $satuans = Satuan::all();
        return view('barangs.create', compact('satuans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_id' => 'required'
        ]);

        Barang::create($request->all());
        return redirect()->route('barangs.index');
    }

    public function edit(Barang $barang)
    {
        $satuans = Satuan::all();
        return view('barangs.edit', compact('barang', 'satuans'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode_barang' => 'required|unique:barangs,kode_barang,' . $barang->id,
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_id' => 'required'
        ]);

        $barang->update($request->all());
        return redirect()->route('barangs.index');
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barangs.show', compact('barang'));
    }


    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barangs.index');
    }
}
