@extends('layouts.admin-layout', [
    'pageName' => 'Tambah Kategori',
])

@section('main')
    <div class="card card-sm card-secondary col-md-6">
        <div class="card-header">
            <div class="card-title">Tambah Data</div>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori.tambah.store') }}" method="POST" class="d-flex flex-column gap-3">
                @method("POST")
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input placeholder="Nama kategori" type="text" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" name="nama">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('kategori') }}" type="submit" class="btn btn-warning">Batal</a>
                </div>

            </form>
        </div>
    </div>
@endsection
