<div class="container-fluid">

    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pesan</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>

            <tr>
                <td><?= $inv->id_invoice ?></td>
                <td><?= $inv->nama ?></td>
                <td><?= $inv->alamat ?></td>
                <td><?= $inv->tgl_pesan ?></td>
                <td><?= $inv->batas_bayar ?></td>
                <td><a href="<?= base_url('admin/invoice/detail/') . $inv->id_invoice ?>" class="btn btn-sm btn-primary">Detail</a></td>

            </tr>
        <?php endforeach; ?>

    </table>

</div>