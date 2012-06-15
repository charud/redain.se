<?php

require_once("rb.php");

if($_SERVER['SERVER_NAME'] == "local.redain.se")
{
    R::setup();
}
else
{  
    R::setup('mysql:host=a.db.shared.orchestra.io;dbname=db_f7ca8cba','user_f7ca8cba','El-Q,kRZ8klQ.a'); //mysql
}

R::wipe("response");
R::wipe("request");

$request = R::dispense("request");
$request->text = "Vilken soffa ska jag ha till mitt hem?";
$request->image = "http://julgran.erikolsson.se/upload/Sotmandeln_vardagsrum.JPG";
$id = R::store($request);

$request = R::dispense("request");
$request->text = "Behöver en ny matta, några tips?";
$request->image = "http://www.vitdesign.se/sandra/uploaded_images/vardagsrum_1-764110.jpg";
$id = R::store($request);

$request = R::dispense("request");
$request->text = "Vi funderar på att kakla om. Vad tror ni om ett ljust?";
$request->image = "http://2.bp.blogspot.com/_uAzLaJnCUas/SU6VpRfwtoI/AAAAAAAAAN0/g5GJSqqGHH8/s400/k%C3%B6k_myresj%C3%B6_AccentKvadratCap.jpg";
$id = R::store($request);

$request = R::dispense("request");
$request->text = "En passande hylla ovanför min soffa";
$request->image = "http://designinsight.se/wp-content/uploads/2011/03/vardagsrum.jpg";
$id = R::store($request);

$request = R::dispense("request");
$request->text = "Vill ha en passande stol här. Vilken tycker ni skulle fungera bäst?";
$request->image = "http://designinsight.se/wp-content/uploads/2011/03/vardagsrum.jpg";
$id = R::store($request);

