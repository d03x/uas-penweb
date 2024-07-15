<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kategori.index', [
            "data" => Kategori::paginate(5
            )
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => ["required"]
        ],[
            'required' => "Nama Kategori tidak boleh kosong"
        ]);
        Kategori::create($request->only('nama'));
        return redirect(route('kategori'))->withErrors([
            'success' => "Data berhasil di tamnbahkan"
        ]);
    }

  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        if($kategori->update($request->only('nama'))) {
            return redirect()->back()->withErrors([
                'success' => "Data berhasil di edit"
            ]);
        } else {
            return redirect()->back()->withErrors([
                'error' => "Data berhasil edit
                 di hapus"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        if($kategori->delete()) {
            return redirect()->back()->withErrors([
                'success' => "Data berhasil di hapus"
            ]);
        } else {
            return redirect()->back()->withErrors([
                'error' => "Data gagal
                 di hapus"
            ]);
        }
    }
}
