<?php
/* Smarty version 3.1.39, created on 2022-07-12 15:28:33
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/quote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cdcb618f7ea2_74435154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43790fbcddc4a5b71ed7837edeec2dd7b66b554a' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/quote.tpl',
      1 => 1654466448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cdcb618f7ea2_74435154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86797905762cdcb61807397_57123032', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_86797905762cdcb61807397_57123032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_86797905762cdcb61807397_57123032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unique Quote URL'];?>
:</label>
                <input type="text" class="form-control" id="invoice_public_url" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
">
            </div>
        </div>
        <div class="col-lg-12"  id="application_ajaxrender">
            <div class="ibox float-e-margins" id="ibox">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
 - <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></h5>

                    <input type="hidden" name="iid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="iid">



                    <div class="btn-group  pull-right" role="group" aria-label="...">


                        <div class="btn-group" role="group">
                            <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email'];?>

                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" id="mail_quote_created"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote Created'];?>
</a></li>

                            </ul>
                        </div>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn  btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark As'];?>

                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Draft') {?>
                                    <li><a href="#" id="mark_draft"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</a></li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Delivered') {?>
                                    <li><a href="#" id="mark_delivered"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</a></li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'On Hold') {?>
                                    <li><a href="#" id="mark_on_hold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['On Hold'];?>
</a></li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Accepted') {?>
                                    <li><a href="#" id="mark_accepted"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</a></li>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Lost') {?>
                                    <li><a href="#" id="mark_lost"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</a></li>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Dead') {?>
                                    <li><a href="#" id="mark_dead"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</a></li>
                                <?php }?>

                            </ul>
                        </div>



                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary  btn-sm"><i class="fa fa-paper-plane-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Preview'];?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/edit/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/" class="btn btn-warning  btn-sm"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                        <button type="button" class="btn  btn-danger btn-sm" id="convert_invoice"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Convert to Invoice'];?>
</button>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn  btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-file-pdf-o"></i>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['PDF'];?>

                                <span class="caret"></span>
                            </button>
                                                                                                                                                    <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a></li>
                            </ul>
                        </div>
                        

                    </div>

                </div>
                <div class="ibox-content">


                    <?php if ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Lost') {?>
                        <div id="ribbon-alert-container">
                            <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Lost'];?>
</a>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Accepted') {?>
                        <div id="ribbon-container">
                            <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accepted'];?>
</a>

                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Delivered') {?>
                        <div id="ribbon-container">
                            <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivered'];?>
</a>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Draft') {?>
                        <div id="ribbon-container">
                            <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Draft'];?>
</a>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'Dead') {?>
                        <div id="ribbon-alert-container">
                            <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dead'];?>
</a>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['stage'] == 'On Hold') {?>
                        <div id="ribbon-alert-container">
                            <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['_L']->value['On Hold'];?>
</a>
                        </div>

                    <?php } else { ?>
                        <div id="ribbon-container">

                            <a href="javascript:void(0)" id="ribbon"><?php echo $_smarty_tpl->tpl_vars['d']->value['stage'];?>
</a>
                        </div>
                    <?php }?>

                    <div class="invoice">
                        <header class="clearfix">
                            <div class="row">
                                <div class="col-md-12 mt-md">
                                    <h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</h2>
                                    <h4 class="h4 m-none text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
 #<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></h4>

                                </div>

                            </div>
                        </header>
                        <div class="bill-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bill-to">
                                        <p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recipient'];?>
:</strong></p>
                                        <address>
                                            <?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>

                                                <br>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['ATTN'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                <br>
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                <br>
                                            <?php }?>

                                            <?php echo $_smarty_tpl->tpl_vars['a']->value['address'];?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['a']->value['city'];?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['a']->value['state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['a']->value['zip'];?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['a']->value['country'];?>

                                            <br>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>

                                            <br>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['email'];?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                                <br>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['a']->value['id']);?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            <?php echo $_smarty_tpl->tpl_vars['x_html']->value;?>

                                        </address>





                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bill-data text-right">
                                        <address class="ib mr-xlg">
                                            <?php echo $_smarty_tpl->tpl_vars['_c']->value['caddress'];?>

                                        </address>
                                        <div class="ib">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/logo.png" alt="Logo">
                                        </div>
                                        <p class="mb-none mt-lg">
                                            <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
:</span>
                                            <span class="value"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['datecreated']));?>
</span>
                                        </p>
                                        <p class="mb-none">
                                            <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
:</span>
                                            <span class="value"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['validuntil']));?>
</span>
                                        </p>
                                        <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</span> </h2>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>

                                <strong><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</strong>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php echo $_smarty_tpl->tpl_vars['d']->value['proposal'];?>

                                <hr>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table invoice-items">
                                <thead>
                                <tr class="h4 text-dark">
                                    <th id="cell-id" class="text-semibold">#</th>
                                    <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>

                                    <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                    <th id="cell-qty" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quantity'];?>
</th>
                                    <th id="cell-total" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
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
                                        <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>

                                        <td class="text-center amount"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                        <td class="text-center amount"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>
                            </table>
                        </div>

                        <div class="invoice-summary">
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-8">
                                    <table class="table h5 text-dark">
                                        <tbody>
                                        <tr class="b-top-none">
                                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subtotal'];?>
</td>
                                            <td class="text-left amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['subtotal'];?>
</td>
                                        </tr>
                                        <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                            <tr>
                                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
                                                <td class="text-left amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['discount'];?>
</td>
                                            </tr>
                                        <?php }?>
                                        <tr>
                                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['taxname'];?>
</td>
                                            <td class="text-left amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['tax1'];?>
</td>
                                        </tr>

                                        <tr class="h4">
                                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                            <td class="text-left amount"><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php echo $_smarty_tpl->tpl_vars['d']->value['customernotes'];?>

                            </div>
                        </div>
                    </div>




                                                                                                    




                </div>


            </div>
        </div>
    </div>

    <input type="hidden" id="_lan_msg_confirm" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

    <input type="hidden" id="admin_email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">


<?php
}
}
/* {/block "content"} */
}
