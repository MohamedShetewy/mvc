<div class="container">
    <a href="/mvc/public/users/create" class="button1"><i class="fa fa-plus"></i> <?=$text_new_item?></a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><?=$text_table_groupname?></th>
                <th><?=$text_table_control?></th>

            </tr>
        </thead>
        <tbody>
             <?php if (false !== $groups): foreach ($groups as $group):?>
                 <tr>
                     <td><?=$group->GroupName?></td>
                     <td>

                     </td>
                 </tr>
             <?php endforeach; endif;?>
        </tbody>

    </table>
</div>