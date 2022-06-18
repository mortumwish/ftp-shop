<?php
include '../php/connection.php';
$result = mysqli_query($mysqli,"SELECT id,pathToImage,brand,nameOfItem,price FROM items");

if(isset($_POST['id'])) {
    mysqli_query($mysqli, "update cart set
                                 amount = amount - 1
                                 where id = {$_POST['id']}; ");
    mysqli_query($mysqli, "call amount_delete({$_POST['id']})");
}
?>