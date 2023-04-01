<?php
/* Smarty version 3.1.39, created on 2022-07-17 08:59:24
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/documents_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d407ac1b1f00_77211405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68a84cd2bac56f964a56d45767dfdf6064591877' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/documents_view.tpl',
      1 => 1654466445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d407ac1b1f00_77211405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95364630762d407ac163180_52658482', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_95364630762d407ac163180_52658482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_95364630762d407ac163180_52658482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">

                    <h3 class="text-primary"><?php echo $_smarty_tpl->tpl_vars['doc']->value->title;?>
</h3>
                    <hr>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['doc']->value->file_dl_token;?>
" class="md-btn md-btn-primary waves-effect waves-light"><i class="fa fa-download"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
 </a>

                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'documents','delete')) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/document/<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
/" class="md-btn md-btn-danger waves-effect waves-light"><i class="fa fa-trash"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
 </a>
                    <?php }?>


                    <hr>

                    <?php if ($_smarty_tpl->tpl_vars['ext']->value == 'jpg' || $_smarty_tpl->tpl_vars['ext']->value == 'png' || $_smarty_tpl->tpl_vars['ext']->value == 'gif') {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/docs/<?php echo $_smarty_tpl->tpl_vars['doc']->value->file_path;?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['doc']->value->title;?>
">
                    <?php }?>





                </div>
            </div>
        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
