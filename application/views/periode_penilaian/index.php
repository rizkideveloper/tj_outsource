<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Periode Penilaian</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Halaman_utama'); ?>">Halaman utama</a></li>
            <li class="breadcrumb-item active" aria-current="page">Periode Penilaian</li>
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
                                <th>Periode Bulan</th>
                                <th>Nama Perusahaan</th>
                                <th>Form Dibuka</th>
                                <th>Form Ditutup</th>
                                <th>Aktif</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Periode Bulan</th>
                                <th>Nama Perusahaan</th>
                                <th>Form Dibuka</th>
                                <th>Form Ditutup</th>
                                <th>Aktif</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>

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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Periode Penilaian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <div class="form-group">
                        <label for="periode">Periode Bulan</label>
                        <input type="date" class="form-control" id="periode">
                        <small class="form-text text-danger" id="periode_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pengguna</label>
                        <input type="text" class="form-control" id="nama_pengguna">
                        <small class="form-text text-danger" id="nama_pengguna_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select class="form-control" id="jabatan">
                            <option value="">Pilih Jabatan</option>
                            <?php foreach ($jabatan as $key => $value) { ?>
                                <option value="<?= $value['id_jabatan']; ?>"><?= $value['nama_jabatan']; ?></option>
                            <?php } ?>
                        </select>
                        <small class="form-text text-danger" id="jabatan_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Perusahaan</label>
                        <select class="select2-single-placeholder form-control" id="perusahaan">
                            <option value=""></option>
                            <?php foreach ($perusahaan as $key => $value) { ?>
                                <option value="<?= $value['id_perusahaan']; ?>"><?= $value['nama_perusahaan']; ?></option>
                            <?php  } ?>
                        </select>
                        <small class="form-text text-danger" id="perusahaan_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="katasandi">Kata Sandi</label>
                        <input type="password" class="form-control" id="katasandi">
                        <small class="form-text text-danger" id="katasandi_error"></small>
                    </div>
                    <div class="form-group">
                        <label for="konf_katasandi">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="konf_katasandi">
                        <small class="form-text text-danger" id="konf_katasandi_error"></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="reset()" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                <button type="button" onclick="tambah()" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal ubah -->
<div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form">
                    <input type="hidden" id="id_pengguna_edt">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input readonly type="text" maxlength="8" class="form-control" id="nik_edt">
                        <small class="form-text text-danger" id="nik_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pengguna</label>
                        <input type="text" class="form-control" id="nama_pengguna_edt">
                        <small class="form-text text-danger" id="nama_pengguna_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Jabatan</label>
                        <select class="form-control" id="jabatan_edt">

                        </select>
                        <small class="form-text text-danger" id="jabatan_error_edt"></small>
                    </div>
                    <div class="form-group">
                        <label for="perusahaan">Perusahaan</label>
                        <select class="select2-single-placeholder form-control" id="perusahaan_edt">

                        </select>
                        <small class="form-text text-danger" id="perusahaan_error_edt"></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" onclick="reset()" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                <button type="button" onclick="ubah()" class="btn btn-primary">Ubah</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(function() {
        // Select2 Single  with Placeholder
        $('.select2-single-placeholder').select2({
            placeholder: "Pilih Perusahaan",
            allowClear: true,
            // dropdownParent: $("#modal_tambah")
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

    function tambah() {
        nik = $('#nik').val()
        nama_pengguna = $('#nama_pengguna').val()
        jabatan = $('#jabatan').val()
        perusahaan = $('#perusahaan').val()
        katasandi = $('#katasandi').val()
        konf_katasandi = $('#konf_katasandi').val()


        $.ajax({
            method: 'POST',
            url: '<?= base_url('Pengguna/tambah')  ?>',
            data: {
                nik: nik,
                nama_pengguna: nama_pengguna,
                nama_jabatan: jabatan,
                nama_perusahaan: perusahaan,
                katasandi: katasandi,
                konf_katasandi: konf_katasandi
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#nik_error').html(data.nik)
                    $('#nama_pengguna_error').html(data.nama_pengguna)
                    $('#jabatan_error').html(data.nama_jabatan)
                    $('#perusahaan_error').html(data.nama_perusahaan)
                    $('#katasandi_error').html(data.katasandi)
                    $('#konf_katasandi_error').html(data.konf_katasandi)
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
            url: '<?= base_url('Pengguna/tampil_id')  ?>',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'berhasil') {
                    $('#id_pengguna_edt').val(data.id_pengguna)
                    $('#nik_edt').val(data.nik)
                    $('#nama_pengguna_edt').val(data.nama_pengguna)
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

                    id_jabatan = data.id_jabatan
                    var baris_j = '<option value="">Pilih Jabatan</option>';
                    for (let i = 0; i < data.jabatan.length; i++) {
                        const element = data.jabatan[i];
                        if (id_jabatan == element.id_jabatan) {
                            baris_j += '<option value="' + element.id_jabatan + '" selected>' + element.nama_jabatan + '</option>';
                        } else {
                            baris_j += '<option value="' + element.id_jabatan + '">' + element.nama_jabatan + '</option>';
                        }

                    }

                    $('#jabatan_edt').html(baris_j);



                }
            }

        })
    }

    function ubah() {
        id = $('#id_pengguna_edt').val()
        nik = $('#nik_edt').val()
        nama_pengguna = $('#nama_pengguna_edt').val()
        nama_jabatan = $('#jabatan_edt').val()
        nama_perusahaan = $('#perusahaan_edt').val()
        console.log(id, nik, nama_pengguna, nama_perusahaan)
        $.ajax({
            method: 'POST',
            url: '<?= base_url('Pengguna/ubah')  ?>',
            data: {
                id: id,
                nik: nik,
                nama_pengguna: nama_pengguna,
                nama_jabatan: nama_jabatan,
                nama_perusahaan: nama_perusahaan
            },
            dataType: 'json',
            success: function(data) {
                if (data.status == 'gagal') {
                    $('#nik_error_edt').html(data.nik)
                    $('#nama_pengguna_error_edt').html(data.nama_pengguna)
                    $('#jabatan_error_edt').html(data.nama_jabatan)
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
                    url: '<?= base_url('Pengguna/hapus')  ?>',
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