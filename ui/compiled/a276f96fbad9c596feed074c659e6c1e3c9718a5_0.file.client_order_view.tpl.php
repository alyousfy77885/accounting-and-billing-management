<?php
/* Smarty version 3.1.39, created on 2022-07-13 17:50:48
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/client_order_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cf3e38d33ef8_32814712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a276f96fbad9c596feed074c659e6c1e3c9718a5' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/client_order_view.tpl',
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
function content_62cf3e38d33ef8_32814712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="panel panel-default">

    <div class="panel-body">

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
: </strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->iid;?>
 </p>
                    <?php }?>



                </div>
            </div>
            <div class="col-md-8">

                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activation Message'];?>
</h4>
                <hr>

                    <h4><?php echo $_smarty_tpl->tpl_vars['order']->value->activation_subject;?>
</h4>

                <hr>


                <?php echo $_smarty_tpl->tpl_vars['order']->value->activation_message;?>



            </div>
        </div>




    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
