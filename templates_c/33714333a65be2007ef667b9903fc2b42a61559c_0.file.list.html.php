<?php
/* Smarty version 3.1.30, created on 2018-07-19 21:53:58
  from "C:\xampp\htdocs\mesprojets\iam_salle\view\creneau\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b50ec5655e0f6_16438939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33714333a65be2007ef667b9903fc2b42a61559c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\iam_salle\\view\\creneau\\list.html',
      1 => 1532029984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b50ec5655e0f6_16438939 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
bower_components/select2/dist/css/select2.min.css">



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
            <!--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">-->
                <!--<span class="sr-only">Toggle navigation</span>-->
            <!--</a>-->

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                            <!--<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                            <!--<span class="hidden-xs">Zainoul</span>-->
                        <!--</a>-->
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <!--<li class="user-header">-->
                                <!--<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

                                <!--<p>-->
                                    <!--Barry Zainoul Web designer-->
                                    <!--<small>Member since Nov. 2012</small>-->
                                <!--</p>-->
                            <!--</li>-->
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
                        <!--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
                    </li>
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
                        <i class="fa fa-edit"></i> <span>Batiments</span>

                    </a>

                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!--<section class="content-header">-->
            <!--<h1>-->
                <!--Accueil-->
                <!--&lt;!&ndash;<small>Menu</small>&ndash;&gt;-->
            <!--</h1>-->
            <!--<ol class="breadcrumb">-->
                <!--&lt;!&ndash;<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>&ndash;&gt;-->
                <!--&lt;!&ndash;<li class="active">Accueil</li>&ndash;&gt;-->
            <!--</ol>-->
        <!--</section>-->
        <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des Occupations</h3>
        </div>
            <p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/add" class="btn btn-success btn-lg">
                    <span class="glyphicon glyphicon-plus"></span> Ajouter
                </a>
            </p>

        <div style="width: 600px;margin-top: 30px;margin-left: 500px;">
            <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/liste" method="get">
                <div class="form-group col-md-12">
                    <div class="form-group col-md-4">
                         <select class="form-control select2" id="n" name="idsalle">
                             <option selected="selected">Choisir une salle</option>
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
                    <div class="form-group col-md-4">
                        <input name="motcle" id="btn-input" type="date" class="form-control input-sm-3"/>
                    </div>
                    <div class="form-group col-md-4">

         <span class="input-group-btn">
             <input type="submit" class="btn btn-primary btn-md" id="btn-chat" value="rechercher" />
         </span>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <?php if (isset($_smarty_tpl->tpl_vars['okk']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['okk']->value != 0) {?>
        <div class="panel-body" style="color: green; background-color:#afd9ee">
            Occupation Modifié avec succes!!!!!
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
            Occupation Supprimé avec succes!
        </div>

        <?php } else { ?>
        <div class="panel-body" style="color: green; background-color:#afd9ee; ">
            Aucune suppression Effectuée
        </div>
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
        <div class="panel-body">
            <?php if (isset($_smarty_tpl->tpl_vars['tests']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['tests']->value != null) {?>

            <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <!--<th>id</th>-->
                    <th>classe</th>
                    <th>salle</th>
                    <th>Batiment</th>
                    <th>niveau etage</th>
                    <th>Date</th>
                    <th>Heure debut</th>
                    <th>Heure fin</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>


                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'test');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
?>
                <tr>
                    <!--<td><?php echo $_smarty_tpl->tpl_vars['test']->value['idcreneau'];?>
</td>-->
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['nomclasse'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['nomsalle'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['nomBatiment'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['niveausalle'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['dateoccupation'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['hd'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['test']->value['hf'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Creneau/edit&id=<?php echo $_smarty_tpl->tpl_vars['test']->value['idcreneau'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/icon/modifier.png"></a> </td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Creneau/delete&id=<?php echo $_smarty_tpl->tpl_vars['test']->value['idcreneau'];?>
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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ur_base']->value;?>
bower_components/select2/dist/js/select2.full.min.js"><?php echo '</script'; ?>
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
<?php echo '<script'; ?>
>
    $(function () {
        $('.select2').select2()
    })
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
