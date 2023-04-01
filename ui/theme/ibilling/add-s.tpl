{extends file="$tpl_admin_layout"}

{block name="content"}

    <div class="wrapper wrapper-content">
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>
                           
                               اضافه مخزون جديد
                          
                            


                        </h5>
                        <div class="ibox-tools">
                            {if $type eq 'Product'}
                                <a href="{$_url}stock/list" class="btn btn-primary btn-xs">عرض محتوى المخزن</a>

                            {/if}
                            {if $type eq 'Service'}
                                <a href="{$_url}stock/list" class="btn btn-primary btn-xs">عرض محتوى المخزن</a>
                            {/if}


                        </div>
                    </div>
                    <div class="ibox-content" id="ibox_form">
                        <div class="alert alert-danger" id="emsg">
                            <span id="emsgbody"></span>
                        </div>

                        <form class="form-horizontal" id="rform">

                            <div class="form-group"><label class="col-lg-2 control-label" for="name">{$_L['Name']}</label>

                                <div class="col-lg-10">    <select id="name" name="name" class="form-control">
                                                <option value="">{$_L['Select']}...</option>
                                                {foreach $p as $ps}
                                                    <option value="{$ps['id']}">{$ps['name']}</option>
                                                {/foreach}

                                            </select>

                        
                                </div>
                            </div>

                            <div class="form-group"><label class="col-lg-2 control-label" for="sales_price">{$_L['Sales Price']} الوحده </label>

                                <div class="col-lg-10"><input type="number" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="{$_c['currency_code']} "  data-a-dec="{$_c['dec_point']}" data-a-sep="{$_c['thousands_sep']}" data-d-group="2">

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

                            <div class="form-group"><label class="col-lg-2 control-label" for="description">{$_L['Description']}</label>

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

                                    <button class="btn btn-sm btn-primary" type="submit" id="submit">{$_L['Submit']}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>


{/block}