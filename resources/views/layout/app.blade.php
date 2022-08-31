<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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

{{-- toastr.min.css --}}
<link rel="stylesheet" href="{{ asset('toastr.min.css') }}">

<script src="{{ asset('jquery-3.6.0.min.js') }}"></script>
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

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

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

 {{-- jquery --}}
 <script src="{{ asset('jquery-3.6.0.min.js') }}"></script>

  {{-- Toastr min.js --}}
  <script src="{{ asset('toastr.min.js') }}"></script>


</body>

</html>
