<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - MOKU</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon"> 
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">Moku</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">nama pengguna</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Courier</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Courier List</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Vehicle type</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>top up</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>wtihdrawl</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Courier Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>History</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Archive</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Schedule</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Instant</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Multi Packet</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Sameday</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Rating</span>
            </a>
          </li>
        </ul>
      </li><!-- End orders Nav -->

      <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Contacts</span>
        </a>
      </li>
        
  </aside> <!-- End Sidebar -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Data Range -->
        <div class="container mt-3 mb-3">
          <div class="row-datarange">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Range</h5>

                   <!-- Bordered Tabs Data Range -->
                  <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="Today-tab" data-bs-toggle="tab" data-bs-target="#bordered-today" type="button" role="tab" aria-controls="today" aria-selected="true">Today</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="this-week-tab" data-bs-toggle="tab" data-bs-target="#bordered-this-week" type="button" role="tab" aria-controls="this-week" aria-selected="false">This week</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="this-month-tab" data-bs-toggle="tab" data-bs-target="#bordered-this-month" type="button" role="tab" aria-controls="this-month" aria-selected="false">This month</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="this-year-tab" data-bs-toggle="tab" data-bs-target="#bordered-this-year" type="button" role="tab" aria-controls="this-year" aria-selected="false">This year</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="last-year-tab" data-bs-toggle="tab" data-bs-target="#bordered-last-year" type="button" role="tab" aria-controls="last-year" aria-selected="false">Last year</button>
                    </li>
                  </ul>
                </div>
              </div> 
            </div>
          </div> 
        </div>
        <!-- today  -->
        <div class="container-fluid">
          <div class="card-today">
            <div class="tab-content" id="borderedTabContent">
              <div class="tab-pane fade show active" id="bordered-today" role="tabpanel" aria-labelledby="today-tab">
                <div class="row">
                    <!-- total order card -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Total Orders <br><strong>jumlah order</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end total order card -->
                              
                    <!-- total courier -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-1 text-start">
                                <p class="mb-0">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end total courier -->

                    <!-- total customer -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end total customer -->

                    <!-- total revenue -->
                      <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                        <div class="card info-card orders-card w-100">
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                              <h3 class="card-title mb-0">Total Courier <br><strong>jumlah Courier</strong> </h3>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="ps-2 text-start">
                                    <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                    <span span style="margin-top: 0;">active <span> | 4 </span></span>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!-- total revenue -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end today -->
        <!-- this week -->
        <div class="container-fluid">
          <div class="card-today">
            <div class="tab-content" id="borderedTabContent">
              <div class="tab-pane fade show" id="bordered-this-week" role="tabpanel" aria-labelledby="this-week-tab">
                <div class="row">
                  <!-- total order card -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Total Orders <br><strong>jumlah order</strong> </h3>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="ps-2 text-start">
                                  <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                  <span span style="margin-top: 0;">active <span> | 4 </span></span>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- end total order card -->
                                                                          
                  <!-- total courier -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="ps-1 text-start">
                                  <p class="mb-0">success<span> | 50</span></p>
                                  <span span style="margin-top: 0;">active <span> | 4 </span></span>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- end total courier -->

                  <!-- total customer -->
                  <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                    <div class="card info-card orders-card w-100">
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                          <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end total customer -->

                  <!-- total revenue -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- total revenue -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end this week -->
        <!-- this month -->
        <div class="container-fluid">
          <div class="card-today">
            <div class="tab-content" id="borderedTabContent">
              <div class="tab-pane fade show" id="bordered-this-month" role="tabpanel" aria-labelledby="this-month-tab">
                <div class="row">
                  <!-- total order card -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Total Orders <br><strong>jumlah order</strong> </h3>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="ps-2 text-start">
                                  <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                  <span span style="margin-top: 0;">active <span> | 4 </span></span>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- end total order card -->
                                                                          
                  <!-- total courier -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="ps-1 text-start">
                                  <p class="mb-0">success<span> | 50</span></p>
                                  <span span style="margin-top: 0;">active <span> | 4 </span></span>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- end total courier -->

                  <!-- total customer -->
                  <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                    <div class="card info-card orders-card w-100">
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                          <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end total customer -->

                  <!-- total revenue -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- total revenue -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end thismonth -->
        <!-- this year -->
        <div class="container-fluid">
          <div class="card-today">
            <div class="tab-content" id="borderedTabContent">
              <div class="tab-pane fade show" id="bordered-this-year" role="tabpanel" aria-labelledby="this-year-tab">
                <div class="row">
                  <!-- total order card -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Total Orders <br><strong>jumlah order</strong> </h3>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="ps-2 text-start">
                                  <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                  <span span style="margin-top: 0;">active <span> | 4 </span></span>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- end total order card -->
                                                                          
                  <!-- total courier -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="ps-1 text-start">
                                  <p class="mb-0">success<span> | 50</span></p>
                                  <span span style="margin-top: 0;">active <span> | 4 </span></span>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- end total courier -->

                  <!-- total customer -->
                  <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                    <div class="card info-card orders-card w-100">
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                          <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end total customer -->

                  <!-- total revenue -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- total revenue -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end this year -->
        <!-- last year -->
        <div class="container-fluid">
          <div class="card-today">
            <div class="tab-content" id="borderedTabContent">
              <div class="tab-pane fade show" id="bordered-last-year" role="tabpanel" aria-labelledby="last-year-tab">
                <div class="row">
                  <!-- total order card -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Total Orders <br><strong>jumlah order</strong> </h3>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="ps-2 text-start">
                                  <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                  <span span style="margin-top: 0;">active <span> | 4 </span></span>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- end total order card -->
                                                                          
                  <!-- total courier -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="ps-1 text-start">
                                  <p class="mb-0">success<span> | 50</span></p>
                                  <span span style="margin-top: 0;">active <span> | 4 </span></span>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- end total courier -->

                  <!-- total customer -->
                  <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                    <div class="card info-card orders-card w-100">
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                          <h3 class="card-title">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end total customer -->

                  <!-- total revenue -->
                    <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-stretch">
                      <div class="card info-card orders-card w-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title mb-0">Total Courier <br><strong>jumlah Courier</strong> </h3>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="ps-2 text-start">
                                <p class="mb-0" style="margin-bottom: 0;">success<span> | 50</span></p>
                                <span span style="margin-top: 0;">active <span> | 4 </span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- total revenue -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end last year -->
      </div>
    </section>
    <!-- end data range -->

    <!-- current order -->
    <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Current Orders</h5>

                <!-- Table with hoverable rows -->
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Mecanic Name</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">origin</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Order value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Riski Gemilang</td>
                        <td>Riski Gemilang </td>
                        <td>Gajah Mungkur </td>
                        <td>Tembalang</td>
                        <td>Rp.8000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- End Table with hoverable rows -->

              </div>
            </div>
          </div>
        </div>
    <!-- end current order -->

    <!-- maps -->
    <div class="row">
      <div class="col-lg-12 mt-4 d-flex align-items-stretch">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Live Orders</h5>
            <!-- <div class="ratio ratio-1x1">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d356933.8714888409!2d10.413661869378636!3d45.65994086120074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781eca8aec020b9%3A0x91dcf07c1c969bb8!2sGarda!5e0!3m2!1spl!2spl!4v1672244147501!5m2!1spl!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div> -->
          </div>
      </div>
    </div>
    <div class="row pe-0 ">
      <div class="col-md-8 mt-1 pe-0">
        <div class="card-map">
          <div class="card-body-maps">
            <div class="ratio ratio-1x1">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d356933.8714888409!2d10.413661869378636!3d45.65994086120074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781eca8aec020b9%3A0x91dcf07c1c969bb8!2sGarda!5e0!3m2!1spl!2spl!4v1672244147501!5m2!1spl!2spl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div> 
        </div>
      </div>
      <div class="col-md-4 mt-1 px-0">
        <div class="card-map">
          <div class="card-body-maps">
                 
          </div>
        </div>
      </div>
    </div>

    <!-- end maps -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <!-- <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div> -->
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Bootstrap</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>