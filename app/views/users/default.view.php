<div class="container">
    <a href="/mvc/public/users/create" class="button1"><i class="fa fa-plus"></i> <?=$text_new_item?></a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><?=$text_table_username?></th>
                <th><?=$text_table_group?></th>
                <th><?=$text_table_email?></th>
                <th><?=$text_table_subscription_date?></th>
                <th><?=$text_table_last_login?></th>
                <th><?=$text_table_control?></th>

            </tr>
        </thead>
        <tbody>
             <?php if (false !== $users): foreach ($users as $user):?>
                 <tr>
                     <td><?=$user->Username?></td>
                     <td><?=$user->GroupName?></td>
                     <td><?=$user->Email?></td>
                     <td><?=$user->SubscriptionDate?></td>
                     <td><?=$user->LastLogin?></td>
                     <td>

                     </td>
                 </tr>
             <?php endforeach; endif;?>
        </tbody>

    </table>
</div>