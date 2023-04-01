<?php
/* Smarty version 3.1.39, created on 2022-08-05 10:32:52
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/edit-invoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ed2a14cba420_96992329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0664857e72a3b8a6688c83520fe924bce1f2f32' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/edit-invoice.tpl',
      1 => 1659709767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ed2a14cba420_96992329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51226558662ed2a14bc2176_72359544', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_51226558662ed2a14bc2176_72359544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_51226558662ed2a14bc2176_72359544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/storage/emulated/0/RMS2/ibilling/ibilling/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
                <form id="invform" method="post">
                    <div class="ibox-content p-xl" id="ibox_form">
                        <div class="row">
                            <div class="alert alert-danger" id="emsg">
                                <span id="emsgbody"></span>
                            </div>
                            <div class="col-md-6">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="cid" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>

                                        <div class="col-sm-10">
                                            <select id="cid" name="cid" class="form-control">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
$_smarty_tpl->tpl_vars['cs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['i']->value['account'] == $_smarty_tpl->tpl_vars['cs']->value['account']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                                        <div class="col-sm-10">
                                            <textarea id="address" readonly class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="invoicenum"
                                               class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Prefix'];?>
</label>

                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="invoicenum" name="invoicenum"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['i']->value['invoicenum'];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cn"
                                               class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
 #</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cn" name="cn" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['cn'];?>
">
                                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['invoice_number_help'];?>
</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-horizontal">
                                    <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] != '0') {?>
                                        <div class="form-group">
                                            <label for="inputEmail3"
                                                   class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Repeat Every'];?>
</label>

                                            <div class="col-sm-8">
                                                <select class="form-control" name="repeat" id="repeat">
                                                    <option value="week1" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+1 week') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Week'];?>
</option>
                                                    <option value="weeks2" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+2 weeks') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weeks_2'];?>
</option>
                                                    <option value="month1" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+1 month') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Month'];?>
</option>
                                                    <option value="months2" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+2 months') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_2'];?>
</option>
                                                    <option value="months3" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+3 months') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_3'];?>
</option>
                                                    <option value="months6" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+6 months') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_6'];?>
</option>
                                                    <option value="year1" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+1 year') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Year'];?>
</option>
                                                    <option value="years2" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+2 years') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_2'];?>
</option>
                                                    <option value="years3" <?php if ($_smarty_tpl->tpl_vars['i']->value['r'] == '+3 years') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_3'];?>
</option>

                                                </select>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <input type="hidden" name="repeat" id="repeat" value="0">
                                    <?php }?>
                                    <div class="form-group">
                                        <label for="inputEmail3"
                                               class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="idate" name="idate" datepicker
                                                   data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="ddate" name="ddate" datepicker
                                                   data-date-format="yyyy-mm-dd" data-auto-close="true"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['i']->value['duedate'];?>
">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tid" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales TAX'];?>
</label>

                                        <div class="col-sm-8">
                                            <select id="tid" name="tid" class="form-control">
                                                <option value="">None</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
$_smarty_tpl->tpl_vars['ts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['id'];?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['ts']->value['name'] == $_smarty_tpl->tpl_vars['i']->value['taxname']) {?>selected="selected" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>

                                                        (<?php ob_start();
echo number_format($_smarty_tpl->tpl_vars['ts']->value['rate'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                                        %)
                                                    </option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            </select>
                                            <input type="hidden" id="stax" name="stax" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['taxrate'];?>
">
                                            <input type="hidden" id="discount_amount" name="discount_amount"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['i']->value['discount_value'];?>
">
                                            <input type="hidden" id="discount_type" name="discount_type"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['i']->value['discount_type'];?>
">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="add_discount"
                                               class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</label>

                                        <div class="col-sm-8">

                                            <a href="#" id="add_discount" class="btn btn-info btn-xs"
                                               style="margin-top: 5px;"><i
                                                        class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="table-responsive m-t">
                            <table class="table invoice-table" id="invoice_items">
                                <thead>
                                <tr>
                                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Code'];?>
</th>
                                    <th width="55%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
                                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                                    <th width="10%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                    <th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>
</td>
                                        <td><input type="text" class="form-control item_name" name="desc[]"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
"></td>
                                        <td><input type="text" class="form-control qty"
                                                   value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point']) == ',') {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['qty'],'.',',');
} else {
echo $_smarty_tpl->tpl_vars['item']->value['qty'];
}?>"
                                                   name="qty[]"></td>
                                        <td><input type="text" class="form-control item_price" name="amount[]"
                                                   value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point']) == ',') {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['amount'],'.',',');
} else {
echo $_smarty_tpl->tpl_vars['item']->value['amount'];
}?>">
                                        </td>
                                        <td class="ltotal"><input type="text" class="form-control lvtotal" readonly=""
                                                                  value="<?php if (($_smarty_tpl->tpl_vars['_c']->value['dec_point']) == ',') {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['total'];
$_prefixVariable2 = ob_get_clean();
echo smarty_modifier_replace($_prefixVariable2,'.',',');
} else {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['total'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;
}?>">
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                                </tbody>
                            </table>

                        </div>
                        <!-- /table-responsive -->
                        <button type="button" class="btn btn-primary" id="blank-add"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>

                        </button>
                        <button type="button" class="btn btn-primary" id="item-add"><i class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product OR Service'];?>

                        </button>
                        <button type="button" class="btn btn-danger" id="item-remove"><i class="fa fa-minus-circle"></i>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>

                        </button>
                        <table class="table invoice-total">
                            <tbody>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
 :</strong></td>
                                <td id="sub_total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>

                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
 <span id="is_pt"></span> :</strong></td>
                                <td id="discount_amount_total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>


                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
 :</strong></td>
                                <td id="taxtotal" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
"
                                    data-a-sep="" data-d-group="2">0.00
                                </td>
                            </tr>
                            <tr>
                                <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                                <td id="total" class="amount" data-a-sign="" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep=""
                                    data-d-group="2">0.00
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <textarea class="form-control" name="notes" id="notes" rows="3"
                                  placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Terms'];?>
..."><?php echo $_smarty_tpl->tpl_vars['i']->value['notes'];?>
</textarea>
                        <br>

                        <div class="text-right">
                            <input type="hidden" name="iid" id="iid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
                            <input type="hidden" id="_dec_point" name="_dec_point" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
">
                            <button class="btn btn-primary" id="submit"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save Invoice'];?>
</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>



    
    <input type="hidden" id="_lan_set_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Discount'];?>
">
    <input type="hidden" id="_lan_discount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
">
    <input type="hidden" id="_lan_discount_type" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount Type'];?>
">
    <input type="hidden" id="_lan_percentage" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
">
    <input type="hidden" id="_lan_fixed_amount" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Fixed Amount'];?>
">
    <input type="hidden" id="_lan_btn_save" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
">

<?php
}
}
/* {/block "content"} */
}
