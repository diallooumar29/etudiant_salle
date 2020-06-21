<?php
/* Smarty version 3.1.30, created on 2018-08-01 15:52:24
  from "/Applications/MAMP/htdocs/iam_salle/view/batiment/list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b61bb1880ec75_02203875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc1cac6f14fdb8967173056ec7c77c132b3a1889' => 
    array (
      0 => '/Applications/MAMP/htdocs/iam_salle/view/batiment/list.html',
      1 => 1532898950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b61bb1880ec75_02203875 (Smarty_Internal_Template $_smarty_tpl) {
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
            <span class="logo-mini"><b>ALT</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Gestion des Salles</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
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
disconnect/disconnect" class="btn btn-default btn-flat">Déconnexion </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->

                        </ul>
                    </div>
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- User Account: style can be found in dropdown.less -->
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/iam.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Administateur</p>
                    <a href="#"><i class="fa fa-circle text-success"></i>En ligne</a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
classe/liste">
                        <i class="fa fa-edit"></i> <span>Classes</span>

                    </a>

                </li>
                <li class="">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/liste">
                        <i class="fa fa-edit"></i> <span>Occupations</span>

                    </a>

                </li>
                <li class="">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
salle/liste">
                        <i class="fa fa-edit"></i> <span> Salles</span>
                    </a>

                </li>
                <li class="">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
batiment/liste">
                        <i class="fa fa-edit"></i> <span>Bâtiments</span>

                    </a>

                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Liste des Batiments</h3>
    </div>
    <p>
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
batiment/add" class="btn btn-success btn-lg">
            <span class="glyphicon glyphicon-plus"></span> Ajouter
        </a>
    </p>
    <!-- /.box-header -->
    <div class="box-body">

        <?php if (isset($_smarty_tpl->tpl_vars['okk']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['okk']->value != 0) {?>
        <div class="panel-body" style="color: green; background-color:#afd9ee">
            Bâtiment Modifié avec succès !!!!!
        </div>
        <?php } else { ?>
        <div class="panel-body" style="color: green; background-color:#afd9ee; ">
            Aucun changement
        </div>
        <?php }?>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['okkk']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['okkk']->value != 0) {?>
        <div class="panel-body" style="color: green; background-color:#afd9ee">
            Bâtiment supprimé avec succès !
        </div>
        <?php } else { ?>
        <div class="panel-body" style="color: green; background-color:#afd9ee; ">
            Aucune suppression effectuée
        </div>
        <?php }?>
        <?php }?>
        <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['tests']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['tests']->value != null) {?>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>

                    <th>Nom du Bâtiment </th>
                    <th>Editer</th>
                    <th>Supprimer</th>


                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['nomBatiment'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
batiment/edit&idBatiment=<?php echo $_smarty_tpl->tpl_vars['test']->value['idBatiment'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/icon/modifier.png"></a> </td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
batiment/delete&idBatiment=<?php echo $_smarty_tpl->tpl_vars['test']->value['idBatiment'];?>
"onclick='verif()'><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/icon/supprimer.png"></a> </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <?php } else { ?>
                Liste vide
                <?php }?>
                <?php }?>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
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
<!-- SlimScroll -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/datatables.net/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

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
<?php echo '<script'; ?>
>
    $(function () {

        $('#example1').DataTable({
            'paging'      : true,
            'searching'   : true,
            'info'        : true,
            'autoWidth'   : false,
            "language": {
                "search": "Recherche : ",
                "sLengthMenu": "Afficher _MENU_ par page",
                "sInfo": "Affichage de _START_ à _END_ de _TOTAL_ lignes",
                "sPrevious": "Precedent",
                "sNext": "Suivant"
            }
        })
    })
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
