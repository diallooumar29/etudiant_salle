<?php
/* Smarty version 3.1.30, created on 2018-05-16 02:16:04
  from "C:\xampp\htdocs\projet_php\gestion_salle\view\salle\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afb78449b42c8_25524333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aaedb21074cc5c6e64ac7aaa40b01af49cd3fce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projet_php\\gestion_salle\\view\\salle\\add.html',
      1 => 1526313208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afb78449b42c8_25524333 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des Salles</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
splugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
accueil/accueil" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Gestion Des </b>Salles</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Zainoul</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Barry Zainoul Web designer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Zainoul</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/accueil/accueil"><i class="fa fa-dashboard"></i> Menu Generale</a></li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Gestion des Classes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
classe/add"><i class="fa fa-circle-o"></i> Ajout Classe</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
classe/liste"><i class="fa fa-circle-o"></i> Liste des Classes</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Gestion des Creneaux</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/add"><i class="fa fa-circle-o"></i> Ajout Creneau</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/liste"><i class="fa fa-circle-o"></i> Liste des Creneau</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Gestion des Salles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
salle/add"><i class="fa fa-circle-o"></i> Ajout Salle</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
salle/liste"><i class="fa fa-circle-o"></i> Liste des Salles</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Gestion des Utilisateurs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
utilisateur/add"><i class="fa fa-circle-o"></i> Ajout D'un Utilisateur</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
utilisteur/liste"><i class="fa fa-circle-o"></i> Liste des Utilisateurs</a></li>
                    </ul>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Accueil
                <small>Menu</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Accueil</li>
            </ol>
        </section>
<br>
<div class="container col-md-6 col-lg-6 col-sm-6 col-md-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire d'ajout</div>
        <div class="panel-body">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Salle/add">
                <div>
                    <label class="control-label ">Nom de la Salle</label>
                    <input class="form-control" type="text" name="nom"/>
                    <div class="row">
                        <legend class="col-form-legend col-sm-2">Taille</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="taille" value="Petite salle"/>
                                    Petite Salle
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="taille" value="Moyenne salle"/>
                                    Salle Moyenne
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="taille" value="Grande salle"/>
                                    Grande Salle
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Niveau</label>
                        <select class="form-control" id="" name="niveausalle">
                            <option selected>Choisissez...</option>
                            <option>RDC</option>
                            <option value="1er niveau">1er Niveau</option>
                            <option value="2eme niveau">2eme Niveau</option>
                            <option value="3eme niveau">3eme Niveau</option>
                            <option value="4eme niveau">4eme Niveau</option>
                            <option value="5eme niveau">5eme Niveau</option>
                            <option value="6eme niveau">6eme Niveau</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Type De Salle</label>
                        <select class="form-control" name="typesalle">
                            <option selected>Choisissez...</option>
                            <option value="Salle de TP">Sallle De TP</option>
                            <option value="Salle de Conference">Salle de Conference</option>
                            <option value="Amphitheatre">Amphitheatre</option>
                            <option value="Salle Normale">Salle Normal</option>
                        </select>
                    </div>
                    <div class="row">
                        <legend class="col-form-legend col-sm-2">Tableau</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="tableau" id="tableau" value="smart board" onclick="check()" />
                                    Smart Board
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="tableau" value="a marqueur"/>
                                    A Marqueur
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <legend class="col-form-legend col-sm-2">Projecteur</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="videoprojecteur" id="proj" value="oui"/>
                                    oui
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="projecteur" value="non"/>
                                    non
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Batiment</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="batiment">
                            <option selected>Choisissez...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-primary "name="valider">Enregistrer</button>
                <button type="reset" class="btn btn-danger btn-primary ">Annuler</button>
            </form>
        </div>
    </div>
</div>
        </div>
    </div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="#">BIT3</a>.</strong> All rights
    reserved.
</footer>
<!-- /.box -->
<!--<div class="footer">-->
<!--<br/>-->
<!--<p>@2018 copyright all rights reserved Gestion_salle </p>-->
<!--<br/>-->
<!--</div>-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- DataTables -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/datatables.net/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- SlimScroll -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/fastclick/lib/fastclick.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
dist/js/demo.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
