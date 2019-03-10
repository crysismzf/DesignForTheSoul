
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <script src="js/jq.js"></script>
    <title>Contacts</title>
</head>
<body>
<header>

    <div class="text_for_header">
        <a href="/main"><h1>design for the soul</h1></a>
    </div>

</header>
<nav>
    <div class="menu_row">
        <a href="/main">HOME</a>
    </div>
    <div class="menu_row">
        <a href="/services">SERVICES AND PRICES</a>
    </div>
    <div class="menu_row">
        <a href="/portfolio">PORTFOLIO</a>
    </div>
    <div class="menu_row">
        <a href="/contacts">CONTACTS</a>
    </div>
    <div class="menu_for_phone">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
</nav>
<div class="modal_win_menu">
    <a href="/main">HOME</a>
    <a href="/services">SERVICES AND PRICES</a>
    <a href="/portfolio">PORTFOLIO</a>
    <a href="/contacts">CONTACTS</a>
    <div class="close_mod_win">CLOSE</div>
</div>
<section>
    <div class="elementRow">
    <div class="contact">
        <i class="fa fa-location-arrow" aria-hidden="true"></i>
        <span class="address"> <?php echo $user_db[0]['address'];?> </span><br><br>
        <i class="fa fa-phone" aria-hidden="true"></i>
        <span class="tel"><?php echo $user_db[0]['phone'];?></span><br><br>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <span class="email"><?php echo $user_db[0]['email'];?></span><br><br>
        <a href="<?php echo $user_db[0]['twitter'];?>"><i class="fa fa-twitter-square" aria-hidden="true"></i>
        <span class="twitter"><?php echo $user_db[0]['twitter'];?></span></a><br><br>
        <a href="<?php echo $user_db[0]['vk'];?>"><i class="fa fa-vk" aria-hidden="true"></i>
        <span class="vk"><?php echo $user_db[0]['vk'];?></span></a><br><br>
        <a href="<?php echo $user_db[0]['instagram'];?>"><i class="fa fa-instagram" aria-hidden="true"></i>
        <span class="instagram"><?php echo $user_db[0]['instagram'];?></span></a><br><br>
        <a href="<?php echo $user_db[0]['facebook'];?>"><i class="fa fa-facebook-square" aria-hidden="true"></i>
        <span class="facebook"><?php echo $user_db[0]['facebook'];?></span></a><br><br>
    </div>
    <div class="map">
        <img src="map/<?php echo $user_db[0]['map_representation'];?>">
    </div>
    </div>
</section>
<footer>
    <div class = "social_net">
        <a href="<?php echo $user_db[0]['twitter'];?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        <a href="<?php echo $user_db[0]['vk'];?>"><i class="fa fa-vk" aria-hidden="true"></i></a>
        <a href="<?php echo $user_db[0]['instagram'];?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="<?php echo $user_db[0]['facebook'];?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
    </div>
    <div class="general_iformation">
        &#169 design for the soul
    </div>
</footer>
<script src="js/starter.js"></script>
</body>
</html>