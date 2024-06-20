<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title> Xeloro - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>




        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="" alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1">Usuario</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">

                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Perfil</span>
                                <span>
                                    <span class="badge badge-pill badge-warning">1</span>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Cerrar Sesión</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="index.html" class="logo">
                        <i class="mdi mdi-album"></i>
                        <span>
                            Plantilla
                        </span>
                    </a>
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu_izquierdo',
                        'container' => 'div',
                        'container_class' => 'sidebar-menu',
                        'container_id' => 'sidebar-menu',
                        'items_wrap' => '<ul class="metismenu list-unstyled" id="side-menu"><li>%3$s</li></ul>'
                    )
                );
                ?>
                
                <!--- Sidemenu 
                <div id="sidebar-menu">
                    Left Menu Start
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                            <a href="index.php" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span>Inicio</span></a>
                        </li>
                        <li>
                            <a href="index.php" class=" waves-effect"><i class="mdi mdi-diamond-stone"></i><span>Productos</span></a>
                        </li>
                        <li>
                            <a href="preguntas_frecuentes.php" class=" waves-effect"><i class="mdi mdi-diamond-stone"></i><span>Preguntas Frecuentes</span></a>
                        </li>
                        <li>
                            <a href="formulario_contacto.php" class=" waves-effect"><i class="mdi mdi-diamond-stone"></i><span>Contáctanos</span></a>
                        </li>
                    </ul>
                </div>

                Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->