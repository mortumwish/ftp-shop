<?php
include '../php/connection.php';
include '../php/anonymousFunctions.php';
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/itemStyle.css">
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
            <?php
                $result = mysqli_query($mysqli,"SELECT id, pathToImage, pathToSecondImage, brand, nameOfItem, description, price, oneSize, small, medium, large, xlarge, xxlarge, small+medium+large+xlarge+xxlarge+oneSize as summa FROM items where id = {$_GET["id"]}");
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                echo <<<EOT
            <div class="itemCard">
                <div class="images">
                    <img id="main" class="mainImage" src="{$row["pathToImage"]}" alt="">
                    <div class="secondaryImages">
                        <img id="first" src="{$row["pathToImage"]}" alt="">
                        <img id="second" src="{$row["pathToSecondImage"]}" alt="">
                    </div>
                </div>
                <div class="information">
                    <b><div class="brand">{$row["brand"]}</div></b>
                    <div class="name">{$row["nameOfItem"]}</div>
                    <b><div class="price">$ {$row["price"]}.00</div></b>
                    <select {$disableSelect($row["summa"])} {$oneSizeItem($row["oneSize"])} class="sizeList">
                        <option {$availabilitySize($row["small"])} value="Small">Small</option>
                        <option {$availabilitySize($row["medium"])} value="Medium">Medium</option>
                        <option {$availabilitySize($row["large"])} value="Large">Large</option>
                        <option {$availabilitySize($row["xlarge"])} value="X-Large">X-Large</option>
                        <option {$availabilitySize($row["xxlarge"])} value="XX-Large">XX-Large</option>
                    </select>
                    <input {$availabilityItem($row["summa"])} name="{$row["id"]}">
                    <div class="description">{$row["description"]}</div>
                </div>
            </div>
            EOT;
            ?>
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
<script src="../js/click_secondary_images.js"></script>
</html>