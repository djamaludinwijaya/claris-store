<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">

            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('uploads/') . $brg->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?= $brg->nama_brg; ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?= $brg->keterangan; ?></strong></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $brg->kategori; ?></strong></td>
                            </tr>

                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $brg->stok; ?></strong></td>
                            </tr>


                            <tr>
                                <td>Harga</td>
                                <td><strong><button class="btn btn-success">Rp. <?= number_format($brg->harga, 0, ",", "."); ?></button></strong></td>
                            </tr>
                        </table>
                        <a href="<?= base_url('dashboard/tambah_keranjang/') . $brg->id_brg ?>" class="btn btn-sm btn-primary">Tambah Keranjang</a>

                        <a href="<?= base_url('dashboard') ?>" class="btn btn-sm btn-warning">Kembali</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

</div>