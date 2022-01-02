<?php
    function countLoaiTin($ketnoi, $id){
        $sql1 = "SELECT COUNT(id) FROM tintuc where loaitin = $id";
        $ketqua1 = mysqli_query($ketnoi, $sql1);
        $count = mysqli_fetch_array($ketqua1);
        return $count[0];

        }
        
        function addView($ketnoi, $id){
            $sql = "UPDATE tintuc set view=view+1 where id=$id";
            mysqli_query ($ketnoi, $sql);
        }

?>