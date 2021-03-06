

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Dashboard</title>
    <!-- Fontfaces CSS-->
    <link href="/asset/css/font-face.css" rel="stylesheet" media="all">
    <link href="/asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/asset/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="/asset/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="/asset/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/asset/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/asset/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/asset/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/asset/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="/asset/css/theme.css" rel="stylesheet" media="all">
  </head>
  <body>
    <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
          <div class="container-fluid">
            <div class="header-mobile-inner">
              <a class="logo" href="index.html">
              RESTAURARE
              </a>
              <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </button>
            </div>
          </div>
        </div>
        <nav class="navbar-mobile">
          <div class="container-fluid">
            <ul class="list-unstyled navbar__list">
              <li class="active has-sub">
                <a class="js-arrow" href="#">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>  
              </li>
              <li>
                <a href="/profil-user">
                <i class="fas fa-chart-bar"></i>Profil</a>
              </li>
              <li>
                <a href="table.html">
                <i class="fas fa-table"></i>Makanan</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- END HEADER MOBILE-->
      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
          <a href="#">
          RESTAURARE
          </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li>
                <a href="/dashboard-user">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>  
              </li>
              <li class="active has-sub">
                <a href="/profil-user">
                <i class="fas fa-chart-bar"></i>Profil</a>
              </li>
              <li>
                <a href="/makanan-user">
                <i class="fas fa-table"></i>Makanan</a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <!-- END MENU SIDEBAR-->
      <!-- PAGE CONTAINER-->
      <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                  <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                  <button class="au-btn--submit" type="submit">
                  <i class="zmdi zmdi-search"></i>
                  </button>
                </form>
                <div class="header-button">
                  <div class="account-wrap">
                    <div class="account-item clearfix js-item-menu">
                      <div class="image" style="border-radius: 50px;">
                        <img src="/asset/images/icon/avatar-01.jpg" alt="John Doe" />
                      </div>
                      <div class="content">
                        <a class="js-acc-btn" href="#">User</a>
                      </div>
                      <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                          <div class="image">
                            <a href="#">
                            <img src="/asset/images/icon/avatar-01.jpg" alt="John Doe" />
                            </a>
                          </div>
                          <div class="content">
                            <h5 class="name">
                              <a href="#">john doe</a>
                            </h5>
                            <span class="email">johndoe@example.com</span>
                          </div>
                        </div>
                        <div class="account-dropdown__footer">
                          <a href="#">
                          <i class="zmdi zmdi-power"></i>Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- HEADER DESKTOP-->
        <!-- MAIN CONTENT-->
        <div class="main-content">
          <div class="section__content section__content--p30">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <strong class="card-title">Profil Saya</strong>
                      <p>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
                    </div>
                    <div class="card-body">
                      <div class="vue-lists">
                        <div class="row">
                          <div class="col-md-4">
                            <img src="https://tse3.mm.bing.net/th?id=OIP.yDeuo0mecuFSATPtypO_cgHaEs&pid=Api&P=0&w=293&h=187" width="400px">
                          </div>
                          <div class="col-md-8 text-left">
                            <form>
                              <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" value="Dinar" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="name" value="dinartrevor@gmail.com" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" value="password" class="form-control">                     
                              </div>
                              <button class="btn btn-primary">Simpan</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-md-12">
                  <div class="copyright">
                    <p>Copyright © 2020 Dinar.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
      </div>
    </div>
    <!-- Jquery JS-->
    <script src="/asset//asset//asset/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/asset//asset/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/asset/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/asset/vendor/slick/slick.min.js"></script>
    <script src="/asset/vendor/wow/wow.min.js"></script>
    <script src="/asset/vendor/animsition/animsition.min.js"></script>
    <script src="/asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="/asset/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/asset/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="/asset/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/asset/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/asset/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/asset/vendor/select2/select2.min.js"></script>
    <!-- Main JS-->
    <script src="/asset/js/main.js"></script>
  </body>
</html>
<!-- end document-->

