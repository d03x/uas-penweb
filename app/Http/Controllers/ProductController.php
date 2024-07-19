<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        return view('product.index',[
            'data' => Product::with('kategori')->paginate(10),
        ]);
    }
    public function tambah(){
        return view('product.tambah', [
            'kategori_data' => Kategori::all(),
        ]);
    }
    public function destroy(Request $request, Product $product) {
        $product->delete();
       return redirect(route('product'))->withErrors([
        'success' => "Data berhasil di hapus!"
       ]);
    }

    public function store(Request $request){
       $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'warna' => "required",
            'stok' => 'required|numeric',
            'deskripsi' => "required",
            'kategori_id' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png|max:2048', // Contoh untuk validasi gambar
        ], [
            "deskripsi.required" => "Kolom harsus di isi",
            'nama.required' => 'Kolom Nama harus diisi.',
            'harga.required' => 'Kolom Harga harus diisi.',
            'harga.numeric' => 'Kolom Harga harus berupa angka.',
            'stok.required' => 'Kolom Stok harus diisi.',
            'stok.numeric' => 'Kolom Stok harus berupa angka.',
            'kategori_id.required' => 'Kolom Kategori harus dipilih.',
            'gambar.required' => 'Kolom Gambar harus diisi.',
            'gambar.image' => 'Kolom Gambar harus berupa file gambar.',
            'gambar.mimes' => 'Kolom Gambar harus berupa file dengan format: :values.',
            'gambar.max' => 'Kolom Gambar tidak boleh lebih dari :max kilobita.',
        ]);
        $validated['gambar'] = null;
        $validated['kode_produk'] = strtoupper(uniqid());
       if($request->hasFile('gambar')) {
        if ( $gambar =  $this->uploadFile($request) )
        {
            $validated['gambar'] = $gambar;
        }
       }

       
       Product::create($validated);

       return redirect(route('product'))->with('success','Data product berhasil di tambahkan');


    }
    public function update(Request $request, Product $product){
        $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'warna' => "required",
            'stok' => 'required|numeric',
            'deskripsi' => "required",
            'kategori_id' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png|max:2048',
        ], [
            "deskripsi.required" => "Kolom Deskripsi harus diisi.",
            'nama.required' => 'Kolom Nama harus diisi.',
            'harga.required' => 'Kolom Harga harus diisi.',
            'harga.numeric' => 'Kolom Harga harus berupa angka.',
            'stok.required' => 'Kolom Stok harus diisi.',
            'stok.numeric' => 'Kolom Stok harus berupa angka.',
            'kategori_id.required' => 'Kolom Kategori harus dipilih.',
            'gambar.image' => 'Kolom Gambar harus berupa file gambar.',
            'gambar.mimes' => 'Kolom Gambar harus berupa file dengan format: :values.',
            'gambar.max' => 'Kolom Gambar tidak boleh lebih dari :max kilobita.',
        ]);
        
        if($request->hasFile('gambar')) {
            if ($gambar = $this->uploadFile($request)) {
                $validated['gambar'] = $gambar;
                // Hapus gambar lama jika ada
                if ($product->gambar) {
                    Storage::disk('public')->delete($product->gambar);
                }
            }
        }
        
        $product->update($validated);
        
        return redirect(route('product'))->with('success', 'Data produk berhasil diperbarui');
    }
    public function edit(Product $product){
        return view('product.edit', [
            'product' => $product,
            'kategori_data' => Kategori::all(),
        ]);
    }
        
    public function uploadFile(Request $request){
        if ($request->has('gambar')) {
            if (!is_dir($storage = storage_path('app\\public\\images'))) {
                Storage::makeDirectory($storage);
            }
            return $request->file('gambar')->store('gambar', 'public');
        }
    }
    
}

