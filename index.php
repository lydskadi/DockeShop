<?php
$token = '';
session_start();
if(!isset($_SESSION['token'])) { 
    header('Location: login.html');
}


$token = $_SESSION['token'];

echo 'You signed in/token: '. $token;


echo "<p><a href='register.html'>New customer</a></p>";
echo "<p><a href='shop.html'>Add in bin</a></p>";
echo "<p><a href='pokupki.html'>Goods in bin</a></p>";
echo "<p><a href='tovar.html'>All goods</a></p>";
echo "<p><a href='logout.php'>Quit</a></p>";
?>