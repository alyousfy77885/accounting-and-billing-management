<?php
/* Smarty version 3.1.39, created on 2022-07-25 13:12:23
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/c-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62decef7ee02a7_27330486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef427d73de6cba2f9cdeb735f1ffa720778eefc1' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/c-list.tpl',
      1 => 1658769141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62decef7ee02a7_27330486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212531175662decef7e92d44_27649258', "content");
?>

/*
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168801605462decef7eb6a04_57800644', "content");
?>

*/
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_212531175662decef7e92d44_27649258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_212531175662decef7e92d44_27649258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['List'];?>
 <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Products'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
 <?php }?></h5>
                    <div class="ibox-tools">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/c-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>اضافه صنف</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>
</a>
                    </div>
                </div>
                <div class="ibox-content" id="ibox_form">
                    <div class="input-group"><input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
" id="txtsearch" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" id="search" class="btn btn-sm btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button> </span></div>
                    <input type="hidden" id="stype" value="cat">

                    <div class="project-list mt-md">
                        <div id="progressbar">
                        </div>

                        <div id="application_ajaxrender">
                               </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php
}
}
/* {/block "content"} */
/* {block "content"} */
class Block_168801605462decef7eb6a04_57800644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_168801605462decef7eb6a04_57800644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel panel-default">
                <div class="panel-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/c-new/" class="md-btn md-btn-primary"><i class="fa fa-plus"></i>اضافه صنف جديد</a>


                </div>
                <div class="panel-body">

                    <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

                                </div>
                            </div>

                        </div>
                    </form>

                    <table class="table table-bordered table-hover sys_table footable"  data-filter="#foo_filter" data-page-size="50">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم الصنف</th>
                            <th>تاريخ اضافه الصنف</th>
                            <th>سعر شراء الوحده</th>
                          
                            <th>سعر بيع الوحده</th>
<th>الكميه المتوفره</th>
                            <th class="text-right" data-sort-ignore="true"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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

                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['cat_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['cat_id'];?>
</a> </td>
                                <td>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['cat_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</a>

                                </td>

                                <td>
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['ds']->value['buy'];
$_prefixVariable1 = ob_get_clean();
echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_prefixVariable1));?>

                                </td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['cid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['sale'];?>
</a> </td>

                                <td class="amount">
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['buy'];?>


                                </td>
                                <td class="amount">
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['coun'];?>


                                </td>

                                <td class="text-right">
                                    <button class="edit" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['cat_id'];?>
">تعديل</button>

                                    <a href="#" class="btn btn-danger btn-xs cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['cat_id'];?>
"><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="7">
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>

                    </table>

                </div>
            </div>
        </div>






    </div>

<?php
}
}
/* {/block "content"} */
}
