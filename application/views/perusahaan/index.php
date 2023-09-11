<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Perusahaan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Halaman_utama'); ?>">Halaman utama</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Perusahaan</li>
        </ol>
    </div>

    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus"></i> Tambah Data</button>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush " id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nama Perusahaan</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nama Perusahaan</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($perusahaan as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['nama_perusahaan']; ?></td>
                                    <td><?= $value['alamat']; ?></td>
                                    <td><?= $value['email']; ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_ubah" onclick="tampil_id(<?= $value['id_perusahaan'] ?>)"><i class="fa fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger btn-sm" onclick="hapus(<?= $value['id_perusahaan'] ?>)"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!---Container Fluid-->

<!-- Modal Tambah -->
<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Prusahaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <div class="form-group">
                        <label for="nama_perusahaan">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="nama_perusahaan">
                        <small class="form-text text-danger" id="nama_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat">
                        <small class="form-text text-danger" id="alamat_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                        <small class="form-text text-danger" id="email_error"></small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="reset()" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                <button type="button" onclick="tambah()" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal ubah-->
<div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Prusahaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <input type="hidden" id="id_perusahaan_edt">
                    <div class="form-group">
                        <label for="nama_perusahaan">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="nama_perusahaan_edt">
                        <small class="form-text text-danger" id="nama_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat_edt">
                        <small class="form-text text-danger" id="alamat_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email_edt">
                        <small class="form-text text-danger" id="email_error_edt"></small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="reset()" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                <button type="button" onclick="ubah()" class="btn btn-primary">Ubah</button>
            </div>
        </div>
    </div>
</div>

<script>
    function swall($title) {
        Swal.fire({
            icon: 'success',
            title: 'Data Berhasil ' + $title,
            showConfirmButton: false,
            timer: 1500
        }).then((result) => {
            location.reload();
        })

    }

    function reset() {
        $('#form')[0].reset();
    }

    function tambah() {
        nama = $('#nama_perusahaan').val()
        alamat = $('#alamat').val()
        email = $('#email').val()

        $.ajax({
            method: 'POST',
            url: '<?= base_url('Perusahaan/tambah')  ?>',
            data: {
                nama_perusahaan: nama,
                alamat: alamat,
                email: email
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#nama_error').html(data.nama_perusahaan)
                    $('#alamat_error').html(data.alamat)
                    $('#email_error').html(data.email)
                } else
                if (data.status == 'berhasil') {
                    $('#modal_tambah').modal('hide')
                    swall('Ditambahkan')
                }
            }

        })
    }

    function tampil_id(id) {
        $.ajax({
            method: 'POST',
            url: '<?= base_url('Perusahaan/tampil_id')  ?>',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'berhasil') {
                    $('#id_perusahaan_edt').val(data.id_perusahaan)
                    $('#nama_perusahaan_edt').val(data.nama_perusahaan)
                    $('#alamat_edt').val(data.alamat)
                    $('#email_edt').val(data.email)
                }
            }

        })
    }

    function ubah() {
        id = $('#id_perusahaan_edt').val()
        nama_perusahaan = $('#nama_perusahaan_edt').val()
        alamat = $('#alamat_edt').val()
        email = $('#email_edt').val()

        $.ajax({
            method: 'POST',
            url: '<?= base_url('Perusahaan/ubah')  ?>',
            data: {
                id: id,
                nama_perusahaan: nama_perusahaan,
                alamat: alamat,
                email: email
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#nama_error_edt').html(data.nama_perusahaan)
                    $('#alamat_error_edt').html(data.alamat)
                    $('#email_error_edt').html(data.email)
                } else
                if (data.status == 'berhasil') {
                    $('#modal_ubah').modal('hide')
                    swall('Diubah')
                }
            }

        })

    }

    function hapus(id) {
        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "ingin menghapus data ini",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: 'POST',
                    url: '<?= base_url('Perusahaan/hapus')  ?>',
                    data: {
                        id: id,
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data == 'berhasil') {
                            swall('Dihapus')
                        }
                    }

                })
            }
        })
    }
</script>