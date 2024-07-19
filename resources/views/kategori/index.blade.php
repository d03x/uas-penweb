@extends('layouts.admin-layout', [
    'pageName' => 'Kategori',
])

@section('main')
    <a href="{{ route('kategori.tambah') }}" class="btn mb-2 btn-secondary">
        <i class="bi bi-plus-circle"></i>
        <span>Tambah</span>
    </a>
    @error('success')
        <x-alert type="warning">{{ $message }}</x-alert>
    @enderror
    @error('error')
        <x-alert type="danger">{{ $message }}</x-alert>
    @enderror
    <div class="card card-secondary">
        <div class="card-header">
            Data Kategori
        </div>
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Total Product</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $data->firstItem() + $loop->iteration - 1 }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->product()->count() }}</td>
                                <td width="140px">
                                    @include('kategori._shared.actions')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                {{ $data->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
