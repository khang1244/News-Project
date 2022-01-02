<?php
    include('ketnoi.php');
    $ten = $_POST['ten'];
    $ghichu = $_POST['ghichu'];

    $sql = "INSERT INTO loaitin(tenloai, ghichu) values('$ten','$ghichu')";
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