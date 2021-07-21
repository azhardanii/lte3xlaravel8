<!-- jQuery -->
<script src="{{asset('plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist')}}/js/adminlte.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('plugins')}}/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function () {
      bsCustomFileInput.init();
    });
</script>
<!-- DataTables & Plugins -->
<script src="{{asset('plugins')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('plugins')}}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('plugins')}}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('plugins')}}/jszip/jszip.min.js"></script>
<script src="{{asset('plugins')}}/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('plugins')}}/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('plugins')}}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('plugins')}}/datatables-buttons/js/buttons.print.min.js"></script>
<script>
$(function () {
    $("#sadtable").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": ["copy", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#sadtable_wrapper .col-md-6:eq(0)');    
});
</script>

<script>
  $('.toast').toast('show');
</script>