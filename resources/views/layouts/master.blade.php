<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('bower_components/AdminLTE/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- list of plugin -->
    <link href="{{ asset('bower_components/AdminLTE/plugins/bootstrap-slider/slider.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('bower_components/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css"/>


    <link href="{{ asset('/bower_components/AdminLTE/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
      <!-- DataTables -->
    <link href="{{ asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css"/>



</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
    @include('layouts.header')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- <section class="content-header"> -->

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('layouts.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-3.1.1.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

<!-- addons -->


<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset ("/bower_components/AdminLTE/plugins/morris/morris.min.js") }}"></script>
<!-- Sparkline -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js") }}"></script>
<!-- jvectormap -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/knob/jquery.knob.js") }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset ("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js") }}"></script>
<!-- datepicker -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}"></script>

<!-- DataTables -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset ("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
 <!-- date range picker -->
  <script src="{{ asset ("/bower_components/AdminLTE/plugins/daterangepicker/moment.min.js") }}"></script>
  <script src="{{ asset ("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js") }}"></script>
  <!-- datepicker -->
  <script src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.min.js") }}"></script>

  <!-- select2 -->
 <script src="{{ asset ("/bower_components/AdminLTE/plugins/select2/select2.full.min.js") }}"></script>

 <!-- time picker -->
  <script src="{{ asset ("/bower_components/AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js") }}"></script>





<!-- Slimscroll -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/fastclick/fastclick.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/adminlte.min.js") }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/pages/dashboard.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/demo.js") }}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
        //Initialize Select2 Elements
    $('.select2').select2();

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' });
    //Money Euro
    $('[data-mask]').inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });
    //Colorpicker
    $('.my-colorpicker1').colorpicker();
    //color picker with addon
    $('.my-colorpicker2').colorpicker();

    //Timepicker
    $('.timepicker').timepicker({
       showInputs: false
    });
  });
</script>

</body>
</html>