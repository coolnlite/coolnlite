<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <div class="search">
        <label>
            <input type="text" placeholder="Tìm kiếm" autocomplete="off">
            <i class="far fa-search"></i>
        </label>
    </div>
    <?php
        if(isset($user_id) == true){
            
            $sql = "SELECT `full_name`,`image` FROM `users` WHERE `id` = $user_id";
            $user = executeResult($sql);
            foreach($user as $us){

       
    ?>
    <a 
    href="<?php print $DOMAIN.'account.php'?>?id=<?php echo '' .$user_id. '' ?>&?permision=<?php echo $permission?>" 
    class="box-user" data-id-users = "<?php echo '' .$user_id. '' ?>">
        <span class="name-user"><?php echo '' . $us['full_name'] . '' ?></span>
        <div class="user">
            <img src="<?php echo '' .'..'. $us['image'] . '' ?>" alt="Avatar">
        </div>
    </a>
    <?php
        }
    }
    ?>
</div>