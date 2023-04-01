<?php
/* Smarty version 3.1.39, created on 2022-07-12 16:52:53
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/orders_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cddf251306d7_94286398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c55f37ec27d7e3d8d091fca91d85764f05e35b3d' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/orders_view.tpl',
      1 => 1654466448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cddf251306d7_94286398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111039168962cddf250b59d7_22022289', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_111039168962cddf250b59d7_22022289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_111039168962cddf250b59d7_22022289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">

                    <h3 style="color: #2f96f3;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
 # <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</h3>
                    <hr>

                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'orders','edit')) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/set/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/Active/" class="md-btn md-btn-success waves-effect waves-light"><i class="fa fa-check"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Accept'];?>
 </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/set/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/Pending/" class="md-btn md-btn-primary waves-effect waves-light"><i class="fa fa-clock-o"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Pending'];?>
 </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/set/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/Cancelled/" class="md-btn md-btn-warning waves-effect waves-light"><i class="fa fa-times"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
 </a>
                    <?php }?>

                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'orders','delete')) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/order/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/" class="md-btn md-btn-danger waves-effect waves-light"><i class="fa fa-trash"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
 </a>
                    <?php }?>


                    <hr>


                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Available Module for this Order'];?>
</h4>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/module/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/" class="md-btn md-btn-primary waves-effect waves-light"><i class="fa fa-plus"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Default'];?>
 </a>

                    <hr>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="well">
                                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order Number'];?>
 - <?php echo $_smarty_tpl->tpl_vars['order']->value->ordernum;?>
</h4>
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->cname;?>
</p>
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Product_Service'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->stitle;?>
</p>
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
: </strong> <span class="amount"><?php echo $_smarty_tpl->tpl_vars['order']->value->amount;?>
</span> </p>
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
: </strong><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['order']->value->date_added));?>
</p>
                                <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
: </strong>

                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->status == 'Active') {?>
                                        <span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['order']->value->status]);?>
</span>
                                    <?php } else { ?>
                                        <span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['order']->value->status]);?>
</span>
                                    <?php }?>
                                </p>
                                <?php if ($_smarty_tpl->tpl_vars['order']->value->iid != '0') {?>
                                    <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
: </strong> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['order']->value->iid;?>
/"><?php echo $_smarty_tpl->tpl_vars['order']->value->iid;?>
</a> </p>
                                <?php }?>



                            </div>
                        </div>
                        <div class="col-md-8">

                            <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activation Message'];?>
</h4>
                            <hr>
                            <form method="post" id="ib_form">
                                <div class="form-group">
                                    <label for="activation_subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                    <input type="text" class="form-control" id="activation_subject" name="activation_subject" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->activation_subject;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="activation_message"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Message'];?>
</label>
                                    <textarea class="form-control" id="activation_message" name="activation_message" rows="3"><?php echo $_smarty_tpl->tpl_vars['order']->value->activation_message;?>
</textarea>
                                </div>

                                <input type="hidden" name="oid" id="oid" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">

                                <button type="submit" id="btn_activation_message_save" class="md-btn md-btn-success"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                <button type="submit" id="btn_activation_message_send" class="md-btn md-btn-primary"><i class="fa fa-send"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send'];?>
</button>

                            </form>


                        </div>
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
