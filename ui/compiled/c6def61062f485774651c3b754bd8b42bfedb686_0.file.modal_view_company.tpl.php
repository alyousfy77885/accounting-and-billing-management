<?php
/* Smarty version 3.1.39, created on 2022-07-12 11:05:44
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/modal_view_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cd8dc8241b75_90859263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6def61062f485774651c3b754bd8b42bfedb686' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/modal_view_company.tpl',
      1 => 1654466448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cd8dc8241b75_90859263 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>
        <?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>

    </h3>
</div>
<div class="modal-body" style="font-size: 14px;">

    <div class="row">
        <div class="col-md-3 ib_profile_width">

            <div class="panel panel-default" id="ibox_panel">

                <div class="panel-body">
                    <div class="thumb-info mb-md text-center">


                        <?php if ($_smarty_tpl->tpl_vars['company']->value->logo_url != '') {?>
                            <img style="max-width: 250px;" src="<?php echo $_smarty_tpl->tpl_vars['company']->value->logo_url;?>
">
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/ui/theme/ibilling/img/default_company.png">
                        <?php }?>


                    </div>






                </div>

                <div class="panel-body list-group border-bottom m-t-n-lg">
                    <a href="#" id="summary" class="list-group-item active li_summary"><span class="fa fa-bar-chart-o"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
 </a>
                    <a href="#" id="memo" class="list-group-item li_memo"><span class="fa fa-file-text"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Memo'];?>
</a>
                    <a href="#" id="customers" class="list-group-item li_customers"><span class="icon-users"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
 <span class="label label-info pull-right"><?php echo Companies::countCustomers($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>

                    <a href="#" id="invoices" class="list-group-item li_invoices"><span class="fa fa-credit-card"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
 <span class="label label-info pull-right"><?php echo Companies::countInvoices($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>

                    <a href="#" id="quotes" class="list-group-item li_quotes"><span class="fa fa-file-text-o"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
 <span class="label label-info pull-right"><?php echo Companies::countQuotes($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>


                    <a href="#" id="orders" class="list-group-item li_orders"><span class="fa fa-server"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Orders'];?>
 <span class="label label-info pull-right"><?php echo Companies::countOrders($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>

                    <a href="#" id="transactions" class="list-group-item li_transactions"><span class="fa fa-th-list"></span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
 <span class="label label-info pull-right"><?php echo Companies::countTransactions($_smarty_tpl->tpl_vars['company']->value->id);?>
</span></a>


                </div>



            </div>

        </div>

        <div class="col-md-9">

            <!-- START TIMELINE -->
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>
</h5>
                </div>

                <div class="ibox-content" id="ibox_form" style="position: static; zoom: 1;">


                    <div id="application_ajaxrender" style="min-height: 200px;">




                    </div>

                </div>
            </div>
            <!-- END TIMELINE -->

        </div>

    </div>

</div>
<div class="modal-footer">

    <input type="hidden" id="base_cid" name="base_cid" value="<?php echo $_smarty_tpl->tpl_vars['company']->value->id;?>
">
    <button type="button" data-dismiss="modal" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
</div>
<?php }
}
