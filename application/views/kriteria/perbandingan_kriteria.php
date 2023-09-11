<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Perbandingan Kriteria</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Halaman_utama'); ?>">Halaman utama</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('Kriteria'); ?>">Data Kriteria</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perbandingan Kriteria</li>
        </ol>
    </div>

    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="alert alert-light" role="alert">
                Setelah mengisi nilai matrik perbandingan. Silahkan klik tombol <strong>SIMPAN NILAI KRITERIA</strong> untuk mengetahui bobot nilai kriteria
            </div>
            <div class="card mb-4">
                <!-- <div class="card-header py-3 d-flex flex-row">
                    <p>Catatan</p>
                </div> -->


                <div class="table-responsive p-3">
                    <h6 style="font-weight: bold;">Tabel Skala Perbandingan Kriteria</h6>
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: lightgray;">
                                <th scope="col">#</th>
                                <th scope="col">Kehadiran</th>
                                <th scope="col">Fisik</th>
                                <th scope="col">Pengetahuan</th>
                                <th scope="col">Perilaku Kerja</th>
                                <th scope="col">Kepuasan Pelanggan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Kehadiran</th>
                                <td><input type="number" id="k1k1" value="1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="k1f2" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="k1p3" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="k1s4" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="k1u5" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Fisik</th>
                                <td>
                                    <select id="f2k1" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td><input id="f2f2" type="number" value="1" style="width:80px;  background-color:lightgray" readonly></td>
                                <td>
                                    <select id="f2p3" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td><input id="f2s4" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="f2u5" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Pengetahuan</th>
                                <td>
                                    <select id="p3k1" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td><input id="p3f2" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="p3p3" type="number" value="1" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="p3s4" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="p3u5" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Perilaku Kerja</th>
                                <td>
                                    <select id="s4k1" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="s4f2" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="s4p3" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td><input id="s4s4" type="number" value="1" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s4u5" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Kepuasan Pelanggan</th>
                                <td>
                                    <select id="u5k1" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="u5f2" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="u5p3" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="u5s4" style="width:80px;">
                                        <option value=""></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </td>
                                <td><input id="u5u5" type="number" value="1" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick="normalisasi()" class="btn btn-primary mt-3"> SImpan Nilai Kriteria </button>
                </div>
            </div>
            <div class="card mb-4">
                <!-- <div class="card-header py-3 d-flex flex-row">
                    <p>Catatan</p>
                </div> -->


                <div class="table-responsive p-3">
                    <h6 style="font-weight: bold;">Tabel Normalisasi</h6>
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: lightgray;">
                                <th scope="col">#</th>
                                <th scope="col">Kehadiran</th>
                                <th scope="col">Fisik</th>
                                <th scope="col">Pengetahuan</th>
                                <th scope="col">Perilaku Kerja</th>
                                <th scope="col">Kepuasan Pelanggan</th>
                                <th scope="col">Jumlah Baris</th>
                                <th scope="col">Prioritas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Kehadiran</th>
                                <td><input type="number" id="nmk1k1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="nmk1f2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nmk1p3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nmk1s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nmk1u5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbk1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prk1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Fisik</th>
                                <td><input id="nmf2k1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmf2f2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmf2p3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmf2s4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmf2u5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbf2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prf2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Pengetahuan</th>
                                <td><input id="nmp3k1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmp3f2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmp3p3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmp3s4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmp3u5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbp3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prp3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Perilaku Kerja</th>
                                <td><input id="nms4k1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nms4f2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nms4p3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nms4s4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nms4u5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbs4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prs4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Kepuasan Pelanggan</th>
                                <td><input id="nmu5k1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmu5f2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmu5p3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmu5s4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="nmu5u5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbu5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="pru5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-4">
                <!-- <div class="card-header py-3 d-flex flex-row">
                    <p>Catatan</p>
                </div> -->


                <div class="table-responsive p-3">
                    <h6 style="font-weight: bold;">Tabel Mengukur Konsistensi</h6>
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: lightgray;">
                                <th scope="col">#</th>
                                <th scope="col">Kehadiran</th>
                                <th scope="col">Fisik</th>
                                <th scope="col">Pengetahuan</th>
                                <th scope="col">Perilaku Kerja</th>
                                <th scope="col">Kepuasan Pelanggan</th>
                                <th scope="col">Jumlah Baris</th>
                                <th scope="col">Jumlah Baris / n</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Kehadiran</th>
                                <td><input type="number" id="knk1k1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="knk1f2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="knk1p3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="knk1s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="knk1u5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="knjbk1" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="knjbnk1" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Fisik</th>
                                <td><input id="knf2k1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knf2f2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knf2p3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knf2s4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knf2u5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbf2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbnf2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Pengetahuan</th>
                                <td><input id="knp3k1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knp3f2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knp3p3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knp3s4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knp3u5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbp3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbnp3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Perilaku Kerja</th>
                                <td><input id="kns4k1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="kns4f2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="kns4p3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="kns4s4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="kns4u5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbs4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbns4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">Kepuasan Pelanggan</th>
                                <td><input id="knu5k1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knu5f2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knu5p3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knu5s4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knu5u5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbu5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbnu5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr align="center">
                                <th style="background-color: lightgray;" scope="row" colspan="7">Jumlah</th>
                                <td><input id="knjk" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr align="center">
                                <th style="background-color: lightgray;" scope="row" colspan="7">Max</th>
                                <td><input id="knmax" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-4">
                <!-- <div class="card-header py-3 d-flex flex-row">
                    <p>Catatan</p>
                </div> -->


                <div class="table-responsive p-3">
                    <h6 style="font-weight: bold;">Tabel Menghitung Rasio Konsistensi</h6>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="background-color: lightgray;" scope="col">CI</th>
                                <td scope="col"><input type="number" id="ci" style="width:80px; background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="col">IR</th>
                                <td scope="col"><input type="number" id="ir" style="width:80px; background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="col">CR</th>
                                <td scope="col"><input type="number" id="cr" style="width:80px; background-color:lightgray" readonly></td>
                            </tr>

                        </tbody>
                    </table>
                    <p id="kesimpulan"></p>
                    <button hidden class="btn btn-primary simpan_bobot" onclick="simpan()">Simpan Bobot Prioritas</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Container Fluid-->

