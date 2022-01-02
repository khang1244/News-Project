<?php
    include('ketnoi.php');
    $hinh = $_POST['hinh'];
    $tieude = $_POST['tieude'];
    $ngayday = date("Y-m-d");
    $tacgia = $_POST['tacgia'];
    $noidung = $_POST['noidung'];
    $loaitin = $_POST['loaitin'];

    $sql = "INSERT INTO tintuc(hinh, tieude, ngaydang, tacgia, noidung, loaitin)";
    $sql.="values('$hinh','$tieude','$ngayday','$tacgia','$noidung', $loaitin)";
    $ketqua = mysqli_query($ketnoi,$sql);
    echo "<script>";
            if($ketqua){
                echo "alert(\"Thêm thành công\");";
            }else{
                echo "alert(\"Thêm không thành công\");";
            }
            echo "window.location = \"tintuc.php\";";
    echo "</script>";
    ?>