<!-- 
BUTTON DELETE DATA
-->
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
data-bs-target="#modal-put-id-delete">
Hapus
</button>

<!-- Modal -->
<div class="modal fade" id="modal-put-id-delete" tabindex="-1"
aria-labelledby="modal-put-id-deleteLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="modal-put-id-deleteLabel">
                Konfirmasi
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah anda yakin ingin menghapus?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn  btn-secondary"
                data-bs-dismiss="modal">Jangan Dulu</button>
            <form action="{{ route('product.destroy', 1) }}"
                method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn  btn-danger">Ya!
                    Lanjutkan</button>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Button edit data -->

<a href="{{ route('product.edit',$item->id) }}" class="btn btn-warning">Edit</a>
    

@include('product._shared.modal_detail_produk')