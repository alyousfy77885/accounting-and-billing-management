
{extends file="$tpl_admin_layout"}

{block name="content"}

    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>{$_L['List']} {if $type eq 'Product'} {$_L['Products']} {else} {$_L['Services']} {/if}</h5>
                    <div class="ibox-tools">
                        <a href="{$_url}ps/c-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>اضافه صنف</a>
                        <a href="{$_url}ps/s-new" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> {$_L['Add Product']}</a>
                    </div>
                </div>
                <div class="ibox-content" id="ibox_form">
                    <div class="input-group"><input type="text" placeholder="{$_L['Search']}" id="txtsearch" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" id="search" class="btn btn-sm btn-primary"> {$_L['Search']}</button> </span></div>
                    <input type="hidden" id="stype" value="cat">

                    <div class="project-list mt-md">
                        <div id="progressbar">
                        </div>

                        <div id="application_ajaxrender">
                               </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="_lan_are_you_sure" value="{$_L['are_you_sure']}">

{/block}
/*
{block name="content"}


    <div class="row">



        <div class="col-md-12">



            <div class="panel panel-default">
                <div class="panel-body">

                    <a href="{$_url}ps/c-new/" class="md-btn md-btn-primary"><i class="fa fa-plus"></i>اضافه صنف جديد</a>


                </div>
                <div class="panel-body">

                    <form class="form-horizontal" method="post" action="{$_url}customers/list/">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <input type="text" name="name" id="foo_filter" class="form-control" placeholder="{$_L['Search']}..."/>

                                </div>
                            </div>

                        </div>
                    </form>

                    <table class="table table-bordered table-hover sys_table footable"  data-filter="#foo_filter" data-page-size="50">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم الصنف</th>
                            <th>تاريخ اضافه الصنف</th>
                            <th>سعر شراء الوحده</th>
                          
                            <th>سعر بيع الوحده</th>
<th>الكميه المتوفره</th>
                            <th class="text-right" data-sort-ignore="true">{$_L['Manage']}</th>
                        </tr>
                        </thead>
                        <tbody>

                        {foreach $d as $ds}

                            <tr>

                                <td><a href="{$_url}orders/view/{$ds['cat_id']}/">{$ds['cat_id']}</a> </td>
                                <td>

                                    <a href="{$_url}orders/view/{$ds['cat_id']}/">{$ds['name']}</a>

                                </td>

                                <td>
                                    {date( $_c['df'], strtotime({$ds['buy']}))}
                                </td>
                                <td><a href="{$_url}contacts/view/{$ds['cid']}/">{$ds['sale']}</a> </td>

                                <td class="amount">
                                    {$ds['buy']}

                                </td>
                                <td class="amount">
                                    {$ds['coun']}

                                </td>

                                <td class="text-right">
                                    <button class="edit" id="uid{$ds['cat_id']}">تعديل</button>

                                    <a href="#" class="btn btn-danger btn-xs cdelete" id="uid{$ds['cat_id']}"><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>

                        {/foreach}

                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="7">
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>

                    </table>

                </div>
            </div>
        </div>






    </div>

{/block}
*/
