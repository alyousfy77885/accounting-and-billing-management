<?php
/* Smarty version 3.1.39, created on 2022-07-12 13:35:12
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/pmethods-manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cdb0d0e8c937_94338850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f6613db2afceaede50fafa62c5afd7a55b30269' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/pmethods-manage.tpl',
      1 => 1654466448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cdb0d0e8c937_94338850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168059664262cdb0d0e730e0_94381035', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_168059664262cdb0d0e730e0_94381035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_168059664262cdb0d0e730e0_94381035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Payment Methods'];?>
</h3>
                </div>
                <div class="panel-body">
                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods-edit-post">
                        <div class="form-group">
                            <label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>

                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
">
                        </div>



                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>
                </div>
            </div>
        </div> <!-- Widget-1 end-->
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</h3>
                </div>
                <div class="panel-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods-delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-danger"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

                </div>
            </div>
        </div>
        <!-- Widget-2 end-->
    </div> <!-- Row end-->


    <!-- Row end-->


    <!-- Row end-->
<?php
}
}
/* {/block "content"} */
}
