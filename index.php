<?php
require_once("rb.php");

echo "Test";

if($_SERVER['SERVER_NAME'] == "local.redain.se")
{
    R::setup();
}
else
{  
    R::setup('mysql:host=a.db.shared.orchestra.io;dbname=db_f7ca8cba','user_f7ca8cba','El-Q,kRZ8klQ.a'); //mysql
}

//R::wipe("response");

$requests = R::find('request');

require_once("views/index.php");

