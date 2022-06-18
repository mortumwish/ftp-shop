<?php
include '../php/connection.php';
include '../php/anonymousFunctions.php';
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/cartStyle.css">
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
                <a href="feedback.php">Feedback</a>
                <a class="active" href="cart.php">Cart</a>
            </div>
        </div>
    </header>

    <main>
        <div class="sec2">
            <div class="top">
                Your cart
            </div>
            <div class="header-labels">
                <div class="quantity">Quantity</div>
                <div class="price">Price</div>
                <div class="total">Total</div>
            </div>
                <div class="blocks">
                    <?php
                         $result = mysqli_query($mysqli,"SELECT cart.id, pathToImage, brand, nameOfItem, price, amount, price*amount as total_cost, session_id, size
                                                               FROM cart inner join sessions on session_key = '{$key}' where sessions.id = cart.session_id");
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                        {
                            echo <<<EOT
                        <div class="itemBlock">
                            <img src={$row["pathToImage"]} alt="">
                            <div class="imgAndText">
                                <div class="description text">
                                    <span class="nameOfItem"><b>{$row["nameOfItem"]}</b></span>
                                    <span class="text size">{$oneSize($row["size"])}{$row["size"]}</span>
                                    <input type="button" value="Remove" name={$row["id"]} class="button buttonDelete ">
                                </div> 
                                <span class="columns text countInCart"><div>{$row["amount"]}</div><div>&nbsppcs.</div></span>
                                <span class="columns text price"><b>$&nbsp</b><b>{$row["price"]}</b><div><b>.00</b></div></span>
                                <span class="columns text total_cost"><b>$&nbsp</b><b>{$row["total_cost"]}</b><b><div>.00</div></b></span>
                            </div>
                        </div>
                        EOT;
                        };
                    ?>
                </div>
            <div class="emptyCart">
                Your cart is currently empty.
                <br><br>
                <b><a href="../html/price.php">Continue shopping here.</a></b>
            </div>
        </div>
        <div class="sec3">
            <div class="left-section">
                <div class="before">
                    <a><p >Add a note to your order </p></a>
                </div>
                <div hidden class="after">
                    <label for="SpecialInstructions">Special instructions for seller</label>
                    <textarea class="special_note" name="note" id="SpecialInstructions"></textarea>
                </div>

            </div>
            <div class="right-section">
                <div class="subtotal">
                    <p>Subtotal&nbsp&nbsp$&nbsp</p>
                    <p></p>
                </div>
                <em>Shipping, taxes, and discounts will be calculated at checkout.</em>
                <input class="button buttonOrder" value="CHECK OUT" type="button">
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
<script src="../js/cart.js"></script>
</html>