<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('titulo')</title>

    <meta name="description"
          content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description"
          content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/photos/cidadanIA.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/photosF/cidadanIA.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/js/plugins/highlightjs/styles/atom-one-light.css')}}">
    <link rel="stylesheet" href="{{asset('/js/plugins/magnific-popup/magnific-popup.css')}}">

    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{asset('/css/dashmix.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="{{asset('/css/themes/xmodern.min.css')}}">
    <!-- END Stylesheets -->
</head>
<body>

<div id="page-container"
     class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-dark page-header-glass main-content-boxed">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-primary">
            <div class="content-header">
                <div class="font-size-lg font-w300 text-white">
                    <i class="fa fa-users mr-1"></i> People
                </div>

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout"
                   data-action="side_overlay_close">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <form class="push" action="db_social.html" method="POST" onsubmit="return false;">
                <div class="input-group">
                    <input class="form-control form-control-alt" placeholder="Search People..">
                    <div class="input-group-append">
                                <span class="input-group-text input-group-text-alt">
                                    <i class="fa fa-fw fa-search"></i>
                                </span>
                    </div>
                </div>
            </form>
            <div class="block pull-x">
                <!-- Online -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase font-size-sm font-w700">Online</span>
                </div>
                <div class="block-content">
                    <ul class="nav-items">
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Lori Moore</div>
                                    <div class="font-size-sm text-muted">Photographer</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Scott Young</div>
                                    <div class="font-w400 font-size-sm text-muted">Web Designer</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Melissa Rice</div>
                                    <div class="font-w400 font-size-sm text-muted">Web Developer</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Online -->

                <!-- Busy -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase font-size-sm font-w700">Busy</span>
                </div>
                <div class="block-content">
                    <ul class="nav-items">
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-danger"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Sara Fields</div>
                                    <div class="font-w400 font-size-sm text-muted">UI Designer</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Busy -->

                <!-- Away -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase font-size-sm font-w700">Away</span>
                </div>
                <div class="block-content">
                    <ul class="nav-items">
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Jose Parker</div>
                                    <div class="font-w400 font-size-sm text-muted">Copywriter</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Marie Duncan</div>
                                    <div class="font-w400 font-size-sm text-muted">Writer</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Away -->

                <!-- Offline -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase font-size-sm font-w700">Offline</span>
                </div>
                <div class="block-content">
                    <ul class="nav-items">
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar11.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Ralph Murray</div>
                                    <div class="font-w400 font-size-sm text-muted">Teacher</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Danielle Jones</div>
                                    <div class="font-w400 font-size-sm text-muted">Photographer</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Danielle Jones</div>
                                    <div class="font-w400 font-size-sm text-muted">Front-end Developer</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                                    <span
                                        class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Ryan Flores</div>
                                    <div class="font-w400 font-size-sm text-muted">UX Specialist</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Offline -->

                <!-- Add People -->
                <div class="block-content row justify-content-center border-top">
                    <div class="col-9">
                        <a class="btn btn-block btn-hero-primary" href="javascript:void(0)">
                            <i class="fa fa-fw fa-plus mr-1"></i> Add People
                        </a>
                    </div>
                </div>
                <!-- END Add People -->
            </div>
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header bg-primary">
            <!-- Logo -->
            <a class="link-fx font-size-lg text-light" href="index.html">
                        <span class="smini-visible">
                            <span class="text-white-75">D</span><span class="text-white">S</span>
                        </span>
                <span class="smini-hidden">
                            <span class="text-white-75"><img src="{{asset('/media/photos/cidadanIA.png')}}" width="50" alt=""> </span>
                          CidadanIA
                        </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Close Sidebar, Visible only on mobile screens -->
                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close"
                   href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- User Info -->
        <div class="smini-hidden">
            <div class="content-side content-side-full bg-black-10 d-flex align-items-center">
                <a class="img-link d-inline-block" href="javascript:void(0)">
                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{asset('media/avatars/avatar0.jpg')}}" alt="">
                </a>
                <div class="ml-3">
                    <a class="font-w600 text-dual" href="javascript:void(0)">{{$usuario->nome}}</a>
                    <div class="font-size-sm font-italic text-dual">Developer</div>
                </div>
            </div>
        </div>
        <!-- END User Info -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="db_social.html">
                        <i class="nav-main-link-icon far fa-user-circle"></i>
                        <span class="nav-main-link-name">Perfil</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                        <i class="nav-main-link-icon far fa-bell"></i>
                        <span class="nav-main-link-name">Notificações</span>
                        <span class="nav-main-link-badge badge badge-pill badge-info">6</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                        <i class="nav-main-link-icon far fa-envelope-open"></i>
                        <span class="nav-main-link-name">Mensagens</span>
                        <span class="nav-main-link-badge badge badge-pill badge-info">1</span>
                    </a>
                </li>
                <li class="nav-main-heading">Home</li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                        <i class="nav-main-link-icon far fa-newspaper"></i>
                        <span class="nav-main-link-name">Novos Feed</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                        <i class="nav-main-link-icon far fa-gem"></i>
                        <span class="nav-main-link-name">Minha cidade</span>
                    </a>
                </li>
{{--                <li class="nav-main-heading">Explore</li>--}}
{{--                <li class="nav-main-item">--}}
{{--                    <a class="nav-main-link" href="">--}}
{{--                        <i class="nav-main-link-icon far fa-calendar-alt"></i>--}}
{{--                        <span class="nav-main-link-name">Events</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-main-item">--}}
{{--                    <a class="nav-main-link" href="">--}}
{{--                        <i class="nav-main-link-icon fa fa-users"></i>--}}
{{--                        <span class="nav-main-link-name">Groups</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-main-item">--}}
{{--                    <a class="nav-main-link" href="">--}}
{{--                        <i class="nav-main-link-icon far fa-file-alt"></i>--}}
{{--                        <span class="nav-main-link-name">Pages</span>--}}
{{--                        <span class="nav-main-link-badge badge badge-pill badge-danger">32</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-main-item">--}}
{{--                    <a class="nav-main-link" href="">--}}
{{--                        <i class="nav-main-link-icon far fa-clock"></i>--}}
{{--                        <span class="nav-main-link-name">On This Day</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-main-item">--}}
{{--                    <a class="nav-main-link" href="">--}}
{{--                        <i class="nav-main-link-icon far fa-newspaper"></i>--}}
{{--                        <span class="nav-main-link-name">Pages Feed</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-main-item">--}}
{{--                    <a class="nav-main-link" href="">--}}
{{--                        <i class="nav-main-link-icon far fa-images"></i>--}}
{{--                        <span class="nav-main-link-name">Photos</span>--}}
{{--                        <span class="nav-main-link-badge badge badge-pill badge-warning">14</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-main-item">--}}
{{--                    <a class="nav-main-link" href="">--}}
{{--                        <i class="nav-main-link-icon fa fa-gamepad"></i>--}}
{{--                        <span class="nav-main-link-name">Games</span>--}}
{{--                        <span class="nav-main-link-badge badge badge-pill badge-success">25</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-main-heading">Deslogar do CidadaniA</li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('logout')}}">
                        <i class="nav-main-link-icon si si-logout
3"></i>
                        <span class="nav-main-link-name"> Sair</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div>
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-rounded btn-dual mr-1" data-toggle="layout"
                        data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-rounded btn-dual" id="page-header-notifications-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="badge badge-secondary badge-pill">6</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                            Notifications
                        </div>
                        <ul class="nav-items my-2">
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-user-plus text-primary"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">John Doe send you a friend request!</div>
                                        <div class="text-muted font-italic">6 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-user-plus text-primary"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">Elisa Doe send you a friend request!</div>
                                        <div class="text-muted font-italic">10 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-check-circle text-success"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">Backup completed successfully!</div>
                                        <div class="text-muted font-italic">2 hours ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-user-plus text-primary"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">George Smith send you a friend request!</div>
                                        <div class="text-muted font-italic">3 hours ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-exclamation-circle text-warning"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">You are running out of space. Please consider upgrading
                                            your plan.
                                        </div>
                                        <div class="text-muted font-italic">1 day ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-envelope-open text-info"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">You have a new message!</div>
                                        <div class="text-muted font-italic">2 days ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-1"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Notifications Dropdown -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>
                <!-- Open Search Section -->
                <button type="button" class="btn btn-rounded btn-dual" data-toggle="layout"
                        data-action="header_search_on">
                    <i class="fa fa-fw fa-search"></i>
                </button>
                <!-- END Open Search Section -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-rounded btn-dual" data-toggle="layout"
                        data-action="side_overlay_toggle">
                    <i class="fa fa-fw fa-comment-alt"></i>
                </button>
                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-primary">
            <div class="content-header">
                <form class="w-100" action="be_pages_generic_search.html" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" placeholder="Search your network.."
                               id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary" data-toggle="layout"
                                    data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-image" style="background-image: url({{asset('/media/photos/city.jfif')}});">
            <div class="bg-black-50">
                <div class="content content-full content-top">
                    <div class="py-4 text-center">
                        <a class="img-link" href="javascript:void(0)">
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('media/avatars/avatar0.jpg')}}"
                                 alt="">
                        </a>
                        <h1 class="h2 font-w700 my-2 text-white">{{$usuario->nome}}</h1>
                        <h2 class="h4 font-w400 text-white-75 mb-0">
                            Developer <a class="text-primary-lighter" href="javascript:void(0)">@Sispel</a>
                        </h2>

                    </div>
                    <div class="invisible" data-toggle="appear" data-class="animated rubberBand" data-timeout="500">
                        <a class="btn btn-hero-primary"  data-toggle="modal" data-target="#modal-post" style="color: white" >
                            <i class="fa fa-fw fa-edit mr-1"></i> Adicionar um Relato
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

       @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                    Criado com <i class="fa fa-heart text-danger"></i> por <a class="font-w600"
                                                                               href="https://1.envato.market/ydb"
                                                                               target="_blank">CidadanIA</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                    <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">Jeito certo de praticar CidadanIA</a> &copy; <span
                        data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    Dashmix JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="assets/js/dashmix.core.min.js"></script>

<!--
    Dashmix JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('/js/dashmix.app.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('/js/plugins/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{asset('/js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<!-- Dashmix Core JS -->
<script src="{{ mix('js/dashmix.app.js') }}"></script>

<!-- Laravel Scaffolding JS -->
<!-- <script src="{{ mix('/js/laravel.app.js') }}"></script> -->


<!-- Page JS Helpers (Highlight.js + Magnific Popup Plugins) -->
<script>jQuery(function () {
        Dashmix.helpers(['highlightjs', 'magnific-popup']);
    });</script>
<
@yield('js_after')
</body>
</html>
