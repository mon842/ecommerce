<head>
    <!-- head -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shooping for gadgets electronic devices and many others</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">
</head>

<header>
        <nav>
            <!-- <div class="logo">
                <img src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/fk-plus_3b0baa.png" alt="">
            </div> -->
            <ul>
                <li><a href="index.php">HOME</a></li>
            </ul>
            <div class="searchbar"  method="get">
                <input type="text-light" name="search" id="search" placeholder="search">
                <button class="btn" action="search.php">search</button>
                
            <?php
            session_start();
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                echo '<li class="nav-item">
                <a class="button" href="logout.php">Logout</a>
                </li>';
            
            }
            else
            {
                echo '</div>
                <li class="nav-item">
                <a class="button" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                <a class="button" href="signup.php">Signup</a>
                </li>';
            }

            ?>
        </nav>
    </header>