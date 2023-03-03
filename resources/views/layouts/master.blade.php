<!doctype html>
<html lang="en">
    
<!-- Mirrored from themesbrand.com/canvab/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 11:14:32 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>School Management System</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{asset('master/assets/images/favicon.ico')}}">
  <!-- DataTables -->
  <link href="{{asset('master/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('master/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- Responsive datatable examples -->
  <link href="{{asset('master/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!--Chartist Chart CSS -->
        <link rel="stylesheet" href="{{asset('master/plugins/chartist/css/chartist.min.css')}}">

        <!-- Basic Css files -->
        <link href="{{asset('master/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('master/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('master/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="sk-three-bounce">
                    <div class="sk-child sk-bounce1"></div>
                    <div class="sk-child sk-bounce2"></div>
                    <div class="sk-child sk-bounce3"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index.html" class="logo text-center">SMS</a>
                       {{-- <a href="index.html" class="logo"><img src="{{asset('master/assets/images/logo.png')}}" height="14" alt="logo"></a> --}}
                    </div>
                </div>

               @include('layouts.admin.navbar')

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
          @include('layouts.admin.sidebar')
            <!-- Left Sidebar End -->


            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row pt-1">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">SMS</a></li>
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            @if(session()->has('success')) 
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ session()->get('success') }}
                            </div>
                            @endif

                           

                           @yield('content')
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

               @include('layouts.admin.footer')

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('master/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('master/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('master/assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('master/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('master/assets/js/waves.js')}}"></script>
        <script src="{{asset('master/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('master/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!--Chartist Chart-->
        <script src="{{asset('master/plugins/chartist/js/chartist.min.js')}}"></script>
        <script src="{{asset('master/plugins/chartist/js/chartist-plugin-tooltip.min.js')}}"></script>

        <!-- KNOB JS -->
        <script src="{{asset('master/plugins/jquery-knob/excanvas.js')}}"></script>
        <script src="{{asset('master/plugins/jquery-knob/jquery.knob.js')}}"></script>

        <!-- Dashboard init -->
        <script src="{{asset('master/assets/pages/dashboard.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('master/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('master/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('master/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('master/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('master/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('master/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('master/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('master/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('master/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('master/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('master/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('master/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('master/assets/pages/datatables.init.js')}}"></script>


        <!-- App js -->
        <script src="{{asset('master/assets/js/app.js')}}"></script>


        <script>
            $("#user_cat").change(function() {
          if ($(this).val() == "student") {
              $('#students').show();
            $('#student').show();
            $('#studen').show();
            $('#stude').show();
            $('#study').show();
            $('#button').show();
            $('#teacher').hide();
            $('#teachers').hide();
            $('#parents').hide();
            $('#normal').hide();
            $('#normals').hide();
            $("#scholaring").change(function() {
            if ($(this).val() == "day") {
            $('#stud').hide();
            $('#stu').show();
            $('#route','#vehicle').attr('required', '');
            $('#route','#vehicle').attr('data-error', 'This field is required.');
            $('#domitory','#room',).val(1);
            }
            if ($(this).val() == "boarding") {
            $('#stud').show();
            $('#stu').hide();
            $('#domitory','#room').attr('required', '');
            $('#domitory','#room').attr('data-error', 'This field is required.');
            $('#route','#vehicle',).val(1);
            }
            });
        
          } 
        //  if ($(this).val() == "electronic") {
        //     $('#electronics').show();
        //     $('#building').hide();
        //     $('#buildings').hide();
        //     $('#furniture').hide();
        //     $('#transport').hide();
        //     $('#transports').hide();
        //     $('#modeli','#chapa','#serial_no',).attr('required', '');
        //     $('#serial_no','#modeli','#chapa',).attr('data-error', 'This field is required.');
        //     $('#cheses_no','#engine_capacity', '#reg_no','#engine_no','#size','#floor_no','#no_of_rooms',
        //     '#purpose','#transport_type','#model','#brand').val(1);
        //   } 
        //  if ($(this).val() == "building") {
        //     $('#building').show();
        //     $('#buildings').show();
        //     $('#furniture').hide();
        //     $('#electronics').hide();
        //     $('#transport').hide();
        //     $('#transports').hide();
        //     $('#manufactured_year').hide();
        //     $('#btn').show();
        //     $('#size','#floor_no','#no_of_rooms','#purpose').attr('required', '');
        //     $('#size','#floor_no','#no_of_rooms','#purpose').attr('data-error', 'This field is required.');
        //     $('#model','#brand','#chapa','#modeli','#serial_no','#cheses_no','#engine_capacity',
        //     '#reg_no','#engine_no','#transport_type').val(1);
        //   } 
        //    if ($(this).val() == "transport") {
        //     $('#transport').show();
        //     $('#transports').show();
        //     $('#building').hide();
        //     $('#buildings').hide();
        //     $('#furniture').hide();
        //     $('#electronics').hide();
        //     $('#btn').show();
        //     $('#transport_type','#cheses_no','#engine_capacity','#reg_no','#engine_no','#model','#brand').attr('required', '');
        //     $('#transport_type','#cheses_no','#engine_capacity','#reg_no','#engine_no','#model','#brand',).attr('data-error', 'This field is required.');
        //     $('#serial_no',
        //     '#reg_no','#engine_no','#size','#floor_no','#no_of_rooms','#purpose','#chapa','#modeli',).val(1);
        //   } 
        });
        </script>

<script>

    $(document).ready(function () {
       
        // Level Dropdown Change Event

        $('#level').on('change', function () {
            var idLevel = this.value;
            $("#darasa").html('');
            $.ajax({
                url: "{{url('fetch-class')}}",
                type: "POST",
                data: {
                    level_id: idLevel,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#darasa').html('<option value="">-- Select Class --</option>');
                    $.each(result.darasas, function (key, value) {
                        $("#darasa").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });


      
        // Class Dropdown Change Event
        $('#darasa').on('change', function () {
            var idDarasa = this.value;
            $("#stream").html('');
            $.ajax({
                url: "{{url('fetch-stream')}}",
                type: "POST",
                data: {
                    darasa_id: idDarasa,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#stream').html('<option value="">-- Select Stream --</option>');
                    $.each(res.streams, function (key, value) {
                        $("#stream").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        // Route Dropdown Change Event
        $('#route').on('change', function () {
            var idRoute = this.value;
            $("#vehicle").html('');
            $.ajax({
                url: "{{url('fetch-vehicle')}}",
                type: "POST",
                data: {
                    njia_id: idRoute,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#vehicle').html('<option value="">-- Select Vehicle --</option>');
                    $.each(res.vehicles, function (key, value) {
                        $("#vehicle").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

         // Domitory Dropdown Change Event
         $('#domitory').on('change', function () {
            var idDomitory = this.value;
            $("#room").html('');
            $.ajax({
                url: "{{url('fetch-room')}}",
                type: "POST",
                data: {
                    dom_id: idDomitory,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#room').html('<option value="">-- Select Room --</option>');
                    $.each(res.rooms, function (key, value) {
                        $("#room").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });

    

</script>


    </body>

<!-- Mirrored from themesbrand.com/canvab/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 11:16:08 GMT -->
</html>