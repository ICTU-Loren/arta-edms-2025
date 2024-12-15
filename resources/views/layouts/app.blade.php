<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>eDMS | ARTA</title>
        <!-- <title>{{ config('app.name', 'ARTA-EDMS') }}</title> -->
        <link rel="icon" type="image/png" href="{{ asset('images/arta.png') }}">

        @livewireStyles

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
          <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
        <!-- Toggle Switch -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
        <!-- jQuery -->
        <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- Select2 -->
        <script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>

        <livewire:styles />
        <!-- Tempusdominus Bootstrap 4 -->
        <script type="text/javascript" src="https://unpkg.com/moment"> </script>
        <script type="text/javascript" src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

        <!-- DataTables  & Plugins -->
        <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    </head>
    
    <body class="hold-transition sidebar-mini">
      <div class="wrapper">

        <!-- Main Sidebar Container -->
        @include('partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper bg-gray-100">
            <!-- Navbar -->
            @livewire('navigation-menu')
            
            <!-- Page Content -->
            @yield('content')
            
        </div>
        <!-- /.content-wrapper -->
        <!-- footer -->
        @include('partials.footer')
        <!-- /.footer -->  

      </div>
      <!-- ./wrapper -->

        @stack('modals')

        @livewireScripts

        <!-- Users Modal-->
        <script type="text/javascript">
            window.livewire.on('userStore', () => {
                $('#exampleModal').modal('hide');
            });
        </script>

        <!-- Document Date and Time -->
        <script>
            $(document).ready(function(){
                $('#docDateReceived').datetimepicker({
                    format: 'L',
                });

                $('#docDateReceived').on("change.datetimepicker", function (e) {
                    let date = $(this).data('docdatereceived');
                    eval(date).set('date_received', $('#docdatereceivedInput').val());
                });

                $('#docTimeReceived').datetimepicker({
                    format: 'LT',
                });

                $('#docTimeReceived').on("change.datetimepicker", function (e) {
                    let time = $(this).data('doctimereceived');
                    eval(time).set('time_received', $('#doctimereceivedInput').val());
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $('#docDateRoute').datetimepicker({
                    format: 'L',
                });

                $('#docDateRoute').on("change.datetimepicker", function (e) {
                    let date = $(this).data('docdateroute');
                    eval(date).set('due_date', $('#docdaterouteInput').val());
                });

                $('#docDateRouteAssigned').datetimepicker({
                    format: 'L',
                });

                $('#docDateRouteAssigned').on("change.datetimepicker", function (e) {
                    let date = $(this).data('docdaterouteassigned');
                    eval(date).set('assigned_date', $('#docdaterouteassignedInput').val());
                });

                $('#docDateRouteSent').datetimepicker({
                    format: 'L',
                });

                $('#docDateRouteSent').on("change.datetimepicker", function (e) {
                    let date = $(this).data('docdateroutesent');
                    eval(date).set('sent_date', $('#docdateroutesentInput').val());
                });
            });
        </script>
        
        <!-- Original Dropdown Select2 for address to -->
        <!-- <script>
            $(function () {
                //Initialize Select2 Elements
                $('.select2').select2();

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                theme: 'bootstrap4'
                })
            })
        </script> -->
        
        <!-- <script>
            $(document).ready(function() {
                $('#select2-dropdown').select2();
                $('#select2-dropdown').on('change', function (e) {
                    var data = $('#select2-dropdown').select2("val");
                    @$this.set('docclass', data);
                });
            });
        </script> -->
        <!-- <script>
            $(document).ready(function() {
                $('#docclass2').select2();
                $('#docclass2').on('change', function (e) {
                    var data = $('#docclass2').select2("val");
                    @$this.set('docclass', data);
                });
            });
        </script> -->
        <!-- DataTables -->
        <script>
        $(function () {
            $("#usermanage").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#usermanage_wrapper .col-md-6:eq(0)');

            $("#rolemanage").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#rolemanage_wrapper .col-md-6:eq(0)');

            $("#myexternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#myexternal_wrapper .col-md-6:eq(0)');

            $("#divunitexternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#divunitexternal_wrapper .col-md-6:eq(0)');

            $("#newexternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#newexternal_wrapper .col-md-6:eq(0)');
            
            $("#ipexternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#ipexternal_wrapper .col-md-6:eq(0)');

            $("#holdexternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#holdexternal_wrapper .col-md-6:eq(0)');

            $("#doneexternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#doneexternal_wrapper .col-md-6:eq(0)');

            $("#myinternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#myinternal_wrapper .col-md-6:eq(0)');

            $("#divunitinternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#divunitinternal_wrapper .col-md-6:eq(0)');

            $("#newinternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#newinternal_wrapper .col-md-6:eq(0)');

            $("#ipinternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#ipinternal_wrapper .col-md-6:eq(0)');

            $("#holdinternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#holdinternal_wrapper .col-md-6:eq(0)');

            $("#doneinternal").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#doneinternal_wrapper .col-md-6:eq(0)');

            $('#example2').DataTable({
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
        
        @stack('ex-personnel-js')
        @stack('in-personnel-js')
        @stack('ex-doc_type-js')
        @stack('in-doc_type-js')
        @stack('ex-doc_class-js')
        @stack('in-doc_class-js')
        @stack('ex-mode_of_trans-js')
        @stack('in-mode_of_trans-js')
        @stack('s_profile-js')
        @stack('received_by-js')
        <!-- @stack('js') -->
        <livewire:scripts />
    </body>
</html>
