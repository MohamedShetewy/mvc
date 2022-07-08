
<form method="POST" class="appform" enctype="application/x-www-form-urlencoded" autocomplete="off">


    <h1><?=$text_legend?></h1>
    <div class="container">

        <div class="row">
            <div  class="form-floating col-md-12 st-br">

                <input required type="text" class="form-control" name="GroupName" id="GroupName"  maxlength="20" value="<?=$group->GroupName?>" >
                <label for="GroupName"> <?=$text_lable_group_tilte?> </label>
            </div>
            <div>
                <label><?=$text_lable_privilages?></label>
                <?php if($privileges !== false): foreach ($privileges as $privilege):?>
                    <div>
                    <input type="checkbox" name="privileges[]" id="privileges" <?=in_array($privilege->PrivilegeId,$groupprivileges)? 'checked' : '' ?> value="<?=$privilege->PrivilegeId?>">
                    <span><?=$privilege->PrivilegeTitle?></span>
                    </div>
                <?php endforeach; endif;?>
            </div>

        </div>
        <input type="submit" name="submit" value="<?=$text_lable_save?>">
    </div>


</form>
