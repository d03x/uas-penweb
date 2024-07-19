@extends('layouts.admin-layout', [
    'pageName' => 'Edit Produk',
])

@section('main')

<div class="card card-secondary">
    <div class="card-header">
        <div class="card-title">Edit Data</div>
    </div>
    <div class="card-body">
        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-3">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $product->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $product->harga) }}">
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="warna" class="form-label">Warna</label>
                    <input type="text" class="form-control @error('warna') is-invalid @enderror" name="warna" value="{{ old('warna',$product->warna) }}">
                    @error('warna')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok', $product->stok) }}">
                        @error('stok')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori_id" id="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror">
                            <option value="">Pilih Kategori</option>
                            @foreach ($kategori_data as $item)
                                <option value="{{ $item->id }}" {{ old('kategori_id', $product->kategori_id) == $item->id ? 'selected' : '' }}>{{ $product->nama }}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror">
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($product->gambar)
                    <img src="{{ Storage::url($product->gambar) }}" alt="Gambar Produk" width="100" class="mt-2 img-thumbnail">
                @endif
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
