<?php
/* Smarty version 3.1.39, created on 2023-01-19 10:16:59
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/account-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63c95eeb3af9e8_70140605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b83e3c9536dcfb636119445523ab4fd4ef42c049' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/account-add.tpl',
      1 => 1674141416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c95eeb3af9e8_70140605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166678795963c95eeb393706_93429913', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_166678795963c95eeb393706_93429913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_166678795963c95eeb393706_93429913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5 style="float:right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_Account'];?>
</h5>
</br>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add/" class="btn btn-success"><i class="fa fa-plus"></i>اضافه عميل</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/import_csv/" class="btn btn-primary"><i class="fa fa-upload"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Import'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/export_csv/" class="btn btn-info"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
               </div>


</div></div>
</br></br>
                
                <div class="ibox-content">

                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add-post">
                        <div class="form-group">
                            <label for="account">نوع الحساب </label>
                            <input type="text" class="form-control" id="account" name="account">

                        </div>
                        <div class="form-group">
                            <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="form-group">
                            <label for="balance"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Initial Balance'];?>
</label>
                            <input type="text" class="form-control amount" id="balance" name="balance" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">
                        </div>


                        <div class="form-group">
                            <label for="account_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Number'];?>
</label>
                            <input type="text" class="form-control" id="account_number" name="account_number">
                        </div>

                        <div class="form-group">
                            <label for="contact_person"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Contact Person'];?>
</label>
                            <input type="text" class="form-control" id="contact_person" name="contact_person">
                        </div>

                        <div class="form-group">
                            <label for="contact_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                            <input type="text" class="form-control" id="contact_phone" name="contact_phone">
                        </div>

                        <div class="form-group">
                            <label for="ib_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Internet Banking URL'];?>
</label>
                            <input type="text" class="form-control" id="ib_url" name="ib_url">
                        </div>



                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>

                </div>
            </div>



        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
