{extends file="$tpl_admin_layout"}

{block name="content"}


    <div class="row">



        <div class="col-md-12">



            <div class="panel panel-default">
                <div class="panel-body">

                    <a href="{$_url}orders/add/" class="md-btn md-btn-primary"><i class="fa fa-plus"></i> {$_L['Add New Order']}</a>


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
                            <th>اسم المنتج</th>
                            <th>الكميه</th>
<th>وحده القياس</th><th>الكميه بالوحده</th>
                            <th>تاريخ دخول المخزن</th>
                        </tr>
                        </thead>
                        <tbody>

                        {foreach $d as $ds}

                            <tr>

                                <td><a href="{$_url}orders/view/{$ds['id']}/">{$ds['id']}</a> </td>
                                <td>

                                    <a href="{$_url}orders/view/{$ds['id']}/">{$ds['product']}</a>

                                </td>

                                <td>
                                {$ds['count']}
                                 </td>
                                   <td>
                                {$ds['unit']}
                                 </td>
                                <td>
                                {$ds['quantity']}
                                 </td>
                              
                                 <td>   {date( $_c['df'], strtotime({$ds['dat']}))}
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

