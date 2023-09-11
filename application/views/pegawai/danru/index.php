<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Komandan Regu</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Halaman_utama'); ?>">Halaman utama</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Komandan Regu</li>
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
                                <th>Nama Danru</th>
                                <th>NIK</th>
                                <th>Umur</th>
                                <th>Jabatan</th>
                                <th>Nama Korlap</th>
                                <th>Perusahaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nama Danru</th>
                                <th>NIK</th>
                                <th>Umur</th>
                                <th>Jabatan</th>
                                <th>Nama Korlap</th>
                                <th>Perusahaan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($danru as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['nama_danru']; ?></td>
                                    <td><?= $value['nik']; ?></td>
                                    <td><?= $value['umur']; ?></td>
                                    <td><?= $value['nama_jabatan']; ?></td>
                                    <td><?= $value['nama_korlap']; ?></td>
                                    <td><?= $value['nama_perusahaan']; ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal_ubah" onclick="tampil_id(<?= $value['id_danru'] ?>)"><i class="fa fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger btn-sm" onclick="hapus(<?= $value['id_danru'] ?>)"><i class="fa fa-trash"></i></button>
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

<!-- Modal tambah -->
<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Danru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" maxlength="8" class="form-control" id="nik">
                        <small class="form-text text-danger" id="nik_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_danru">Nama Danru</label>
                        <input type="text" class="form-control" id="nama_danru">
                        <small class="form-text text-danger" id="nama_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" maxlength="2" class="form-control" id="umur">
                        <small class="form-text text-danger" id="umur_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Perusahaan</label>
                        <select class="select2-single-placeholder form-control" onchange="pilih_perusahaan()" id="perusahaan">
                            <option value=""></option>
                            <?php foreach ($perusahaan as $key => $value) { ?>
                                <option value="<?= $value['id_perusahaan']; ?>"><?= $value['nama_perusahaan']; ?></option>
                            <?php  } ?>
                        </select>
                        <small class="form-text text-danger" id="perusahaan_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_korlap">Nama Korlap</label>
                        <input type="hidden" id="id_korlap">
                        <input readonly type="text" class="form-control" id="nama_korlap">
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

<!-- Modal ubah -->
<div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Danru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <input type="hidden" id="id_danru_edt">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input readonly type="text" maxlength="8" class="form-control" id="nik_edt">
                        <small class="form-text text-danger" id="nik_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_danru">Nama Danru</label>
                        <input type="text" class="form-control" id="nama_danru_edt">
                        <small class="form-text text-danger" id="nama_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" maxlength="2" class="form-control" id="umur_edt">
                        <small class="form-text text-danger" id="umur_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Perusahaan</label>
                        <select class="select2-single-placeholder form-control" id="perusahaan_edt" onchange="pilih_perusahaan_edt()">

                        </select>
                        <small class="form-text text-danger" id="perusahaan_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_korlap">Nama Korlap</label>
                        <input type="hidden" id="id_korlap_edt">
                        <input readonly type="text" class="form-control" id="nama_korlap_edt">
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
            placeholder: "Pilih Perusahaan",
            allowClear: true
        });
    })

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

    function pilih_perusahaan() {
        id_perusahaan = $('#perusahaan').val()
        console.log(id_perusahaan)
        $.ajax({
            method: 'POST',
            url: '<?= base_url('Danru/tampil_korlap')  ?>',
            data: {
                id_perusahaan: id_perusahaan
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'berhasil') {
                    $('#id_korlap').val(data.id_korlap)
                    $('#nama_korlap').val(data.nama_korlap)
                }
            }

        })
    }

    function pilih_perusahaan_edt() {
        id_perusahaan = $('#perusahaan_edt').val()
        console.log(id_perusahaan)
        $.ajax({
            method: 'POST',
            url: '<?= base_url('Danru/tampil_korlap')  ?>',
            data: {
                id_perusahaan: id_perusahaan
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'berhasil') {
                    $('#id_korlap_edt').val(data.id_korlap)
                    $('#nama_korlap_edt').val(data.nama_korlap)
                }
            }

        })
    }

    function tambah() {
        nik = $('#nik').val()
        id_korlap = $('#id_korlap').val()
        nama_danru = $('#nama_danru').val()
        umur = $('#umur').val()
        perusahaan = $('#perusahaan').val()

        $.ajax({
            method: 'POST',
            url: '<?= base_url('Danru/tambah')  ?>',
            data: {
                id_korlap: id_korlap,
                nik: nik,
                nama_danru: nama_danru,
                umur: umur,
                nama_perusahaan: perusahaan
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#nik_error').html(data.nik)
                    $('#nama_error').html(data.nama_danru)
                    $('#umur_error').html(data.umur)
                    $('#perusahaan_error').html(data.nama_perusahaan)
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
            url: '<?= base_url('Danru/tampil_id')  ?>',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'berhasil') {
                    $('#id_danru_edt').val(data.id_danru)
                    $('#id_korlap_edt').val(data.id_korlap)
                    $('#nik_edt').val(data.nik)
                    $('#nama_danru_edt').val(data.nama_danru)
                    $('#umur_edt').val(data.umur)
                    id_perusahaan = data.id_perusahaan


                    var baris_pr = '<option value=""></option>';
                    for (let i = 0; i < data.perusahaan.length; i++) {
                        const element = data.perusahaan[i];
                        if (id_perusahaan == element.id_perusahaan) {
                            baris_pr += '<option value="' + element.id_perusahaan + '" selected>' + element.nama_perusahaan + '</option>';
                        } else {
                            baris_pr += '<option value="' + element.id_perusahaan + '">' + element.nama_perusahaan + '</option>';
                        }

                    }

                    $('#perusahaan_edt').html(baris_pr);
                    $('#nama_korlap_edt').val(data.nama_korlap)

                }
            }

        })
    }

    function ubah() {
        id_danru = $('#id_danru_edt').val()
        id_korlap = $('#id_korlap_edt').val()
        nama_danru = $('#nama_danru_edt').val()
        umur = $('#umur_edt').val()
        nama_perusahaan = $('#perusahaan_edt').val()
        console.log(id_danru, id_korlap, nama_danru, nama_perusahaan, umur)
        $.ajax({
            method: 'POST',
            url: '<?= base_url('Danru/ubah')  ?>',
            data: {
                id_danru: id_danru,
                id_korlap: id_korlap,
                nama_danru: nama_danru,
                umur: umur,
                nama_perusahaan: nama_perusahaan
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#nama_error_edt').html(data.nama_danru)
                    $('#umur_error_edt').html(data.umur)
                    $('#perusahaan_error_edt').html(data.nama_perusahaan)
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
                    url: '<?= base_url('Danru/hapus')  ?>',
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