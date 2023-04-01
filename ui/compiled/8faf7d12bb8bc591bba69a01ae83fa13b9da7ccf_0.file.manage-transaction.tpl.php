<?php
/* Smarty version 3.1.39, created on 2022-07-12 16:34:02
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/manage-transaction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cddaba002200_42714865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8faf7d12bb8bc591bba69a01ae83fa13b9da7ccf' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/manage-transaction.tpl',
      1 => 1654466447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cddaba002200_42714865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60024864662cddab9ea2584_65755512', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_60024864662cddab9ea2584_65755512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_60024864662cddab9ea2584_65755512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Transaction'];?>
 - [#<?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['t']->value['type']);?>
-<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
]</h5>

                </div>
                <div class="ibox-content" id="ibox_form">
                    <div class="alert alert-danger" id="emsg">
                        <span id="emsgbody"></span>
                    </div>
                    <form class="form-horizontal" method="post" id="tform" role="form">
                        <div class="form-group">
                            <label for="account" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</label>
                            <div class="col-sm-9">
                                <select id="account" name="account" class="form-control" disabled>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
" <?php if ($_smarty_tpl->tpl_vars['ds']->value['account'] == $_smarty_tpl->tpl_vars['t']->value['account']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['t']->value['date'];?>
" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="description" name="description" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['description'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="amount" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control amount" id="amount"  data-a-sign="<?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 " data-d-group="2" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['amount'];?>
"  name="amount" disabled>
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['t']->value['type'] != 'Transfer') {?>
                            <div class="form-group">
                                <label for="cats" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</label>
                                <div class="col-sm-9">
                                    <select id="cats" name="cats" class="form-control">
                                        <option value="Uncategorized"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['name'] == $_smarty_tpl->tpl_vars['t']->value['category']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                </div>
                            </div>
                        <?php } else { ?>
                            <input type="hidden" name="cats" id="cats" value="">
                        <?php }?>



                        <div class="form-group">
                            <label for="tags" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</label>
                            <div class="col-sm-9">
                                <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['tag']->value['text'],$_smarty_tpl->tpl_vars['dtags']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                &nbsp;
                            </div>
                            <div class="col-sm-9">
                                <h4><a href="#" id="a_toggle"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Advanced'];?>
</a> </h4>
                            </div>
                        </div>
                        <div id="a_hide">
                            <?php if ($_smarty_tpl->tpl_vars['t']->value['type'] == 'Income') {?>
                                <div class="form-group">
                                    <label for="payer" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payer'];?>
</label>
                                    <div class="col-sm-9">
                                        <select id="payer" name="payer" class="s2 form-control">
                                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Contact'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['t']->value['payerid']) == ($_smarty_tpl->tpl_vars['ps']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ps']->value['account'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                        </select>
                                        <input type="hidden" name="payee" id="payee" value="0">
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <label for="payee" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payee'];?>
</label>
                                    <div class="col-sm-9">
                                        <select id="payee" name="payee" class="s2 form-control">
                                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Contact'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['t']->value['payeeid']) == ($_smarty_tpl->tpl_vars['ps']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ps']->value['account'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                        </select>
                                        <input type="hidden" name="payer" id="payer" value="0">
                                    </div>
                                </div>
                            <?php }?>
                            <div class="form-group">
                                <label for="pmethod" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</label>
                                <div class="col-sm-9">
                                    <select id="pmethod" name="pmethod" class="form-control">

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pms']->value, 'pm');
$_smarty_tpl->tpl_vars['pm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pm']->value) {
$_smarty_tpl->tpl_vars['pm']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['pm']->value['name'] == $_smarty_tpl->tpl_vars['t']->value['method']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ref" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];?>
#</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ref" name="ref" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['ref'];?>
">
                                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ref_example'];?>
</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input type="hidden" name="trid" id="trid" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">
                                <input type="hidden" id="trtype" name="trtype" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['type'];?>
">
                                <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-8">



            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['tr_delete_warning'];?>
</p>
                    <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/delete-post/">





                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">

                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>
                    </form>

                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['t']->value['attachments'] != '') {?>
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <?php echo IBilling_Viewer::transaction_attachment($_smarty_tpl->tpl_vars['t']->value['attachments']);?>


                    </div>
                </div>
            <?php }?>

        </div>

    </div>

    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">
<?php
}
}
/* {/block "content"} */
}
