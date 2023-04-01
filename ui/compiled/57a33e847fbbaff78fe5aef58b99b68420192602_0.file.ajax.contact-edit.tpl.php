<?php
/* Smarty version 3.1.39, created on 2022-07-12 15:20:49
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/ajax.contact-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cdc991d4ed77_50130410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a33e847fbbaff78fe5aef58b99b68420192602' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/ajax.contact-edit.tpl',
      1 => 1654466445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cdc991d4ed77_50130410 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="form-horizontal" id="rform">

    <div class="form-group"><label class="col-lg-2 control-label" for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Name'];?>
</label>

        <div class="col-lg-10"><input type="text" id="account" name="account" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>
">

        </div>
    </div>



    <div class="form-group"><label class="col-lg-2 control-label" for="company_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</label>

        <div class="col-lg-10">

            <select id="company_id" name="company_id" class="form-control">
                <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value->cid == ($_smarty_tpl->tpl_vars['company']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>

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


    <div class="form-group"><label class="col-lg-2 control-label" for="group"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
 </label>

        <div class="col-lg-10">

            <select class="form-control" name="group" id="group">
                <option value="0" <?php if (($_smarty_tpl->tpl_vars['d']->value['gid']) == 0) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['d']->value['gid']) == ($_smarty_tpl->tpl_vars['g']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>

        </div>
    </div>

    <div class="form-group"><label class="col-md-2 control-label" for="currency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</label>

        <div class="col-lg-10">
            <select id="currency" name="currency" class="form-control">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"
                            <?php if (($_smarty_tpl->tpl_vars['d']->value['currency']) == ($_smarty_tpl->tpl_vars['currency']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
</option>
                    <?php
}
if ($_smarty_tpl->tpl_vars['currency']->do_else) {
?>
                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_c']->value['home_currency'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </select>
        </div>
    </div>

    <div class="form-group"><label class="col-lg-2 control-label" for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
 </label>

        <div class="col-lg-10">

            
            <input type="password" id="password" name="password" class="form-control" autocomplete="new-password">

            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>

        </div>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fs']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
        <div class="form-group"><label class="col-lg-2 control-label" for="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['fieldname'];?>
</label>
            <?php if (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'text') {?>


                <div class="col-lg-10">
                    <input type="text" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);
}?>">
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                </div>

            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'password') {?>

                <div class="col-lg-10">
                    <input type="password" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);
}?>">
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>
                </div>

            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'dropdown') {?>
                <div class="col-lg-10">
                    <select id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['f']->value['fieldoptions']), 'fo');
$_smarty_tpl->tpl_vars['fo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fo']->value) {
$_smarty_tpl->tpl_vars['fo']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
" <?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) == $_smarty_tpl->tpl_vars['fo']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>
                </div>


            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'textarea') {?>

                <div class="col-lg-10">
                    <textarea id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" rows="3"><?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);
}?></textarea>
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>
                </div>

            <?php } else { ?>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="form-group"><label class="col-lg-2 control-label" for="tags"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</label>

        <div class="col-lg-10">

                        <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['tag']->value['text'],$_smarty_tpl->tpl_vars['dtags']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </select>

        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">

            <button class="btn btn-primary" type="submit" id="submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
        </div>
    </div>
    <input type="hidden" name="fcid" id="fcid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
</form>
<?php }
}
