<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Aero Bootstrap4 Admin :: Jquery DataTables</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }} ">
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }} ">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }} ">
</head>

<body class="theme-blush">

    <section class="content">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/images/loader.svg') }} "
                        width="48" height="48" alt="Aero"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>

        <!-- Main Search -->
        <div id="search">
            <button id="close" type="button"
                class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
            <form>
                <input type="search" value="" placeholder="Search..." />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Right Icon menu Sidebar -->
        <div class="navbar-right">
            <ul class="navbar-nav">
                <li><a href="#search" class="main_search" title="Search..."><i class="zmdi zmdi-search"></i></a></li>
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" title="App" data-toggle="dropdown"
                        role="button"><i class="zmdi zmdi-apps"></i></a>
                    <ul class="dropdown-menu slideUp2">
                        <li class="header">App Sortcute</li>
                        <li class="body">
                            <ul class="menu app_sortcut list-unstyled">
                                <li>
                                    <a href="http://127.0.0.1:8000/image-gallery">
                                        <div class="icon-circle mb-2 bg-blue"><i class="zmdi zmdi-camera"></i></div>
                                        <p class="mb-0">Photos</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle mb-2 bg-amber"><i class="zmdi zmdi-translate"></i></div>
                                        <p class="mb-0">Translate</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://127.0.0.1:8000/events">
                                        <div class="icon-circle mb-2 bg-green"><i class="zmdi zmdi-calendar"></i></div>
                                        <p class="mb-0">Calendar</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://127.0.0.1:8000/contact">
                                        <div class="icon-circle mb-2 bg-purple"><i
                                                class="zmdi zmdi-account-calendar"></i>
                                        </div>
                                        <p class="mb-0">Contacts</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle mb-2 bg-red"><i class="zmdi zmdi-tag"></i></div>
                                        <p class="mb-0">News</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle mb-2 bg-grey"><i class="zmdi zmdi-map"></i></div>
                                        <p class="mb-0">Maps</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" title="Notifications" data-toggle="dropdown"
                        role="button"><i class="zmdi zmdi-notifications"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu slideUp2">
                        <li class="header">Notifications</li>
                        <li class="body">
                            <ul class="menu list-unstyled">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue"><i class="zmdi zmdi-account"></i></div>
                                        <div class="menu-info">
                                            <h4>8 New Members joined</h4>
                                            <p><i class="zmdi zmdi-time"></i> 14 mins ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-amber"><i class="zmdi zmdi-shopping-cart"></i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>4 Sales made</h4>
                                            <p><i class="zmdi zmdi-time"></i> 22 mins ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red"><i class="zmdi zmdi-delete"></i></div>
                                        <div class="menu-info">
                                            <h4><b>Nancy Doe</b> Deleted account</h4>
                                            <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-green"><i class="zmdi zmdi-edit"></i></div>
                                        <div class="menu-info">
                                            <h4><b>Nancy</b> Changed name</h4>
                                            <p><i class="zmdi zmdi-time"></i> 2 hours ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-grey"><i class="zmdi zmdi-comment-text"></i></div>
                                        <div class="menu-info">
                                            <h4><b>John</b> Commented your post</h4>
                                            <p><i class="zmdi zmdi-time"></i> 4 hours ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-purple"><i class="zmdi zmdi-refresh"></i></div>
                                        <div class="menu-info">
                                            <h4><b>John</b> Updated status</h4>
                                            <p><i class="zmdi zmdi-time"></i> 3 hours ago </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-blue"><i class="zmdi zmdi-settings"></i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>Settings Updated</h4>
                                            <p><i class="zmdi zmdi-time"></i> Yesterday </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"> <a href="javascript:void(0);">View All
                                Notifications</a> </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i
                            class="zmdi zmdi-flag"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu slideUp2">
                        <li class="header">Tasks List <small class="float-right"><a href="javascript:void(0);">View
                                    All</a></small></li>
                        <li class="body">
                            <ul class="menu tasks list-unstyled">
                                <li>
                                    <div class="progress-container progress-primary">
                                        <span class="progress-badge">eCommerce Website</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled team-info">
                                            <li class="m-r-15"><small>Team</small></li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar2.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar3.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar4.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-container">
                                        <span class="progress-badge">iOS Game Dev</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 45%;">
                                                <span class="progress-value">45%</span>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled team-info">
                                            <li class="m-r-15"><small>Team</small></li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar10.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar9.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar8.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar7.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar6.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-container progress-warning">
                                        <span class="progress-badge">Home Development</span>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 29%;">
                                                <span class="progress-value">29%</span>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled team-info">
                                            <li class="m-r-15"><small>Team</small></li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar5.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar2.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="{{ asset('assets/images/xs/avatar7.jpg') }} "
                                                    alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="app_calendar" title="Calendar"><i
                            class="zmdi zmdi-calendar"></i></a></li>
                <li><a href="javascript:void(0);" class="app_google_drive" title="Google Drive"><i
                            class="zmdi zmdi-google-drive"></i></a></li>
                <li><a href="javascript:void(0);" class="app_group_work" title="Group Work"><i
                            class="zmdi zmdi-group-work"></i></a></li>
                <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i
                            class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
                <li><a href="http://127.0.0.1:8000/sign-in" class="mega-menu" title="Sign Out"><i
                            class="zmdi zmdi-power"></i></a>
                </li>
            </ul>
        </div>

        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="navbar-brand">
                <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
                <a href="http://127.0.0.1:8000/index"><img src="{{ asset('assets/images/logo.svg') }} "
                        width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
            </div>
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <a class="image" href="profile"><img src="{{ asset('assets/images/profile_av.jpg') }} "
                                    alt="User"></a>
                            <div class="detail">
                                <h4>Michael</h4>
                                <small>Super Admin</small>
                            </div>
                        </div>
                    </li>
                    <li><a href="http://127.0.0.1:8000/index"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-apps"></i><span>App</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/mail-inbox">Email</a></li>
                            <li><a href="http://127.0.0.1:8000/chat">Chat Apps</a></li>
                            <li><a href="http://127.0.0.1:8000/events">Calendar</a></li>
                            <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-assignment"></i><span>Projects</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/project-list">Projects List</a></li>
                            <li><a href="http://127.0.0.1:8000/taskboard">Taskboard</a></li>
                            <li><a href="http://127.0.0.1:8000/ticket-list">Ticket List</a></li>
                            <li><a href="http://127.0.0.1:8000/ticket-detail">Ticket Detail</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File
                                Manager</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/file-dashboard">All File</a></li>
                            <li><a href="http://127.0.0.1:8000/file-documents">Documents</a></li>
                            <li><a href="http://127.0.0.1:8000/file-images">Images</a></li>
                            <li><a href="http://127.0.0.1:8000/file-media">Media</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/blog-dashboard">Dashboard</a></li>
                            <li><a href="http://127.0.0.1:8000/blog-post">Blog Post</a></li>
                            <li><a href="http://127.0.0.1:8000/blog-list">List View</a></li>
                            <li><a href="http://127.0.0.1:8000/blog-grid">Grid View</a></li>
                            <li><a href="http://127.0.0.1:8000/blog-details">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/ec-dashboard">Dashboard</a></li>
                            <li><a href="http://127.0.0.1:8000/ec-product">Product</a></li>
                            <li><a href="http://127.0.0.1:8000/ec-product-List">Product List</a></li>
                            <li><a href="http://127.0.0.1:8000/ec-product-detail">Product detail</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-swap-alt"></i><span>Components</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/ui_kit">Aero UI KIT</a></li>
                            <li><a href="http://127.0.0.1:8000/alerts">Alerts</a></li>
                            <li><a href="http://127.0.0.1:8000/collapse">Collapse</a></li>
                            <li><a href="http://127.0.0.1:8000/colors">Colors</a></li>
                            <li><a href="http://127.0.0.1:8000/dialogs">Dialogs</a></li>
                            <li><a href="http://127.0.0.1:8000/list-group">List Group</a></li>
                            <li><a href="http://127.0.0.1:8000/media-object">Media Object</a></li>
                            <li><a href="http://127.0.0.1:8000/modals">Modals</a></li>
                            <li><a href="http://127.0.0.1:8000/notifications">Notifications</a></li>
                            <li><a href="http://127.0.0.1:8000/progressbars">Progress Bars</a></li>
                            <li><a href="http://127.0.0.1:8000/range-sliders">Range Sliders</a></li>
                            <li><a href="http://127.0.0.1:8000/sortable-nestable">Sortable & Nestable</a></li>
                            <li><a href="http://127.0.0.1:8000/tabs">Tabs</a></li>
                            <li><a href="http://127.0.0.1:8000/waves">Waves</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-flower"></i><span>Font
                                Icons</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/icons">Material Icons</a></li>
                            <li><a href="http://127.0.0.1:8000/icons-themify">Themify Icons</a></li>
                            <li><a href="http://127.0.0.1:8000/icons-weather">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-assignment"></i><span>Forms</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/basic-form-elements">Basic Form</a></li>
                            <li><a href="http://127.0.0.1:8000/advanced-form-elements">Advanced Form</a></li>
                            <li><a href="http://127.0.0.1:8000/form-examples">Form Examples</a></li>
                            <li><a href="http://127.0.0.1:8000/form-validation">Form Validation</a></li>
                            <li><a href="http://127.0.0.1:8000/form-wizard">Form Wizard</a></li>
                            <li><a href="http://127.0.0.1:8000/form-editors">Editors</a></li>
                            <li><a href="http://127.0.0.1:8000/form-upload">File Upload</a></li>
                            <li><a href="http://127.0.0.1:8000/form-summernote">Summernote</a></li>
                        </ul>
                    </li>
                    <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-grid"></i><span>Tables</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/normal-tables">Normal Tables</a></li>
                            <li class="active"><a href="http://127.0.0.1:8000/jquery-datatable">Jquery Datatables</a>
                            </li>
                            <li><a href="http://127.0.0.1:8000/editable-table">Editable Tables</a></li>
                            <li><a href="http://127.0.0.1:8000/footable">Foo Tables</a></li>
                            <li><a href="http://127.0.0.1:8000/table-color">Tables Color</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-chart"></i><span>Charts</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/c3">C3 Chart</a></li>
                            <li><a href="http://127.0.0.1:8000/morris">Morris</a></li>
                            <li><a href="http://127.0.0.1:8000/flot">Flot</a></li>
                            <li><a href="http://127.0.0.1:8000/chartjs">ChartJS</a></li>
                            <li><a href="http://127.0.0.1:8000/sparkline">Sparkline</a></li>
                            <li><a href="http://127.0.0.1:8000/jquery-knob">Jquery Knob</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-delicious"></i><span>Widgets</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/widgets-app">Apps Widgets</a></li>
                            <li><a href="http://127.0.0.1:8000/widgets-data">Data Widgets</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/sign-in">Sign In</a></li>
                            <li><a href="http://127.0.0.1:8000/sign-up">Sign Up</a></li>
                            <li><a href="http://127.0.0.1:8000/forgot-password">Forgot Password</a></li>
                            <li><a href="http://127.0.0.1:8000/404">Page 404</a></li>
                            <li><a href="http://127.0.0.1:8000/500">Page 500</a></li>
                            <li><a href="http://127.0.0.1:8000/page-offline">Page Offline</a></li>
                            <li><a href="http://127.0.0.1:8000/locked">Locked Screen</a></li>
                        </ul>
                    </li>
                    <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/blank">Blank Page</a></li>
                            <li><a href="http://127.0.0.1:8000/image-gallery">Image Gallery</a></li>
                            <li><a href="http://127.0.0.1:8000/profile">Profile</a></li>
                            <li><a href="http://127.0.0.1:8000/timeline">Timeline</a></li>
                            <li><a href="http://127.0.0.1:8000/pricing">Pricing</a></li>
                            <li><a href="http://127.0.0.1:8000/invoices">Invoices</a></li>
                            <li><a href="http://127.0.0.1:8000/invoices-list">Invoices List</a></li>
                            <li><a href="http://127.0.0.1:8000/search-results">Search Results</a></li>
                        </ul>
                    </li>
                    <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-map"></i><span>Maps</span></a>
                        <ul class="ml-menu">
                            <li><a href="http://127.0.0.1:8000/google">Google Map</a></li>
                            <li><a href="http://127.0.0.1:8000/yandex">YandexMap</a></li>
                            <li><a href="http://127.0.0.1:8000/jvectormap">jVectorMap</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="progress-container progress-primary m-t-10">
                            <span class="progress-badge">Traffic this Month</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                    <span class="progress-value">67%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Server Load</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs sm">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i
                            class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i
                            class="zmdi zmdi-comments"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="setting">
                    <div class="slim_scroll">
                        <div class="card">
                            <h6>Theme Option</h6>
                            <div class="light_dark">
                                <div class="radio">
                                    <input type="radio" name="radio1" id="lighttheme" value="light"
                                        checked="">
                                    <label for="lighttheme">Light Mode</label>
                                </div>
                                <div class="radio mb-0">
                                    <input type="radio" name="radio1" id="darktheme" value="dark">
                                    <label for="darktheme">Dark Mode</label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h6>Color Skins</h6>
                            <ul class="choose-skin list-unstyled">
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="blush" class="active">
                                    <div class="blush"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="card">
                            <h6>General Settings</h6>
                            <ul class="setting-list list-unstyled">
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">Report Panel Usage</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox2" type="checkbox" checked="">
                                        <label for="checkbox2">Email Redirect</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox3" type="checkbox" checked="">
                                        <label for="checkbox3">Notifications</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4">Auto Updates</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox5" type="checkbox" checked="">
                                        <label for="checkbox5">Offline</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox6" type="checkbox" checked="">
                                        <label for="checkbox6">Location Permission</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane right_chat" id="chat">
                    <div class="slim_scroll">
                        <div class="card">
                            <ul class="list-unstyled">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object "
                                                src="{{ asset('assets/images/xs/avatar4.jpg') }} " alt="">
                                            <div class="media-body">
                                                <span class="name">Sophia <small
                                                        class="float-right">11:00AM</small></span>
                                                <span class="message">There are many variations of passages of Lorem
                                                    Ipsum
                                                    available</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object "
                                                src="{{ asset('assets/images/xs/avatar5.jpg') }} " alt="">
                                            <div class="media-body">
                                                <span class="name">Grayson <small
                                                        class="float-right">11:30AM</small></span>
                                                <span class="message">All the Lorem Ipsum generators on the</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object "
                                                src="{{ asset('assets/images/xs/avatar2.jpg') }} " alt="">
                                            <div class="media-body">
                                                <span class="name">Isabella <small
                                                        class="float-right">11:31AM</small></span>
                                                <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="me">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object "
                                                src="{{ asset('assets/images/xs/avatar1.jpg') }} " alt="">
                                            <div class="media-body">
                                                <span class="name">John <small
                                                        class="float-right">05:00PM</small></span>
                                                <span class="message">It is a long established fact that a
                                                    reader</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object "
                                                src="{{ asset('assets/images/xs/avatar3.jpg') }} " alt="">
                                            <div class="media-body">
                                                <span class="name">Alexander <small
                                                        class="float-right">06:08PM</small></span>
                                                <span class="message">Richard McClintock, a Latin professor</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <!-- Horizontal Layout -->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Employees </strong> EDIT</h2>
                                    {{-- <ul class="header-dropdown">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                                data-toggle="dropdown" role="button" aria-haspopup="true"
                                                aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                        <li class="remove">
                                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                        </li>
                                    </ul> --}}
                                </div>
                                <div class="body">
                                    <form class="form-horizontal" action="{{ route('employ.update') }}"
                                        method="POST" id="employeeForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <!-- Success/Error Message Container -->
                                                <div id="formMessages"
                                                    class="alert alert-success alert-dismissible fade show"
                                                    role="alert">
                                                    <strong>SUCCESS !</strong>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div id="errorMessage"
                                                    class="alert alert-danger alert-dismissible fade show"
                                                    role="alert">
                                                    <strong>ERROR !</strong>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label for="name">Name : </label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name"
                                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $employs->name) }}"
                                                        placeholder="Enter your Name" required>
                                                    @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label for="dep">Department : </label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="form-group">
                                                    <input type="text" name="depart" id="dep"
                                                        class="form-control @error('depart') is-invalid @enderror" value="{{ old('depart', $employs->depart) }}"
                                                        placeholder="Enter your Department" required>
                                                    @error('depart')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                                <label for="phone">Phone : </label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8">
                                                <div class="form-group">
                                                    <input type="text" name="phone" id="phone"
                                                        class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $employs->phone) }}"
                                                        placeholder="Enter your Phone" required>
                                                    @error('phone')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 offset-sm-2">
                                            <button type="submit"
                                                class="btn btn-raised btn-primary btn-round waves-effect">EDIT</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }} "></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }} "></script> <!-- Lib Scripts Plugin Js -->


    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }} "></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons5.min.js') }} "></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }} "></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }} "></script><!-- Custom Js -->
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }} "></script>
    <script>
        $(document).ready(function() {
            $('#employeeForm').submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                // Clear previous messages
                $('#successMessage').hide();
                $('#errorMessage').hide();
                $('#formMessages').show();

                // Perform AJAX request
                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        // Show success message
                        $('#successMessage').text('Employee added successfully!').show();

                        // Clear form fields
                        $('#employeeForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        // Show error message
                        var errorMessage = 'An error occurred. Please try again later.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        $('#errorMessage').text(errorMessage).show();
                    }
                });
            });
        });
    </script>
</body>


</html>
