<?php
    include("../admin/ketnoi.php");

    $sql = "SELECT * FROM loaitin";
    $ketqua = mysqli_query($ketnoi, $sql);
?>

<div class="resent">
     <h3>LOẠI TIN</h3>
        <ul class="architecture">

        <?php
            while($row=mysqli_fetch_array($ketqua)){
                
                echo "<li><a href=\"#\"><i class=\"fa fa-arrow-right\" aria-hidden=\"true\"></i>".$row[1]."(".countLoaiTin($ketnoi, $row[0]).")</a></li>";
            }
        ?>
        </ul>            
</div>