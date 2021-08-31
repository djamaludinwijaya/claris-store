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


    <div class="row text-center mt-4 mb-5">
        <?php foreach ($barang as $brg) : ?>
            <div class="col-sm-3">
                <div class="card h-100 mb-3" style="width: 15rem;">
                    <div class="card-header test">
                        <span class="float-left"><?= $brg->nama_kategori; ?></span>

                        <a tabindex="0" id="testpopover" class="btn btn-sm btn-default float-right" role="button" data-toggle="popover" data-trigger="focus" title="<?= $brg->nama_kategori ?>" data-content="<?= $brg->keterangan ?>">Info Produk</a>

                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="<?= base_url("uploads/") . $brg->gambar ?>" class="card-img-top embed-responsive-item">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?= $brg->nama_brg; ?></h5>

                        <span class="badge badge-success mb-3">Rp. <?= number_format($brg->harga, 0, ",", "."); ?></span>
                        <a href="<?= base_url('dashboard/tambah_keranjang/') . $brg->id_brg ?>" class="btn btn-sm btn-primary">Tambah Keranjang</a>
                        <a href="<?= base_url('dashboard/detail/') . $brg->id_brg ?>" class="btn btn-sm btn-success">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>


</div>