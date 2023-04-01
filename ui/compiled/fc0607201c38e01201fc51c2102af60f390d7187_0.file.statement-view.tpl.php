<?php
/* Smarty version 3.1.39, created on 2022-07-12 15:15:28
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/statement-view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cdc850d04e60_27174006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc0607201c38e01201fc51c2102af60f390d7187' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/statement-view.tpl',
      1 => 1654466448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cdc850d04e60_27174006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41841834462cdc850bc8a62_94006500', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_41841834462cdc850bc8a62_94006500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_41841834462cdc850bc8a62_94006500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php echo $_smarty_tpl->tpl_vars['account']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Statement'];?>
 [<?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['fdate']->value));?>
 - <?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['tdate']->value));?>
]</h5>

            </div>
            <div class="ibox-content">

                <table class="table table-bordered sys_table">
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>




                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dr'];?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                        <tr>
                            <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>


                            <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['dr'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                            <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['cr'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</td>
                            <td class="text-right"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['bal'] < 0) {?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['bal'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</span></td>

                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                </table>
                <div class="row">
                    <div class="col-md-8">
                        &nbsp;
                    </div>
                    <div class="col-md-2" style="text-align: right"> <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
export/printable" target="_blank">
                            <input type="hidden" name="fdate" value="<?php echo $_smarty_tpl->tpl_vars['fdate']->value;?>
">
                            <input type="hidden" name="tdate" value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
">
                            <input type="hidden" name="stype" value="<?php echo $_smarty_tpl->tpl_vars['stype']->value;?>
">
                            <input type="hidden" name="account" value="<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
">
                            <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export for Print'];?>
</button>

                        </form></div>
                    <div class="col-md-2" style="text-align: right"> <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
export/pdf">
                            <input type="hidden" name="fdate" value="<?php echo $_smarty_tpl->tpl_vars['fdate']->value;?>
">
                            <input type="hidden" name="tdate" value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
">
                            <input type="hidden" name="stype" value="<?php echo $_smarty_tpl->tpl_vars['stype']->value;?>
">
                            <input type="hidden" name="account" value="<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-file-pdf-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export to PDF'];?>
</button>
                        </form></div>
                </div>
            </div>
        </div>



        <!-- Widget-2 end-->
    </div>
    <!-- Row end-->


    <!-- Row end-->


    <!-- Row end-->
<?php
}
}
/* {/block "content"} */
}
