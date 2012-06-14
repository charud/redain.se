<?php
require_once("rb.php");
R::setup();

ini_set("display_errors", 1);

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

if(isset($_POST['txtResponse']))
{
    $response = R::dispense("response");
    $response->text = $_POST['txtResponse'];
    $response->request = R::load('request', intval($_GET['id']));
    R::store($response);
    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'request.php?id=' . intval($_GET['id']);
    header("Location: http://$host$uri/$extra");
    die();
}

if(isset($_GET['id']))
{
    
    $recentRequests = R::find('request');
    $request = R::load('request', intval($_GET['id']));
    $request->ownResponse = array_reverse($request->ownResponse);

    require_once("views/request.php");
}
