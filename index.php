<!DOCTYPE html>
<html>
<head>
    <title>RedaIn</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="//api.filepicker.io/v0/filepicker.js"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="span12 header">
                <h1>Inredningstips på redain.se</h1>
            </div>
        </div>

        <div class="row">
            <div class="span2 offset0 uploadBox">
                <h2>Fotografi</h2>
                <button id="btnUpload" class="btn">Bifoga bild</button>
            </div>

            <div class="span6 box searchbox">
                    <form class="form-horizontal" action="#" method="POST">
                        <h1>Vad söker du efter till ditt hem?</h1>
                        <input type="text" name="txtSearch" id="txtSearch" autofocus="autofocus" />
                        <button class="btn btn-large btn-success">Sök</button>
                    </form>
            </div>
        </div>
    

        <div class="row">
            <div class="span12 recentBox">
                <h2>Nyligen sökta</h2>
                <ul>
                    <li style="background-image: url('http://julgran.erikolsson.se/upload/Sotmandeln_vardagsrum.JPG')"><a href="#">Vilken soffa ska jag ha till mitt hem?</a></li>
                    <li style="background-image: url('http://julgran.erikolsson.se/upload/Sotmandeln_vardagsrum.JPG')"><a href="#">Vilken soffa ska jag ha till mitt hem?</a></li>
                    <li style="background-image: url('http://julgran.erikolsson.se/upload/Sotmandeln_vardagsrum.JPG')"><a href="#">Vilken soffa ska jag ha till mitt hem?</a></li>
                    <li style="background-image: url('http://julgran.erikolsson.se/upload/Sotmandeln_vardagsrum.JPG')"><a href="#">Vilken soffa ska jag ha till mitt hem?</a></li>
                    <li style="background-image: url('http://julgran.erikolsson.se/upload/Sotmandeln_vardagsrum.JPG')"><a href="#">Vilken soffa ska jag ha till mitt hem?</a></li>
                </ul>
            </div>
        </div>


    </div> 

    <script type="text/javascript">

        filepicker.setKey("jyAG0RklR7GOMFBFpC88");

        //$(".uploadBox").css("background-image", "url(http://julgran.erikolsson.se/upload/Sotmandeln_vardagsrum.JPG)");

        $("#btnUpload").on("click", function()
        {
            filepicker.getFile("*.jpg;*.png", function(url){

                $(".uploadBox").css("background-image", "url(" + url + ")");
                $(".uploadBox").empty();
                $("#txtSearch").focus();

            });
        });

    </script>

</body>
</html>

<?php
require_once("rb.php");

R::setup();


