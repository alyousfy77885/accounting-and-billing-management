<?php
/* Smarty version 3.1.39, created on 2022-07-12 15:19:37
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/client_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cdc949980f88_02747082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd88ab36b3b974c6d4dbd4c19edf68ca5b84f3fce' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/client_profile.tpl',
      1 => 1654466445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_62cdc949980f88_02747082 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
    <div class="col-md-4">
        <div class="ibox float-e-margins">
            <div class="ibox-title">


                <h5><?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
</h5>


            </div>
            <div class="ibox-content">


                <address>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->company != '') {?>
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->company;?>

                        <br>
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>

                        <br>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>

                        <br>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->address;?>
 <br>
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
 <br>
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->state;?>
 - <?php echo $_smarty_tpl->tpl_vars['user']->value->zip;?>
 <br>
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->country;?>

                    <br>
                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>

                    <br>
                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                        <br>
                        <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['user']->value->id);?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </address>



            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">


                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>
</h5>


            </div>
            <div class="ibox-content">


                <form class="form-horizontal" id="iform">

                    <div class="form-group"><label class="col-lg-2 control-label" for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Name'];?>
</label>

                        <div class="col-lg-10"><input type="text" id="account" name="account" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>
">

                        </div>
                    </div>

                    <div class="form-group"><label class="col-lg-2 control-label" for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</label>

                        <div class="col-lg-10"><input type="text" id="company" name="company" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['company'];?>
">

                        </div>
                    </div>

                    <div class="form-group"><label class="col-lg-2 control-label" for="edit_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>

                        <div class="col-lg-10"><input type="text" id="edit_email" name="edit_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
">

                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label" for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>

                        <div class="col-lg-10"><input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
">

                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label" for="address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                        <div class="col-lg-10"><input type="text" id="address" name="address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
">

                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label" for="city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>

                        <div class="col-lg-10"><input type="text" id="city" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['city'];?>
">

                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label" for="state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>

                        <div class="col-lg-10"><input type="text" id="state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['state'];?>
">

                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label" for="zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
 </label>

                        <div class="col-lg-10"><input type="text" id="zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['zip'];?>
">

                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-2 control-label" for="country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>

                        <div class="col-lg-10">

                            <select name="country" id="country" class="form-control">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                                <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                            </select>

                        </div>
                    </div>



                    <div class="form-group"><label class="col-lg-2 control-label" for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
 </label>

                        <div class="col-lg-10">
                            <input type="password" id="password" name="password" class="form-control">

                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>

                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">

                            <button class="btn btn-primary" type="submit" id="submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </div>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
