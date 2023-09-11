<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Perbandingan Subkriteria</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Halaman_utama'); ?>">Halaman utama</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('Subkriteria_danru_anggota'); ?>">Subkriteria Danru & Anggota</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perbandingan Subkriteria</li>
        </ol>
    </div>

    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="alert alert-light" role="alert">
                Setelah mengisi nilai matrik perbandingan. Silahkan klik tombol <strong>SIMPAN NILAI SUBKRITERIA</strong> untuk mengetahui bobot nilai subkriteria
            </div>
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <h6 style="font-weight: bold;">Tabel Subkriteria Perilaku Kerja</h6>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="background-color: lightgray;" scope="col">S1</th>
                                <td scope="col">Kemampuan Komunikasi</td>
                                <th style="background-color: lightgray;" scope="col">S5</th>
                                <td scope="col">Kejujuran</td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="col">S2</th>
                                <td scope="col">Inisisatif</td>
                                <th style="background-color: lightgray;" scope="col">S6</th>
                                <td scope="col">Tanggung Jawab</td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="col">S3</th>
                                <td scope="col">Kerjasama</td>
                                <th style="background-color: lightgray;" scope="col">S7</th>
                                <td scope="col">Attitude</td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="col">S4</th>
                                <td scope="col">Disiplin</td>
                            </tr>


                        </tbody>
                    </table>
                    <p id="kesimpulan"></p>
                    <button hidden class="btn btn-primary simpan_bobot" onclick="simpan()">Simpan Bobot Prioritas</button>
                </div>
            </div>
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <h6 style="font-weight: bold;">Tabel Skala Perbandingan Subkriteria Perilaku Kerja</h6>
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: lightgray;">
                                <th scope="col">#</th>
                                <th scope="col">S1</th>
                                <th scope="col">S2</th>
                                <th scope="col">S3</th>
                                <th scope="col">S4</th>
                                <th scope="col">S5</th>
                                <th scope="col">S6</th>
                                <th scope="col">S7</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S1</th>
                                <td><input type="number" id="s1s1" value="1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="s1s2" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="s1s3" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="s1s4" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="s1s5" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="s1s6" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="s1s7" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S2</th>
                                <td>
                                    <select id="s2s1" style="width:80px;">
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
                                <td><input id="s2s2" type="number" value="1" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s2s3" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s2s4" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s2s5" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s2s6" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s2s7" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S3</th>
                                <td>
                                    <select id="s3s1" style="width:80px;">
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
                                    <select id="s3s2" style="width:80px;">
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
                                <td><input id="s3s3" type="number" value="1" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s3s4" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s3s5" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s3s6" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s3s7" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S4</th>
                                <td>
                                    <select id="s4s1" style="width:80px;">
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
                                    <select id="s4s2" style="width:80px;">
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
                                    <select id="s4s3" style="width:80px;">
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
                                <td><input id="s4s5" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s4s6" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s4s7" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S5</th>
                                <td>
                                    <select id="s5s1" style="width:80px;">
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
                                    <select id="s5s2" style="width:80px;">
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
                                    <select id="s5s3" style="width:80px;">
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
                                    <select id="s5s4" style="width:80px;">
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
                                <td><input id="s5s5" type="number" value="1" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s5s6" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s5s7" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S6</th>
                                <td>
                                    <select id="s6s1" style="width:80px;">
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
                                    <select id="s6s2" style="width:80px;">
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
                                    <select id="s6s3" style="width:80px;">
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
                                    <select id="s6s4" style="width:80px;">
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
                                    <select id="s6s5" style="width:80px;">
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
                                <td><input id="s6s6" type="number" value="1" style="width:80px;  background-color:lightgray" readonly></td>
                                <td><input id="s6s7" type="number" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S7</th>
                                <td>
                                    <select id="s7s1" style="width:80px;">
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
                                    <select id="s7s2" style="width:80px;">
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
                                    <select id="s7s3" style="width:80px;">
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
                                    <select id="s7s4" style="width:80px;">
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
                                    <select id="s7s5" style="width:80px;">
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
                                    <select id="s7s6" style="width:80px;">
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
                                <td><input id="s7s7" type="number" value="1" style="width:80px;  background-color:lightgray" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                    <button onclick="normalisasi()" class="btn btn-primary mt-3"> SImpan Nilai Subkriteria </button>
                </div>
            </div>
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <h6 style="font-weight: bold;">Tabel Normalisasi</h6>
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: lightgray;">
                                <th scope="col">#</th>
                                <th scope="col">S1</th>
                                <th scope="col">S2</th>
                                <th scope="col">S3</th>
                                <th scope="col">S4</th>
                                <th scope="col">S5</th>
                                <th scope="col">S6</th>
                                <th scope="col">S7</th>
                                <th scope="col">Jumlah Baris</th>
                                <th scope="col">Prioritas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S1</th>
                                <td><input type="number" id="nms1s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms1s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms1s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms1s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms1s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms1s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms1s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbs1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prs1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S2</th>
                                <td><input type="number" id="nms2s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms2s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms2s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms2s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms2s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms2s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms2s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbs2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prs2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S3</th>
                                <td><input type="number" id="nms3s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms3s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms3s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms3s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms3s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms3s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms3s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbs3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prs3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S4</th>
                                <td><input type="number" id="nms4s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms4s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms4s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms4s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms4s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms4s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms4s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbs4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prs4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S5</th>
                                <td><input type="number" id="nms5s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms5s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms5s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms5s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms5s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms5s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms5s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbs5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prs5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S6</th>
                                <td><input type="number" id="nms6s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms6s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms6s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms6s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms6s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms6s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms6s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbs6" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prs6" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S7</th>
                                <td><input type="number" id="nms7s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms7s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms7s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms7s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms7s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms7s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="nms7s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="jbs7" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="prs7" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <h6 style="font-weight: bold;">Tabel Mengukur Konsistensi</h6>
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: lightgray;">
                                <th scope="col">#</th>
                                <th scope="col">S1</th>
                                <th scope="col">S2</th>
                                <th scope="col">S3</th>
                                <th scope="col">S4</th>
                                <th scope="col">S5</th>
                                <th scope="col">S6</th>
                                <th scope="col">S7</th>
                                <th scope="col">Jumlah Baris</th>
                                <th scope="col">Jumlah / n</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S1</th>
                                <td><input type="number" id="kns1s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns1s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns1s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns1s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns1s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns1s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns1s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbs1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbns1" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S2</th>
                                <td><input type="number" id="kns2s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns2s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns2s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns2s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns2s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns2s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns2s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbs2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbns2" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S3</th>
                                <td><input type="number" id="kns3s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns3s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns3s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns3s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns3s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns3s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns3s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbs3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbns3" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S4</th>
                                <td><input type="number" id="kns4s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns4s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns4s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns4s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns4s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns4s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns4s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbs4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbns4" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S5</th>
                                <td><input type="number" id="kns5s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns5s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns5s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns5s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns5s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns5s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns5s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbs5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbns5" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S6</th>
                                <td><input type="number" id="kns6s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns6s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns6s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns6s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns6s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns6s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns6s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbs6" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbns6" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr>
                                <th style="background-color: lightgray;" scope="row">S7</th>
                                <td><input type="number" id="kns7s1" style="width:80px; background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns7s2" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns7s3" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns7s4" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns7s5" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns7s6" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input type="number" id="kns7s7" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbs7" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                                <td><input id="knjbns7" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr align="center">
                                <th style="background-color: lightgray;" scope="row" colspan="9">Jumlah</th>
                                <td><input id="knjk" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                            <tr align="center">
                                <th style="background-color: lightgray;" scope="row" colspan="9">Max</th>
                                <td><input id="knmax" type="number" style="width: 80px;  background-color:lightgray" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-4">
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
                    <p id="kesimpulan2"></p>
                    <button hidden class="btn btn-primary simpan_bobot" onclick="simpan()">Simpan Bobot Prioritas</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Container Fluid-->

