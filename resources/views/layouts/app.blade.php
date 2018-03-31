<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

 <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
         <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('/js/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
</head>

        @role('admin|owner')
         <body class="theme-red">
            @include('admin.layouts.headadmin')
            @include('admin.layouts.sidebar')
            </section>
        @endrole
        @role('admin|owner')
    <section class="content">
        <div class="container-fluid">
        @endrole
        @yield('content')
        @role('admin|owner')
        </div>
    </section>
    @endrole
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Select Plugin Js -->
     <script src="{{ asset('js/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

     <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('js/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="{{ asset('js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('js/plugins/node-waves/waves.js') }}"></script>


    <script src="{{ asset('js/plugins/jquery-countto/jquery.countTo.js') }}"></script>
    <!-- <script src="{{ asset('/js/admin.js') }}"></script> -->
    <script src="{{ asset('/js/plugins/raphael/raphael.min.js') }}"></script>


    <!-- Autosize Plugin Js -->
     <script src="{{ asset('/js/plugins/autosize/autosize.js') }}"></script>
     <!-- Moment Plugin Js -->
     <script src="{{ asset('/js/plugins/momentjs/moment.js') }}"></script>

     <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('/js/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>


    <script src="{{ asset('/js/plugins/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('/js/plugins/chartjs/Chart.bundle.js') }}"></script>
    <script src="{{ asset('/js/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('/js/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/js/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/js/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('/js/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <script src="{{ asset('/js/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

    <!-- Multi Select Plugin Js -->
    <script src="{{ asset('/js/plugins/multi-select/js/jquery.multi-select.js') }}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{ asset('/js/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ asset('/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{ asset('/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('/js/plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Jquery Validation Plugin Css -->
   <script src="{{ asset('/js/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- noUISlider Plugin Js -->
    <script src="{{ asset('/js/plugins/nouislider/nouislider.js') }}"></script>

    <!-- Dropzone Plugin Js -->
    <script src="{{ asset('/js/plugins/dropzone/dropzone.js') }}"></script>
    <!-- Google Maps API Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1Lc3Crvsn-txbqyvCCnonJ3W9A8M_bY0&callback=initMap"
async defer></script>

    <!-- Custom Js -->
    <script src="{{ asset('/js/admin.js') }}"></script>
    <script src="{{ asset('/js/pages/index.js') }}"></script>
    <script src="{{ asset('/js/pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{ asset('/js/pages/forms/advanced-form-elements.js') }}"></script>
     <script src="{{ asset('/js/pages/forms/form-validation.js') }}"></script>
    <script src="{{ asset('/js/pages/forms/form-wizard.js') }}"></script>
    <!-- GMaps PLugin Js -->
    <script src="{{ asset('/js/plugins/gmaps/gmaps.js') }}"></script>
     <!-- Custom Js -->
     <script src="{{ asset('/js/pages/maps/google.js') }}"></script>
    <!-- Demo Js -->
    <script src="{{ asset('/js/demo.js') }}"></script>

</body>
</html>
