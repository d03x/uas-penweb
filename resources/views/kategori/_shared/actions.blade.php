<!-- 
BUTTON DELETE DATA
-->
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
data-bs-target="#modal{{ $item->id }}delete">
Hapus
</button>

<!-- Modal -->
<div class="modal fade" id="modal{{ $item->id }}delete" tabindex="-1"
aria-labelledby="modal{{ $item->id }}deleteLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="modal{{ $item->id }}deleteLabel">
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
            <form action="{{ route('kategori.destroy', $item->id) }}"
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
<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
data-bs-target="#editDatamodal{{ $item->id }}">
Edit
</button>

<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" id="editDatamodal{{ $item->id }}" tabindex="-1"
aria-labelledby="editDatamodal{{ $item->id }}Label" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="editDatamodal{{ $item->id }}Label">Edit
                Kategori</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('kategori.update', $item->id) }}"
                method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama"
                        value="{{ $item->nama }}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Edit</button>
            </form>
        </div>
        
    </div>
</div>
</div>