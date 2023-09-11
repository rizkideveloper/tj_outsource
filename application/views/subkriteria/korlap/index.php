<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Subkriteria Kooordinator Lapangan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Halaman_utama'); ?>">Halaman utama</a></li>
            <li class="breadcrumb-item">Data Subkriteria</li>
            <li class="breadcrumb-item active" aria-current="page">Data Subkriteria Kordinator Lapangan</li>
        </ol>
    </div>

    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row ">
                    <button class="btn btn-primary btn-sm mr-1" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus"></i> Tambah Data</button>
                    <a class="btn btn-info btn-sm" href="<?= base_url('Subkriteria_korlap/perbandingan_subkriteria'); ?>"><i class="fa fa-plus"></i> Perbandingan Subkriteria</a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush " id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama Subkriteria</th>
                                <th>Bobot</th>
                                <th>Kriteria</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama Subkriteria</th>
                                <th>Bobot</th>
                                <th>Kriteria</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($subkriteria_korlap as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['kode_subkriteria_korlap']; ?></td>
                                    <td><?= $value['nama_subkriteria_korlap']; ?></td>
                                    <td><?= $value['bobot_subkriteria_korlap']; ?></td>
                                    <td><?= $value['nama_kriteria']; ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_ubah" onclick="tampil_id(<?= $value['id_subkriteria_korlap'] ?>)"><i class="fa fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger btn-sm" onclick="hapus(<?= $value['id_subkriteria_korlap'] ?>)"><i class="fa fa-trash"></i></button>
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

<!-- Modal -->
<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Sub kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="form">
                    <div class="form-group">
                        <label for="kode_subkriteria">Kode</label>
                        <input onkeyup="huruf_besar()" type="text" class="form-control" id="kode_subkriteria">
                        <small class="form-text text-danger" id="kode_subkriteria_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_subkriteria">Nama SubKriteria</label>
                        <input type="text" class="form-control" id="nama_subkriteria">
                        <small class="form-text text-danger" id="nama_subkriteria_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <select id="nama_kriteria" class="select2-single-placeholder form-control">
                            <option value="">Pilih Kriteria</option>
                            <?php foreach ($kriteria as $key => $value) { ?>
                                <option value="<?= $value['id_kriteria']; ?>"><?= $value['nama_kriteria']; ?></option>
                            <?php } ?>
                        </select>
                        <small class="form-text text-danger" id="nama_kriteria_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="bobot_subkriteria">Bobot</label>
                        <input value="0" readonly type="text" class="form-control" id="bobot_subkriteria">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                <button class="btn btn-primary" onclick="tambah()">Tambah</button>
            </div>

        </div>
    </div>
</div>

<!-- Modal ubah-->
<div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Subkriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <input type="hidden" id="id_subkriteria_edt">
                    <div class="form-group">
                        <label for="kode_kriteria">Kode</label>
                        <input readonly type="text" class="form-control" id="kode_subkriteria_edt">
                    </div>
                    <div class="form-group">
                        <label for="nama_kriteria">Nama Subkriteria</label>
                        <input type="text" class="form-control" id="nama_subkriteria_edt">
                        <small class="form-text text-danger" id="nama_subkriteria_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_kriteria_edt">Nama Kriteria</label>
                        <select id="nama_kriteria_edt" class="select2-single-placeholder form-control">
                            <option value="">Pilih Kriteria</option>
                            <?php foreach ($kriteria as $key => $value) { ?>
                                <option value="<?= $value['id_kriteria']; ?>"><?= $value['nama_kriteria']; ?></option>
                            <?php } ?>
                        </select>
                        <small class="form-text text-danger" id="nama_kriteria_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="bobot_subkriteria">Bobot</label>
                        <input readonly type="text" class="form-control" id="bobot_subkriteria_edt">
                        <small class="form-text text-danger" id="bobot_subkriteria_error_edt"></small>
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
    $(function() {
        $('.select2-single-placeholder').select2({
            placeholder: "Pilih Kriteria",
            allowClear: true
        });

    })

    function huruf_besar() {
        kode_subkriteria = $('#kode_subkriteria').val()
        $('#kode_subkriteria').val(kode_subkriteria.toUpperCase())
    }

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
        kode_subkriteria = $('#kode_subkriteria').val()
        nama_subkriteria = $('#nama_subkriteria').val()
        nama_kriteria = $('#nama_kriteria').val()
        bobot_subkriteria = $('#bobot_subkriteria').val()

        $.ajax({
            method: 'POST',
            url: '<?= base_url('Subkriteria_korlap/tambah')  ?>',
            data: {
                kode_subkriteria: kode_subkriteria,
                nama_subkriteria: nama_subkriteria,
                nama_kriteria: nama_kriteria,
                bobot_subkriteria: bobot_subkriteria
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#kode_subkriteria_error').html(data.kode_subkriteria)
                    $('#nama_subkriteria_error').html(data.nama_subkriteria)
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
            url: '<?= base_url('Subkriteria_korlap/tampil_id')  ?>',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'berhasil') {
                    $('#id_subkriteria_edt').val(data.id_subkriteria_korlap)
                    $('#kode_subkriteria_edt').val(data.kode_subkriteria_korlap)
                    $('#nama_subkriteria_edt').val(data.nama_subkriteria_korlap)
                    id_kriteria = data.nama_kriteria
                    $('#bobot_subkriteria_edt').val(data.bobot_subkriteria_korlap)

                    var baris_pr = '<option value=""></option>';
                    for (let i = 0; i < data.kriteria.length; i++) {
                        const element = data.kriteria[i];
                        if (id_kriteria == element.id_kriteria) {
                            baris_pr += '<option value="' + element.id_kriteria + '" selected>' + element.nama_kriteria + '</option>';
                        } else {
                            baris_pr += '<option value="' + element.id_kriteria + '">' + element.nama_kriteria + '</option>';
                        }

                    }
                    $('#nama_kriteria_edt').html(baris_pr);
                }
            }

        })
    }

    function ubah() {
        id_subkriteria = $('#id_subkriteria_edt').val()
        nama_subkriteria = $('#nama_subkriteria_edt').val()
        nama_kriteria = $('#nama_kriteria_edt').val()

        $.ajax({
            method: 'POST',
            url: '<?= base_url('Subkriteria_korlap/ubah')  ?>',
            data: {
                id_subkriteria: id_subkriteria,
                nama_subkriteria: nama_subkriteria,
                nama_kriteria: nama_kriteria
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#nama_subkriteria_error_edt').html(data.nama_subkriteria)
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
                    url: '<?= base_url('Subkriteria_korlap/hapus')  ?>',
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