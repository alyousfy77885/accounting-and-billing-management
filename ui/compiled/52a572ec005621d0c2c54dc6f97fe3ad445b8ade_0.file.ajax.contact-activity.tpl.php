<?php
/* Smarty version 3.1.39, created on 2022-07-11 12:02:30
  from '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/ajax.contact-activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cc49966039c4_37909667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52a572ec005621d0c2c54dc6f97fe3ad445b8ade' => 
    array (
      0 => '/storage/emulated/0/RMS2/ibilling/ibilling/ui/theme/ibilling/ajax.contact-activity.tpl',
      1 => 1654466445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cc49966039c4_37909667 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="activity-post mb-xlg">
    <form method="get" action="/">
        <textarea name="message-text" id="msg" data-plugin-textarea-autosize="" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Activity'];?>
..." rows="1" style="overflow: hidden; word-wrap: break-word; resize: none; height: 200px;"></textarea>
        <input type="hidden" id="activity-type" value="">

    </form>
    <div class="compose-box-footer">
        <ul class="compose-toolbar">
            <li class="clickable"><a href="#"><i class="fa fa-envelope-o"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-phone"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-send-o"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-file-pdf-o"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-life-ring"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-credit-card"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-location-arrow"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-reply"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-tasks"></i></a></li>
            <li class="clickable"><a href="#"><i class="fa fa-truck"></i></a></li>
        </ul>
        <ul class="compose-btn">
            <li>

                <a class="btn btn-primary btn-xs" id="acf-post"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Post'];?>
</a>
            </li>
        </ul>
    </div>
</section>
<div class="mt-lg"> </div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ac']->value, 'acs');
$_smarty_tpl->tpl_vars['acs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acs']->value) {
$_smarty_tpl->tpl_vars['acs']->do_else = false;
?>
    <div class="timeline-item">
        <div class="row">
            <div class="col-xs-3 date">
                <i class="<?php echo $_smarty_tpl->tpl_vars['acs']->value['icon'];?>
"></i>
                <span class="sdate"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],$_smarty_tpl->tpl_vars['acs']->value['stime']);?>
</span>
                <br>
                <small class="text-navy"><span class="mmnt"><?php echo $_smarty_tpl->tpl_vars['acs']->value['stime'];?>
</span></small>
            </div>
            <div class="col-xs-9 content no-top-border">
                <p class="m-b-xs"><strong><?php echo $_smarty_tpl->tpl_vars['acs']->value['oname'];?>
</strong></p>

                <p><?php echo $_smarty_tpl->tpl_vars['acs']->value['msg'];?>
</p>
                <p>
                    <a href="#" class="btn btn-info btn-xs activity_edit" id="activity_<?php echo $_smarty_tpl->tpl_vars['acs']->value['id'];?>
"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/activity-delete/<?php echo $_smarty_tpl->tpl_vars['acs']->value['cid'];?>
/<?php echo $_smarty_tpl->tpl_vars['acs']->value['id'];?>
" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                </p>

            </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
