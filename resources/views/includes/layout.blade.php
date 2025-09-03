<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from phplaravel-1384472-5380003.cloudwaysapps.com/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Sep 2025 10:53:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- All meta and title start-->
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template"
      name="description">
<meta content="admin template, ki-admin admin template, dashboard template, flat admin template, responsive admin template, web app"
      name="keywords">
<meta content="la-themes" name="author">

<link rel="icon" href="assets/images/logo/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

<title>Ecommerce Dashboard | ki-admin - Premium Admin Template</title>
<!-- meta and title end-->

<!-- css start !-->
<!-- Animation css -->
@include('includes.style')

<body>
<!-- Loader start-->
<div class="app-wrapper">
    <!-- Loader start-->
    <div class="loader-wrapper">
        <div class="loader_24"></div>
    </div>
    <!-- Loader end-->

    <!-- Menu Navigation start -->
<!-- Menu Navigation starts -->
@include('includes.sidebar')
<!-- Menu Navigation ends -->
<!-- Menu Navigation end -->


    <div class="app-content">
        <!-- Header Section start -->
    <!-- Header Section starts -->

@include('includes.header')

<!-- Header Section ends -->
    <!-- Header Section end -->

        <!-- Main Section start -->
        <main>
     <div class="container-fluid">
        @yield('content')
    </div>
</main>
        <!-- Main Section end -->
    </div>

    <!-- tap on top -->
    <div class="go-top">
      <span class="progress-value">
        <i class="ti ti-arrow-up"></i>
      </span>
    </div>

    <!-- Footer Section start -->
     <!-- Footer Section starts-->
@include('includes.footer')
<!-- Footer Section ends-->
    <!-- Footer Section end -->
</div>

<!--customizer-->
<div id="customizer"></div>

<!-- scripts start-->
@include('includes.script')
<!-- scripts end-->
</body>




<!-- Mirrored from phplaravel-1384472-5380003.cloudwaysapps.com/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Sep 2025 10:55:00 GMT -->
</html>
