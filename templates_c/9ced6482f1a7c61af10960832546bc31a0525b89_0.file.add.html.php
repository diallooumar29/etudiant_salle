<?php
/* Smarty version 3.1.30, created on 2018-07-19 15:05:43
  from "C:\xampp\htdocs\mesprojets\iam_salle\view\creneau\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b508ca703fac6_55115659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ced6482f1a7c61af10960832546bc31a0525b89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\iam_salle\\view\\creneau\\add.html',
      1 => 1532005478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b508ca703fac6_55115659 (Smarty_Internal_Template $_smarty_tpl) {
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
            <span class="logo-mini"><b>ALT</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Gestion des Salles</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <!--<span class="sr-only">Toggle navigation</span>-->
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/iam.png" class="user-image" alt="User Image">
                            <span class="hidden-xs">Administrateur</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/iam.png" class="img-circle" alt="User Image">

                                <p>
                                    Administrateur
                                    <small>utilisateur autorisé</small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
disconnect/disconnect" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

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
public/image/iam.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Administrateur</p>
                    <a href="#"><i class="fa fa-circle text-success"></i>En ligne</a>
                </div>
            </div>
            <!-- search form -->
            <!--<form action="#" method="get" class="sidebar-form">-->
                <!--<div class="input-group">-->
                    <!--<input type="text" name="q" class="form-control" placeholder="Search...">-->
          <!--<span class="input-group-btn">-->
                <!--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
                <!--</button>-->
              <!--</span>-->
                <!--</div>-->
            <!--</form>-->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <!--<li> <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/accueil/accueil"><i class="fa fa-dashboard"></i> Menu Generale</a></li>-->
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
                        <i class="fa fa-edit"></i> <span>Gestion des Occupations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/add"><i class="fa fa-circle-o"></i> Ajout Occupation</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/liste"><i class="fa fa-circle-o"></i> Liste des Occupations</a></li>

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

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <!--<ol class="breadcrumb">-->
                <!--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>-->
                <!--<li class="active">Accueil</li>-->
            <!--</ol>-->
        </section>
<br>
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:50px;">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire D'ajout</div>
        <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
            <div class="panel-body" style="color: green; background-color: #afd9ee">
                Salle occupee avec succes!
            </div>
            <?php } else { ?>
            Erreur d'insertion!
            <?php }?>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['okkkk']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['okkkk']->value != 0) {?>
            <div class="panel-body" style="color: #ffffff; background-color:darkred">
                Salle deja occupé!
            </div>

            <?php } else { ?>
            <div class="panel-body" style="color: green; background-color:#afd9ee; ">
                Aucun changement
            </div>
            <?php }?>
            <?php }?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Creneau/ajouter">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Classe</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="idclasse">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classes']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['idclasse'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['nomclasse'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div class="form-group col-md-6 ">
                    <label for="exampleFormControlSelect1">Nom salle</label>
                    <select class="form-control" id="d" name="idsalle">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['salles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['nom'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['nom'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">Date</label>
                    <input class="form-control" type="date" name="datecre"/>

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Heure debut</label>
                    <input class="form-control" type="time" name="hd"/>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Heure fin</label>
                    <input class="form-control" type="time" name="hf"/>
                </div>
                <div class="form-group col-md-12">
                    <input class="btn btn-success" type="submit" name="valider" value="Valider"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
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
