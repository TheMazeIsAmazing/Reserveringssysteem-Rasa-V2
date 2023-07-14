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
    <script type="text/javascript" src="./includes/js/navBar.js" defer></script>
    <script type="text/javascript" src="./includes/js/preventUnload.js" async></script>
</head>
<body>
<header>
    <nav class="wrapper">
        <div class="logo">
            <a href="#"><img src="includes/logo's/logo.jpg" alt="DevBabu.com"></a>
        </div>
        <div class="navbar">
            <div class="close-nav">
                <button>×</button>
            </div>
            <nav>
                <ul>
                    <li><a href="http://www.rasasenang.com">Hoofdsite</a></li>
                    <li><a class="current" href="#">Reserveren</a></li>
                    <li><a href="#">Reservering Wijzigen</a></li>
                    <li><a href="#">Account</a></li>
                </ul>
            </nav>
        </div>
        <div class="menu-bar">
            <button><i></i></button>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <h1>Reserveren</h1>
        <div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Eget gravida cum sociis natoque penatibus et magnis. Ipsum a arcu cursus vitae congue
            mauris. Quis hendrerit dolor magna eget est lorem. Adipiscing diam donec adipiscing tristique risus nec
            feugiat in. Suspendisse potenti nullam ac tortor vitae. Et molestie ac feugiat sed lectus vestibulum mattis.
            Ut tellus elementum sagittis vitae. Magna sit amet purus gravida quis blandit. Nibh venenatis cras sed felis
            eget velit. Sit amet nisl suscipit adipiscing. Id ornare arcu odio ut sem nulla. Etiam sit amet nisl purus.
            Neque viverra justo nec ultrices.
        </div>
    </div>
    <div class="footer container">
        <section>
            <div>© <?= date("Y") ?> - Rasa Senang Dordrecht.</div>
            <div><a href="./privacystatement"> Privacystatement </a></div>
        </section>
    </div>
</main>
</body>
</html>
