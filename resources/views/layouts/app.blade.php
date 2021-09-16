<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Software libre para la gestión de evidencias de trabajo en jornadas docentes" />

    <title>@yield('title') | Evidentia Cloud</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css')}}">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Select 2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.css')}}">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css')}}">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <!-- Filepond -->
    <link rel="stylesheet" href="{{ asset('dist/css/filepond.css') }}" >

    <!-- Own style -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}" >



</head>



<body class="hold-transition sidebar-mini layout-navbar-fixed">

<div class="wrapper">

    @auth
        @if(Request::is('admin') || Request::is('admin/*'))
            <x-navbars.navbaradmin/>
        @else
            <x-navbars.navbarcommon/>
        @endif
    @endauth

    @guest
        <x-navbars.navbarguest/>
    @endguest

    {{---------------------------------------------------}}
    {{-- MAIN MENU --}}
    {{---------------------------------------------------}}

    <aside class="main-sidebar sidebar-dark-lightblue">

        <x-lilogo/>

        <div class="sidebar">

            <x-menus.menuguest/>

            @auth

                @if(Request::is('admin') || Request::is('admin/*'))

                    <x-menus.menuadmin/>

                @else

                    <x-liavatar/>

                    <x-menus.menucommon/>
                    <x-menus.menusecretary/>
                    <x-menus.menucoordinator/>
                    <x-menus.menuregistercoordinator/>
                    <x-menus.menupresident/>
                    <x-menus.menustudent/>
                    <x-menus.menulecture/>

                    <x-menus.menuoptions/>

                @endif

            @endauth

        </div>

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="padding: 0px 8px">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <ol class="breadcrumb mb-2">
                            @section('breadcrumb')
                            @show
                        </ol>
                        <h1 class="m-0 text-dark"><i class="@yield('title-icon')"></i>&nbsp;&nbsp;@yield('title')</h1>
                    </div>

                    <div class="col-12 col-md-6 mt-2">
                        @section('info')
                        @show
                    </div>

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Hecho con <i class="fas fa-heart"></i>
        </div>
        <!-- Default to the left -->
        GNU/GPL 3.0 · <a href="https://github.com/drorganvidez/evidentia"><i class="fab fa-github"></i> Repositorio en GitHub</a>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>

<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.js')}}"></script>

<!-- Toastr -->
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<!-- Bootstrap Switch -->
<script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

<!-- Selectors -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- File Input -->
<!-- <link href="{{asset('dist/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css" /> -->
<!-- <link href="{{asset('dist/themes/explorer/theme.css')}}" media="all" rel="stylesheet" type="text/css" /> -->

<script src="{{asset('dist/js/plugins/piexif.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dist/js/plugins/sortable.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dist/js/plugins/purify.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="{{asset('dist/js/fileinput.js')}}"></script>
<script src="{{asset('dist/themes/fas/theme.js')}}"></script>
<script src="{{asset('dist/themes/explorer/theme.js')}}"></script>
<script src="{{asset('dist/js/fileinput_locales/es.js')}}"></script>
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>



<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.js')}}"></script>



<script>


    $(document).ready(function(){



        $('.knob').knob()

        $('tableSelector').DataTable({
            "dom": '<"pull-left"f><"pull-right"l>tip'
        });

        // Esto sirve para inicializar funcionalidades especiales JavaScript

        $(function () {
            // Summernote
            $('.textarea').summernote()
        })


        $('#summernote').summernote({
            //placeholder: 'Incluye una breve descripción de tu evidencia',
            height: 300,
            minHeight: 300
        });

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $('.select2').select2()

        //Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Bootstrap Duallistbox
        var demo = $('.duallistbox').bootstrapDualListbox();
        demo.bootstrapDualListbox('setSelectOrMinimalHeight',200);

        // Data set
        $(function () {
            $('#dataset').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });

            $('#dataset2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });

    });

    // estados
    @if (session('success'))

        $(document).Toasts('create', {
            title: '¡Felicidades!',
            icon: 'fas fa-check-circle',
            class: 'bg-success',
            autohide: true,
            delay: 7000,
            body: '{!!  session("success") !!}'
        });

    @endif

    @if (session('error'))

        $(document).Toasts('create', {
            title: '¡Error!',
            icon: 'icon fas fa-ban',
            class: 'bg-danger',
            autohide: true,
            delay: 7000,
            body: '{!!  session("error") !!}'
        });

    @endif

    @if (session('warning'))

        $(document).Toasts('create', {
            title: '¡Aviso!',
            icon: 'icon fas fa-ban',
            class: 'bg-danger',
            autohide: true,
            delay: 7000,
            body: '{!!  session("warning") !!}'
        });

    @endif

    @if (session('light'))

        $(document).Toasts('create', {
            title: 'Restablecer contraseña',
            icon: 'fas fa-info',
            class: 'bg-light',
            autohide: true,
            delay: 7000,
            body: '{!!  session("light") !!}'
        });

    @endif


    $(".filepond--file-wrapper").on('click', '.filepond--file-action-button.filepond--action-revert-item-processing', function () {
        console.log("asdfasjdf ñlasjdfalsdjfa sdfaa");
    });

    $('.filepond--action-revert-item-processing').on('click',function(){
        printData();
    })

</script>

<script src="{{asset('dist/js/filepond-plugin-file-validate-size.js')}}"></script>
<script src="{{asset('dist/js/filepond-plugin-file-validate-type.js')}}"></script>
<script src="{{asset('dist/js/filepond.js')}}"></script>

@yield('scripts')

</body>

</html>
