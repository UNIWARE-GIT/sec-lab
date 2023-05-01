<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.2.3/dist/zephyr/bootstrap.min.css">

  <!-- Template Main CSS File -->

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{asset('/storage/img_res/logo_transparent.png')}}" class="d-block mx-lg-auto img-fluid" alt="logo-crspl" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">SE - Crespal S.A.</h1>
        <p class="lead">Sistema de despliegue estadistico de Laboratorios CRESPAL S.A.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          @guest
          <a class="btn btn-primary btn-lg mx-auto px-4 me-md-2" href="{{ route('login') }}">Iniciar Sesion</a>
          @else
          <a class="btn btn-primary btn-lg mx-auto px-4 me-md-2" href="{{ route('home') }}">Ir a Dashboard</a>
          @endguest
          {{-- <a class="btn btn-primary btn-lg px-4 me-md-2" href="{{ route('register') }}">{{ __('Registrarse') }}</a> --}}
        </div>
      </div>
    </div>
  </div>
</body>

</html>