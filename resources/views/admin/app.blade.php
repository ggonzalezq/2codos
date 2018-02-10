<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>2codos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/admin/fontastic.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="/css/admin/grasp_mobile_progress_circle-1.0.0.min.css">
    <link rel="stylesheet" href="/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="/css/admin/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="/css/admin/custom.css">
  </head>
  <body>
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center">
            <h2 class="h5 text-uppercase">2codos</h2>
          </div>
          <div class="sidenav-header-logo">
            <a href="index.html" class="brand-small text-center"> <strong>2</strong><strong class="text-primary">C</strong></a>
          </div>
        </div>
        <div class="admin-menu">
        <ul id="side-admin-menu" class="side-menu list-unstyled">
          <li>
            <a href="#deals-dropdown" data-toggle="collapse" aria-expanded="false">
              <i class="icon-interface-windows"></i>
              <span>Deals</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div>
            </a>
            <ul id="deals-dropdown" class="collapse list-unstyled">
              <li><a href="/admin/deals">All deals</a></li>
              <li><a href="/admin/deals/deal-new">Add new deal</a></li>
            </ul>
          </li>
          <li>
            <a href="#stores-dropdown" data-toggle="collapse" aria-expanded="false">
              <i class="icon-interface-windows"></i>
              <span>Stores</span>
              <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div>
            </a>
            <ul id="stores-dropdown" class="collapse list-unstyled">
              <li><a href="/admin/stores">All stores</a></li>
              <li><a href="/admin/stores/store-new">Add new stores</a></li>
            </ul>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page home-page">
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn">
                <i class="icon-bars"></i></a>
              </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item"><a href="login.html" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            @section('breadcrumbs')
            <li class="breadcrumb-item">
              <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="/admin">Administrator</a>
            </li>
            @show
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          @yield('content')
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <p>&copy; 2019 2codos</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/js/admin/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/admin/front.js"></script>
  </body>
</html>

