</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script> - Pt Trengginas Jaya
            </span>
        </div>
    </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Keluar Aplikasi !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah kamu ingin keluar aplikasi?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                <a href="<?= base_url('Autentikasi/keluar'); ?>" class="btn btn-primary">Keluar</a>
            </div>
        </div>
    </div>
</div>


<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>

<!-- Datatables plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Select2 -->
<script src="<?= base_url('assets/'); ?>vendor/select2/dist/js/select2.min.js"></script>

<!-- sweetalert2 -->
<script src="<?= base_url('assets/'); ?>vendor/sweetalert2/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            'language': {
                "sProcessing": "Sedang memproses...",
                "sLengthMenu": "Tampilkan _MENU_",
                "sZeroRecords": "Tidak ditemukan data yang sesuai",
                "sInfo": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                "sInfoEmpty": "Menampilkan 0 - 0 dari 0 data",
                "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                "sInfoPostFix": "",
                "sSearch": "Cari : ",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "Pertama",
                    "sPrevious": "Sebelumnya",
                    "sNext": "Selanjutnya",
                    "sLast": "Terakhir"
                }
            }
        });

    });
</script>
</body>

</html>