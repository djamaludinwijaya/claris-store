<!-- Begin Page Content -->
<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/banner-claris-1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/banner-claris-2.jpg') ?>" class="d-block w-100" alt="...">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="row text-center mt-4">
        <?php foreach ($kategori_produk as $kp) : ?>
            <div class="col-sm-3">
                <div class="card h-100 mb-3" style="width: 15rem;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="<?= base_url("uploads/") . $kp->gambar ?>" class="card-img-top embed-responsive-item">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?= $kp->nama_brg; ?></h5>

                        <span class="badge badge-success mb-3">Rp. <?= number_format($kp->harga, 0, ",", "."); ?></span>
                        <a href="<?= base_url('dashboard/tambah_keranjang/') . $kp->id_brg ?>" class="btn btn-sm btn-primary">Tambah Keranjang</a>
                        <a href="<?= base_url('dashboard/detail/') . $kp->id_brg ?>" class="btn btn-sm btn-success">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
</div>