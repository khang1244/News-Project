<?php
    include("../admin/ketnoi.php");

    $sql = "SELECT * FROM tintuc ORDER BY id DESC limit 3";
    $ketqua = mysqli_query($ketnoi, $sql);
?>

<div class="resent">
            <h3>TIN MỚI NHẤT</h3>
            <?php
                while($row = mysqli_fetch_array($ketqua)){
                    echo "<div class=\"media\">";
                    echo "<div class=\"media-left\">";
                    echo "<a href=\"index.php?id=".$row[0]."\">";   
                    echo "<img style=\"width:75px; height:65px\" class=\"media-object\" src=\"../img/".$row[1]."\" alt=\"\">";
                    echo "</a>";
                    echo "</div>";
                    echo "<div class=\"media-body\">";
                    echo "<a href=\"\"index.php?id=".$row[0]."\">".$row[2]."</a>";
                    echo "<h6>".$row[3]."</h6>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
                        
</div>