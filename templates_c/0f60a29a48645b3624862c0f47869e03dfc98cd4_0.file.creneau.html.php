<?php
/* Smarty version 3.1.30, created on 2018-04-05 02:20:47
  from "C:\xampp\htdocs\gestion_salle\view\creneau\creneau.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac56bdf931073_95841400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f60a29a48645b3624862c0f47869e03dfc98cd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestion_salle\\view\\creneau\\creneau.html',
      1 => 1522887642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac56bdf931073_95841400 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
<head>

    <meta charset="UTF-8">
    <title>page liste</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
    <style>
        h1{
            color: #40007d;
        }
    </style>
</head>
<style>
    .tabul{
        text-indent:400px;
    }
    .footer {
        margin-top: 20px;
        left: 0;
        bottom: 0;
        width: 100%;
        height:60px;
        background-color:#011d37;
        color: white;
        text-align:center;

    }
    a{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 18px;
    ;

    }
</style>
<?php echo '<script'; ?>
 language="JavaScript">
    function verif(){
        return confirm("Voulez vous reelement supprimer ce Client?");

    }
<?php echo '</script'; ?>
>
<body>

<div class="nav navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
accueil/accueil"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.png" width="50" height="40"></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/liste">Creneau</a></li>
        </ul>
    </div>
</div>
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:50px;">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire D'ajout</div>
        <div class="panel-body">



            <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
            <div class="panel-body" style="color: green; background-color: #afd9ee">
                Creneau ajouté avec succes!
            </div>
            <?php } else { ?>
            Erreur d'insertion!
            <?php }?>
            <?php }?>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Creneau/add">
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
<div style="width: 600px;margin-top: 30px;margin-left: 500px;">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
creneau/liste" method="get">
        <div class="form-group col-md-12">
            <div class="form-group col-md-4">
                <select class="form-control" id="n" name="idsalle">
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

</div>
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:20px; ">
    <div class="panel panel-info">
        <div class="panel-heading">Liste Des Creneaux</div>
        <?php if (isset($_smarty_tpl->tpl_vars['okk']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['okk']->value != 0) {?>
        <div class="panel-body" style="color: green; background-color:#afd9ee">
            Creneau Modifié avec succes!!!!!
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
            Creneau Supprimé avec succes!
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
            Creneau deja occupé!
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
            <table class="table table-bordered table-stripped" style="background-color: #a6e1ec; font-family: sans-serif; font-size: 14px ">
                <tr>

                    <!--<th>id</th>-->
                    <th>classe</th>
                    <th>salle</th>
                    <th>Date</th>
                    <th>Heure debut</th>
                    <th>Heure fin</th>
                    <th>Editer</th>
                    <th>Supprimer</th>


                </tr>
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
            </table>
        </div>

    </div>

</div>

<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/eaupotable.png" width="100%" height="0px;"/>
<!--<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
    <div class="panel panel-info">
        <div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
        <div class="panel-body">
            <div id="design_js">MODELE DEVELOPPE PAR Ngor SECK ! <h1>Version 1.0.1</h1></div>
        </div>
    </div>
</div>-->
<div class="footer">
    <br/>
    <p>@2018 copyright all rights reserved Gestion de Salle IAM</p>
    <br/>
</div>


</body>
</html>
ml><?php }
}
