<?php
/* Smarty version 3.1.39, created on 2022-08-07 08:38:06
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/add-s.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62efb22e8b9100_79741109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbb05c18036ff2f73c0c88f4001a8285feb71108' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/add-s.tpl',
      1 => 1659875825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62efb22e8b9100_79741109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54828568862efb22e861b13_07468367', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_54828568862efb22e861b13_07468367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_54828568862efb22e861b13_07468367',
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
                           
                               اضافه مخزون جديد
                          
                            


                        </h5>
                        <div class="ibox-tools">
                            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Product') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
stock/list" class="btn btn-primary btn-xs">عرض محتوى المخزن</a>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'Service') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
stock/list" class="btn btn-primary btn-xs">عرض محتوى المخزن</a>
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

                                <div class="col-lg-10">    <select id="name" name="name" class="form-control">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select'];?>
...</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ps']->value['name'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            </select>

                        
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-2 control-label" for="sales_price"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Price'];?>
 الوحده </label>

                                <div class="col-lg-10"><input type="number" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 "  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['_c']->value['thousands_sep'];?>
" data-d-group="2">

                                </div>
                            </div>
                            <div class="form-group"><label class="col-lg-2 control-label" for="item_number">الكميه</label>

                                <div class="col-lg-10"><input type="number" id="item_number" value="100" name="item_number" class="form-control" autocomplete="off">

                                </div>
                            </div>
                             <div class="form-group"><label class="col-lg-2 control-label" for="coun">سعر الشراء</label>

                                <div class="col-lg-10"><input type="number" id="coun"  name="coun" class="form-control" >

                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-2 control-label" for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>

                                <div class="col-lg-10">     <select id="description" name="description" class="form-control">

                                                <option value="كرتون">كرتون</option>
                                                <option value="قالب">قالب </option>


                                            </select>

                                </div>
                            </div>

    <div class="form-group"><label class="col-lg-2 control-label" for="coun">عدد الوحدات فى كرتون/قالب</label>
<div class="col-lg-10">
                            <input type="number" id="type" name="type" class="form-control">

</div>
</div>

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
