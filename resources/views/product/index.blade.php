@extends('layouts.admin-layout', [
    'pageName' => 'Products',
])

@section('main')
@error('success')
    <x-alert type="success">{{ $message }}</x-alert>
@enderror
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
                                <th scope="col">Kode Produk</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Warna</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->kode_produk ?? null ? $item->kode_produk : '-' }}</td>
                                <td>{{ $item->nama  }}</td>
                                
                                <td>{{ $item->kategori->nama  }}</td>
                                <td>Rp.{{ number_format($item->harga,2,',','.') }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->warna }}</td>
                               
                                <td width="200px">
                                   @include('product._shared.actions')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $data->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
