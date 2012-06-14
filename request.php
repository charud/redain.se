<?php
require_once("rb.php");
R::setup();

$request = null;
if(isset($_POST['txtRequest']))
{
    $request = R::dispense("request");
    $request->text = $_POST['txtRequest'];
    $request->image = $_POST['imageUrl'];
    $id = R::store($request);

    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'request.php?id=' . $id;
    header("Location: http://$host$uri/$extra");
    die();
}
else if(isset($_GET['id']))
{
    
    $recentRequests = R::find('request');
    $request = (object)R::load('request', intval($_GET['id']))->export();
    
    require_once("views/request.php");
}
