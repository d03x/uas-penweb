<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editDatamodal-put-view">
    View
</button>
<div class="modal fade" data-bs-backdrop="static" id="editDatamodal-put-view" tabindex="-1"
    aria-labelledby="editDatamodal-put-viewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editDatamodal-put-viewLabel">
                    Detail Produk
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/credit/american-express.png') }}" alt="Product Image"
                            class="product-img">
                    </div>
                    <div class="col-md-12">
                        <h2>Product Name</h2>
                        <p class="text-muted">Category: Electronics</p>
                        <h2 class="text-success">Rp.299.99</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                            vestibulum vestibulum.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Stok:</strong> Example Brand</li>
                            <li class="list-group-item"><strong>Kode Produk:</strong> XYZ123</li>
                            <li class="list-group-item"><strong>Warna:</strong> Black</li>
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
