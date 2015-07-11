<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>RubiCart- Back Office</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>


<body class="ecommerce-page">

    <!-- Start: Theme Preview Pane -->
    <?php include ("templates/skinbar.php"); ?>
    <!-- End: Theme Preview Pane -->

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <?php include_once ("templates/header.php"); ?>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">

            <!-- Start: Topbar-Dropdown -->
            <?php include_once ("templates/top-dropdown.php"); ?>
            <!-- End: Topbar-Dropdown -->

                <!-- sidebar menu -->
                <?php include_once ("templates/left-sidebar.php"); ?>
                
            </div>
        </aside>


        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Start: Topbar-Dropdown -->
            <?php include_once ("templates/top-dropdown.php"); ?>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
            <?php include_once ("templates/top-breadcumb.php"); ?>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="table-layout animated fadeIn">

                <!-- begin: .tray-center -->
                <div class="tray tray-center p25 va-t posr">

                    <!-- dashboard tiles -->
                    <div class="row">
                        <div class="col-sm-4 col-xl-3">
                            <div class="panel panel-tile text-center br-a br-grey">
                                <div class="panel-body">
                                    <h1 class="fs30 mt5 mbn">1,426</h1>
                                    <h6 class="text-system">NEW ORDERS</h6>
                                </div>
                                <div class="panel-footer br-t p12">
                                    <span class="fs11"><i class="fa fa-arrow-up pr5"></i> 3% INCREASE <b>1W AGO</b>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xl-3">
                            <div class="panel panel-tile text-center br-a br-grey">
                                <div class="panel-body">
                                    <h1 class="fs30 mt5 mbn">63,262</h1>
                                    <h6 class="text-success">TOTAL SALES GROSS</h6>
                                </div>
                                <div class="panel-footer br-t p12">
                                    <span class="fs11"><i class="fa fa-arrow-up pr5"></i> 2.7% INCREASE <b>1W AGO</b>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xl-3">
                            <div class="panel panel-tile text-center br-a br-grey">
                                <div class="panel-body">
                                    <h1 class="fs30 mt5 mbn">248</h1>
                                    <h6 class="text-warning">PENDING SHIPMENTS</h6>
                                </div>
                                <div class="panel-footer br-t p12">
                                    <span class="fs11"><i class="fa fa-arrow-up pr5 text-success"></i> 1% INCREASE <b>1W AGO</b>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xl-3 visible-xl">
                            <div class="panel panel-tile text-center br-a br-grey">
                                <div class="panel-body">
                                    <h1 class="fs30 mt5 mbn">6,718</h1>
                                    <h6 class="text-danger">UNIQUE VISITS</h6>
                                </div>
                                <div class="panel-footer br-t p12">
                                    <span class="fs11"><i class="fa fa-arrow-down pr5 text-danger"></i> 6% DECREASE <b>1W AGO</b>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- dashboard metric chart -->
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"> Revenue</span>
                        </div>
                        <div class="panel-body pn">
                            <div id="ecommerce_chart1" style="height: 300px;"></div>
                        </div>
                    </div>

                    <!-- recent activity table -->
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"> Recent Activity</span>
                            <ul class="nav panel-tabs panel-tabs-light">
                                <li class="active">
                                    <a href="#tab1_1" data-toggle="tab"> Top Sellers</a>
                                </li>
                                <li>
                                    <a href="#tab1_2" data-toggle="tab"> Most Viewed</a>
                                </li>
                                <li>
                                    <a href="#tab1_3" data-toggle="tab"> New Customers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body pn">
                            <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="">Image</th>
                                        <th class="">Product Title</th>
                                        <th class="">SKU</th>
                                        <th class="">Price</th>
                                        <th class="">Stock</th>
                                        <th class="text-right">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="w100">
                                            <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/stock/products/thumb_1.jpg">
                                        </td>
                                        <td class="">Apple Ipod 4G - Silver</td>
                                        <td class="">#21362</td>
                                        <td class="">$215</td>
                                        <td class="">1,400</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Archive</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">Complete</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w100">
                                            <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/stock/products/thumb_2.jpg">
                                        </td>
                                        <td class="">Apple Smart Watch - 1G</td>
                                        <td class="">#15262</td>
                                        <td class="">$455</td>
                                        <td class="">2,100</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Archive</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">Complete</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w100">
                                            <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/stock/products/thumb_6.jpg">
                                        </td>
                                        <td class="">Apple Macbook 4th Gen - Silver</td>
                                        <td class="">#66362</td>
                                        <td class="">$1699</td>
                                        <td class="">6,100</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Archive</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">Complete</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w100">
                                            <img class="img-responsive mw20 ib mr10" title="user" src="assets/img/stock/products/thumb_7.jpg">
                                        </td>
                                        <td class="">Apple Iphone 16GB - Silver</td>
                                        <td class="">#51362</td>
                                        <td class="">$1299</td>
                                        <td class="">5,200</td>
                                        <td class="text-right">
                                            <div class="btn-group text-right">
                                                <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Active
                                                    <span class="caret ml5"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="#">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Archive</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">Complete</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="#">Pending</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Canceled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- info traffic panels -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-title">Top Geographic Sources</span>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn tc-med-1 tc-bold-last">
                                        <thead>
                                            <tr class="hidden">
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-us mr5 va-b"></span>United States</td>
                                                <td>28%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-de mr5 va-b"></span>Germany</td>
                                                <td>25%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-fr mr5 va-b"></span>France</td>
                                                <td>21%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-tr mr5 va-b"></span>Spain</td>
                                                <td>18%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="flag-xs flag-es mr5 va-b"></span>Turkey</td>
                                                <td>10%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Search List -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-title">Top Referals</span>
                                </div>
                                <div class="panel-body pn">
                                    <table class="table mbn tc-med-1 tc-bold-last">
                                        <thead>
                                            <tr class="hidden">
                                                <th>#</th>
                                                <th>First Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="favicons google va-t mr10"></span>http://madeupurl.com/pictures/doors</td>
                                                <td>28%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons google va-t mr10"></span>http://secondulr.com/article/14</td>
                                                <td>25%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons yahoo va-t mr10"></span>http://urlthird.com/infogram/ten</td>
                                                <td>21%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons google va-t mr10"></span>http://fourthlink.com/boats/glass</td>
                                                <td>18%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="favicons bing va-t mr10"></span>http://lastlink.com/thebest/ever</td>
                                                <td>10%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end: .tray-center -->

                <!-- begin: .tray-right -->
                <aside class="tray tray-right tray290 va-t pn" data-tray-height="match">

                    <!-- store activity timeline -->
                    <ol class="timeline-list pl5 mt10">
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc"><b>Michael</b> Added a new item to his store: <a href="#">Ipod</a>
                            </div>
                            <div class="timeline-date">1:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc"><b>Sara</b> Added a new item to his store: <a href="#">Notebook</a>
                            </div>
                            <div class="timeline-date">3:05am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success"><span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc"><b>Admin</b> created a new invoice for: <a href="#">Software</a>
                            </div>
                            <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span>
                            </div>
                            <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
                            <div class="timeline-date">5:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success"><span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc"><b>Admin</b> created a new invoice for: <a href="#">Apple Inc.</a>
                            </div>
                            <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc"><b>Michael</b> Added a new item to his store: <a href="#">Ipod</a>
                            </div>
                            <div class="timeline-date">8:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc"><b>Sara</b> Added a new item to his store: <a href="#">Watch</a>
                            </div>
                            <div class="timeline-date">9:35am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-system"><span class="fa fa-fire"></span>
                            </div>
                            <div class="timeline-desc"><b>Admin</b> created a new invoice for: <a href="#">Software</a>
                            </div>
                            <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span>
                            </div>
                            <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
                            <div class="timeline-date">5:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success"><span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc"><b>Admin</b> created a new invoice for: <a href="#">Software</a>
                            </div>
                            <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span>
                            </div>
                            <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
                            <div class="timeline-date">5:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success"><span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc"><b>Admin</b> created a new invoice for: <a href="#">Apple Inc.</a>
                            </div>
                            <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc"><b>Michael</b> Added a new item to his store: <a href="#">Ipod</a>
                            </div>
                            <div class="timeline-date">8:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc"><b>Sara</b> Added a new item to his store: <a href="#">Watch</a>
                            </div>
                            <div class="timeline-date">9:35am</div>
                        </li>
                    </ol>

                </aside>
                <!-- end: .tray-right -->

            </section>
            <!-- End: Content -->

        </section>

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="vendor/plugins/raphael/raphael.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();

            // Chart colors
            var highColors = [bgWarning, bgPrimary, bgInfo, bgAlert,
                bgDanger, bgSuccess, bgSystem, bgDark
            ];

            // Chart color groups
            var sparkColors = {
                "primary": [bgPrimary, bgPrimaryLr, bgPrimaryDr],
                "info": [bgInfo, bgInfoLr, bgInfoDr],
                "warning": [bgWarning, bgWarningLr, bgWarningDr],
                "success": [bgSuccess, bgSuccessLr, bgSuccessDr],
                "alert": [bgAlert, bgAlertLr, bgAlertDr]
            };

            // Chart data
            var seriesData = [{
                name: 'Phones',
                data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6]
            }, {
                name: 'Notebooks',
                data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }, {
                name: 'Desktops',
                data: [15, 19, 22.7, 29.3, 22.0, 17.0, 23.8, 19.1, 22.1, 14.1, 11.6, 7.5]
            }, {
                name: 'Music Players',
                data: [11, 6, 5, 15, 17.0, 22.0, 30.8, 24.1, 14.1, 11.1, 9.6, 6.5]
            }
            ];

            var ecomChart = $('#ecommerce_chart1');

            if (ecomChart.length) {
                ecomChart.highcharts({
                    credits: false,
                    colors: highColors,
                    chart: {
                        backgroundColor: 'transparent',
                        className: 'br-r',
                        type: 'line',
                        zoomType: 'x',
                        panning: true,
                        panKey: 'shift',
                        marginTop: 45,
                        marginRight: 1,
                    },
                    title: {
                        text: null
                    },
                    xAxis: {
                        gridLineColor: '#EEE',
                        lineColor: '#EEE',
                        tickColor: '#EEE',
                        categories: ['Jan', 'Feb', 'Mar', 'Apr',
                            'May', 'Jun', 'Jul', 'Aug',
                            'Sep', 'Oct', 'Nov', 'Dec'
                        ]
                    },
                    yAxis: {
                        min: 0,
                        tickInterval: 5,
                        gridLineColor: '#EEE',
                        title: {
                            text: null,
                        }
                    },
                    plotOptions: {
                        spline: {
                            lineWidth: 3,
                        },
                        area: {
                            fillOpacity: 0.2
                        }
                    },
                    legend: {
                        enabled: true,
                        floating: false,
                        align: 'right',
                        verticalAlign: 'top',
                        // y: '-160px'
                    },
                    series: seriesData
                });
            }


        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
