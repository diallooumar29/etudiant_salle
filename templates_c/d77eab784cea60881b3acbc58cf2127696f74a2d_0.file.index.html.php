<?php
/* Smarty version 3.1.30, created on 2018-07-11 18:33:24
  from "C:\xampp\htdocs\gestion_salle\view\accueil\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4631548b2060_96920976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd77eab784cea60881b3acbc58cf2127696f74a2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestion_salle\\view\\accueil\\index.html',
      1 => 1531326612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4631548b2060_96920976 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Authentification</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/sty.css">
</head>
<body>

<div class="container">
    <div class="profile">
        <button class="profile__avatar" id="toggleProfile">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.png" alt="Avatar" />
        </button>
        <div class="profile__form">
            <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Connexion/conn" method="POST">
                <div class="profile__fields">
                    <div class="field">
                        <input type="text" id="fieldUser" class="input" name="identifiant" required pattern=.*\S.* />
                        <label for="fieldUser" class="label"></label>
                    </div>
                    <div class="field">
                        <input type="password" id="fieldPassword" class="input" name="mdp" required pattern=.*\S.* />
                        <label for="fieldPassword" class="label"></label>
                    </div>

                    <div class="profile_footer">
                        <button type="submit" class="button raised blue" name="conn">Se connecter</button>
                    </div>
                    <!-- <div class="profile__footer">
                      <div class="button raised blue">
                       <button type="submit" class="center" value="login" fit>LOGIN</button>
                       <paper-ripple fit></paper-ripple>
                     </div>
                   </div> -->
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
