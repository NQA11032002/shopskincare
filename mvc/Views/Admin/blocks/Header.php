<header class="header">
    <div class="header-right">
        <ul>
            <li class="notify">
                <i class="fa-solid fa-bell notifycation"></i>
                <p class="amount-notify amount-notify--bills"></p>

                <div class="notify-bills">
                    <i class="fa-solid fa-xmark notify-close"></i>
                    <h4 class="notify-bills__title">Notify Bills</h4>
                    <div class="notify-bills__container">

                    </div>
                </div>
            </li>
            <!-- <li>
                <i class="fa-solid fa-message message"></i>
                <p class="amount-notify amount-notify--mess">1</p>
            </li> -->
            <li>
                <div class="infor-login">
                    <img src="<?php echo '../'.$_SESSION["image"]?>" alt="">
                    <div class="infor-login_content">
                        <p><?php echo $_SESSION["hoTen"] ?></p>
                        <p><?php echo $_SESSION["logined"][0]["role"] ?></p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<script src="../Public/js/admin/Home.js"></script>