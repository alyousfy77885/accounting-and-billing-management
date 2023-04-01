<?php

_auth();
$ui->assign('_application_menu', 'stock');
$ui->assign('_title', $_L['Orders'] . '- ' . $config['CompanyName']);
$ui->assign('_st', $_L['Orders']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);

Event::trigger('orders');

switch ($action) {
    case 'list':


     $paginator = Paginator::bootstrap('cat', 'ca', 'cat');
        $d = ORM::for_table('cat')
            
            ->offset($paginator['startpoint'])
            ->limit($paginator['limit'])
            
            ->find_many();
        $ui->assign('d', $d);
        
        $ui->assign('paginator', $paginator);
        $ui->assign(
            'xheader',
            '
<link rel="stylesheet" type="text/css" href="' .
                $_theme .
                '/css/modal.css"/>

'
        );
        $ui->assign(
            'xfooter',
            '
        <script type="text/javascript" src="' .
                $_theme .
                '/lib/modal.js"></script>
<script type="text/javascript" src="' .
                $_theme .
                '/lib/s-list.js"></script>

'
        );
        $ui->display('s-list.tpl');

/*
        $ui->assign(
            'jsvar',
            '
_L[\'are_you_sure\'] = \'' .
                $_L['are_you_sure'] .
                '\';
 '
        );

        $mode_css = '';
        $mode_js = '';

        $mode_css = Asset::css('footable/css/footable.core.min');

        $mode_js = Asset::js([
            'footable/js/footable.all.min',
            'numeric',
            'orders/list',
        ]);

        $d = ORM::for_table('stock')
            ->order_by_desc('id')
            ->find_many();

        $ui->assign('d', $d);
        $ui->assign('xheader', $mode_css);
        $ui->assign('xfooter', $mode_js);

        $xjq =
            '

    $(\'.amount\').autoNumeric(\'init\', {

    aSign: \'' .
            $config['currency_code'] .
            ' \',
    dGroup: ' .
            $config['thousand_separator_placement'] .
            ',
    aPad: ' .
            $config['currency_decimal_digits'] .
            ',
    pSign: \'' .
            $config['currency_symbol_position'] .
            '\',
    aDec: \'' .
            $config['dec_point'] .
            '\',
    aSep: \'' .
            $config['thousands_sep'] .
            '\'

    });

 ';

        $ui->assign('xjq', $xjq);

        $ui->display('stock-list.tpl');
*/
        break;

    case 'add':
$ui->assign('type', 'Product');
        $ui->assign('xfooter', Asset::js(['numeric', 'jslib/add-s']));
        $ui->assign(
            'xjq',
            '
 $(\'.amount\').autoNumeric(\'init\');
 '
        );


        $c = ORM::for_table('crm_accounts')
            ->select('id')
            ->select('account')
            ->select('company')
            ->select('email')
            ->order_by_desc('id')
            ->find_many();
        $ui->assign('c', $c);

        // find all products

        $p = ORM::for_table('sys_items')
            ->select('id')
            ->select('name')
            ->find_array();

        $ui->assign('p', $p);
 $ui->assign('type', 'Product');
        $ui->assign('xfooter', Asset::js(['numeric', 'jslib/add-s']));
        $ui->assign(
            'xjq',
            '
 $(\'.amount\').autoNumeric(\'init\');
 '
        );

        $max = ORM::for_table('sys_items')->max('id');
        $nxt = $max + 1;
        $ui->assign('nxt', $nxt);
        $ui->display('add-s.tpl');


/*
        if (isset($routes['3']) and $routes['3'] != '') {
            $p_cid = $routes['3'];
            $p_d = ORM::for_table('crm_accounts')->find_one($p_cid);
            if ($p_d) {
                $ui->assign('p_cid', $p_cid);
            }
        } else {
            $ui->assign('p_cid', '');
        }

        $css_arr = ['s2/css/select2.min', 'modal', 'dp/dist/datepicker.min'];
*
        $mode_js = Asset::js([
            's2/js/select2.min',
            's2/js/i18n/' . lan(),
            'dp/dist/datepicker.min',
            'dp/i18n/' . $config['language'],
            'numeric',
            'modal',
            'orders/add-s',
        ]);
        $ui->assign('xheader', Asset::css($css_arr));

        $ui->assign('xfooter', $mode_js);

        $ui->assign(
            'xjq',
            '
        
        function ib_amount() {
    
}
 $(\'.amount\').autoNumeric(\'init\', {

    aSign: \'' .
                $config['currency_code'] .
                ' \',
    dGroup: ' .
                $config['thousand_separator_placement'] .
                ',
    aPad: ' .
                $config['currency_decimal_digits'] .
                ',
    pSign: \'' .
                $config['currency_symbol_position'] .
                '\',
    aDec: \'' .
                $config['dec_point'] .
                '\',
    aSep: \'' .
                $config['thousands_sep'] .
                '\'

    });

 '
        );

        $ui->display('stock-add.tpl');
*/
        break;

    case 'add-s':
        $name = _post('name');
        $sales_price = _post('sales_price');
      //$sales_price = Finance::amount_fix($sales_price);
        $item_number = _post('item_number');
        $description = _post('description');
        $type = _post('type');
 $type= Finance::amount_fix($type);
     $buy=_post('buy');
 $buy= Finance::amount_fix($buy);
        $msg = '';

        if ($name == '') {
            $msg .= 'Item Name is required <br>';
        }
        if (!is_numeric($sales_price)) {
            $sales_price = '0.00';
        }

        if ($msg == '') {
          $order = ORM::for_table('stock')->create();

        $d = ORM::for_table('sys_items')->where('id',$name)
        
            ->find_one();
  $order->product = $d->name;
       $order->pid = $name;
      $order->buys= $buy;
        /*$order->cname = $c->account;
        $order->date_added = $today;*/
        $order->count =$item_number;
       // $order->ordernum = _raid(10);
        $order->unit= $description;
        $order->quantity= 33;
      $order->sale = $sales_price;
        $order->save();

        
        


            _msglog('s', $_L['Item Added Successfully']);

            echo $order->id();
        } else {

            echo $msg;
        }
        break;

    case 'edit-f':
        $msg = '';
        $id = _post('id');
        $price = _post('price');
        $price = Finance::amount_fix($price);
        $name = _post('name');
        $item_number = _post('item_number');
        $description = _post('buy');
        if ($name == '') {
            $msg .= 'Name is Required <br>';
        }
        if (!is_numeric($price)) {
            $msg .= 'Invalid Sales Price <br>';
        }

        if ($msg == '') {
            $d = ORM::for_table('stock')->find_one($id);
            if ($d) {
                $d->product = $name;
                $d->count = $item_number;
                $d->sale = $price;
                $d->buys= $description;
                $d->save();
                echo $d->id();
            } else {
                echo 'Not Foundd';
            }
        } else {
            echo $msg;
        }

        break;
    case 'delete-c':
        $id = $routes['2'];
        if ($_app_stage == 'Demo') {
            r2(
                U . 'stock/list',
                'e',
                'Sorry! Deleting Account is disabled in the demo mode.'
            );
        }
        $d = ORM::for_table('stock')->find_one($id);
        if ($d) {
            $d->delete();
            r2(U . 'stock/list', 's', $_L['account_delete_successful']);
        }

        break;

    case 'edit-c':  $id = $routes['2'];
    
        $d = ORM::for_table('stock')->find_one($id);
        if ($d) {
            $price =$d['sale'];
            echo '
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h3>' .
                $_L['Edit'] .
                '</h3>
</div>
<div class="modal-body">

<form class="form-horizontal" role="form" id="edit_for" method="post">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">' .
                $_L['Name'] .
                '</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="' .
                $d['product'] .
                '" name="name" id="name">
    </div>
  </div>
  <div class="form-group">
    <label for="rate" class="col-sm-2 control-label">
                الكميه
                </label>
<div class="col-sm-2">
      <input type="number" class="form-control" name="item_number" value="' .
                $d['count'] .
                '" id="item_number">
      <input type="hidden" name="id" value="' .
                $d['id'] .
                '">
    </div>
  </div>
  <div class="form-group">
    <label for="rate" class="col-sm-2 control-label">
              سعر الشراء
                </label>
    <div class="col-sm-2">
      <input type="number" class="form-control" name="price" value="' .
                $price .
                '" id="price">
      <input type="hidden" name="id" value="' .
                $d['id'] .
                '">
    </div>
  </div>

  <div class="form-group">
    <label for="rate" class="col-sm-2 control-label"> سعر البيع
                
                </label>
<div class="col-sm-2">
      <input type="number" class="form-control" name="buy" value="' .
                $d['buys'] .
                '" id="item_number">
      <input type="hidden" name="id" value="' .
                $d['id'] .
                '">
    </div>
  </div>
    <div class="form-group">
    <label for="name" class="col-sm-2 control-label">الوحده
              
                </label>
    <div class="col-sm-10">
      <textarea id="description" name="description" class="form-control" rows="3">' .
                $d['unit'] .
                '</textarea>
    </div>
  </div>
</form>

</div>
<div class="modal-footer">

	<button type="button" data-dismiss="modal" class="btn">' .
                $_L['Close'] .
                '</button>
	<button id="update" class="btn btn-primary">' .
                $_L['Update'] .
                '</button>
</div>';
        } else {
            echo 'not foeund';
        }

        break;

    case 'post':
        $pid = _post('pid');
        $cid = _post('cid');
        $status = _post('status');
$quntity=_post('quantity');
        $billing_cycle = _post('billing_cycle');

        $amount = _post('price');
        $amount = Finance::amount_fix($amount);

        if ($pid == '' || $cid == '') {
            i_close($_L['All Fields are Required']);
        }

        $p = ORM::for_table('sys_items')->find_one($pid);

        if (!$p) {
            i_close($_L['Item Not Found']);
        }

        // find the customer

        $c = ORM::for_table('crm_accounts')->find_one($cid);

        if (!$c) {
            i_close($_L['User Not Found']);
        }

        $today = date('Y-m-d');

        // create invoice
/*
        $generate_invoice = _post('generate_invoice');

        if ($generate_invoice == 'Yes') {
            $billing_cycle = _post('billing_cycle');
            $iid = Invoice::forSingleItem(
                $cid,
                $p->name,
                $amount,
                $billing_cycle
            );

            $invoice_id = $iid['id'];
        } else {
            $iid = 0;
            $invoice_id = 0;
        }
*/
        $order = ORM::for_table('stock')->create();

        $order->product = $p->name;
       $order->pid = $pid;
      /*  $order->cid = $cid;
        $order->cname = $c->account;
        $order->date_added = $today;*/
        $order->count =$amount;
       // $order->ordernum = _raid(10);
        $order->unit= $status;
        $order->quantity= $quntity;
      //  $order->iid = $invoice_id;
        $order->save();

        echo $order->id;

        break;

    case 'view':
        $oid = route(2);

        // find the orders

        $order = ORM::for_table('sys_orders')->find_one($oid);

        if ($order) {
            $ui->assign(
                'jsvar',
                '
_L[\'data_updated\'] = \'' .
                    $_L['Data Updated'] .
                    '\';
_L[\'email_sent\'] = \'' .
                    $_L['Email Sent'] .
                    '\';
 '
            );

            $ui->assign(
                'xfooter',
                Asset::js(['tinymce/tinymce.min', 'numeric', 'orders/view'])
            );

            $ui->assign('order', $order);

            $xjq =
                '

    $(\'.amount\').autoNumeric(\'init\', {

    aSign: \'' .
                $config['currency_code'] .
                ' \',
    dGroup: ' .
                $config['thousand_separator_placement'] .
                ',
    aPad: ' .
                $config['currency_decimal_digits'] .
                ',
    pSign: \'' .
                $config['currency_symbol_position'] .
                '\',
    aDec: \'' .
                $config['dec_point'] .
                '\',
    aSep: \'' .
                $config['thousands_sep'] .
                '\'

    });

 ';

            $ui->assign('xjq', $xjq);

            $ui->display('orders_view.tpl');
        } else {
            i_close('Order Not Found');
        }

        break;

    case 'set':
        $id = route(2);
        $status = route(3);

        $allowed_status = [
            'Pending',
            'Active',
            'Cancelled',
            'Fraud',
            'Processing',
        ];

        if (in_array($status, $allowed_status)) {
        } else {
            $msg = 'Invalid Status';
        }

        $d = ORM::for_table('sys_orders')->find_one($id);

        if ($d) {
            $d->status = $status;
            $d->save();

            $msg = $_L['Data Updated'];
        } else {
            $msg = 'Order not found';
        }

        r2(U . 'orders/view/' . $id . '/', 's', $msg);

        break;

    case 'save_activation':
        $oid = _post('oid');

        $activation_subject = $_POST['activation_subject'];

        $activation_message = $_POST['activation_message'];

        $send_email = _post('send_email');

        if ($activation_message == '' || $activation_message == '') {
            i_close($_L['All Fields are Required']);
        }

        $d = ORM::for_table('sys_orders')->find_one($oid);

        if ($d) {
            $cid = $d->cid;

            $d->activation_subject = $activation_subject;
            $d->activation_message = $activation_message;

            $d->save();

            if ($send_email == 'yes') {
                // Send Email

                $client = ORM::for_table('crm_accounts')->find_one($cid);

                if ($client) {
                    if ($client->email != '') {
                        Ib_Email::_send(
                            $client->account,
                            $client->email,
                            $activation_subject,
                            $activation_message,
                            $cid
                        );
                    }
                }
            }

            echo $d->id();
        } else {
            echo 'Order not found';
        }

        break;

    case 'module':
        $id = route(2);

        $d = ORM::for_table('sys_orders')->find_one($id);

        if ($d) {
            Event::trigger('orders/modules/');

            r2(U . 'orders/view/' . $id . '/', 's', $_L['Data Updated']);
        } else {
            $msg = 'Order not found';
        }

        break;

    default:
        echo 'action not defined';
}
