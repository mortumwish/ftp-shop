<?php
$mysqli = new \mysqli("localhost", "root", "qweqwe123", "ftp");
if (!isset($_SESSION)){
    session_start();
    $key = session_id();
    $esliestkey = mysqli_query($mysqli, "select * from sessions where session_key = '{$key}'");
    if (mysqli_num_rows($esliestkey) == 0)
        mysqli_query($mysqli, "insert ignore into sessions (session_key) value ('{$key}')");
}
$key = session_id();
?>