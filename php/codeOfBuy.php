<?php
include '../php/connection.php';
if(isset($_POST['id'])) {
    $res = mysqli_query($mysqli, "select amount from cart 
                                        inner join items on items.id = {$_POST["id"]} 
                                        inner join sessions on session_key = '{$key}' 
                                        where cart.nameOfItem = items.nameOfItem 
                                        and cart.session_id = sessions.id
                                        and items.article = cart.article
                                        and cart.size = '{$_POST['size']}'");
    //echo mysqli_num_rows($res);
    if (mysqli_num_rows($res) > 0){
        mysqli_query($mysqli, "update cart 
                                     inner join items on items.id = {$_POST["id"]}
                                     inner join sessions on session_key = '{$key}'
                                     set amount = amount + 1 
                                     where cart.nameOfItem = items.nameOfItem 
                                     and cart.session_id = sessions.id
                                     and items.article = cart.article
                                     and cart.size = '{$_POST['size']}'");
    } else{
        mysqli_query($mysqli, "insert into cart (pathToImage, brand, nameOfItem, price, article, session_id, size)
                                 select pathToImage, brand, nameOfItem, price, article, sessions.id, '{$_POST['size']}'
                                 from items
                                 inner join sessions on session_key = '{$key}'
                                 where items.id = {$_POST["id"]}
                                 on duplicate key update amount = amount + 1;
                                 ");
    }
}
?>