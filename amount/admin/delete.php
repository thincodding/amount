<?php

session_start();
$id = base64_decode($_GET['id']);

if(mysqli_query($db_con, "DELETE FROM `tbl_amount` WHERE `id` = '$id'")){

    header("Location:index.php?page=all-people&delete");

}



?>