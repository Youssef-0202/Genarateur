
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link href="{{ asset('img/logo1.jpg') }}" rel="icon">
    <!-- Page Title  -->
    <title>Default Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.2">
    <link id="" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.2">
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.2.2') }}">
    <link rel="skin-default" href="{{ asset('assets/css/theme.css?ver=3.2.2') }}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="html/index.html" class="logo-link nk-sidebar-logo">
                            <h3 class="sitename">WebCraft</h3>
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Menu</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('dashboard') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bag"></em></span>
                                        <span class="nk-menu-text">Dashboard</span><span class="nk-menu-badge">HOT</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('templates.list') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                                        <span class="nk-menu-text">Template Gallery</span><span class="nk-menu-badge">HOT</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->

            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-name dropdown-indicator"> {{ Auth::user()->name }}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"> {{ Auth::user()->name }}</span>
                                                        <span class="sub-text"> {{ Auth::user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="#" id="logout-link">
                                                            <em class="icon ni ni-signout"></em>
                                                            <span>Sign out</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->



































                <div class="nk-content">
                    <div class="container-fluid">













                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="utf-8">
                            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                            <title>Index - iLanding Bootstrap Template</title>
                            <meta name="description" content="">
                            <meta name="keywords" content="">

                            <!-- Favicons -->
                            <link href="{{ asset('templateOne/img/favicon.png') }}" rel="icon">
                            <link href="{{ asset('templateOne/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

                            <!-- Fonts -->
                            <link href="https://fonts.googleapis.com" rel="preconnect">
                            <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
                            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

                            <!-- Vendor CSS Files -->
                            <link href="{{ asset('templateOne/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
                            <link href="{{ asset('templateOne/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
                            <link href="{{ asset('templateOne/vendor/aos/aos.css') }}" rel="stylesheet">
                            <link href="{{ asset('templateOne/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
                            <link href="{{ asset('templateOne/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

                            <!-- Main CSS File -->
                            <link href="{{ asset('templateOne/css/main.css') }}" rel="stylesheet">

                            <!-- =======================================================
                            * Template Name: iLanding
                            * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
                            * Updated: Nov 12 2024 with Bootstrap v5.3.3
                            * Author: BootstrapMade.com
                            * License: https://bootstrapmade.com/license/
                            ======================================================== -->
                        </head>

                        <body class="index-page">



                        <main class="main">

                            <!-- Hero Section -->
                            <section id="hero" class="hero section">

                                <div class="container" data-aos="fade-up" data-aos-delay="100">

                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                                                <div class="company-badge mb-4">
                                                    <i class="bi bi-gear-fill me-2"></i>
                                                    Working for your success
                                                </div>

                                                <h1 class="mb-4">
                                                    Maecenas Vitae <br>
                                                    Consectetur Led <br>
                                                    <span class="accent-text">Vestibulum Ante</span>
                                                </h1>

                                                <p class="mb-4 mb-md-5">
                                                    Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                                                    Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                                                </p>

                                                <div class="hero-buttons">
                                                    <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                                                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                                                        <i class="bi bi-play-circle me-1"></i>
                                                        Play Video
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                                                <img src="{{ asset('templateOne/img/illustration-1.webp') }}" alt="Hero Image" class="img-fluid">

                                                <div class="customers-badge">
                                                    <div class="customer-avatars">
                                                        <img src="{{ asset('templateOne/img/avatar-1.webp') }}" alt="Customer 1" class="avatar">
                                                        <img src="{{ asset('templateOne/img/avatar-2.webp') }}" alt="Customer 2" class="avatar">
                                                        <img src="{{ asset('templateOne/img/avatar-3.webp') }}" alt="Customer 3" class="avatar">
                                                        <img src="{{ asset('templateOne/img/avatar-4.webp') }}" alt="Customer 4" class="avatar">
                                                        <img src="{{ asset('templateOne/img/avatar-5.webp') }}" alt="Customer 5" class="avatar">
                                                        <span class="avatar more">12+</span>
                                                    </div>
                                                    <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="stat-item">
                                                <div class="stat-icon">
                                                    <i class="bi bi-trophy"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <h4>3x Won Awards</h4>
                                                    <p class="mb-0">Vestibulum ante ipsum</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="stat-item">
                                                <div class="stat-icon">
                                                    <i class="bi bi-briefcase"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <h4>6.5k Faucibus</h4>
                                                    <p class="mb-0">Nullam quis ante</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="stat-item">
                                                <div class="stat-icon">
                                                    <i class="bi bi-graph-up"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <h4>80k Mauris</h4>
                                                    <p class="mb-0">Etiam sit amet orci</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="stat-item">
                                                <div class="stat-icon">
                                                    <i class="bi bi-award"></i>
                                                </div>
                                                <div class="stat-content">
                                                    <h4>6x Phasellus</h4>
                                                    <p class="mb-0">Vestibulum ante ipsum</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section><!-- /Hero Section -->

                            <!-- About Section -->
                            <section id="about" class="about section">

                                <div class="container" data-aos="fade-up" data-aos-delay="100">

                                    <div class="row gy-4 align-items-center justify-content-between">

                                        <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                                            <span class="about-meta">MORE ABOUT US</span>
                                            <h2 class="about-title">Voluptas enim suscipit temporibus</h2>
                                            <p class="about-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                            <div class="row feature-list-wrapper">
                                                <div class="col-md-6">
                                                    <ul class="feature-list">
                                                        <li><i class="bi bi-check-circle-fill"></i> Lorem ipsum dolor sit amet</li>
                                                        <li><i class="bi bi-check-circle-fill"></i> Consectetur adipiscing elit</li>
                                                        <li><i class="bi bi-check-circle-fill"></i> Sed do eiusmod tempor</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="feature-list">
                                                        <li><i class="bi bi-check-circle-fill"></i> Incididunt ut labore et</li>
                                                        <li><i class="bi bi-check-circle-fill"></i> Dolore magna aliqua</li>
                                                        <li><i class="bi bi-check-circle-fill"></i> Ut enim ad minim veniam</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="info-wrapper">
                                                <div class="row gy-4">
                                                    <div class="col-lg-5">
                                                        <div class="profile d-flex align-items-center gap-3">
                                                            <img src="{{ asset('templateOne/img/avatar-1.webp') }}" alt="CEO Profile" class="profile-image">
                                                            <div>
                                                                <h4 class="profile-name">Mario Smith</h4>
                                                                <p class="profile-position">CEO &amp; Founder</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="contact-info d-flex align-items-center gap-2">
                                                            <i class="bi bi-telephone-fill"></i>
                                                            <div>
                                                                <p class="contact-label">Call us anytime</p>
                                                                <p class="contact-number">+123 456-789</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                                            <div class="image-wrapper">
                                                <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                                    <img src="{{ asset('templateOne/img/about-5.webp') }}" alt="Business Meeting" class="img-fluid main-image rounded-4">
                                                    <img src="{{ asset('templateOne/img/about-2.webp') }}" alt="Team Discussion" class="img-fluid small-image rounded-4">
                                                </div>
                                                <div class="experience-badge floating">
                                                    <h3>15+ <span>Years</span></h3>
                                                    <p>Of experience in business service</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </section><!-- /About Section -->

                            <!-- Features Section -->
                            <section id="features" class="features section">

                                <!-- Section Title -->
                                <div class="container section-title" data-aos="fade-up">
                                    <h2>Features</h2>
                                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                                </div><!-- End Section Title -->

                                <div class="container">

                                    <div class="d-flex justify-content-center">

                                        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

                                            <li class="nav-item">
                                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                                    <h4>Modisit</h4>
                                                </a>
                                            </li><!-- End tab nav item -->

                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                                    <h4>Praesenti</h4>
                                                </a><!-- End tab nav item -->

                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                                    <h4>Explica</h4>
                                                </a>
                                            </li><!-- End tab nav item -->

                                        </ul>

                                    </div>

                                    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                                        <div class="tab-pane fade active show" id="features-tab-1">
                                            <div class="row">
                                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                                    <h3>Voluptatem dignissimos provident</h3>
                                                    <p class="fst-italic">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                        magna aliqua.
                                                    </p>
                                                    <ul>
                                                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                                    <img src="{{ asset('templateOne/img/features-illustration-1.webp') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div><!-- End tab content item -->

                                        <div class="tab-pane fade" id="features-tab-2">
                                            <div class="row">
                                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                                    <h3>Neque exercitationem debitis</h3>
                                                    <p class="fst-italic">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                        magna aliqua.
                                                    </p>
                                                    <ul>
                                                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                                    <img src="{{ asset('templateOne/img/features-illustration-2.webp') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div><!-- End tab content item -->

                                        <div class="tab-pane fade" id="features-tab-3">
                                            <div class="row">
                                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                                    <h3>Voluptatibus commodi accusamu</h3>
                                                    <ul>
                                                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                                                        <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                                                    </ul>
                                                    <p class="fst-italic">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                        magna aliqua.
                                                    </p>
                                                </div>
                                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                                    <img src="{{ asset('templateOne/img/features-illustration-3.webp') }}" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div><!-- End tab content item -->

                                    </div>

                                </div>

                            </section><!-- /Features Section -->

                            <!-- Features Cards Section -->
                            <section id="features-cards" class="features-cards section">

                                <div class="container">

                                    <div class="row gy-4">

                                        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                                            <div class="feature-box orange">
                                                <i class="bi bi-award"></i>
                                                <h4>Corporis voluptates</h4>
                                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                                            </div>
                                        </div><!-- End Feature Borx-->

                                        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                            <div class="feature-box blue">
                                                <i class="bi bi-patch-check"></i>
                                                <h4>Explicabo consectetur</h4>
                                                <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                                            </div>
                                        </div><!-- End Feature Borx-->

                                        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                                            <div class="feature-box green">
                                                <i class="bi bi-sunrise"></i>
                                                <h4>Ullamco laboris</h4>
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                            </div>
                                        </div><!-- End Feature Borx-->

                                        <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                                            <div class="feature-box red">
                                                <i class="bi bi-shield-check"></i>
                                                <h4>Labore consequatur</h4>
                                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                            </div>
                                        </div><!-- End Feature Borx-->

                                    </div>

                                </div>

                            </section><!-- /Features Cards Section -->

                            <!-- Features 2 Section -->
                            <!-- /Features 2 Section -->

                            <!-- Call To Action Section -->
                            <section id="call-to-action" class="call-to-action section">

                                <div class="container" data-aos="fade-up" data-aos-delay="100">

                                    <div class="row content justify-content-center align-items-center position-relative">
                                        <div class="col-lg-8 mx-auto text-center">
                                            <h2 class="display-4 mb-4">Maecenas tempus tellus eget condimentum</h2>
                                            <p class="mb-4">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel</p>
                                            <a href="#" class="btn btn-cta">Call To Action</a>
                                        </div>

                                        <!-- Abstract Background Elements -->
                                        <div class="shape shape-1">
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z" transform="translate(100 100)"></path>
                                            </svg>
                                        </div>

                                        <div class="shape shape-2">
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z" transform="translate(100 100)"></path>
                                            </svg>
                                        </div>

                                        <!-- Dot Pattern Groups -->
                                        <div class="dots dots-1">
                                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <pattern id="dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                                </pattern>
                                                <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
                                            </svg>
                                        </div>

                                        <div class="dots dots-2">
                                            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                                    <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                                                </pattern>
                                                <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
                                            </svg>
                                        </div>

                                        <div class="shape shape-3">
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M43.3,-57.1C57.4,-46.5,71.1,-32.6,75.3,-16.2C79.5,0.2,74.2,19.1,65.1,35.3C56,51.5,43.1,65,27.4,71.7C11.7,78.4,-6.8,78.3,-23.9,72.4C-41,66.5,-56.7,54.8,-65.4,39.2C-74.1,23.6,-75.8,4,-71.7,-13.2C-67.6,-30.4,-57.7,-45.2,-44.3,-56.1C-30.9,-67,-15.5,-74,0.7,-74.9C16.8,-75.8,33.7,-70.7,43.3,-57.1Z" transform="translate(100 100)"></path>
                                            </svg>
                                        </div>
                                    </div>

                                </div>

                            </section><!-- /Call To Action Section -->

                            <!-- Clients Section -->
                            <section id="clients" class="clients section">

                                <div class="container" data-aos="fade-up" data-aos-delay="100">

                                    <div class="swiper init-swiper">
                                        <script type="application/json" class="swiper-config">
                                            {
                                                "loop": true,
                                                "speed": 600,
                                                "autoplay": {
                                                    "delay": 5000
                                                },
                                                "slidesPerView": "auto",
                                                "pagination": {
                                                    "el": ".swiper-pagination",
                                                    "type": "bullets",
                                                    "clickable": true
                                                },
                                                "breakpoints": {
                                                    "320": {
                                                        "slidesPerView": 2,
                                                        "spaceBetween": 40
                                                    },
                                                    "480": {
                                                        "slidesPerView": 3,
                                                        "spaceBetween": 60
                                                    },
                                                    "640": {
                                                        "slidesPerView": 4,
                                                        "spaceBetween": 80
                                                    },
                                                    "992": {
                                                        "slidesPerView": 6,
                                                        "spaceBetween": 120
                                                    }
                                                }
                                            }
                                        </script>
                                        <div class="swiper-wrapper align-items-center">
                                            <div class="swiper-slide"><img src="{{ asset('templateOne/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
                                            <div class="swiper-slide"><img src="{{ asset('templateOne/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
                                            <div class="swiper-slide"><img src="{{ asset('templateOne/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
                                            <div class="swiper-slide"><img src="{{ asset('templateOne/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
                                            <div class="swiper-slide"><img src="{{ asset('templateOne/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
                                            <div class="swiper-slide"><img src="{{ asset('templateOne/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
                                            <div class="swiper-slide"><img src="{{ asset('templateOne/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
                                            <div class="swiper-slide"><img src="{{ asset('templateOne/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>

                            </section><!-- /Clients Section -->

                            <!-- Testimonials Section -->
                            <section id="testimonials" class="testimonials section light-background">

                                <!-- Section Title -->
                                <div class="container section-title" data-aos="fade-up">
                                    <h2>Testimonials</h2>
                                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                                </div><!-- End Section Title -->

                                <div class="container">

                                    <div class="row g-5">

                                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="testimonial-item">
                                                <img src="{{ asset('templateOne/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                                                <h3>Saul Goodman</h3>
                                                <h4>Ceo &amp; Founder</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div><!-- End testimonial item -->

                                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                            <div class="testimonial-item">
                                                <img src="{{ asset('templateOne/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                                                <h3>Sara Wilsson</h3>
                                                <h4>Designer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div><!-- End testimonial item -->

                                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                            <div class="testimonial-item">
                                                <img src="{{ asset('templateOne/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                                                <h3>Jena Karlis</h3>
                                                <h4>Store Owner</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div><!-- End testimonial item -->

                                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                                            <div class="testimonial-item">
                                                <img src="{{ asset('templateOne/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                                                <h3>Matt Brandon</h3>
                                                <h4>Freelancer</h4>
                                                <div class="stars">
                                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                                </div>
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                            </div>
                                        </div><!-- End testimonial item -->

                                    </div>

                                </div>

                            </section><!-- /Testimonials Section -->

                            <!-- Stats Section -->
                            <section id="stats" class="stats section">

                                <div class="container" data-aos="fade-up" data-aos-delay="100">

                                    <div class="row gy-4">

                                        <div class="col-lg-3 col-md-6">
                                            <div class="stats-item text-center w-100 h-100">
                                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                                                <p>Clients</p>
                                            </div>
                                        </div><!-- End Stats Item -->

                                        <div class="col-lg-3 col-md-6">
                                            <div class="stats-item text-center w-100 h-100">
                                                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                                                <p>Projects</p>
                                            </div>
                                        </div><!-- End Stats Item -->

                                        <div class="col-lg-3 col-md-6">
                                            <div class="stats-item text-center w-100 h-100">
                                                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                                                <p>Hours Of Support</p>
                                            </div>
                                        </div><!-- End Stats Item -->

                                        <div class="col-lg-3 col-md-6">
                                            <div class="stats-item text-center w-100 h-100">
                                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                                                <p>Workers</p>
                                            </div>
                                        </div><!-- End Stats Item -->

                                    </div>

                                </div>

                            </section><!-- /Stats Section -->

                            <!-- Services Section -->
                            <section id="services" class="services section light-background">

                                <!-- Section Title -->
                                <div class="container section-title" data-aos="fade-up">
                                    <h2>Services</h2>
                                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                                </div><!-- End Section Title -->

                                <div class="container" data-aos="fade-up" data-aos-delay="100">

                                    <div class="row g-4">

                                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="service-card d-flex">
                                                <div class="icon flex-shrink-0">
                                                    <i class="bi bi-activity"></i>
                                                </div>
                                                <div>
                                                    <h3>Nesciunt Mete</h3>
                                                    <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                                                    <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- End Service Card -->

                                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                            <div class="service-card d-flex">
                                                <div class="icon flex-shrink-0">
                                                    <i class="bi bi-diagram-3"></i>
                                                </div>
                                                <div>
                                                    <h3>Eosle Commodi</h3>
                                                    <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                                                    <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- End Service Card -->

                                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                            <div class="service-card d-flex">
                                                <div class="icon flex-shrink-0">
                                                    <i class="bi bi-easel"></i>
                                                </div>
                                                <div>
                                                    <h3>Ledo Markt</h3>
                                                    <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                                                    <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- End Service Card -->

                                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                                            <div class="service-card d-flex">
                                                <div class="icon flex-shrink-0">
                                                    <i class="bi bi-clipboard-data"></i>
                                                </div>
                                                <div>
                                                    <h3>Asperiores Commodit</h3>
                                                    <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                                                    <a href="service-details.html" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- End Service Card -->

                                    </div>

                                </div>

                            </section><!-- /Services Section -->

                            <!-- Pricing Section -->
                            <section id="pricing" class="pricing section light-background">

                                <!-- Section Title -->
                                <div class="container section-title" data-aos="fade-up">
                                    <h2>Pricing</h2>
                                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                                </div><!-- End Section Title -->

                                <div class="container" data-aos="fade-up" data-aos-delay="100">

                                    <div class="row g-4 justify-content-center">

                                        <!-- Basic Plan -->
                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                            <div class="pricing-card">
                                                <h3>Basic Plan</h3>
                                                <div class="price">
                                                    <span class="currency">$</span>
                                                    <span class="amount">9.9</span>
                                                    <span class="period">/ month</span>
                                                </div>
                                                <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>

                                                <h4>Featured Included:</h4>
                                                <ul class="features-list">
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Duis aute irure dolor
                                                    </li>
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Excepteur sint occaecat
                                                    </li>
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Nemo enim ipsam voluptatem
                                                    </li>
                                                </ul>

                                                <a href="#" class="btn btn-primary">
                                                    Buy Now
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Standard Plan -->
                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                                            <div class="pricing-card popular">
                                                <div class="popular-badge">Most Popular</div>
                                                <h3>Standard Plan</h3>
                                                <div class="price">
                                                    <span class="currency">$</span>
                                                    <span class="amount">19.9</span>
                                                    <span class="period">/ month</span>
                                                </div>
                                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>

                                                <h4>Featured Included:</h4>
                                                <ul class="features-list">
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Lorem ipsum dolor sit amet
                                                    </li>
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Consectetur adipiscing elit
                                                    </li>
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Sed do eiusmod tempor
                                                    </li>
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Ut labore et dolore magna
                                                    </li>
                                                </ul>

                                                <a href="#" class="btn btn-light">
                                                    Buy Now
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Premium Plan -->
                                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                                            <div class="pricing-card">
                                                <h3>Premium Plan</h3>
                                                <div class="price">
                                                    <span class="currency">$</span>
                                                    <span class="amount">39.9</span>
                                                    <span class="period">/ month</span>
                                                </div>
                                                <p class="description">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>

                                                <h4>Featured Included:</h4>
                                                <ul class="features-list">
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Temporibus autem quibusdam
                                                    </li>
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Saepe eveniet ut et voluptates
                                                    </li>
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Nam libero tempore soluta
                                                    </li>
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Cumque nihil impedit quo
                                                    </li>
                                                    <li>
                                                        <i class="bi bi-check-circle-fill"></i>
                                                        Maxime placeat facere possimus
                                                    </li>
                                                </ul>

                                                <a href="#" class="btn btn-primary">
                                                    Buy Now
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </section><!-- /Pricing Section -->

                            <!-- Faq Section -->
                            <section class="faq-9 faq section light-background" id="faq">

                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-5" data-aos="fade-up">
                                            <h2 class="faq-title">Have a question? Check out the FAQ</h2>
                                            <p class="faq-description">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
                                            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                                                <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                                            <div class="faq-container">

                                                <div class="faq-item faq-active">
                                                    <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                                                    <div class="faq-content">
                                                        <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                                                    </div>
                                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                                </div><!-- End Faq item-->

                                                <div class="faq-item">
                                                    <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                                                    <div class="faq-content">
                                                        <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                                    </div>
                                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                                </div><!-- End Faq item-->

                                                <div class="faq-item">
                                                    <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                                    <div class="faq-content">
                                                        <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                                    </div>
                                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                                </div><!-- End Faq item-->

                                                <div class="faq-item">
                                                    <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                                                    <div class="faq-content">
                                                        <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                                    </div>
                                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                                </div><!-- End Faq item-->

                                                <div class="faq-item">
                                                    <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                                                    <div class="faq-content">
                                                        <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                                                    </div>
                                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                                </div><!-- End Faq item-->

                                                <div class="faq-item">
                                                    <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                                                    <div class="faq-content">
                                                        <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                                                    </div>
                                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                                </div><!-- End Faq item-->

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section><!-- /Faq Section -->

                            <!-- Call To Action 2 Section -->
                            <section id="call-to-action-2" class="call-to-action-2 section dark-background">

                                <div class="container">
                                    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                                        <div class="col-xl-10">
                                            <div class="text-center">
                                                <h3>Call To Action</h3>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <a class="cta-btn" href="#">Call To Action</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </section><!-- /Call To Action 2 Section -->

                            <!-- Contact Section -->
                            <section id="contact" class="contact section light-background">

                                <!-- Section Title -->
                                <div class="container section-title" data-aos="fade-up">
                                    <h2>Contact</h2>
                                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                                </div><!-- End Section Title -->

                                <div class="container" data-aos="fade-up" data-aos-delay="100">

                                    <div class="row g-4 g-lg-5">
                                        <div class="col-lg-5">
                                            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                                                <h3>Contact Info</h3>
                                                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

                                                <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                                    <div class="icon-box">
                                                        <i class="bi bi-geo-alt"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h4>Our Location</h4>
                                                        <p>A108 Adam Street</p>
                                                        <p>New York, NY 535022</p>
                                                    </div>
                                                </div>

                                                <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                                    <div class="icon-box">
                                                        <i class="bi bi-telephone"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h4>Phone Number</h4>
                                                        <p>+1 5589 55488 55</p>
                                                        <p>+1 6678 254445 41</p>
                                                    </div>
                                                </div>

                                                <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                                    <div class="icon-box">
                                                        <i class="bi bi-envelope"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h4>Email Address</h4>
                                                        <p>info@example.com</p>
                                                        <p>contact@example.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                                                <h3>Get In Touch</h3>
                                                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

                                                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                                    <div class="row gy-4">

                                                        <div class="col-md-6">
                                                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                                        </div>

                                                        <div class="col-md-6 ">
                                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                                        </div>

                                                        <div class="col-12">
                                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                                        </div>

                                                        <div class="col-12">
                                                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                                        </div>

                                                        <div class="col-12 text-center">
                                                            <div class="loading">Loading</div>
                                                            <div class="error-message"></div>
                                                            <div class="sent-message">Your message has been sent. Thank you!</div>

                                                            <button type="submit" class="btn">Send Message</button>
                                                        </div>

                                                    </div>
                                                </form>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </section><!-- /Contact Section -->

                        </main>

                        <footer id="footer" class="footer">

                            <div class="container footer-top">
                                <div class="row gy-4">
                                    <div class="col-lg-4 col-md-6 footer-about">
                                        <a href="index.html" class="logo d-flex align-items-center">
                                            <span class="sitename">iLanding</span>
                                        </a>
                                        <div class="footer-contact pt-3">
                                            <p>A108 Adam Street</p>
                                            <p>New York, NY 535022</p>
                                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                                            <p><strong>Email:</strong> <span>info@example.com</span></p>
                                        </div>
                                        <div class="social-links d-flex mt-4">
                                            <a href=""><i class="bi bi-twitter-x"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-3 footer-links">
                                        <h4>Useful Links</h4>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Terms of service</a></li>
                                            <li><a href="#">Privacy policy</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-2 col-md-3 footer-links">
                                        <h4>Our Services</h4>
                                        <ul>
                                            <li><a href="#">Web Design</a></li>
                                            <li><a href="#">Web Development</a></li>
                                            <li><a href="#">Product Management</a></li>
                                            <li><a href="#">Marketing</a></li>
                                            <li><a href="#">Graphic Design</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-2 col-md-3 footer-links">
                                        <h4>Hic solutasetp</h4>
                                        <ul>
                                            <li><a href="#">Molestiae accusamus iure</a></li>
                                            <li><a href="#">Excepturi dignissimos</a></li>
                                            <li><a href="#">Suscipit distinctio</a></li>
                                            <li><a href="#">Dilecta</a></li>
                                            <li><a href="#">Sit quas consectetur</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-2 col-md-3 footer-links">
                                        <h4>Nobis illum</h4>
                                        <ul>
                                            <li><a href="#">Ipsam</a></li>
                                            <li><a href="#">Laudantium dolorum</a></li>
                                            <li><a href="#">Dinera</a></li>
                                            <li><a href="#">Trodelas</a></li>
                                            <li><a href="#">Flexo</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="container copyright text-center mt-4">
                                <p>© <span>Copyright</span> <strong class="px-1 sitename">iLanding</strong> <span>All Rights Reserved</span></p>
                                <div class="credits">
                                    <!-- All the links in the footer should remain intact. -->
                                    <!-- You can delete the links only if you've purchased the pro version. -->
                                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                                </div>
                            </div>

                        </footer>

                        <!-- Scroll Top -->
                        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

                        <!-- Vendor JS Files -->
                        <script src="{{ asset('templateOne/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                        <script src="{{ asset('templateOne/vendor/php-email-form/validate.js') }}"></script>
                        <script src="{{ asset('templateOne/vendor/aos/aos.js') }}"></script>
                        <script src="{{ asset('templateOne/vendor/glightbox/js/glightbox.min.js') }}"></script>
                        <script src="{{ asset('templateOne/vendor/swiper/swiper-bundle.min.js') }}"></script>
                        <script src="{{ asset('templateOne/vendor/purecounter/purecounter_vanilla.js') }}"></script>

                        <!-- Main JS File -->
                        <script src="{{ asset('templateOne/js/main.js') }}"></script>

                        </body>

                        </html>

















                    </div>
                </div>




















                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2024 Web_Craft.
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.2"></script>
    <script src="./assets/js/scripts.js?ver=3.2.2"></script>
    <script src="./assets/js/charts/chart-ecommerce.js?ver=3.2.2"></script>
</body>