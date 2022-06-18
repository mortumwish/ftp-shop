<?php
include '../php/connection.php';
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/feedbackStyle.css">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="menu">
            <div class="logo">
                <a href="index.php">
                    <img src="../img/ftp.png" alt="ftp"/>
                </a>
            </div>
            <div class="links">
                <a href="index.php">Homepage</a>
                <a href="price.php">Shop</a>
                <a href="contacts.php">Contacts</a>
                <a class="active" href="feedback.php">Feedback</a>
                <a href="cart.php">Cart</a>
            </div>
        </div>
    </header>
    <main>
        <div class="sec1">
            <div class="feedback-class">
                <div class="content">
                    <div class="text">Feedback</div>
                    <div class="form">
                        <label>
                            <input type="text" class="information" placeholder="Name">
                        </label>
                        <label for="phone1"></label><input type="tel" id="phone1" class="information" placeholder="Number">
                        <input class = "button sendButton" type="button" value="Send">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="footer">
        <div class="text">
            <span>FUCKTHEPOPULATION</span>
            <span>© 2001-2020 of fucking population. all rights reserved</span>
        </div>
    </div>
</div>
</body>
<script src="../js/js.js"></script>
</html>