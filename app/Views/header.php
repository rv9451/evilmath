<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>evilMaths</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="<?php echo base_url() ;?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>EvilMaths</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url() ;?>" class="nav-item nav-link active">Home</a>
                <a href="<?php echo base_url() . 'aboutus'; ?>" class="nav-item nav-link">About</a>
                <!-- <a href="assetscourses.html" class="nav-item nav-link">Courses</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Academic</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="<?php echo base_url() . 'bsc'; ?>"  class="dropdown-item">B.SC</a>
                        <a href="<?php echo base_url() . 'msc'; ?>"  class="dropdown-item">MSc</a>
                        <!-- <a href="404.html" class="dropdown-item">Tifr</a> -->
                        <a href="#" class="dropdown-item">SSC</a>
                    </div>
                </div>
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Competitive Exam</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#" class="dropdown-item">CISR NET</a>
                        <a href="#" class="dropdown-item">Gate</a>
                        <a href="#" class="dropdown-item">IIT JAM</a>
                        <a href="#" class="dropdown-item">NBHM</a>
                    </div>
                </div>
                <a href="<?php echo base_url() . 'contact'; ?>" class="nav-item nav-link">Contact</a>

            </div>
            <a href=" https://whatsapp.com/channel/0029VaAutW01SWt1CA4QCw0a " class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
