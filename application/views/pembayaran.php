<div class="container-fluid">

    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <button class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ",", ".");

                ?>
            </button>
            <br><br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?= base_url('dashboard/proses_pesanan') ?>" method="POST">

                <div class="form-group">

                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda">

                </div>

                <div class="form-group">

                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda">

                </div>


                <div class="form-group">

                    <label for="">No Telepon</label>
                    <input type="text" name="no_telepon" class="form-control" placeholder="Nomor Telepon Anda">

                </div>

                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select name="" id="" class="form-control">
                        <option value="">JNE</option>
                        <option value="">Tiki</option>
                        <option value="">Pos Indonesia</option>
                        <option value="">Gojek</option>
                        <option value="">Grab</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Pilih Bank</label>
                    <select name="" id="" class="form-control">
                        <option value="">BCA - XXXXXX</option>
                        <option value="">BNI - XXXXXX</option>
                        <option value="">BRI - XXXXXX</option>
                        <option value="">MANDIRI - XXXXXX</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
            </form>
        <?php
                } else {
                    echo "<h4>Keranjang Belanja Anda Masih Kosong";
                }
        ?>
        </div>
        <div class="col-md-2">

        </div>

    </div>

</div>