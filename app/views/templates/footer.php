  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.1.0
    </div>
    <strong>Copyright &copy; <?= date('Y') ?></strong> Marketplace
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Andah yakin ingin Logout
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?php echo BASEURL; ?>/Logout" class="btn btn-primary toastsDefaultSuccess">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo BASEURL; ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo BASEURL; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo BASEURL; ?>/plugins/chart.js/Chart.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo BASEURL; ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo BASEURL; ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASEURL; ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo BASEURL; ?>/dist/js/demo.js"></script>
<!-- My javascript -->
<script src="<?php echo BASEURL; ?>/js/script.js"></script>
<script src="<?php echo BASEURL; ?>/js/pencarian.js"></script>
<script>

  $(function () {
    // $("#example1").DataTable({
    //   "responsive": true, "lengthChange": false, "autoWidth": false,
    //   "buttons": ["excel", "pdf", "print"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#laporan').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>
</body>
</html>