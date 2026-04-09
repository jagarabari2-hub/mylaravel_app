<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Aero Bootstrap4 Admin :: Departments</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    {{-- Icons link And Others Links --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
</head>

<body class="theme-blush">

    <section class="content contact">
        <!-- Page Loader -->

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
                                    <a href="image-gallery">
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
                                    <a href="events">
                                        <div class="icon-circle mb-2 bg-green"><i class="zmdi zmdi-calendar"></i></div>
                                        <p class="mb-0">Calendar</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact">
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
                        <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
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
                                                <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
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
                                                <img src="assets/images/xs/avatar10.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
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
                                                <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
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
                <li><a href="sign-in" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a>
                </li>
            </ul>
        </div>

        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="navbar-brand">
                <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
                <a href="index"><img src="assets/images/logo.svg" width="25" alt="Aero"><span
                        class="m-l-10">Aero</span></a>
            </div>
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <a class="image" href="profile"><img src="assets/images/unnamed.jpg"
                                    alt="User"></a>
                            <div class="detail">
                                <h4>JAGA RABARI</h4>
                                <small>Super Admin</small>
                            </div>
                        </div>
                    </li>
                    <li><a href="index"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                class="fa-solid fa-users"></i><span>Users</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('logs.index') }}">Index</a></li>
                            <li><a href="taskboard">Taskboard</a></li>
                            <li><a href="ticket-list">Ticket List</a></li>
                            <li><a href="ticket-detail">Ticket Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="fa-solid fa-address-card"></i><span>Employees</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('employ.index') }}">Index</a></li>
                            <li><a href="chat">Chat Apps</a></li>
                            <li><a href="events">Calendar</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                class="fa-solid fa-sitemap"></i><span>Departments</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('dep.index') }}">Index</a></li>
                            <li><a href="file-dashboard">All File</a></li>
                            <li><a href="file-documents">Documents</a></li>
                            <li><a href="file-images">Images</a></li>
                            <li><a href="file-media">Media</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li><a href="blog-dashboard">Dashboard</a></li>
                            <li><a href="blog-post">Blog Post</a></li>
                            <li><a href="blog-list">List View</a></li>
                            <li><a href="blog-grid">Grid View</a></li>
                            <li><a href="blog-details">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span></a>
                        <ul class="ml-menu">
                            <li><a href="ec-dashboard">Dashboard</a></li>
                            <li><a href="ec-product">Product</a></li>
                            <li><a href="ec-product-List">Product List</a></li>
                            <li><a href="ec-product-detail">Product detail</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-swap-alt"></i><span>Components</span></a>
                        <ul class="ml-menu">
                            <li><a href="ui_kit">Aero UI KIT</a></li>
                            <li><a href="alerts">Alerts</a></li>
                            <li><a href="collapse">Collapse</a></li>
                            <li><a href="colors">Colors</a></li>
                            <li><a href="dialogs">Dialogs</a></li>
                            <li><a href="list-group">List Group</a></li>
                            <li><a href="media-object">Media Object</a></li>
                            <li><a href="modals">Modals</a></li>
                            <li><a href="notifications">Notifications</a></li>
                            <li><a href="progressbars">Progress Bars</a></li>
                            <li><a href="range-sliders">Range Sliders</a></li>
                            <li><a href="sortable-nestable">Sortable & Nestable</a></li>
                            <li><a href="tabs">Tabs</a></li>
                            <li><a href="waves">Waves</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-flower"></i><span>Font
                                Icons</span></a>
                        <ul class="ml-menu">
                            <li><a href="icons">Material Icons</a></li>
                            <li><a href="icons-themify">Themify Icons</a></li>
                            <li><a href="icons-weather">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-assignment"></i><span>Forms</span></a>
                        <ul class="ml-menu">
                            <li><a href="basic-form-elements">Basic Form</a></li>
                            <li><a href="advanced-form-elements">Advanced Form</a></li>
                            <li><a href="form-examples">Form Examples</a></li>
                            <li><a href="form-validation">Form Validation</a></li>
                            <li><a href="form-wizard">Form Wizard</a></li>
                            <li><a href="form-editors">Editors</a></li>
                            <li><a href="form-upload">File Upload</a></li>
                            <li><a href="form-summernote">Summernote</a></li>
                        </ul>
                    </li>
                    <li class="active open"><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-grid"></i><span>Tables</span></a>
                        <ul class="ml-menu">
                            <li><a href="normal-tables">Normal Tables</a></li>
                            <li class="active"><a href="jquery-datatable">Jquery Datatables</a></li>
                            <li><a href="editable-table">Editable Tables</a></li>
                            <li><a href="footable">Foo Tables</a></li>
                            <li><a href="table-color">Tables Color</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-chart"></i><span>Charts</span></a>
                        <ul class="ml-menu">
                            <li><a href="c3">C3 Chart</a></li>
                            <li><a href="morris">Morris</a></li>
                            <li><a href="flot">Flot</a></li>
                            <li><a href="chartjs">ChartJS</a></li>
                            <li><a href="sparkline">Sparkline</a></li>
                            <li><a href="jquery-knob">Jquery Knob</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-delicious"></i><span>Widgets</span></a>
                        <ul class="ml-menu">
                            <li><a href="widgets-app">Apps Widgets</a></li>
                            <li><a href="widgets-data">Data Widgets</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                        <ul class="ml-menu">
                            <li><a href="sign-in">Sign In</a></li>
                            <li><a href="sign-up">Sign Up</a></li>
                            <li><a href="forgot-password">Forgot Password</a></li>
                            <li><a href="404">Page 404</a></li>
                            <li><a href="500">Page 500</a></li>
                            <li><a href="page-offline">Page Offline</a></li>
                            <li><a href="locked">Locked Screen</a></li>
                        </ul>
                    </li>
                    <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
                        <ul class="ml-menu">
                            <li><a href="blank">Blank Page</a></li>
                            <li><a href="image-gallery">Image Gallery</a></li>
                            <li><a href="profile">Profile</a></li>
                            <li><a href="timeline">Timeline</a></li>
                            <li><a href="pricing">Pricing</a></li>
                            <li><a href="invoices">Invoices</a></li>
                            <li><a href="invoices-list">Invoices List</a></li>
                            <li><a href="search-results">Search Results</a></li>
                        </ul>
                    </li>
                    <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-map"></i><span>Maps</span></a>
                        <ul class="ml-menu">
                            <li><a href="google">Google Map</a></li>
                            <li><a href="yandex">YandexMap</a></li>
                            <li><a href="jvectormap">jVectorMap</a></li>
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
                                            <img class="media-object " src="assets/images/xs/avatar4.jpg"
                                                alt="">
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
                                            <img class="media-object " src="assets/images/xs/avatar5.jpg"
                                                alt="">
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
                                            <img class="media-object " src="assets/images/xs/avatar2.jpg"
                                                alt="">
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
                                            <img class="media-object " src="assets/images/xs/avatar1.jpg"
                                                alt="">
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
                                            <img class="media-object " src="assets/images/xs/avatar3.jpg"
                                                alt="">
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

        <div class="body-scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2><strong>DEPARTMENT</strong> DETAILS</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="zmdi zmdi-home"></i>
                                    Aero</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Departments</a></li>
                            <li class="breadcrumb-item active">Index</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                        <a href="{{ route('dep.create') }}" class="btn btn-success btn-icon float-right"
                            type="button"><i class="zmdi zmdi-plus"></i></a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 c_list c_table">
                                    <thead>
                                        <tr style="border-bottom: 2px solid #dddddd;">
                                            <th style="border-bottom: 2px solid #dddddd;">ID</th>
                                            <th style="border-bottom: 2px solid #dddddd;">NAME</th>
                                            <th style="border-bottom: 2px solid #dddddd;">EMAIL</th>
                                            <th style="border-bottom: 2px solid #dddddd;">PHONE</th>
                                            <th style="border-bottom: 2px solid #dddddd;">POSITION</th>
                                            <th style="border-bottom: 2px solid #dddddd;">SALARY</th>
                                            <th style="border-bottom: 2px solid #dddddd;">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody class="t-body-hov-eff">
                                        @foreach ($depts as $dept)
                                            <tr>
                                                <th scope="row">{{ $dept->id }}</th>
                                                <td>{{ $dept->name }}</td>
                                                <td>{{ $dept->email }}</td>
                                                <td>{{ $dept->phone }}</td>
                                                <td>{{ $dept->position }}</td>
                                                <td>{{ $dept->salary }}</td>
                                                <td>
                                                    <a href="{{ route('dep.show', $dept->id) }}"
                                                        class="btn btn-warning btn-sm"><i
                                                            class="fa-solid fa-eye"></i></a>
                                                    <a href="{{ route('dep.edit', $dept->id) }}"
                                                        class="btn btn-info btn-sm"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <form action="{{ route('dep.destroy', $dept->id) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button id="liveToastShow" type="button"
                                                            onclick="if(confirm('Are you sure you want to delete this department?')) this.closest('form').submit();"
                                                            class="btn btn-danger btn-sm">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 p-2">
                                    <div class="d-flex justify-content-end mt-3">
                                        {{ $depts->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
    <script>
        window.onload = function() {
            var loader = document.getElementById("loading");
            if (loader) {
                loader.style.display = "none";
            }
        };
    </script>

</body>


</html>
