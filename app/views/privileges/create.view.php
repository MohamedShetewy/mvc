
<form method="POST" class="appform" enctype="application/x-www-form-urlencoded" autocomplete="off">


    <h1><?=$text_legend?></h1>
    <div class="container">

        <div class="row">
            <div  class="form-floating col-md-6 st-br">

                <input required type="text" class="form-control" name="PrivilegeTitle" id="PrivilegeTitle"  maxlength="30"  >
                <label for="PrivilegeTitle"> <?=$text_lable_privilege_tilte?> </label>
            </div>

            <div class="form-floating col-md-6 st-br">
                <input required type="text" class="form-control" name="Privilege" id="Privilege"  maxlength="30" >
                <label for="Privilege"> <?=$text_lable_privilege_url?></label>
            </div>



        </div>
        <input type="submit" name="submit" value="<?=$text_lable_save?>">
    </div>


</form>
