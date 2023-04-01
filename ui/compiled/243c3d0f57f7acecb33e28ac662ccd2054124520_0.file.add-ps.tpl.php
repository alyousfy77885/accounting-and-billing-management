<?php
/* Smarty version 3.1.39, created on 2022-07-13 14:47:38
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/add-ps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cf134a1dd859_31979683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '243c3d0f57f7acecb33e28ac662ccd2054124520' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/add-ps.tpl',
      1 => 1657724725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cf134a1dd859_31979683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38998970862cf134a1afb48_22434502', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_38998970862cf134a1afb48_22434502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_38998970862cf134a1afb48_22434502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="wrapper wrapper-content">
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>
                            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>

                            <?php }?>


                        </h5>
                        <div class="ibox-tools">
                            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-list" class="btn btn-primary btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Products'];?>
</a>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Service') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-list" class="btn btn-primary btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Services'];?>
</a>
                            <?php }?>


                        </div>
                    </div>
                    <div class="ibox-content" id="ibox_form">
                        <div class="alert alert-danger" id="emsg">
                            <span id="emsgbody"></span>
                        </div>

                        <form class="form-horizontal" id="rform">

                            <div class="form-group"><label class="col-lg-2 control-label" for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>

                                <div class="col-lg-10"><input type="text" id="name" name="name" class="form-control" autocomplete="off">

                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-2 control-label" for="sales_price"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Price'];?>
</label>

                                <div class="col-lg-10"><input type="text" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">

                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label" for="item_number">الكميه</label>

                                <div class="col-lg-10"><input type="text" id="item_number" value="100" name="item_number" class="form-control" autocomplete="off">

                                </div>
                            </div>
                             <div class="form-group"><label class="col-lg-2 control-label" for="coun"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Number'];?>
</label>

                                <div class="col-lg-10"><input type="text" id="coun" value="<?php echo $_smarty_tpl->tpl_vars['nxt']->value;?>
" name="coun" class="form-control" >

                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-2 control-label" for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>

                                <div class="col-lg-10"><textarea id="description" class="form-control" rows="3"></textarea>

                                </div>
                            </div>


                            <input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">



                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">

                                    <button class="btn btn-sm btn-primary" type="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>


<?php
}
}
/* {/block "content"} */
}
