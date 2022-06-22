    <div class="navbar-menu open">
        <div class="personal-data">
            <img class="img-circle img-responsive img-thumbnail" src=  "\mvc\public\img\login-icon.png" />
            <p class="lead text-center"> Mohamed Atef</p>
            
        </div>
        <ul>
          
            <a name="open_notifications" style="cursor: pointer;"><li>
                <span><i class="fa fa-bell"></i></span>
                <span>الاشعارات</span>
                <span class="counting"></span>
            </li></a>
            <a href="/auth/login"><li>
                <span><i class="fa fa-sign-in-alt"></i></span>
                <span>تسجيل الدخول</span>
            </li></a>
            <a href="/mvc/public/"><li>
                <span><i class="fa fa-home"></i></span>
                <span><?= $text_dashboard?></span>
               
            </li></a>
            <a href="/mvc/public/language"><li>
                <span><i class="fa fa-chart-line"></i></span>
                <span>تغيير اللغه</span>
            </li></a>
            <a href="/mvc/public/employee"><li>
                <span><i class="fa fa-user"></i></span>
                <span> <?= $text_employees?> </span>
            </li></a>
            <a href="/auth/logout"><li>
                <span><i class="fa fa-sign-out-alt"></i></span>            
                <span> Sign out </span>
            </li></a>
        </ul>
      
    </div>
    <div class="page-content most-size">