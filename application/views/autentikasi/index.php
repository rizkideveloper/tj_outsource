<!-- Login Content -->
<div class="container-login">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card shadow-sm my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">PT. Trengginas Jaya</h1>
                                </div>
                                <p class="text-center">Silahkan Masuk</p>
                                <?= $this->session->flashdata('pesan'); ?>
                                <form method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nik" placeholder="masukkan nik....">
                                        <small class="form-text text-danger"> <?= form_error('nik'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="katasandi" placeholder="masukkan kata sandi....">
                                        <small class="form-text text-danger"> <?= form_error('katasandi'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block">Masuk</button>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <a class="font-weight-bold small" href="<?= base_url('Autentikasi/lupa_katasandi'); ?>">Lupa Kata Sandi ?</a>
                                </div>
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Content -->