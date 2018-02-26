<?

require 'steamauth/steamauth.php';
require 'steamauth/userInfo.php';

if(isset($SESSION['steamid']))
{
    $id = $_SESSION['steamid'];
}
else
{
    #not logged in
}

?>
<!DOCTYPE html>
<html lang = 'en-US'>
<head>
    <meta charset = 'UTF-8'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
    <title>CSGO-Boonie</title>
    <div id="menu">
        <nav>
            <ul>
                <li><a href="index.php">CSGO-Boonie</a></li>
                <li><a href="earn.php">Earn Coins</a></li>
                <li><a href="cashout.php">Cash Out</a></li>
                <li><a href="flip.php">Flip</a></li>
                <li><a href="Chat/index.php">Chat</a></li>
                <li><a href="#mine">Mine</a></li>
                <? if(isset($SESSION['steamid'])) {?>
                    <nav>
                        <ul>
                            <li><a href="index.php">CSGO-Boonie</a></li><img class="img-rounded" src="<?$steamprofile['avatar'];?>"><b><? $steamprofile['personaname'];?></b><b class="caret"></b></a>
                            <li><a href="earn.php">Earn Coins</a></li>
                            <li><a href="cashout.php">Cash Out</a></li>
                            <li><a href="flip.php">Flip</a></li>
                            <li><a href="Chat/index.php">Chat</a></li>
                            <li><a href="#mine">Mine</a></li>
                            <li style="float:right"><a class="active" href="steamauth/logout.php">Logout</a></li>
                        </ul>
                    </nav>
                <?} else {?>
                    <li style="float:right"><a class="active" href="">Login</a></li><? echo loginbutton(); ?>
                <?}?>
            </ul>
        </nav>
    </div>
</head>
<body>

</body>
</html>