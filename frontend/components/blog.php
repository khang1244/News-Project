<?php
    include("../admin/ketnoi.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM tintuc where id = $id";
    }else{
        $sql = "SELECT * FROM tintuc ORDER BY id DESC limit 1";
    }
    include('components/ham.php');
    
    $ketqua = mysqli_query($ketnoi,$sql);
    $row = mysqli_fetch_array($ketqua);  
    addView($ketnoi,$row[0]);

    $sql_bl = "SELECT * FROM binhluan WHERE id_tintuc = $row[0] ";
    $ketqua_bl = mysqli_query($ketnoi, $sql_bl);
?>


<section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="../img/<?php echo $row[1]; ?>" alt="">
                    <div class="col-xs-1 p0">
                       <div class="blog_date">
                           <a href="#"><?php echo date('d' , strtotime($row[3])); ?></a>
                            <a href="#"><?php echo date('m' , strtotime($row[3])); ?></a>
                       </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#"><?php echo $row[2]; ?> </a>
                        <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $row[4]; ?></a>
                        <ul class="like_share">
                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><?php echo $row[7]; ?></a></li>
                            <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>3</a></li>
                            <!-- <li><a href="likes.php?id=<?php echo $row[0]; ?>"><i class="fa fa-thumbs-up"></i><?php echo $row[8]; ?></a></li> -->

                            <li><a onclick="likes(<?php  echo $row[0]; ?>)" id="likes"><i class="fa fa-thumbs-up"></i><?php echo $row[8]; ?></a></li>
                            <li><a href="dislikes.php?id=<?php echo $row[0]; ?>"><i class="fas fa-thumbs-down"></i></i><?php echo $row[9]; ?></a></li>
                        </ul>
                        <?php
                            echo $row[5];
                        ?>
                        
                        <div class="tag">
                            <h4>TAG</h4>
                            <a href="#">PAINTING</a>
                            <a href="#">CONSTRUCTION</a>
                            <a href="#">PAINTING</a>
                        </div>
                    </div>
                    <div class="client_text">
                        <img class="img-circle" src="images/testimonial-4.jpg" alt="">
                        <a class="client_name" href="#">Emran Khan</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a class="control button_all" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Construction Data Company</a>
                        <a class="control button_all" href="#">Best Construction Management <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <h3>2 Comment</h3>
                    <?php
                        while($row_bl = mysqli_fetch_array($ketqua_bl)){

                    
                    ?>

                    <div class="comment_area">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="../img/hack.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a class="media-heading" href="#"><?php echo $row_bl[1]." - ".$row_bl[5]; ?></a>
                                <h5><?php echo $row_bl[2]; ?></h5>
                                <p><?php echo $row_bl[3]; ?></p>
                                <a class="reply" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <?php
                      }
                    ?>
                    <div class="post_comment">
                        <h3>Gửi bình luận</h3>
                        <form class="comment_box" action="guibinhluan.php" method="POST">
                           <div class="col-md-6">
                               <h4>Họ tên</h4>
                               <input type="text" class="form-control input_box" id="hoten" placeholder="Họ tên...">
                           </div>
                           <div class="col-md-6">
                               <h4>Email</h4>
                               <input type="email" class="form-control input_box" name="email" placeholder="Email...">
                           </div>
                           <div class="col-md-12">
                               <h4>Nội dung bình luận</h4>
                               <textarea class="form-control input_box" name="noidung" placeholder="Bình luận..."></textarea>
                               <input type="hidde" name="id" value="<?php echo $row[0]; ?>">
                               <button type="submit">Gửi bình luận</button>
                           </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4 widget_area">
                   
                    <?php
                        include('components/tinmoi.php');
                        include('components/loaitin.php');
                        
                    ?>
                   
                    <div class="search">
                        <input type="search" name="search" class="form-control" placeholder="Search">
                    </div>
                   
                    <?php
                    include('components/tinmoi.php');
                    include('components/loaitin.php');
                    include('components/tinmoi.php');
                    
                    ?>
                </div>
            </div>
        </div>
    </section>