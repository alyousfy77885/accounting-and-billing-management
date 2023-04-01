<?php
/* Smarty version 3.1.39, created on 2022-08-04 09:38:28
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/add-invoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ebcbd4136527_70802843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d0c8c7e74f958beb90d3454848a91e0db33de5' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/add-invoice.tpl',
      1 => 1659620267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ebcbd4136527_70802843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103773978562ebcbd40882b0_32800796', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_103773978562ebcbd40882b0_32800796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_103773978562ebcbd40882b0_32800796',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>
                        <?php if ($_smarty_tpl->tpl_vars['recurring']->value) {?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Create Recurring Invoice'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New Invoice'];?>

                        <?php }?>
                    </h5>

                </div>
                <div class="ibox-content" id="ibox_form">
                    <form id="invform" method="post">
                        <div class="ibox-content">
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
                                                                <?php if ($_smarty_tpl->tpl_vars['p_cid']->value == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email'] != '') {?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];
}?></option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </select>
                                                <span class="help-block"><a href="#"
                                                                            id="contact_add">| <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Add New Customer'];?>
</a> </span>
                                            </div>
                                        </div>

                                        <?php echo $_smarty_tpl->tpl_vars['extra_fields']->value;?>


                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                   class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                                            <div class="col-sm-10">
                                                <textarea id="address" readonly class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="invoicenum"
                                                   class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Prefix'];?>
</label>

                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="invoicenum" name="invoicenum">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cn"
                                                   class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
 #</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cn" name="cn">
                                                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['invoice_number_help'];?>
</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-horizontal">
                                        <?php if ($_smarty_tpl->tpl_vars['recurring']->value) {?>
                                            <div class="form-group">
                                                <label for="inputEmail3"
                                                       class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Repeat Every'];?>
</label>

                                                <div class="col-sm-8">
                                                    <select class="form-control" name="repeat" id="repeat">
                                                        <option value="week1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Week'];?>
</option>
                                                        <option value="weeks2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Weeks_2'];?>
</option>
                                                        <option value="month1" selected><?php echo $_smarty_tpl->tpl_vars['_L']->value['Month'];?>
</option>
                                                        <option value="months2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_2'];?>
</option>
                                                        <option value="months3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_3'];?>
</option>
                                                        <option value="months6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Months_6'];?>
</option>
                                                        <option value="year1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Year'];?>
</option>
                                                        <option value="years2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_2'];?>
</option>
                                                        <option value="years3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Years_3'];?>
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
                                                       value="<?php echo $_smarty_tpl->tpl_vars['idate']->value;?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                   class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Terms'];?>
</label>

                                            <div class="col-sm-8">
                                                <select class="form-control" name="duedate" id="duedate">
                                                    <option value="due_on_receipt" selected><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due On Receipt'];?>
</option>
                                                    <option value="days3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_3'];?>
</option>
                                                    <option value="days5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_5'];?>
</option>
                                                    <option value="days7"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_7'];?>
</option>
                                                    <option value="days10"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_10'];?>
</option>
                                                    <option value="days15"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_15'];?>
</option>
                                                    <option value="days30"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_30'];?>
</option>
                                                    <option value="days45"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_45'];?>
</option>
                                                    <option value="days60"><?php echo $_smarty_tpl->tpl_vars['_L']->value['days_60'];?>
</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tid" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales TAX'];?>
</label>

                                            <div class="col-sm-8">
                                                <select id="tid" name="tid" class="form-control">
                                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ts');
$_smarty_tpl->tpl_vars['ts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ts']->value) {
$_smarty_tpl->tpl_vars['ts']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ts']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ts']->value['name'];?>

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
                                                <input type="hidden" id="stax" name="stax" value="0.00">
                                                <input type="hidden" id="discount_amount" name="discount_amount" value="">
                                                <input type="hidden" id="discount_type" name="discount_type" value="p">
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


                                    </tbody>
                                </table>

                            </div>
                            <!-- /table-responsive -->
                            <button type="button" class="btn btn-primary" id="blank-add"><i
                                        class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>
</button>
                            <button type="button" class="btn btn-primary" id="item-add"><i
                                        class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product OR Service'];?>
</button>
                            <button type="button" class="btn btn-danger" id="item-remove"><i
                                        class="fa fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
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
                                    <td id="discount_amount_total" class="amount" data-a-sign=""
                                        data-a-dec="<?php echo $_smarty_tpl->tpl_vars['_c']->value['dec_point'];?>
" data-a-sep="" data-d-group="2">0.00
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
"
                                        data-a-sep="" data-d-group="2">0.00
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <textarea class="form-control" name="notes" id="notes" rows="3"
                                      placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Terms'];?>
..."><?php echo $_smarty_tpl->tpl_vars['_c']->value['invoice_terms'];?>
</textarea>
                            <br>
                            <?php if ($_smarty_tpl->tpl_vars['recurring']->value) {?>
                                <input type="hidden" id="is_recurring" value="yes">
                            <?php } else { ?>
                                <input type="hidden" id="is_recurring" value="no">
                            <?php }?>
                            <div class="text-right">
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

    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">


<?php
}
}
/* {/block "content"} */
}
