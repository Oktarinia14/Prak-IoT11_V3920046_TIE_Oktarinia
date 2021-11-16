<?php
include 'koneksi.php';
//perintah untuk memastikan apakah sudah login
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Halaman Dashboard | Simkasu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="dashboard_style/docs/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html"><img width="60" height="60px" src="dashboard_style/docs/images/logo.png"</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li class="app-search">
                <input class="app-search__input" type="search" placeholder="Search">
                <button class="app-search__button"><i class="fa fa-search"></i></button>
            </li>
            <!-- Notification Menu
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="app-notification dropdown-menu dropdown-menu-right">
                    <li class="app-notification__title">You have 4 new notifications.</li>
                    <div class="app-notification__content">
                        <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                                <div>
                                    <p class="app-notification__message">Lisa sent you a mail</p>
                                    <p class="app-notification__meta">2 min ago</p>
                                </div>
                            </a></li>
                        <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                                <div>
                                    <p class="app-notification__message">Mail server not working</p>
                                    <p class="app-notification__meta">5 min ago</p>
                                </div>
                            </a></li>
                        <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                                <div>
                                    <p class="app-notification__message">Transaction complete</p>
                                    <p class="app-notification__meta">2 days ago</p>
                                </div>
                            </a></li>
                        <div class="app-notification__content">
                            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                                    <div>
                                        <p class="app-notification__message">Lisa sent you a mail</p>
                                        <p class="app-notification__meta">2 min ago</p>
                                    </div>
                                </a></li>
                            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                                    <div>
                                        <p class="app-notification__message">Mail server not working</p>
                                        <p class="app-notification__meta">5 min ago</p>
                                    </div>
                                </a></li>
                            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                                    <div>
                                        <p class="app-notification__message">Transaction complete</p>
                                        <p class="app-notification__meta">2 days ago</p>
                                    </div>
                                </a></li>
                        </div>
                    </div>
                    <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
                </ul>
            </li> -->
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><?php echo '<img src="dashboard_style/docs/images/'.$_SESSION['username'].'.png" width="40px" height="40px"/>';?>
            <div>
                <p class="app-sidebar__user-name"><?php echo $_SESSION['username'];  ?></p>
            </div>
        </div>
        <ul class="app-menu">
            <li><a class="app-menu__item active" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
            <li><a class="app-menu__item" href="kadar_air_minum.php"><i class="app-menu__icon fa fa-tint"></i><span class="app-menu__label">Kadar Air Minum</span></a></li>
            <li><a class="app-menu__item" href="suhu_kandang.php"><i class="app-menu__icon fa fa-fire"></i><span class="app-menu__label">Suhu Kandang</span></a></li>
        </ul>
    </aside>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
                <p>
                    <br>
                <h1><strong>Selamat Datang <?php echo $_SESSION['username'];  ?></strong></h1>
                </p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <?php
        $jumlah_ph_before = mysqli_query($koneksi,"select ph_before from ph_air");
        $hasil1= mysqli_num_rows($jumlah_ph_before);

        $jumlah_ph_after = mysqli_query($koneksi,"select ph_after from ph_air");
	    $hasil2= mysqli_num_rows($jumlah_ph_after);
        $total = $hasil1 + $hasil2;

        $presenPh = $total / 100;

        ?>
        <?php
        $jumlah_temp_before = mysqli_query($koneksi,"select temp_before from temperature_kandang");
        $hasil1= mysqli_num_rows($jumlah_temp_before);

        $jumlah_temp_after = mysqli_query($koneksi,"select temp_after from temperature_kandang");
	    $hasil2= mysqli_num_rows($jumlah_temp_after);
        $total = $hasil1 + $hasil2;

        $presenTemp = $total / 100;

        ?>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-tint fa-3x"></i>
                    <div class="info">
                        <h7>Presentasi Kadar Air Minum (satu minggu)</h7>
                        <p><b><?php echo $presenTemp; ?>%</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon"><i class="icon fa fa-fire fa-3x"></i>
                    <div class="info">
                        <h7>Pesentase Suhu Kandang (satu minggu)</h7>
                        <p><b><?php echo $presenTemp; ?>%</b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Grafik Kadar Air + Suhu Kandang</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="dashboard_style/docs/js/jquery-3.3.1.min.js"></script>
    <script src="dashboard_style/docs/js/popper.min.js"></script>
    <script src="dashboard_style/docs/js/bootstrap.min.js"></script>
    <script src="dashboard_style/docs/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="dashboard_style/docs/js/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="dashboard_style/docs/js/plugins/chart.js"></script>
    <script type="text/javascript">
       var pdata = [{
                value: <?php 
                $jumlah_ph_before = mysqli_query($koneksi,"select ph_before from ph_air");
	            echo mysqli_num_rows($jumlah_ph_before);
	            ?>, 
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Jumlah Data Ph Air Before"
            },
            {
                value: <?php 
                $jumlah_ph_after = mysqli_query($koneksi,"select ph_after from ph_air");
	            echo mysqli_num_rows($jumlah_ph_after);
	            ?>,
                color: "#F7464A",
                highlight: "#FF5A5E",
                label: "Jumlah Data Ph Air After"
            },
            {
                value: <?php 
                $jumlah_temp_before = mysqli_query($koneksi,"select temp_before from temperature_kandang");
	            echo mysqli_num_rows($jumlah_temp_before);
	            ?>,
                color: "GREEN",
                highlight: "#FF5A5E",
                label: "Jumlah Data Temp Before"
            },
            {
                value: <?php 
                $jumlah_temp_after = mysqli_query($koneksi,"select temp_after from temperature_kandang");
	            echo mysqli_num_rows($jumlah_temp_after);
	            ?>,
                color: "YELLOW",
                highlight: "#FF5A5E",
                label: "Jumlah Data Temp After"
            }
        ]

        var ctxp = $("#pieChartDemo").get(0).getContext("2d");
        var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
</body>

</html>