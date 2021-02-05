<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="/scrollbooster-master/dist/scrollbooster.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
    <nav>
        <div class="header">
            <div class="foodis">
                <img class="logo" src="/img/Logo.png">
                <h2>foodis</h2>
            </div>

            <div class="username">
                <img src="https://img.icons8.com/windows/500/000000/user-male-circle.png" />
                <!--<p><?php // $_SESSION["username"]; 
                        ?></p>-->
                <p>Sandhika Galih</p>
            </div>
            <div class="search">
                <div class="search-btn-img">
                    <img src="https://img.icons8.com/small/200/000000/search.png" />
                </div>
                <div class="search-input">
                    <form>
                        <input type="text" name="search" placeholder="Search.." id="search-input">
                    </form>
                </div>

            </div>



            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <div class="hamburger-menu">

                </div>

            </div>
            <ul>
                <li><a href="home">Home</li>
                <li><a href="view">View</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

    </nav>
    <?= $this->renderSection('category'); ?>
    <div class="slider container">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio-1">
            <input type="radio" name="radio-btn" id="radio-2">
            <input type="radio" name="radio-btn" id="radio-3">
            <input type="radio" name="radio-btn" id="radio-4">

            <div class="slide first">
                <img src="/img/slideshow/1.jpg" alt="Ayam Kalasan">
            </div>

            <div class="slide">
                <img src="/img/slideshow/2.jpg" alt="Ayam Kalasan">
            </div>

            <div class="slide">
                <img src="/img/slideshow/3.jpg" alt="Ayam Kalasan">
            </div>

            <div class="slide">
                <img src="/img/slideshow/4.jpg" alt="Ayam Kalasan">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>

            <div class="navigation-manual">
                <label for="radio-1" class="manual-btn"></label>
                <label for="radio-2" class="manual-btn"></label>
                <label for="radio-3" class="manual-btn"></label>
                <label for="radio-4" class="manual-btn"></label>
            </div>


        </div>


    </div>




    <?= $this->renderSection('content'); ?>

    <div class="container-footer">
        <p>&copy; 2021 Foodis, Inc. All rights reserved</p>
        <div class="logo">
            <img src="https://img.icons8.com/metro/24/000000/facebook-new--v2.png" />
            <img src="https://img.icons8.com/metro/26/000000/instagram-new.png" />
            <img src="https://img.icons8.com/fluent-systems-filled/24/000000/line-me.png" />
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>


</body>