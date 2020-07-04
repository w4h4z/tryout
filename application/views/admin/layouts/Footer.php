<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/adminlte/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/adminlte/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/adminlte/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/adminlte/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/adminlte/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/adminlte/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('assets/adminlte/'); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/adminlte/'); ?>plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE -->
<script src="<?= base_url('assets/adminlte/'); ?>dist/js/adminlte.js"></script>


<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('assets/adminlte/'); ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/adminlte/'); ?>dist/js/demo.js"></script>
<script src="<?= base_url('assets/adminlte/'); ?>dist/js/pages/dashboard3.js"></script>

<script type="text/javascript">
$(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering" : false,
    });
});
</script>

<script type="text/javascript" src="<?= base_url('assets/adminlte/'); ?>dist/js/master.js"></script>
</body>
</html>