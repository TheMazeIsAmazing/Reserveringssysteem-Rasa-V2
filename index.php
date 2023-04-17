<?php
session_start();
if (isset($_GET['errors'])) {
    //do something
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren - Rasa Senang</title>
    <link rel="stylesheet" type="text/css" href="./includes/css/style.css"/>
<!--    <script type="text/javascript" src="js/main.js" defer></script>-->

</head>
<body>
<header>
    <div class="wrapper">
        <div class="logo">
            <a href="#"><img src="logo.png" alt="DevBabu.com"></a>
        </div>
        <div class="navbar">
            <div class="close-nav"><button>×</button></div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="menu-bar">
            <button><i></i></button>
        </div>
    </div>
</header>
<div class="container">
    <!-- Content -->
</div>
<script>
    const theBody = document.querySelector('body');
    const openNav = document.querySelector('.menu-bar button');
    const closeNav = document.querySelector('.close-nav button');
    const Navbar = document.querySelector('.navbar');

    // function bodyScroll(){
    //     if(Navbar.classList.contains('show')){
    //         theBody.classList.add('hide-scroll');
    //     }
    //     else if(theBody.classList.contains('hide-scroll')){
    //         theBody.classList.remove('hide-scroll');
    //     }
    // }

    function showHide(){
        Navbar.classList.toggle('show');
        // bodyScroll();
    }

    openNav.onclick = showHide;
    closeNav.onclick = showHide;
</script>
</body>
</html>
