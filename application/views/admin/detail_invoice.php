<div class="container-fluid">

    <h4>Detail Invoice <button class="btn btn-sm btn-success">No . Invoice <?= $invoice->id_invoice ?></button></h4>


    <table class="table table-bordered table-hover table-striped">

        <tr>
            <th>ID BARANG</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH PESANAN</th>
            <th>HARGA SATUAN</th>
            <th>SUB-TOTAL</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>
            <tr>
                <td><?= $psn->id_barang ?></td>
                <td><?= $psn->nama_brg ?></td>
                <td><?= $psn->jumlah ?></td>
                <td align="right"><?= number_format($psn->harga, 0, ",", ".")  ?></td>
                <td align="right"><?= number_format($subtotal, 0, ",", ".") ?></td>

            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right"><?= number_format($total, 0, ",", ".") ?></td>
        </tr>

    </table>

    <a href="<?= base_url('admin/invoice') ?>" class="btn btn-sm btn-primary">Kembali</a>

</div>