<?php
/* Smarty version 3.1.30, created on 2018-08-01 15:49:11
  from "/Applications/MAMP/htdocs/iam_salle/view/accueil/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b61ba5744de42_71520018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a59ea8c77c73bca65e9ffe079138e97a27c3d047' => 
    array (
      0 => '/Applications/MAMP/htdocs/iam_salle/view/accueil/index.html',
      1 => 1532899053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b61ba5744de42_71520018 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <input type="text" id="fieldUser" class="input" name="identifiant" required pattern=.*\S.* placeholder="Identifiant" />
                        <label for="fieldUser" class="label"></label>
                    </div>
                    <div class="field">
                        <input type="password" id="fieldPassword" class="input" name="mdp" required pattern=.*\S.* placeholder="Mot de passe" />
                        <label for="fieldPassword" class="label"></label>
                    </div>

                    <div class="profile_footer">
                        <button type="submit" class="button raised blue" name="conn">connexion</button>
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
