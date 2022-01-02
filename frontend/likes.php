<?php
    include("../admin/ketnoi.php");
    $id_tintuc = $_GET['id'];
    $sql = "UPDATE tintuc set likes = likes + 1 where id = $id_tintuc";
    mysqli_query($ketnoi, $sql);
        // echo "<script>";
        //     echo "window.location = \"index.php?id=\"+$id_tintuc;";
        //      echo "</script>";
    $sql1 = "SELECT likes from tintuc where id = $id_tintuc";
    $ketqua = mysqli_query($ketnoi, $sql1);
    $row = mysqli_fetch_array($ketqua);

    echo $row[0];
?>

