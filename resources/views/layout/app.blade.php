<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <!--
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
-->
  <!-- Vendor CSS Files -->
<link href="{{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/boxicons/css/boxicons.min.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/quill/quill.snow.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/quill/quill.bubble.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/remixicon/remixicon.css") }}" rel="stylesheet">
<link href="{{ asset("assets/vendor/simple-datatables/style.css") }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">
<link href="{{ asset("css/app.css") }}" rel="stylesheet">
<script src="{{ asset("js/jquery-3.6.0.min.js") }}"></script>

{{-- FontAwsome --}}
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.1-web/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.1.1-web/css/all.min.css') }}">

{{-- datatables css--}}
<link rel="stylesheet" href="{{ asset('dataTable/Bootstrap-5-5.1.3/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('dataTable/DataTables-1.12.1/css/dataTables.bootstrap5.min.css') }}">




{{-- toastr.min.css --}}
<link rel="stylesheet" href="{{ asset('toastr.min.css') }}">
<script src="{{ asset('toastr.min.js') }}"></script>


{{-- datatables js
    <script src="{{ asset('dataTable/DataTables-1.12.1/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dataTable/DataTables-1.12.1/js/dataTables.bootstrap5.min.js') }}"></script>

    --}}




  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 @include('layout.header')

@include('layout.sidebar')





  <main id="main" class="main">


    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

        @yield('conteudo')

  </main><!-- End #main -->


    @include('layout.footer')



 <!-- Vendor JS Files -->
 <script src="{{ asset("assets/vendor/apexcharts/apexcharts.min.js") }}"></script>
 <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
 <script src="{{ asset("assets/vendor/chart.js/chart.min.js") }}"></script>
 <script src="{{ asset("assets/vendor/echarts/echarts.min.js") }}"></script>
 <script src="{{ asset("assets/vendor/quill/quill.min.js") }}"></script>
 <script src="{{ asset("assets/vendor/simple-datatables/simple-datatables.js") }}"></script>
 <script src="{{ asset("assets/vendor/tinymce/tinymce.min.js") }}"></script>
 <script src="{{ asset("assets/vendor/php-email-form/validate.js") }}"></script>

 <!-- Template Main JS File -->
 <script src="{{ asset("assets/js/main.j") }}"></script>
 <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/bootstrap.js') }}"></script>

 {{-- fontawsome --}}

 <script src="{{ asset('fontawesome-free-6.1.1-web/js/fontawesome.min.js') }}"></script>

 {{-- jquery
    <script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
    --}}

 <script src="{{ asset('dataTable/jQuery-3.6.0/jquery-3.6.0.min.js') }}"></script>

 {{-- dataTables js --}}
 <script src="{{ asset('dataTable/DataTables-1.12.1/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('dataTable/DataTables-1.12.1/js/dataTables.bootstrap5.min.js') }}"></script>

  {{-- Toastr min.js --}}
  <script src="{{ asset('toastr.min.js') }}"></script>

  <script >


    $(document).ready(function(){

        toastr.options.timeOut=10000;
        toastr.options.closeButton=true;
        toastr.options.progressBar=true;

        @if (Session::has('error'))

            toastr.error('{{ Session::get('error') }}');

        @elseif (Session::has('success'))

            toastr.success('{{ Session::get('success') }}');

        @elseif (Session::has('warning'))
            toastr.warning('{{ Session::get('warning') }}');

        @elseif (Session::has('info'))
            toastr.info('{{ Session::get('info') }}')
        @endif
    });


    $(document).ready(function () {
    $('#example').DataTable({
        order: [[3, 'asc']],
    });

}


</script>

    @include('js.js')

</body>

</html>
