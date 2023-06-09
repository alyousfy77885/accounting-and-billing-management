{extends file="$tpl_admin_layout"}

{block name="content"}

    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5 style="float:right">{$_L['Add_New_Account']}</h5>
</br>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{$_url}contacts/add/" class="btn btn-success"><i class="fa fa-plus"></i>اضافه عميل</a>
                        <a href="{$_url}contacts/import_csv/" class="btn btn-primary"><i class="fa fa-upload"></i> {$_L['Import']}</a>
                        <a href="{$_url}contacts/export_csv/" class="btn btn-info"><i class="fa fa-download"></i> {$_L['Export']}</a>
               </div>


</div></div>
</br></br>
                
                <div class="ibox-content">

                    <form role="form" name="accadd" method="post" action="{$_url}accounts/add-post">
                        <div class="form-group">
                            <label for="account">نوع الحساب </label>
                            <input type="text" class="form-control" id="account" name="account">

                        </div>
                        <div class="form-group">
                            <label for="description">{$_L['Description']}</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="form-group">
                            <label for="balance">{$_L['Initial Balance']}</label>
                            <input type="text" class="form-control amount" id="balance" name="balance" data-a-sign="{$_c['currency_code']} "  data-a-dec="{$_c['dec_point']}" data-a-sep="{$_c['thousands_sep']}" data-d-group="2">
                        </div>


                        <div class="form-group">
                            <label for="account_number">{$_L['Account Number']}</label>
                            <input type="text" class="form-control" id="account_number" name="account_number">
                        </div>

                        <div class="form-group">
                            <label for="contact_person">{$_L['Contact Person']}</label>
                            <input type="text" class="form-control" id="contact_person" name="contact_person">
                        </div>

                        <div class="form-group">
                            <label for="contact_phone">{$_L['Phone']}</label>
                            <input type="text" class="form-control" id="contact_phone" name="contact_phone">
                        </div>

                        <div class="form-group">
                            <label for="ib_url">{$_L['Internet Banking URL']}</label>
                            <input type="text" class="form-control" id="ib_url" name="ib_url">
                        </div>



                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> {$_L['Submit']}</button>
                    </form>

                </div>
            </div>



        </div>



    </div>

{/block}

