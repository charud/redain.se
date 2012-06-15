<!DOCTYPE html>
<html lang="sv-se">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    

    <title>RedaIn - <?php echo $request->text; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100|Quicksand:300|Josefin+Sans:100|Exo:100|Raleway:100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/default.css?1">
    <link rel="stylesheet" type="text/css" href="/css/request.css?1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.css?1">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>


    <div class="container">

        <div class="row">

            <div class="span2 leftbar">
                <h1><a href="/">redain.se</a></h1>
                <div class="row">
                    <div class="span12 recentBox visible-desktop">
                        <h2>Nyligen sökta</h2>
                        <ul>
                            <?php foreach($recentRequests as $recentRequest): ?>
                                <li style="background-image: url('<?php echo $recentRequest->image; ?>')" onclick="window.location.href='/request.php?id=<?php echo $recentRequest->id; ?>'">
                                    <a href="#"><?php echo $recentRequest->text; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="span10 requestTitle">
                <img src="<?php echo $request->image; ?>" height="200" />
                <h2><?php echo $request->text; ?></h2>
            </div>

            <div class="span10 responseBox">
                <ul>
                    <li class="writeResponse">
                        <form action="?id=<?php echo $request->id; ?>" method="POST">
                            <input type="text" id="txtResponse" name="txtResponse" autofocus="autofocus" placeholder="Skriv tips   (Enter för att skicka)" />
                            <button type="submit" class="btn">Skicka</button>
                        </form>
                    </li>

                    <?php foreach($request->ownResponse as $response): ?>
                        <li><?php echo $response->text; ?>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="span12 recentBox hidden-desktop">
                <h2>Nyligen sökta</h2>
                <ul>
                    <?php foreach($recentRequests as $recentRequest): ?>
                        <li style="background-image: url('<?php echo $recentRequest->image; ?>')" onclick="window.location.href='/request.php?id=<?php echo $recentRequest->id; ?>'">
                            <a href="#"><?php echo $recentRequest->text; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>



    </div> 

    <script type="text/javascript">

        filepicker.setKey("jyAG0RklR7GOMFBFpC88");

        //$(".uploadBox").css("background-image", "url(http://julgran.erikolsson.se/upload/Sotmandeln_vardagsrum.JPG)");

        $("#btnUpload").on("click", function()
        {
            filepicker.getFile("*.jpg;*.png", function(url)
            {
                $("#imageUrl").val(url);
                $(".uploadBox").css("background-image", "url(" + url + ")");
                $(".uploadBox").empty();
                $("#txtRequest").focus();                
            });
        });

    </script>

</body>
</html>



