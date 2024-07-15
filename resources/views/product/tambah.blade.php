@extends('layouts.admin-layout', [
    'pageName' => 'Tambah Produk',
])

@section('main')
    <div class="card card-secondary">
        <div class="card-header">
            <div class="card-title">Tambah Data</div>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-3">

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga">
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="text" class="form-control" name="stok">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori_id" id="" class="form-control">
                                <option value="">Kondom</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" id="" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
