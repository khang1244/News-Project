<?php
    include("../admin/ketnoi.php");
    $id_tintuc = $_GET['id'];
    $sql = "UPDATE tintuc set dislikes = dislikes + 1 where id = $id_tintuc";
    mysqli_query($ketnoi, $sql);
    echo "<script>";
        echo "window.location = \"index.php?id=\"+$id_tintuc;";
         echo "</script>";

?>