<script>
    $("#s2s1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s1s2').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s1s2').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s1s2').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s1s2').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s1s2').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s1s2').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s1s2').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s1s2').val(1 / 9)
        }
    });

    $("#s3s1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s1s3').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s1s3').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s1s3').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s1s3').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s1s3').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s1s3').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s1s3').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s1s3').val(1 / 9)
        }
    });

    $("#s3s2").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s2s3').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s2s3').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s2s3').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s2s3').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s2s3').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s2s3').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s2s3').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s2s3').val(1 / 9)
        }
    });

    $("#s4s1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s1s4').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s1s4').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s1s4').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s1s4').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s1s4').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s1s4').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s1s4').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s1s4').val(1 / 9)
        }
    });

    $("#s4s2").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s2s4').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s2s4').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s2s4').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s2s4').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s2s4').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s2s4').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s2s4').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s2s4').val(1 / 9)
        }
    });

    $("#s4s3").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s3s4').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s3s4').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s3s4').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s3s4').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s3s4').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s3s4').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s3s4').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s3s4').val(1 / 9)
        }
    });

    $("#s5s1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s1s5').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s1s5').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s1s5').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s1s5').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s1s5').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s1s5').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s1s5').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s1s5').val(1 / 9)
        }
    });

    $("#s5s2").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s2s5').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s2s5').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s2s5').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s2s5').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s2s5').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s2s5').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s2s5').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s2s5').val(1 / 9)
        }
    });

    $("#s5s3").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s3s5').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s3s5').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s3s5').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s3s5').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s3s5').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s3s5').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s3s5').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s3s5').val(1 / 9)
        }
    });

    $("#s5s4").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s4s5').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s4s5').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s4s5').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s4s5').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s4s5').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s4s5').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s4s5').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s4s5').val(1 / 9)
        }
    });

    $("#s6s1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s1s6').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s1s6').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s1s6').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s1s6').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s1s6').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s1s6').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s1s6').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s1s6').val(1 / 9)
        }
    });

    $("#s6s2").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s2s6').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s2s6').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s2s6').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s2s6').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s2s6').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s2s6').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s2s6').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s2s6').val(1 / 9)
        }
    });

    $("#s6s3").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s3s6').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s3s6').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s3s6').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s3s6').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s3s6').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s3s6').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s3s6').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s3s6').val(1 / 9)
        }
    });

    $("#s6s4").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s4s6').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s4s6').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s4s6').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s4s6').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s4s6').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s4s6').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s4s6').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s4s6').val(1 / 9)
        }
    });

    $("#s6s5").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s5s6').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s5s6').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s5s6').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s5s6').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s5s6').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s5s6').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s5s6').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s5s6').val(1 / 9)
        }
    });

    $("#s7s1").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s1s7').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s1s7').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s1s7').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s1s7').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s1s7').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s1s7').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s1s7').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s1s7').val(1 / 9)
        }
    });

    $("#s7s2").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s2s7').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s2s7').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s2s7').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s2s7').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s2s7').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s2s7').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s2s7').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s2s7').val(1 / 9)
        }
    });

    $("#s7s3").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s3s7').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s3s7').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s3s7').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s3s7').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s3s7').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s3s7').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s3s7').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s3s7').val(1 / 9)
        }
    });

    $("#s7s4").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s4s7').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s4s7').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s4s7').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s4s7').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s4s7').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s4s7').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s4s7').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s4s7').val(1 / 9)
        }
    });

    $("#s7s5").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s5s7').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s5s7').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s5s7').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s5s7').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s5s7').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s5s7').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s5s7').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s5s7').val(1 / 9)
        }
    });

    $("#s7s6").change(function() {
        isi = $(this).val()
        if (isi == 2) {
            $('#s6s7').val((1 / 2))
        } else
        if (isi == 3) {
            $('#s6s7').val((1 / 3))
        } else
        if (isi == 4) {
            $('#s6s7').val(1 / 4)
        } else
        if (isi == 5) {
            $('#s6s7').val(1 / 5)
        } else
        if (isi == 6) {
            $('#s6s7').val(1 / 6)
        } else
        if (isi == 7) {
            $('#s6s7').val(1 / 7)
        } else
        if (isi == 8) {
            $('#s6s7').val(1 / 8)
        } else
        if (isi == 9) {
            $('#s6s7').val(1 / 9)
        }
    });


    function normalisasi() {
        //kolom s1
        s1s1 = parseInt($('#s1s1').val())
        s2s1 = parseInt($('#s2s1').val())
        s3s1 = parseInt($('#s3s1').val())
        s4s1 = parseInt($('#s4s1').val())
        s5s1 = parseInt($('#s5s1').val())
        s6s1 = parseInt($('#s6s1').val())
        s7s1 = parseInt($('#s7s1').val())

        jk_s1 = s1s1 + s2s1 + s3s1 + s4s1 + s5s1 + s6s1 + s7s1


        nms1s1 = s1s1 / jk_s1
        nms2s1 = s2s1 / jk_s1
        nms3s1 = s3s1 / jk_s1
        nms4s1 = s4s1 / jk_s1
        nms5s1 = s5s1 / jk_s1
        nms6s1 = s6s1 / jk_s1
        nms7s1 = s7s1 / jk_s1

        $('#nms1s1').val(nms1s1)
        $('#nms2s1').val(nms2s1)
        $('#nms3s1').val(nms3s1)
        $('#nms4s1').val(nms4s1)
        $('#nms5s1').val(nms5s1)
        $('#nms6s1').val(nms6s1)
        $('#nms7s1').val(nms7s1)

        //kolom s2
        s1s2 = parseFloat($('#s1s2').val())
        s2s2 = parseInt($('#s2s2').val())
        s3s2 = parseInt($('#s3s2').val())
        s4s2 = parseInt($('#s4s2').val())
        s5s2 = parseInt($('#s5s2').val())
        s6s2 = parseInt($('#s6s2').val())
        s7s2 = parseInt($('#s7s2').val())

        jk_s2 = s1s2 + s2s2 + s3s2 + s4s2 + s5s2 + s6s2 + s7s2


        nms1s2 = s1s2 / jk_s2
        nms2s2 = s2s2 / jk_s2
        nms3s2 = s3s2 / jk_s2
        nms4s2 = s4s2 / jk_s2
        nms5s2 = s5s2 / jk_s2
        nms6s2 = s6s2 / jk_s2
        nms7s2 = s7s2 / jk_s2

        $('#nms1s2').val(nms1s2)
        $('#nms2s2').val(nms2s2)
        $('#nms3s2').val(nms3s2)
        $('#nms4s2').val(nms4s2)
        $('#nms5s2').val(nms5s2)
        $('#nms6s2').val(nms6s2)
        $('#nms7s2').val(nms7s2)

        //kolom s3
        s1s3 = parseFloat($('#s1s3').val())
        s2s3 = parseFloat($('#s2s3').val())
        s3s3 = parseInt($('#s3s3').val())
        s4s3 = parseInt($('#s4s3').val())
        s5s3 = parseInt($('#s5s3').val())
        s6s3 = parseInt($('#s6s3').val())
        s7s3 = parseInt($('#s7s3').val())

        jk_s3 = s1s3 + s2s3 + s3s3 + s4s3 + s5s3 + s6s3 + s7s3
        console.log(s4s3, jk_s3)

        nms1s3 = s1s3 / jk_s3
        nms2s3 = s2s3 / jk_s3
        nms3s3 = s3s3 / jk_s3
        nms4s3 = s4s3 / jk_s3
        nms5s3 = s5s3 / jk_s3
        nms6s3 = s6s3 / jk_s3
        nms7s3 = s7s3 / jk_s3

        $('#nms1s3').val(nms1s3)
        $('#nms2s3').val(nms2s3)
        $('#nms3s3').val(nms3s3)
        $('#nms4s3').val(nms4s3)
        $('#nms5s3').val(nms5s3)
        $('#nms6s3').val(nms6s3)
        $('#nms7s3').val(nms7s3)

        //kolom s4
        s1s4 = parseFloat($('#s1s4').val())
        s2s4 = parseFloat($('#s2s4').val())
        s3s4 = parseFloat($('#s3s4').val())
        s4s4 = parseInt($('#s4s4').val())
        s5s4 = parseInt($('#s5s4').val())
        s6s4 = parseInt($('#s6s4').val())
        s7s4 = parseInt($('#s7s4').val())

        jk_s4 = s1s4 + s2s4 + s3s4 + s4s4 + s5s4 + s6s4 + s7s4

        nms1s4 = s1s4 / jk_s4
        nms2s4 = s2s4 / jk_s4
        nms3s4 = s3s4 / jk_s4
        nms4s4 = s4s4 / jk_s4
        nms5s4 = s5s4 / jk_s4
        nms6s4 = s6s4 / jk_s4
        nms7s4 = s7s4 / jk_s4

        $('#nms1s4').val(nms1s4)
        $('#nms2s4').val(nms2s4)
        $('#nms3s4').val(nms3s4)
        $('#nms4s4').val(nms4s4)
        $('#nms5s4').val(nms5s4)
        $('#nms6s4').val(nms6s4)
        $('#nms7s4').val(nms7s4)

        //kolom s5
        s1s5 = parseFloat($('#s1s5').val())
        s2s5 = parseFloat($('#s2s5').val())
        s3s5 = parseFloat($('#s3s5').val())
        s4s5 = parseFloat($('#s4s5').val())
        s5s5 = parseInt($('#s5s5').val())
        s6s5 = parseInt($('#s6s5').val())
        s7s5 = parseInt($('#s7s5').val())

        jk_s5 = s1s5 + s2s5 + s3s5 + s4s5 + s5s5 + s6s5 + s7s5


        nms1s5 = s1s5 / jk_s5
        nms2s5 = s2s5 / jk_s5
        nms3s5 = s3s5 / jk_s5
        nms4s5 = s4s5 / jk_s5
        nms5s5 = s5s5 / jk_s5
        nms6s5 = s6s5 / jk_s5
        nms7s5 = s7s5 / jk_s5

        $('#nms1s5').val(nms1s5)
        $('#nms2s5').val(nms2s5)
        $('#nms3s5').val(nms3s5)
        $('#nms4s5').val(nms4s5)
        $('#nms5s5').val(nms5s5)
        $('#nms6s5').val(nms6s5)
        $('#nms7s5').val(nms7s5)

        //kolom s6
        s1s6 = parseFloat($('#s1s6').val())
        s2s6 = parseFloat($('#s2s6').val())
        s3s6 = parseFloat($('#s3s6').val())
        s4s6 = parseFloat($('#s4s6').val())
        s5s6 = parseFloat($('#s5s6').val())
        s6s6 = parseInt($('#s6s6').val())
        s7s6 = parseInt($('#s7s6').val())

        jk_s6 = s1s6 + s2s6 + s3s6 + s4s6 + s5s6 + s6s6 + s7s6
        console.log(s1s6, jk_s6)
        nms1s6 = s1s6 / jk_s6
        nms2s6 = s2s6 / jk_s6
        nms3s6 = s3s6 / jk_s6
        nms4s6 = s4s6 / jk_s6
        nms5s6 = s5s6 / jk_s6
        nms6s6 = s6s6 / jk_s6
        nms7s6 = s7s6 / jk_s6

        $('#nms1s6').val(nms1s6)
        $('#nms2s6').val(nms2s6)
        $('#nms3s6').val(nms3s6)
        $('#nms4s6').val(nms4s6)
        $('#nms5s6').val(nms5s6)
        $('#nms6s6').val(nms6s6)
        $('#nms7s6').val(nms7s6)

        //kolom s7
        s1s7 = parseFloat($('#s1s7').val())
        s2s7 = parseFloat($('#s2s7').val())
        s3s7 = parseFloat($('#s3s7').val())
        s4s7 = parseFloat($('#s4s7').val())
        s5s7 = parseFloat($('#s5s7').val())
        s6s7 = parseFloat($('#s6s7').val())
        s7s7 = parseInt($('#s7s7').val())

        jk_s7 = s1s7 + s2s7 + s3s7 + s4s7 + s5s7 + s6s7 + s7s7

        nms1s7 = s1s7 / jk_s7
        nms2s7 = s2s7 / jk_s7
        nms3s7 = s3s7 / jk_s7
        nms4s7 = s4s7 / jk_s7
        nms5s7 = s5s7 / jk_s7
        nms6s7 = s6s7 / jk_s7
        nms7s7 = s7s7 / jk_s7

        $('#nms1s7').val(nms1s7)
        $('#nms2s7').val(nms2s7)
        $('#nms3s7').val(nms3s7)
        $('#nms4s7').val(nms4s7)
        $('#nms5s7').val(nms5s7)
        $('#nms6s7').val(nms6s7)
        $('#nms7s7').val(nms7s7)

        //jumlah per baris
        jbs1 = nms1s1 + nms1s2 + nms1s3 + nms1s4 + nms1s5 + nms1s6 + nms1s7
        jbs2 = nms2s1 + nms2s2 + nms2s3 + nms2s4 + nms2s5 + nms2s6 + nms2s7
        jbs3 = nms3s1 + nms3s2 + nms3s3 + nms3s4 + nms3s5 + nms3s6 + nms3s7
        jbs4 = nms4s1 + nms4s2 + nms4s3 + nms4s4 + nms4s5 + nms4s6 + nms4s7
        jbs5 = nms5s1 + nms5s2 + nms5s3 + nms5s4 + nms5s5 + nms5s6 + nms5s7
        jbs6 = nms6s1 + nms6s2 + nms6s3 + nms6s4 + nms6s5 + nms6s6 + nms6s7
        jbs7 = nms7s1 + nms7s2 + nms7s3 + nms7s4 + nms7s5 + nms7s6 + nms7s7


        $('#jbs1').val(jbs1)
        $('#jbs2').val(jbs2)
        $('#jbs3').val(jbs3)
        $('#jbs4').val(jbs4)
        $('#jbs5').val(jbs5)
        $('#jbs6').val(jbs6)
        $('#jbs7').val(jbs7)

        //kolom prioritas ( n banyaknya Subkriteria)
        n = 7

        prs1 = parseFloat(jbs1 / n)
        prs2 = parseFloat(jbs2 / n)
        prs3 = parseFloat(jbs3 / n)
        prs4 = parseFloat(jbs4 / n)
        prs5 = parseFloat(jbs5 / n)
        prs6 = parseFloat(jbs6 / n)
        prs7 = parseFloat(jbs7 / n)

        $('#prs1').val(prs1)
        $('#prs2').val(prs2)
        $('#prs3').val(prs3)
        $('#prs4').val(prs4)
        $('#prs5').val(prs5)
        $('#prs6').val(prs6)
        $('#prs7').val(prs7)

        //mengukur konsistensi

        //kolom s1
        kns1s1 = parseFloat(s1s1 * prs1)
        kns2s1 = parseFloat(s2s1 * prs1)
        kns3s1 = parseFloat(s3s1 * prs1)
        kns4s1 = parseFloat(s4s1 * prs1)
        kns5s1 = parseFloat(s5s1 * prs1)
        kns6s1 = parseFloat(s6s1 * prs1)
        kns7s1 = parseFloat(s7s1 * prs1)

        $('#kns1s1').val(kns1s1)
        $('#kns2s1').val(kns2s1)
        $('#kns3s1').val(kns3s1)
        $('#kns4s1').val(kns4s1)
        $('#kns5s1').val(kns5s1)
        $('#kns6s1').val(kns6s1)
        $('#kns7s1').val(kns7s1)

        //kolom s2
        kns1s2 = parseFloat(s1s2 * prs2)
        kns2s2 = parseFloat(s2s2 * prs2)
        kns3s2 = parseFloat(s3s2 * prs2)
        kns4s2 = parseFloat(s4s2 * prs2)
        kns5s2 = parseFloat(s5s2 * prs2)
        kns6s2 = parseFloat(s6s2 * prs2)
        kns7s2 = parseFloat(s7s2 * prs2)

        $('#kns1s2').val(kns1s2)
        $('#kns2s2').val(kns2s2)
        $('#kns3s2').val(kns3s2)
        $('#kns4s2').val(kns4s2)
        $('#kns5s2').val(kns5s2)
        $('#kns6s2').val(kns6s2)
        $('#kns7s2').val(kns7s2)

        //kolom s3
        kns1s3 = parseFloat(s1s3 * prs3)
        kns2s3 = parseFloat(s2s3 * prs3)
        kns3s3 = parseFloat(s3s3 * prs3)
        kns4s3 = parseFloat(s4s3 * prs3)
        kns5s3 = parseFloat(s5s3 * prs3)
        kns6s3 = parseFloat(s6s3 * prs3)
        kns7s3 = parseFloat(s7s3 * prs3)

        $('#kns1s3').val(kns1s3)
        $('#kns2s3').val(kns2s3)
        $('#kns3s3').val(kns3s3)
        $('#kns4s3').val(kns4s3)
        $('#kns5s3').val(kns5s3)
        $('#kns6s3').val(kns6s3)
        $('#kns7s3').val(kns7s3)

        //kolom s4
        kns1s4 = parseFloat(s1s4 * prs4)
        kns2s4 = parseFloat(s2s4 * prs4)
        kns3s4 = parseFloat(s3s4 * prs4)
        kns4s4 = parseFloat(s4s4 * prs4)
        kns5s4 = parseFloat(s5s4 * prs4)
        kns6s4 = parseFloat(s6s4 * prs4)
        kns7s4 = parseFloat(s7s4 * prs4)

        $('#kns1s4').val(kns1s4)
        $('#kns2s4').val(kns2s4)
        $('#kns3s4').val(kns3s4)
        $('#kns4s4').val(kns4s4)
        $('#kns5s4').val(kns5s4)
        $('#kns6s4').val(kns6s4)
        $('#kns7s4').val(kns7s4)

        //kolom s5
        kns1s5 = parseFloat(s1s5 * prs5)
        kns2s5 = parseFloat(s2s5 * prs5)
        kns3s5 = parseFloat(s3s5 * prs5)
        kns4s5 = parseFloat(s4s5 * prs5)
        kns5s5 = parseFloat(s5s5 * prs5)
        kns6s5 = parseFloat(s6s5 * prs5)
        kns7s5 = parseFloat(s7s5 * prs5)

        $('#kns1s5').val(kns1s5)
        $('#kns2s5').val(kns2s5)
        $('#kns3s5').val(kns3s5)
        $('#kns4s5').val(kns4s5)
        $('#kns5s5').val(kns5s5)
        $('#kns6s5').val(kns6s5)
        $('#kns7s5').val(kns7s5)

        //kolom s6
        kns1s6 = parseFloat(s1s6 * prs6)
        kns2s6 = parseFloat(s2s6 * prs6)
        kns3s6 = parseFloat(s3s6 * prs6)
        kns4s6 = parseFloat(s4s6 * prs6)
        kns5s6 = parseFloat(s5s6 * prs6)
        kns6s6 = parseFloat(s6s6 * prs6)
        kns7s6 = parseFloat(s7s6 * prs6)

        $('#kns1s6').val(kns1s6)
        $('#kns2s6').val(kns2s6)
        $('#kns3s6').val(kns3s6)
        $('#kns4s6').val(kns4s6)
        $('#kns5s6').val(kns5s6)
        $('#kns6s6').val(kns6s6)
        $('#kns7s6').val(kns7s6)

        //kolom s7
        kns1s7 = parseFloat(s1s7 * prs7)
        kns2s7 = parseFloat(s2s7 * prs7)
        kns3s7 = parseFloat(s3s7 * prs7)
        kns4s7 = parseFloat(s4s7 * prs7)
        kns5s7 = parseFloat(s5s7 * prs7)
        kns6s7 = parseFloat(s6s7 * prs7)
        kns7s7 = parseFloat(s7s7 * prs7)

        $('#kns1s7').val(kns1s7)
        $('#kns2s7').val(kns2s7)
        $('#kns3s7').val(kns3s7)
        $('#kns4s7').val(kns4s7)
        $('#kns5s7').val(kns5s7)
        $('#kns6s7').val(kns6s7)
        $('#kns7s7').val(kns7s7)

        //jumlah baris di tabel konsistensi
        knjbs1 = parseFloat(kns1s1 + kns1s2 + kns1s3 + kns1s4 + kns1s5 + kns1s6 + kns1s7)
        knjbs2 = parseFloat(kns2s1 + kns2s2 + kns2s3 + kns2s4 + kns2s5 + kns2s6 + kns2s7)
        knjbs3 = parseFloat(kns3s1 + kns3s2 + kns3s3 + kns3s4 + kns3s5 + kns3s6 + kns3s7)
        knjbs4 = parseFloat(kns4s1 + kns4s2 + kns4s3 + kns4s4 + kns4s5 + kns4s6 + kns4s7)
        knjbs5 = parseFloat(kns5s1 + kns5s2 + kns5s3 + kns5s4 + kns5s5 + kns5s6 + kns5s7)
        knjbs6 = parseFloat(kns6s1 + kns6s2 + kns6s3 + kns6s4 + kns6s5 + kns6s6 + kns6s7)
        knjbs7 = parseFloat(kns7s1 + kns7s2 + kns7s3 + kns7s4 + kns7s5 + kns7s6 + kns7s7)


        $('#knjbs1').val(knjbs1)
        $('#knjbs2').val(knjbs2)
        $('#knjbs3').val(knjbs3)
        $('#knjbs4').val(knjbs4)
        $('#knjbs5').val(knjbs5)
        $('#knjbs6').val(knjbs6)
        $('#knjbs7').val(knjbs7)

        //jumlah baris/n di tabel konsistensi
        n = 7

        knjbns1 = parseFloat(knjbs1 / n)
        knjbns2 = parseFloat(knjbs2 / n)
        knjbns3 = parseFloat(knjbs3 / n)
        knjbns4 = parseFloat(knjbs4 / n)
        knjbns5 = parseFloat(knjbs5 / n)
        knjbns6 = parseFloat(knjbs6 / n)
        knjbns7 = parseFloat(knjbs7 / n)

        $('#knjbns1').val(knjbns1)
        $('#knjbns2').val(knjbns2)
        $('#knjbns3').val(knjbns3)
        $('#knjbns4').val(knjbns4)
        $('#knjbns5').val(knjbns5)
        $('#knjbns6').val(knjbns6)
        $('#knjbns7').val(knjbns7)

        //jumlah kolom ( dari kolom jumlah baris/n) di tabel konsistensi
        knjk = parseFloat(knjbns1 + knjbns2 + knjbns3 + knjbns4 + knjbns5 + knjbns6 + knjbns7)
        $('#knjk').val(knjk)

        //menghitung max di tabel konsistensi
        knmax = parseFloat(knjk / n)
        $('#knmax').val(knmax)

        //Menghitung rasio konsistensi
        ci = parseFloat((knmax - n) / n)
        ir = 1.32
        cr = parseFloat(ci / ir)

        $('#ci').val(ci)
        $('#ir').val(ir)
        $('#cr').val(cr)

        //membandingkan nilai CR
        if (cr < 0.1) {
            console.log('berhasil')
            $('#kesimpulan2').html('Karena nilai CR < 0.1 maka dapat disimpulkan bahwa nilai priotas di tabel normalisasi dapat dijadikan acuan')
            $('.simpan_bobot').removeAttr('hidden')
        } else
        if (cr > 0.1) {
            $('#kesimpulan').html('Karena nilai CR > 0.1 maka dapat disimpulkan bahwa nilai priotas di tabel normalisasi tidak dapat dijadikan acuan. Ulangi kembali pengisisan di tabel skala perbandingan kriteria !!')
        }
    }


    function swall($title) {
        Swal.fire({
            icon: 'success',
            title: 'Data Bobot Berhasil ' + $title,
            showConfirmButton: false,
            timer: 1500
        }).then((result) => {
            location.href = '<?= base_url('Subkriteria_danru_anggota') ?>'
        })

    }

    function simpan() {
        prs1 = parseFloat($('#prs1').val())
        prs2 = parseFloat($('#prs2').val())
        prs3 = parseFloat($('#prs3').val())
        prs4 = parseFloat($('#prs4').val())
        prs5 = parseFloat($('#prs5').val())
        prs6 = parseFloat($('#prs6').val())
        prs7 = parseFloat($('#prs7').val())

        // console.log(prk1, prf2, prp3, prs4, pru5)
        $.ajax({
            method: 'POST',
            url: '<?= base_url('Subkriteria_danru_anggota/simpan_bobot')  ?>',
            data: {
                prs1: prs1,
                prs2: prs2,
                prs3: prs3,
                prs4: prs4,
                prs5: prs5,
                prs6: prs6,
                prs7: prs7
            },
            dataType: 'json',
            success: function(data) {
                if (data == 'berhasil') {
                    swall('Disimpan')
                }
                // console.log(data)

            }

        })
    }
</script>