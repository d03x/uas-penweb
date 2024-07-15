@extends('layouts.admin-layout', [
    'pageName' => 'Products',
])

@section('main')
    <div>
        <div class="mb-3">

            <a href="{{ route('product.tambah') }}" class="btn btn-primary">Tambah</a>
        </div>
        <div class="card card-secondary">
            <div class="card-header">
                Data Produk
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead class="table-secondary">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Nama</td>
                                <td>Kategori</td>
                                <td>Harga</td>
                                <td>Rp. 50.000</td>
                                <td>Cover</td>
                                <td width="200px">
                                   @include('product._shared.actions')
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
@endsection
