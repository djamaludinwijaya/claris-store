<!DOCTYPE html>
<html lang="en">

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Form Login</h1>
                                    </div>
                                    <?= $this->session->flashdata('pesan'); ?>
                                    <form method="POST" action="<?= base_url('auth/login') ?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Masukkan Username Anda" name="username">
                                            <?= form_error(
                                                'username',
                                                '<div class="text-danger small ml-2">',
                                                '</div>'
                                            ); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" placeholder="Masukkan Password Anda" name="password">
                                            <?= form_error(
                                                'password',
                                                '<div class="text-danger small ml-2">',
                                                '</div>'
                                            ); ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary form-control">Login</button>

                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('registrasi') ?>">Belum Punya Akun? Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url("assets") ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url("assets") ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url("assets") ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url("assets") ?>/js/sb-admin-2.min.js"></script>

</body>

</html>