<?php
include '../php/connection.php';
include '../php/anonymousFunctions.php';
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/priceStyle.css">
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
                <a class="active" href="price.php">Shop</a>
                <a href="contacts.php">Contacts</a>
                <a href="feedback.php">Feedback</a>
                <a href="cart.php">Cart</a>
            </div>
        </div>
    </header>
    <main>
        <div class="sec1">
            <div class="price-class">
                <div class="text">
                        Shop
                </div>
                <div class="blocks">
                    <?php
                    $result = mysqli_query($mysqli,"SELECT id, pathToImage, brand, nameOfItem, price,small+medium+large+xlarge+xxlarge+oneSize as summa FROM items");
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                    {

                        echo <<<EOT
                        <div class="block">
                            <a href="../html/item.php?id={$row["id"]}">
                                <div class="picture">
                                    <img {$soldOutClass($row["summa"])} src={$row["pathToImage"]} alt="">
                                    {$soldOut($row["summa"])}
                                </div>
                                <div class="description">
                                    <b><span class="brand">{$row["brand"]}<br></span></b>
                                    <b><span class="nameOfItem">{$row["nameOfItem"]}<br></span></b>
                                     <span class="priceOfItem">$ {$row["price"]}.00</span>
                                </div>
                            </a>
                        </div>
                        EOT;
                    };
                    ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/js.js"></script>
</html>