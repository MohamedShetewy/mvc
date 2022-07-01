    <div class="navbar-menu open">
        <div class="personal-data">
            <img class="img-circle img-responsive img-thumbnail" src=  "\mvc\public\img\login-icon.png" />
            <p class="lead text-center"> <?= $text_maneger?></p>
            
        </div>
        <ul>
          

            <a href="/auth/login"><li><span><i class="fa fa-sign-in-alt"></i></span><span><?= $text_signin?></span></li></a>
            <a href="/mvc/public/"><li><span><i class="fa fa-home"></i></span><span><?= $text_dashboard?></span></li></a>
            <a href="/mvc/public/transactions"><li><span><i class="fa fa-credit-card"></i></span><span><?= $text_transactions?></span></li></a>

            <a href="/mvc/public/users"><li><span><i class="fa fa-users"></i></span><span><?= $text_users?></span></li></a>
            <a href="/mvc/public/store"><li><span><i class="fa fa-home"></i></span><span><?= $text_store?></span></li></a>
            <a href="/mvc/public/clients"><li><span><i class="fa fa-user-circle"></i></span><span><?= $text_clients?></span></li></a>
            <a href="/mvc/public/suppliers"><li><span><i class="fa fa-user"></i></span><span><?= $text_suppliers?></span></li></a>
            <a href="/mvc/public/expenses"><li><span><i class="fa fa-money"></i></span><span><?= $text_expenses?></span></li></a>
            <a href="/mvc/public/reports"><li><span><i class="fa fa-chart-bar"></i></span><span><?= $text_reports?></span></li></a>
            <a href="/mvc/public/notifications"><li><span><i class="fa fa-bell"></i></span><span><?= $text_notifications?></span></li></a>

            <a href="/auth/logout"><li><span><i class="fa fa-sign-out-alt"></i></span><span> <?= $text_signout?> </span></li></a>
            <a href="/mvc/public/language"><li><span><i class="fa fa-chart-line"></i></span><span><?= $text_lang?></span></li></a>
        </ul>
      
    </div>
    <div class="page-content most-size">