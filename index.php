<?php
require_once("rb.php");
R::setup();

//R::wipe("request");

$requests = R::find('request');

require_once("views/index.php");

