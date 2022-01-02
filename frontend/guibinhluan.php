<?php
    include("../admin/ketnoi.php");
    $id_tintuc = $_POST['id'];
    $hoten = $_POST['hoten'];
    $ngaybinhluan = date("Y-m-d");
    $noidung = $_POST['noidung'];
    $email = $_POST['email'];

    $sql = "INSERT INTO  binhluan(hoten, ngaybinhluan, noidung, id_tintuc, email)";
    $sql.= "values('$hoten', '$ngaybinhluan', '$noidung', $id_tintuc, '$email')";

    $ketqua = mysqli_query($ketnoi, $sql);
    echo "<script>";
    if($ketqua){
        echo "alert(\"Thêm thành công\");";
    }else{
        echo "alert(\"Thêm không thành công\");";
    }
    echo "window.location = \"index.php\";";
echo "</script>";

?>