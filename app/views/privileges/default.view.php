<div class="container">
    <a href="/mvc/public/privileges/create" class="button1"><i class="fa fa-plus"></i> <?=$text_new_item?></a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><?=$text_table_privileges?></th>
                <th><?=$text_table_control?></th>

            </tr>
        </thead>
        <tbody>
             <?php if (false !== $privileges): foreach ($privileges as $privilege):?>
                 <tr>
                     <td><?=$privilege->PrivilegeTitle?></td>
                     <td>
                         <a href="/mvc/public/privileges/edit/<?=$privilege->PrivilegeId?>"><i class="fa fa-edit"></i></a>
                         <a href="/mvc/public/privileges/delete/<?=$privilege->PrivilegeId?>" onclick="if(!(confirm('<?=$text_table_control_delete?>'))) return false;"><i class="fa fa-trash"></i></a>
                     </td>
                 </tr>
             <?php endforeach; endif;?>
        </tbody>

    </table>
</div>