<script>
    $("#f2k1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#k1f2').val((1 / 2))
        } else
        if (isi == 3) {
            $('#k1f2').val((1 / 3))
        } else
        if (isi == 4) {
            $('#k1f2').val(1 / 4)
        } else
        if (isi == 5) {
            $('#k1f2').val(1 / 5)
        } else
        if (isi == 6) {
            $('#k1f2').val(1 / 6)
        } else
        if (isi == 7) {
            $('#k1f2').val(1 / 7)
        } else
        if (isi == 8) {
            $('#k1f2').val(1 / 8)
        } else
        if (isi == 9) {
            $('#k1f2').val(1 / 9)
        }
    });

    $("#p3k1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#k1p3').val((1 / 2))
        } else
        if (isi == 3) {
            $('#k1p3').val((1 / 3))
        } else
        if (isi == 4) {
            $('#k1p3').val(1 / 4)
        } else
        if (isi == 5) {
            $('#k1p3').val(1 / 5)
        } else
        if (isi == 6) {
            $('#k1p3').val(1 / 6)
        } else
        if (isi == 7) {
            $('#k1p3').val(1 / 7)
        } else
        if (isi == 8) {
            $('#k1p3').val(1 / 8)
        } else
        if (isi == 9) {
            $('#k1p3').val(1 / 9)
        }
    });

    $("#f2p3").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#p3f2').val((1 / 2))
        } else
        if (isi == 3) {
            $('#p3f2').val((1 / 3))
        } else
        if (isi == 4) {
            $('#p3f2').val(1 / 4)
        } else
        if (isi == 5) {
            $('#p3f2').val(1 / 5)
        } else
        if (isi == 6) {
            $('#p3f2').val(1 / 6)
        } else
        if (isi == 7) {
            $('#p3f2').val(1 / 7)
        } else
        if (isi == 8) {
            $('#p3f2').val(1 / 8)
        } else
        if (isi == 9) {
            $('#p3f2').val(1 / 9)
        }
    });

    $("#s4k1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#k1s4').val((1 / 2))
        } else
        if (isi == 3) {
            $('#k1s4').val((1 / 3))
        } else
        if (isi == 4) {
            $('#k1s4').val(1 / 4)
        } else
        if (isi == 5) {
            $('#k1s4').val(1 / 5)
        } else
        if (isi == 6) {
            $('#k1s4').val(1 / 6)
        } else
        if (isi == 7) {
            $('#k1s4').val(1 / 7)
        } else
        if (isi == 8) {
            $('#k1s4').val(1 / 8)
        } else
        if (isi == 9) {
            $('#k1s4').val(1 / 9)
        }
    });

    $("#u5k1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#k1u5').val((1 / 2))
        } else
        if (isi == 3) {
            $('#k1u5').val((1 / 3))
        } else
        if (isi == 4) {
            $('#k1u5').val(1 / 4)
        } else
        if (isi == 5) {
            $('#k1u5').val(1 / 5)
        } else
        if (isi == 6) {
            $('#k1u5').val(1 / 6)
        } else
        if (isi == 7) {
            $('#k1u5').val(1 / 7)
        } else
        if (isi == 8) {
            $('#k1u5').val(1 / 8)
        } else
        if (isi == 9) {
            $('#k1u5').val(1 / 9)
        }
    });

    $("#s4f2").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#f2s4').val((1 / 2))
        } else
        if (isi == 3) {
            $('#f2s4').val((1 / 3))
        } else
        if (isi == 4) {
            $('#f2s4').val(1 / 4)
        } else
        if (isi == 5) {
            $('#f2s4').val(1 / 5)
        } else
        if (isi == 6) {
            $('#f2s4').val(1 / 6)
        } else
        if (isi == 7) {
            $('#f2s4').val(1 / 7)
        } else
        if (isi == 8) {
            $('#f2s4').val(1 / 8)
        } else
        if (isi == 9) {
            $('#f2s4').val(1 / 9)
        }
    });

    $("#u5f2").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#f2u5').val((1 / 2))
        } else
        if (isi == 3) {
            $('#f2u5').val((1 / 3))
        } else
        if (isi == 4) {
            $('#f2u5').val(1 / 4)
        } else
        if (isi == 5) {
            $('#f2u5').val(1 / 5)
        } else
        if (isi == 6) {
            $('#f2u5').val(1 / 6)
        } else
        if (isi == 7) {
            $('#f2u5').val(1 / 7)
        } else
        if (isi == 8) {
            $('#f2u5').val(1 / 8)
        } else
        if (isi == 9) {
            $('#f2u5').val(1 / 9)
        }
    });

    $("#s4p3").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#p3s4').val((1 / 2))
        } else
        if (isi == 3) {
            $('#p3s4').val((1 / 3))
        } else
        if (isi == 4) {
            $('#p3s4').val(1 / 4)
        } else
        if (isi == 5) {
            $('#p3s4').val(1 / 5)
        } else
        if (isi == 6) {
            $('#p3s4').val(1 / 6)
        } else
        if (isi == 7) {
            $('#p3s4').val(1 / 7)
        } else
        if (isi == 8) {
            $('#p3s4').val(1 / 8)
        } else
        if (isi == 9) {
            $('#p3s4').val(1 / 9)
        }
    });

    $("#u5p3").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#p3u5').val((1 / 2))
        } else
        if (isi == 3) {
            $('#p3u5').val((1 / 3))
        } else
        if (isi == 4) {
            $('#p3u5').val(1 / 4)
        } else
        if (isi == 5) {
            $('#p3u5').val(1 / 5)
        } else
        if (isi == 6) {
            $('#p3u5').val(1 / 6)
        } else
        if (isi == 7) {
            $('#p3u5').val(1 / 7)
        } else
        if (isi == 8) {
            $('#p3u5').val(1 / 8)
        } else
        if (isi == 9) {
            $('#p3u5').val(1 / 9)
        }
    });

    $("#u5s4").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s4u5').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s4u5').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s4u5').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s4u5').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s4u5').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s4u5').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s4u5').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s4u5').val(1 / 9)
        }
    });

    function normalisasi() {
        //kolom k1
        k1k1 = parseInt($('#k1k1').val())
        f2k1 = parseInt($('#f2k1').val())
        p3k1 = parseInt($('#p3k1').val())
        s4k1 = parseInt($('#s4k1').val())
        u5k1 = parseInt($('#u5k1').val())

        jk_k1 = k1k1 + f2k1 + p3k1 + s4k1 + u5k1


        nmk1k1 = k1k1 / jk_k1
        nmf2k1 = f2k1 / jk_k1
        nmp3k1 = p3k1 / jk_k1
        nms4k1 = s4k1 / jk_k1
        nmu5k1 = u5k1 / jk_k1

        //console.log(jk_k1, nmk1k1, nmf2k1, nmp3k1, nms4k1, nmu5k1)

        $('#nmk1k1').val(nmk1k1)
        $('#nmf2k1').val(nmf2k1)
        $('#nmp3k1').val(nmp3k1)
        $('#nms4k1').val(nms4k1)
        $('#nmu5k1').val(nmu5k1)

        //kolom f2
        k1f2 = parseFloat($('#k1f2').val())
        f2f2 = parseInt($('#f2f2').val())
        p3f2 = parseFloat($('#p3f2').val())
        s4f2 = parseInt($('#s4f2').val())
        u5f2 = parseInt($('#u5f2').val())

        jk_f2 = k1f2 + f2f2 + p3f2 + s4f2 + u5f2

        //console.log(jk_f2, k1f2, f2f2, p3f2, s4f2, u5f2)

        nmk1f2 = k1f2 / jk_f2
        nmf2f2 = f2f2 / jk_f2
        nmp3f2 = p3f2 / jk_f2
        nms4f2 = s4f2 / jk_f2
        nmu5f2 = u5f2 / jk_f2

        $('#nmk1f2').val(nmk1f2)
        $('#nmf2f2').val(nmf2f2)
        $('#nmp3f2').val(nmp3f2)
        $('#nms4f2').val(nms4f2)
        $('#nmu5f2').val(nmu5f2)

        //kolom p3
        k1p3 = parseFloat($('#k1p3').val())
        f2p3 = parseInt($('#f2p3').val())
        p3p3 = parseInt($('#p3p3').val())
        s4p3 = parseInt($('#s4p3').val())
        u5p3 = parseInt($('#u5p3').val())

        jk_p3 = k1p3 + f2p3 + p3p3 + s4p3 + u5p3

        //console.log(jk_p3, k1p3, f2p3, p3p3, s4p3, u5p3)

        nmk1p3 = k1p3 / jk_p3
        nmf2p3 = f2p3 / jk_p3
        nmp3p3 = p3p3 / jk_p3
        nms4p3 = s4p3 / jk_p3
        nmu5p3 = u5p3 / jk_p3

        $('#nmk1p3').val(nmk1p3)
        $('#nmf2p3').val(nmf2p3)
        $('#nmp3p3').val(nmp3p3)
        $('#nms4p3').val(nms4p3)
        $('#nmu5p3').val(nmu5p3)

        //kolom s4
        k1s4 = parseFloat($('#k1s4').val())
        f2s4 = parseFloat($('#f2s4').val())
        p3s4 = parseFloat($('#p3s4').val())
        s4s4 = parseInt($('#s4s4').val())
        u5s4 = parseInt($('#u5s4').val())

        jk_s4 = k1s4 + f2s4 + p3s4 + s4s4 + u5s4

        //console.log(jk_s4, k1s4, f2s4, p3s4, s4s4, u5s4)

        nmk1s4 = k1s4 / jk_s4
        nmf2s4 = f2s4 / jk_s4
        nmp3s4 = p3s4 / jk_s4
        nms4s4 = s4s4 / jk_s4
        nmu5s4 = u5s4 / jk_s4

        $('#nmk1s4').val(nmk1s4)
        $('#nmf2s4').val(nmf2s4)
        $('#nmp3s4').val(nmp3s4)
        $('#nms4s4').val(nms4s4)
        $('#nmu5s4').val(nmu5s4)

        //kolom u5
        k1u5 = parseFloat($('#k1u5').val())
        f2u5 = parseFloat($('#f2u5').val())
        p3u5 = parseFloat($('#p3u5').val())
        s4u5 = parseFloat($('#s4u5').val())
        u5u5 = parseInt($('#u5u5').val())

        jk_u5 = k1u5 + f2u5 + p3u5 + s4u5 + u5u5

        //console.log(jk_u5, k1u5, f2u5, p3u5, s4u5, u5u5)

        nmk1u5 = k1u5 / jk_u5
        nmf2u5 = f2u5 / jk_u5
        nmp3u5 = p3u5 / jk_u5
        nms4u5 = s4u5 / jk_u5
        nmu5u5 = u5u5 / jk_u5

        $('#nmk1u5').val(nmk1u5)
        $('#nmf2u5').val(nmf2u5)
        $('#nmp3u5').val(nmp3u5)
        $('#nms4u5').val(nms4u5)
        $('#nmu5u5').val(nmu5u5)

        //jumlah per baris
        jbk1 = nmk1k1 + nmk1f2 + nmk1p3 + nmk1s4 + nmk1u5
        jbf2 = nmf2k1 + nmf2f2 + nmf2p3 + nmf2s4 + nmf2u5
        jbp3 = nmp3k1 + nmp3f2 + nmp3p3 + nmp3s4 + nmp3u5
        jbs4 = nms4k1 + nms4f2 + nms4p3 + nms4s4 + nms4u5
        jbu5 = nmu5k1 + nmu5f2 + nmu5p3 + nmu5s4 + nmu5u5

        $('#jbk1').val(jbk1)
        $('#jbf2').val(jbf2)
        $('#jbp3').val(jbp3)
        $('#jbs4').val(jbs4)
        $('#jbu5').val(jbu5)

        //kolom prioritas ( n banyaknya kriteria)
        n = 5

        prk1 = parseFloat(jbk1 / n)
        prf2 = parseFloat(jbf2 / n)
        prp3 = parseFloat(jbp3 / n)
        prs4 = parseFloat(jbs4 / n)
        pru5 = parseFloat(jbu5 / n)

        $('#prk1').val(prk1)
        $('#prf2').val(prf2)
        $('#prp3').val(prp3)
        $('#prs4').val(prs4)
        $('#pru5').val(pru5)

        //mengukur konsistensi

        //kolom k1
        knk1k1 = parseFloat(k1k1 * prk1)
        knf2k1 = parseFloat(f2k1 * prk1)
        knp3k1 = parseFloat(p3k1 * prk1)
        kns4k1 = parseFloat(s4k1 * prk1)
        knu5k1 = parseFloat(u5k1 * prk1)

        $('#knk1k1').val(knk1k1)
        $('#knf2k1').val(knf2k1)
        $('#knp3k1').val(knp3k1)
        $('#kns4k1').val(kns4k1)
        $('#knu5k1').val(knu5k1)

        //kolom f2
        knk1f2 = parseFloat(k1f2 * prf2)
        knf2f2 = parseFloat(f2f2 * prf2)
        knp3f2 = parseFloat(p3f2 * prf2)
        kns4f2 = parseFloat(s4f2 * prf2)
        knu5f2 = parseFloat(u5f2 * prf2)

        $('#knk1f2').val(knk1f2)
        $('#knf2f2').val(knf2f2)
        $('#knp3f2').val(knp3f2)
        $('#kns4f2').val(kns4f2)
        $('#knu5f2').val(knu5f2)

        //kolom p3
        knk1p3 = parseFloat(k1p3 * prp3)
        knf2p3 = parseFloat(f2p3 * prp3)
        knp3p3 = parseFloat(p3p3 * prp3)
        kns4p3 = parseFloat(s4p3 * prp3)
        knu5p3 = parseFloat(u5p3 * prp3)

        $('#knk1p3').val(knk1p3)
        $('#knf2p3').val(knf2p3)
        $('#knp3p3').val(knp3p3)
        $('#kns4p3').val(kns4p3)
        $('#knu5p3').val(knu5p3)

        //kolom s4
        knk1s4 = parseFloat(k1s4 * prs4)
        knf2s4 = parseFloat(f2s4 * prs4)
        knp3s4 = parseFloat(p3s4 * prs4)
        kns4s4 = parseFloat(s4s4 * prs4)
        knu5s4 = parseFloat(u5s4 * prs4)

        $('#knk1s4').val(knk1s4)
        $('#knf2s4').val(knf2s4)
        $('#knp3s4').val(knp3s4)
        $('#kns4s4').val(kns4s4)
        $('#knu5s4').val(knu5s4)

        //kolom u5
        knk1u5 = parseFloat(k1u5 * pru5)
        knf2u5 = parseFloat(f2u5 * pru5)
        knp3u5 = parseFloat(p3u5 * pru5)
        kns4u5 = parseFloat(s4u5 * pru5)
        knu5u5 = parseFloat(u5u5 * pru5)

        $('#knk1u5').val(knk1u5)
        $('#knf2u5').val(knf2u5)
        $('#knp3u5').val(knp3u5)
        $('#kns4u5').val(kns4u5)
        $('#knu5u5').val(knu5u5)

        //jumlah baris di tabel konsistensi
        knjbk1 = parseFloat(knk1k1 + knk1f2 + knk1p3 + knk1s4 + knk1u5)
        knjbf2 = parseFloat(knf2k1 + knf2f2 + knf2p3 + knf2s4 + knf2u5)
        knjbp3 = parseFloat(knp3k1 + knp3f2 + knp3p3 + knp3s4 + knp3u5)
        knjbs4 = parseFloat(kns4k1 + kns4f2 + kns4p3 + kns4s4 + kns4u5)
        knjbu5 = parseFloat(knu5k1 + knu5f2 + knu5p3 + knu5s4 + knu5u5)

        $('#knjbk1').val(knjbk1)
        $('#knjbf2').val(knjbf2)
        $('#knjbp3').val(knjbp3)
        $('#knjbs4').val(knjbs4)
        $('#knjbu5').val(knjbu5)

        //jumlah baris/n di tabel konsistensi
        n = 5

        knjbnk1 = parseFloat(knjbk1 / n)
        knjbnf2 = parseFloat(knjbf2 / n)
        knjbnp3 = parseFloat(knjbp3 / n)
        knjbns4 = parseFloat(knjbs4 / n)
        knjbnu5 = parseFloat(knjbu5 / n)

        $('#knjbnk1').val(knjbnk1)
        $('#knjbnf2').val(knjbnf2)
        $('#knjbnp3').val(knjbnp3)
        $('#knjbns4').val(knjbns4)
        $('#knjbnu5').val(knjbnu5)

        //jumlah kolol ( dari kolom jumlah baris/n) di tabel konsistensi
        knjk = parseFloat(knjbnk1 + knjbnf2 + knjbnp3 + knjbns4 + knjbnu5)
        $('#knjk').val(knjk)

        //menghitung max di tabel konsistensi
        knmax = parseFloat(knjk / n)
        $('#knmax').val(knmax)

        //Menghitung rasio konsistensi
        ci = parseFloat((knmax - n) / n)
        ir = 1.12
        cr = parseFloat(ci / ir)

        $('#ci').val(ci)
        $('#ir').val(ir)
        $('#cr').val(cr)

        //membandingkan nilai CR
        if (cr < 0.1) {
            $('#kesimpulan').html('Karena nilai CR < 0.1 maka dapat disim[ulkan bahwa nilai priotas di tabel normalisasi dapat dijadikan acuan')
            $('.simpan_bobot').removeAttr('hidden')
        } else
        if (cr > 0.1) {
            $('#kesimpulan').html('Karena nilai CR > 0.1 maka dapat disim[ulkan bahwa nilai priotas di tabel normalisasi tidak dapat dijadikan acuan. Ulangi kembali pengisisan di tabel skala perbandingan kriteria !!')
        }
    }

    function swall($title) {
        Swal.fire({
            icon: 'success',
            title: 'Data Bobot Berhasil ' + $title,
            showConfirmButton: false,
            timer: 1500
        }).then((result) => {
            location.href = '<?= base_url('Kriteria') ?>'
        })

    }

    function simpan() {
        prk1 = parseFloat($('#prk1').val())
        prf2 = parseFloat($('#prf2').val())
        prp3 = parseFloat($('#prp3').val())
        prs4 = parseFloat($('#prs4').val())
        pru5 = parseFloat($('#pru5').val())

        // console.log(prk1, prf2, prp3, prs4, pru5)
        $.ajax({
            method: 'POST',
            url: '<?= base_url('Kriteria/simpan_bobot')  ?>',
            data: {
                prk1: prk1,
                prf2: prf2,
                prp3: prp3,
                prs4: prs4,
                pru5: pru5
            },
            dataType: 'json',
            success: function(data) {
                if (data == 'berhasil') {
                    swall('Disimpan')
                }
            }

        })
    }
</script>