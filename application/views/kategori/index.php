<div class="container-fluid">

    <h4>Data Kategori</h4>

    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah_kategori">Tambah Kategori</button>


    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($kategori as $kt) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $kt->nama_kategori ?></td>
                <td><button class="modal_edit_kategori btn btn-sm btn-success mr-4" data-toggle="modal" data-target="#edit_kategori" data-id="<?= $kt->id_kategori ?>">
                        <i class=" fas fa-edit"></i></button>
                    <a href="<?= base_url('admin/data_kategori/hapus_kategori/') . $kt->id_kategori ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin data dihapus?')">
                        <i class="fas fa-trash"></i></a>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>


</div>


<!-- Modal Tambah Kategori -->
<div class="modal fade" id="tambah_kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>/admin/Data_kategori/tambah_aksi" method="POST">

                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Kategori -->
<div class="modal fade" id="edit_kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Edit Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>/admin/data_kategori/update_aksi" method="POST">
                    <input type="hidden" id="id_kategori" name="id_kategori">
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" id="nama_kategori">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>