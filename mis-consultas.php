<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>Charisma</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    
                    <?php require_once('left-menu.php'); ?>

                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Mis consultas</a>
                        </li>
                    </ul>
                </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Mis Consultas</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box col-md-12">
        <a class="btn btn-info" href="iniciar-consulta.php">
            <i class="glyphicon glyphicon-edit icon-white"></i>
            Iniciar consulta
        </a>
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Paciente</th>
        <th>Fecha</th>
        <th>Consulta</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>David R</td>
        <td class="center">2012/01/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-success label label-default">Completado</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Chris Jack</td>
        <td class="center">2012/01/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-success label label-default">Completado</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Jack Chris</td>
        <td class="center">2012/01/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-success label label-default">Completado</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Muhammad Usman</td>
        <td class="center">2012/01/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-success label label-default">Completado</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Sheikh Heera</td>
        <td class="center">2012/02/01</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-default label label-danger">Emergencia</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Helen Garner</td>
        <td class="center">2012/02/01</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-default label label-danger">Emergencia</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Saruar Ahmed</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Ahemd Saruar</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Habib Rizwan</td>
        <td class="center">2012/01/21</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-success label label-default">Completado</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Rizwan Habib</td>
        <td class="center">2012/01/21</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-success label label-default">Completado</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Amrin Sana</td>
        <td class="center">2012/08/23</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-default label label-danger">Emergencia</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Sana Amrin</td>
        <td class="center">2012/08/23</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-default label label-danger">Emergencia</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Ifrah Jannat</td>
        <td class="center">2012/06/01</td>
        <td class="center">Admin</td>
        <td class="center">
            <span class="label-default label">Inactive</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Jannat Ifrah</td>
        <td class="center">2012/06/01</td>
        <td class="center">Admin</td>
        <td class="center">
            <span class="label-default label">Inactive</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Robert</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Dave Robert</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Brown Robert</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Usman Muhammad</td>
        <td class="center">2012/01/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-success label label-default">Completado</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Abdullah</td>
        <td class="center">2012/02/01</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-default label label-danger">Emergencia</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Dow John</td>
        <td class="center">2012/02/01</td>
        <td class="center">Admin</td>
        <td class="center">
            <span class="label-default label">Inactive</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>John R</td>
        <td class="center">2012/02/01</td>
        <td class="center">Admin</td>
        <td class="center">
            <span class="label-default label">Inactive</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Paul Wilson</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Wilson Paul</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Heera Sheikh</td>
        <td class="center">2012/01/21</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-success label label-default">Completado</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Sheikh Heera</td>
        <td class="center">2012/01/21</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-success label label-default">Completado</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Christopher</td>
        <td class="center">2012/08/23</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-default label label-danger">Emergencia</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Andro Christopher</td>
        <td class="center">2012/08/23</td>
        <td class="center">Dolor de cabeza</td>
        <td class="center">
            <span class="label-default label label-danger">Emergencia</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Jhon Doe</td>
        <td class="center">2012/06/01</td>
        <td class="center">Admin</td>
        <td class="center">
            <span class="label-default label">Inactive</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Lorem Ipsum</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Abraham</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Brown Blue</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    <tr>
        <td>Worth Name</td>
        <td class="center">2012/03/01</td>
        <td class="center">Dolor abdominal</td>
        <td class="center">
            <span class="label-warning label label-default">Pendiente</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Ver
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Editar
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Eliminar
            </a>
        </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    <div class="row">
        <div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Charisma Demo 2 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px"
                 data-ad-client="ca-pub-5108790028230107"
                 data-ad-slot="3193373905"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class="col-md-2 col-lg-3 col-sm-12 col-xs-12 email-subscription-footer">
            <div class="mc_embed_signup">
                <form action="//halalit.us3.list-manage.com/subscribe/post?u=444b176aa3c39f656c66381f6&amp;id=eeb0c04e84" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div>
                        <label>Keep up with my work</label>
                        <input type="email" value="" name="EMAIL" class="email" placeholder="Email address" required>

                        <div class="power_field"><input type="text" name="b_444b176aa3c39f656c66381f6_eeb0c04e84" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" class="button"></div>
                    </div>
                </form>
            </div>

            <!--End mc_embed_signup-->
        </div>

    </div>
    <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
