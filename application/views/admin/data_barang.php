<div class="container-fluid">

    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>NO</th>
                <th>NAMA BARANG</th>
                <th>KETERANGAN</th>
                <th>KATEGORI</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th colspan="3">Aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach ($barang as $brg) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $brg->nama_brg ?></td>
                    <td><?= $brg->keterangan ?></td>
                    <td><?= $brg->kategori ?></td>
                    <td><?= number_format($brg->harga, 0, ",", ".") ?></td>
                    <td><?= $brg->stok ?></td>
                    <td>
                        <button data-id="<?= $brg->id_brg ?>" class="btn btn-success btn-sm modal_detail_barang" data-toggle="modal" data-target="#detail_barang"><i class=" fas fa-search-plus"></i></button>
                    </td>
                    <td>
                        <?= anchor("admin/data_barang/edit/" . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>



<!-- Modal Tambah Barang --> -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>/admin/data_barang/tambah_aksi" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="" id="" class="form-control" name="kategori">
                            <option value="elektronik">Elektronik</option>
                            <option value="pakaian pria">Pakaian Pria</option>
                            <option value="pakaian wanita">Pakaian Wanita</option>
                            <option value="pakaian anak anak">Pakaian Anak-anak</option>
                            <option value="pelaratan olahraga">Peralatan Olahraga</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control">
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


<!-- Modal Detail Barang -->
<div class="modal fade" id="detail_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="modal_detail_gambar" class="card-img-top">
                <table class="table">
                    <tr>
                        <td>Nama Produk</td>
                        <td id="modal_detail_nama"></td>
                    </tr>

                    <tr>
                        <td>Keterangan</td>
                        <td id="modal_detail_keterangan"></td>
                    </tr>

                    <tr>
                        <td>Kategori</td>
                        <td id="modal_detail_kategori"></td>
                    </tr>

                    <tr>
                        <td>Stok</td>
                        <td id="modal_detail_stok"></td>
                    </tr>

                    <tr>
                        <td>Harga</td>
                        <td id="modal_detail_harga"></td>
                    </tr>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>