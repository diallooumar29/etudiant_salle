<?php
/* Smarty version 3.1.30, created on 2018-04-30 14:12:25
  from "C:\xampp\htdocs\mesprojets\gestion_salle\view\creneau\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae708293d1d84_44456544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59957ad052ae17f8371e7b84c81d671a33ae3945' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\gestion_salle\\view\\creneau\\edit.html',
      1 => 1525090304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae708293d1d84_44456544 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
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
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/accueil/accueil">
                        <i class="fa fa-dashboard"></i> <span>Menu Generale</span>

                    </a>

                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Formulaires d'ajout</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
classe/add"><i class="fa fa-circle-o"></i> Ajout Classe</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
salle/add"><i class="fa fa-circle-o"></i> Ajout Salle</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/add"><i class="fa fa-circle-o"></i> Ajout Creneau</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
classe/liste"><i class="fa fa-circle-o"></i> Liste des Classes</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
salle/liste"><i class="fa fa-circle-o"></i> Liste des Salles</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/liste"><i class="fa fa-circle-o"></i> Liste des Creneau</a></li>
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
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:50px;">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire De Modification</div>
        <div class="panel-body">

            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Creneau/update">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modif']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Classe</label>
                    <input class="form-control" type="HIDDEN" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['test']->value['idcreneau'];?>
"/>
                    <select class="form-control" id="exampleFormControlSelect1" name="idclasse" >
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
                    <!--<select class="form-control" id="" name="hd">-->
                        <!--<option>8 H</option>-->
                        <!--<option>9 H</option>-->
                        <!--<option>10 H</option>-->
                        <!--<option>11 H</option>-->
                        <!--<option>12 H</option>-->
                        <!--<option>13 H</option>-->
                        <!--<option>14 H</option>-->
                        <!--<option>15 H</option>-->
                        <!--<option>16 H</option>-->
                        <!--<option>17 H</option>-->
                        <!--<option>18 H</option>-->
                        <!--<option>19 H</option>-->
                        <!--<option>20 H</option>-->
                        <!--<option>21 H</option>-->
                    <!--</select>-->


                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Heure fin</label>
                    <input class="form-control" type="time" name="hf"/>
                    <!--<select class="form-control" id="x" name="hf">-->
                        <!--<option>8 H</option>-->
                        <!--<option>9 H</option>-->
                        <!--<option>10 H</option>-->
                        <!--<option>11 H</option>-->
                        <!--<option>12 H</option>-->
                        <!--<option>13 H</option>-->
                        <!--<option>14 H</option>-->
                        <!--<option>15 H</option>-->
                        <!--<option>16 H</option>-->
                        <!--<option>17 H</option>-->
                        <!--<option>18 H</option>-->
                        <!--<option>19 H</option>-->
                        <!--<option>20 H</option>-->
                        <!--<option>21 H</option>-->
                    <!--</select>-->

                </div>
                <div class="form-group col-md-12">
                    <input class="btn btn-success" type="submit" name="valider" value="Valider"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </form>
        </div>
    </div>
</div>
        </div>
    </div>
<<footer class="main-footer">
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
