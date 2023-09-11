<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Kriteria</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Halaman_utama'); ?>">Halaman utama</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
        </ol>
    </div>

    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row">
                    <button class="btn btn-primary btn-sm mr-1" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus"></i> Tambah Data</button>
                    <a class="btn btn-info btn-sm" href="<?= base_url('Kriteria/perbandingan_kriteria'); ?>"><i class="fa fa-plus"></i> Perbandingan Kriteria</a>
                </div>

                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush " id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama Kriteria</th>
                                <th>Bobot</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kriteria as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['kode_kriteria']; ?></td>
                                    <td><?= $value['nama_kriteria']; ?></td>
                                    <td><?= $value['bobot_kriteria']; ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_ubah" onclick="tampil_id(<?= $value['id_kriteria'] ?>)"><i class="fa fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger btn-sm" onclick="hapus(<?= $value['id_kriteria'] ?>)"><i class="fa fa-trash"></i></button>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode_riteria">Kode Kriteria</label>
                        <input onkeyup="huruf_besar()" type="text" class="form-control" id="kode_kriteria">
                        <small class="form-text text-danger" id="kode_kriteria_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <input type="text" class="form-control" id="nama_kriteria">
                        <small class="form-text text-danger" id="nama_kriteria_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot</label>
                        <input type="text" value="0" readonly class="form-control" id="bobot_kriteria">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal" onclick="reset()">Tutup</button>
                    <button type="button" class="btn btn-primary" onclick="tambah()">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal ubah-->
<div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <input type="hidden" id="id_kriteria_edt">
                    <div class="form-group">
                        <label for="kode_kriteria">Kode</label>
                        <input readonly type="text" class="form-control" id="kode_kriteria_edt">
                    </div>
                    <div class="form-group">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <input type="text" class="form-control" id="nama_kriteria_edt">
                        <small class="form-text text-danger" id="nama_kriteria_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="bobot_kriteria">Bobot</label>
                        <input readonly type="text" class="form-control" id="bobot_kriteria_edt">

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

    function huruf_besar() {
        kode_kriteria = $('#kode_kriteria').val()
        $('#kode_kriteria').val(kode_kriteria.toUpperCase())
    }

    function reset() {
        $('#form')[0].reset();
    }

    function tambah() {
        kode_kriteria = $('#kode_kriteria').val()
        nama_kriteria = $('#nama_kriteria').val()
        bobot_kriteria = $('#bobot_kriteria').val()

        $.ajax({
            method: 'POST',
            url: '<?= base_url('kriteria/tambah')  ?>',
            data: {
                kode_kriteria: kode_kriteria,
                nama_kriteria: nama_kriteria,
                bobot_kriteria: bobot_kriteria
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#kode_kriteria_error').html(data.kode_kriteria)
                    $('#nama_kriteria_error').html(data.nama_kriteria)
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
            url: '<?= base_url('Kriteria/tampil_id')  ?>',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'berhasil') {
                    $('#id_kriteria_edt').val(data.id_kriteria)
                    $('#kode_kriteria_edt').val(data.kode_kriteria)
                    $('#nama_kriteria_edt').val(data.nama_kriteria)
                    $('#bobot_kriteria_edt').val(data.bobot_kriteria)
                }
            }

        })
    }

    function ubah() {
        id = $('#id_kriteria_edt').val()
        nama_kriteria = $('#nama_kriteria_edt').val()

        $.ajax({
            method: 'POST',
            url: '<?= base_url('Kriteria/ubah')  ?>',
            data: {
                id: id,
                nama_kriteria: nama_kriteria
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#nama_kriteria_error_edt').html(data.nama_kriteria)
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
                    url: '<?= base_url('Kriteria/hapus')  ?>',
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