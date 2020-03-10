<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>BedCor</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap');
        @import url('img/spectrum.ttf');
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#btn_changes").click(function(){
    $("#changes").load("singlerow.php");
  });
});
</script>
    
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="nav">

        <a class="navbar-brand" href="home.php"><img src="img/logo.png" style="width: 40px; margin-right: 40px;" /></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../reserve.php">Reserve</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">Login</a>
                </li>
            </ul>
            
        </div>
    </nav>