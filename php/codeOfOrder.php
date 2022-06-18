<?php
include '../php/connection.php';

    var_dump("123");
    mysqli_query($mysqli, "insert into orders (subtotal, note, user_id) 
                                 select sum(amount*price), '{$_POST['note']}', sessions.id
                                 from cart 
                                 inner join sessions on session_key = '{$key}'
                                 where cart.session_id = sessions.id;"
    );

?>