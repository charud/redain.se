<!DOCTYPE html>
<html>
<head>
    <title>RedaIn - <?php echo $request->text; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/request.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-responsive.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>


    <div class="container">

        <div class="row">

            <div class="span2 leftbar">
                <h1><a href="/">redain.se</a></h1>

                <div class="row">
                    <div class="span12 recentBox">
                        <h2>Nyligen sökta</h2>
                        <ul>
                            <li style="background-image: url('http://julgran.erikolsson.se/upload/Sotmandeln_vardagsrum.JPG')"><a href="#">Vilken soffa ska jag ha till mitt hem?</a></li>
                        
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



