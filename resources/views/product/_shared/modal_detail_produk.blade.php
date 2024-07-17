<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $item->id }}-view">
    View
</button>
<div class="modal fade" data-bs-backdrop="static" id="modal{{ $item->id }}-view" tabindex="-1"
    aria-labelledby="modal{{ $item->id }}-viewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal{{ $item->id }}-viewLabel">
                    Detail Produk
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('storage/'.$item->gambar) }}" width="50%" class="img-thumbnail" alt="Product Image"
                            class="product-img">
                    </div>
                    <div class="col-md-12">
                        <h2>{{ $item->nama }}</h2>
                        <p class="text-muted">Category: {{ $item->kategori->nama }}</p>
                        <h2 class="text-success">Rp.{{ number_format($item->harga, 2,',','.') }}</h2>
                        <p>
                            {{ $item->deskripsi }}
                        </p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Stok:</strong> {{ $item->stok }}</li>
                            <li class="list-group-item"><strong>Kode Produk:</strong> {{ $item->kode_produk }}</li>
                            <li class="list-group-item"><strong>Warna:</strong> {{ $item->warna }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
