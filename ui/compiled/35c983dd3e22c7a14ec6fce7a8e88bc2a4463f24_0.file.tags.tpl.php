<?php
/* Smarty version 3.1.39, created on 2022-07-12 15:15:58
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cdc86e2461d9_02713405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35c983dd3e22c7a14ec6fce7a8e88bc2a4463f24' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/tags.tpl',
      1 => 1654466448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cdc86e2461d9_02713405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81470889162cdc86e21add6_84776143', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_81470889162cdc86e21add6_84776143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_81470889162cdc86e21add6_84776143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Tags'];?>
 </h5>
        </div>
        <div class="ibox-content">

            <table class="table table-bordered table-hover sys_table">
                <thead>
                <tr>

                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tag'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                    <tr>

                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['text'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
