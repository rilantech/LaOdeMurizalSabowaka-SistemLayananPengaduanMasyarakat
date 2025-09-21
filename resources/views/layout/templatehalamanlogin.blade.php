<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }} | Pengaduan Waara</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    
    <link rel="icon" href="{{ asset('templateadminsuparman/assests/images/logobuteng.png') }}" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templateadminsuparman/assests/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->

    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templateadminsuparman/assests/icon/icofont/css/icofont.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('templateadminsuparman/assests/css/style.css') }}">
 
    <!-- Custom CSS -->
    <link href="{{ asset('template/dist/css/style.min.css') }}" rel="stylesheet">

    


</head>

<body class="bg-image" style="background-image: url({{ asset('templateadminsuparman/assests/images/bg.jpeg') }}); 
  height: 100vh;background-repeat:no-repeat;background-size:cover;">
    <section class="p-fixed d-flex">
        <!-- Container-fluid starts -->
       @yield('halaman')
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('templateadminsuparman/assests/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templateadminsuparman/assests/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templateadminsuparman/assests/plugins/tether/dist/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templateadminsuparman/assests/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('templateadminsuparman/assests/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('templateadminsuparman/assests/plugins/modernizr/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templateadminsuparman/assests/plugins/modernizr/feature-detects/css-scrollbars.js') }}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{ asset('templateadminsuparman/assests/js/script.js') }}"></script>
    <!---- color js --->
    <script type="text/javascript" src="{{ asset('templateadminsuparman/assests/js/common-pages.js') }}"></script>
    <script src="{{ asset('template/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('template/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('template/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('template/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('template/dist/js/sidebarmenu.js') }} "></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('template/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('template/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('template/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('template/dist/js/pages/chart/chart-page-init.js') }}"></script>
    <script src="{{ asset('template/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('template/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('template/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
</body>

</html>
