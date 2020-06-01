<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin E-Voting</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/nalika/img/logosmanda.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/owl.carousel.css">
    <link rel="stylesheet" href="/nalika/css/owl.theme.css">
    <link rel="stylesheet" href="/nalika/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/nalika/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/nalika/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/nalika/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/nalika/js/vendor/modernizr-2.8.3.min.js"></script>
    {{-- Tiny MCE --}}
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
          selector: '.mytextarea',
          content_css: '/phantom/assets/css/main.css'
        });
      </script>
    {{-- jquery biasa --}}
    <script src="/nalika/js/vendor/jquery-1.12.4.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href=""><img class="main-logo" src="/gambar/smanda.png" alt="" style="width:200px; height:auto"/></a>
                <strong><img src="/gambar/smanda.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
          <img src="/gambar/admin.png" alt=" " style="width:100px; height:auto"/>
          @if (Auth::guard('admin')->user()->role=='superadmin')
          <h2>Super Admin</h2>
          @else 
          <h2>Admin</h2>
          @endif
				</div>
				
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            @if (Auth::guard('admin')->user()->role=='superadmin')
                              <a href="/admin/voters" aria-expanded="false"><i class="fa fa-users"></i> <span class="mini-click-non"> Pemilih</span></a>
                            @endif
                           
                            <a href="/admin/paslons" aria-expanded="false"><i class="fa fa-slideshare"></i> <span class="mini-click-non"> Pasangan Calon</span></a>
                            <a href="/admin/visimisis" aria-expanded="false"><i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="mini-click-non"> Visi Misi Calon</span></a>
                            <a href="/admin/results" aria-expanded="false"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="mini-click-non"> Hasil Voting</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                      <a href=""><img class="main-logo" src="/gambar/smanda.png" alt="" style="width:200px; height:auto"/></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                              <i class="icon nalika-menu-task"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
                                            
                                              <!-- {{-- <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                              </form> --}} -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                      <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                      @if (Auth::guard('admin')->user()->role=='superadmin')
                                                        <span class="admin-name">Super Admin</span>
                                                      @else
                                                        <span class="admin-name">Admin</span>
                                                      @endif  
                                                      <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    
                                                        <li>
                                                            <form action="/logout-admin" method="POST">
                                                                {{ csrf_field() }}
                                                                <a href="javascript:;" onclick="parentNode.submit();"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                            </form>
                                                            
                                                        </li>
                                                    </ul>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">SMA N 2 PATI</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    {{-- <script src="/nalika/js/vendor/jquery-1.12.4.min.js"></script> --}}
    <!-- bootstrap JS
		============================================ -->
    <script src="/nalika/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="/nalika/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/nalika/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/nalika/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/nalika/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="/nalika/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/nalika/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/nalika/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/nalika/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="/nalika/js/metisMenu/metisMenu.min.js"></script>
    <script src="/nalika/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="/nalika/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="/nalika/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="/nalika/js/calendar/moment.min.js"></script>
    <script src="/nalika/js/calendar/fullcalendar.min.js"></script>
    <script src="/nalika/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="/nalika/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/nalika/js/main.js"></script>
</body>

</html>