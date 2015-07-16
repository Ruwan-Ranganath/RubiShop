<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>RubiCart - Back Office</title>
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
@include('backoffice.templates.skinbar')
        <!-- End: Theme Preview Pane -->

<!-- Start: Main -->
<div id="main">

    <!-- Start: Header -->
    @include('backoffice.templates.header')
            <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary">
        <div class="nano-content">

             <!-- Start: Topbar-Dropdown -->
            @include('backoffice.templates.top-dropdown')
                   <!-- End: Topbar-Dropdown -->

            <!-- sidebar menu -->
            @include('backoffice.templates.left-sidebar')

        </div>
    </aside>


    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Start: Topbar -->
        @include('backoffice.templates.top-breadcumb')
                <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="table-layout animated fadeIn">

                <!-- begin: .tray-center -->
                <div class="tray tray-center p25 va-t posr">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span class="panel-title"> Add New Product</span>
                        </div>
                    <div class="panel-body">
                        <div class="col-md-11">

                    <!-- create new order panel -->
                        {!! Form::open(['url'=>'Procreate','files'=>true])!!}

                            <div class="form-group">
                                {!! Form::text('product_name',null,['placeholder'=>'Product Title','class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('product_description',null,['placeholder'=>'Product Description','class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('price',null,['placeholder'=>'Price','class'=>'form-control']) !!}                            </div>
                            <div class="form-group">
                                {!! Form::text('promo_price',null,['placeholder'=>'Promo Price','class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {{--image start--}}
                                {!! Form::label('Image 1','image1') !!}
                                <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                    <div class="fileupload-preview thumbnail mb20">
                                        <img data-src="holder.js/100%x140" alt="holder">
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 pr5">
                                            <input type="text" name="image1" id="image1" class="text-center event-name gui-input br-light bg-light" placeholder="Img Keywords">
                                            <label for="name2" class="field-icon"></label>
                                        </div>
                                        <div class="col-xs-5">
                                                        <span class="button btn-system btn-file btn-block">
                                                            {!! Form::file('image', null) !!}
                                                            {{--<span class="fileupload-new">Select</span>--}}
                                                        {{--<span class="fileupload-exists">Change</span>--}}
                                                        <input type="file">
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                {{--image end--}}
                            </div>
                            <div class="form-group">
                                {{--image start--}}
                                {!! Form::label('Image 2','image2') !!}
                                <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                    <div class="fileupload-preview thumbnail mb20">
                                        <img data-src="holder.js/100%x140" alt="holder">
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 pr5">
                                            <input type="text" name="image2" id="image2" class="text-center event-name gui-input br-light bg-light" placeholder="Img Keywords">
                                            <label for="name2" class="field-icon"></label>
                                        </div>
                                        <div class="col-xs-5">
                                                        <span class="button btn-system btn-file btn-block">
                                                            <span class="fileupload-new">Select</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file">
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                {{--image end--}}
                            </div>
                            <div class="form-group">
                                {{--image start--}}
                                {!! Form::label('Image 3','image3') !!}
                                <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                    <div class="fileupload-preview thumbnail mb20">
                                        <img data-src="holder.js/100%x140" alt="holder">
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 pr5">
                                            <input type="text" name="image3" id="image3" class="text-center event-name gui-input br-light bg-light" placeholder="Img Keywords">
                                            <label for="name2" class="field-icon"></label>
                                        </div>
                                        <div class="col-xs-5">
                                                        <span class="button btn-system btn-file btn-block">
                                                            <span class="fileupload-new">Select</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file">
                                                        </span>
                                        </div>
                                    </div>
                                </div>
                                {{--image end--}}
                            </div>
                            <div class="form-group">
                                <label for="">Product Category</label>
                                <br/>
                                <select id="product_category" name="product_category" data-no-selected="Nothing selected" name="multiple[]" multiple="multiple" >
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="1">5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Save',['class'=>'btn btn-success col-md-4'])!!}
                            </div>

                        {!! Form::close() !!}
                      </div>
                    </div>
                     </div>
                   <!-- end order panel -->




                </div>
                <!-- end: .tray-center -->



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


    <style>
        #message-table > tbody > tr.highlight > td {
            background-color: #FFFEF0;
        }
    </style>
    
    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- FileUpload JS -->
    <script type="text/javascript" src="vendor/plugins/fileupload/fileupload.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

    <!-- Tagmanager JS -->
    <script type="text/javascript" src="vendor/plugins/tagsinput/tagsinput.min.js"></script>

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

            // grant file-upload preview onclick functionality
            $('.fileupload-preview').on('click', function() {
                $('.btn-file > input').click();
            });

            // select dropdowns - placeholder like creation
            var selectList = $('.admin-form select');
            selectList.each(function(i, e) {
                $(e).on('change', function() {
                    if ($(e).val() == "0") $(e).addClass("empty");
                    else $(e).removeClass("empty")
                });
            });
            selectList.each(function(i, e) {
                $(e).change();
            });

            // Init tagsinput plugin
            $("input#tagsinput").tagsinput({
                tagClass: function(item) {
                    return 'label bg-primary light';
                }
            });

        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
