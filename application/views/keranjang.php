<div class="container-fluid">

    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">

        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td align="right">Rp. <?= number_format($items['price'], 0, ",", "."); ?></td>
                <td align="right">Rp. <?= number_format($items['subtotal'], 0, ",", "."); ?></td>
                <td><a href="<?= base_url('dashboard/hapus_per_item/') . $items['rowid'] ?>"><button class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin Keranjang ini dihapus?')"><i class="fas fa-trash"></i></button></a></td>
            </tr>

        <?php endforeach; ?>
        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?= number_format($this->cart->total(), 0, ",", "."); ?></td>
        </tr>

    </table>

    <div align='right'>
        <a href="<?= base_url('dashboard/hapus_keranjang') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin semua keranjang ini dihapus?')">Hapus Semua Keranjang</a>
        <a href="<?= base_url('dashboard') ?>" class="btn btn-sm btn-primary">Lanjutkan Belanja</a>
        <a href="<?= base_url('dashboard/pembayaran') ?>" class="btn btn-sm btn-success">Pembayaran</a>
    </div>

</div>