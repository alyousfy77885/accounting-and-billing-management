<?php
/* Smarty version 3.1.39, created on 2022-07-13 08:34:18
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/client_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cebbca2023d6_41006118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '403459e465048b33928e22869a9e18f4235f3b3c' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/client_login.tpl',
      1 => 1654466445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cebbca2023d6_41006118 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/favicon.ico" type="image/x-icon" />


    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/skins/all.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/css/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/toggle/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/fonts/open-sans/open-sans.css?ver=4.0.1" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style.css?ver=2.0.1" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/component.css?ver=2.0.1" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/custom.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/css/client_login.css" rel="stylesheet">

    <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/skins/all.css" rel="stylesheet">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_ui_header_client']->value, 'plugin_ui_header_add');
$_smarty_tpl->tpl_vars['plugin_ui_header_add']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin_ui_header_add']->value) {
$_smarty_tpl->tpl_vars['plugin_ui_header_add']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['plugin_ui_header_add']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['_c']->value['rtl'] == '1') {?>
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/css/style-rtl.min.css" rel="stylesheet">
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['xheader']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>

</head>
<body class="focused-form">


<div class="container" id="login-form">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/login/" class="login-logo"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/logo.png"></a>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">

            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

            <?php }?>


            <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/auth/" method="post" class="" id="validate-form">



                <div class="panel panel-default md-card">
                    <div class="panel-heading"><h2>Client Login</h2></div>
                    <div class="panel-body">


                        <div class="form-group">

                            <div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
                                <input type="email" class="form-control" id="username" name="username" placeholder="Email Username" required>
                            </div>

                        </div>

                        <div class="form-group">

                            <div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-key"></i>
								</span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>

                        </div>


                        <div class="i-checks"><label  style="padding-left: 0"> <input name="remember_me" checked class="ib_checkbox" type="checkbox" value="yes"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Remember me'];?>
</label></div>


                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">

                            <button type="submit" class="btn btn-primary pull-right">Login</button>
                        </div>
                    </div>
                </div>


            </form>




            <div class="text-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register/" class="mb20"><i class="ion-social-facebook"></i>Signup Here</a> |
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/forgot_pw/" class="mb20"><i class="ion-social-twitter"></i>Forgot Password ?</a>
            </div>
        </div>
    </div>
</div>



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-ui-1.10.4.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/lib/icheck/icheck.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue'
        });


    });
<?php echo '</script'; ?>
>

<!-- End loading page level scripts-->
</body>
</html>
<?php }
}
