<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("assets/includes/function.php");

$url = $_GET['url'];
$querys = mysqli_query($kon, "SELECT post.title as title, post.admin as admin, post.image, post.description as description, post.PostingDate as postingdate, post.url as url FROM post WHERE post.url='$url' AND Is_Active=1");
$rows = mysqli_fetch_array($querys);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="CSM Training & Consulting"/>
        <meta name="author" content="Azhar Rizki Zulma"/>
        <meta name="keywords" content="CSM, Training, Consulting">
        <meta name="google-site-verification" content=""/>
        <meta property="og:title" content="<?php echo htmlentities($rows['title']);?>"/>
        <meta property="og:description"content="<?php echo htmlentities($rows['description']);?>"/>
        <meta property="og:image" content="<?php echo htmlentities($rows['image']);?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content=""/>
        
        <!-- Default CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
        <!-- API Font -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap 5.0.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="../assets/lib/owlcarousel/owl.carousel.min.css">
        <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
        
        <!-- Venobox -->
        <link rel="stylesheet" href="../assets/lib/venobox/venobox.css" type="text/css" media="screen" />
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo.png"/>
        <link rel="apple-touch-icon" href="../assets/img/logo.png">
        <title>CSM Training & Consulting | Content</title>
    </head>
    <body>
        <!-- Nav Bar -->
        <?php include("assets/includes/header.php"); ?>
        
        <!-- Content -->
        <section>
            <!-- Post -->
            <div class="pt-3 bg-white">
                <div class="container post-content">
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <?php
                            $query = mysqli_query($kon, "SELECT post.title as title, post.admin as admin, post.image, post.description as description, post.PostingDate as postingdate, post.url as url FROM post WHERE post.url='$url' AND Is_Active=1");
                            
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
        	                <div class="card">
                                <div class="img"><img src="assets/post-img/<?php echo htmlentities($row['image']);?>" alt="<?php echo htmlentities($row['title']);?>"></div>
                                <div class="content card-body">
                                    <h3 class="title text-center"><?php echo htmlentities($row['title']);?></h3>
                                    <hr>
                                    <div class="card-text mt-3"><?php 
                                    $pt = $row['description'];
                                    echo (substr($pt, 0));?>
                                    </div>
                                    <p class="text-center"><b> Posted on </b><?php echo htmlentities($row['postingdate']);?></p>
                                    <p class="text-center"><b> Posted by </b><?php echo htmlentities($row['admin']);?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <!-- Right Side -->
                        <div class="col-md-4">
                            <!-- Search Post -->
                            <div class="card mb-4">
                                <h5 class="card-header">Search Post</h5>
                                <div class="card-body">
                                    <form name="search" action="search?search=<?php echo $_GET['search'];?>" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control" placeholder="Search for..." required>
                                            <span class="input-group-btn">
                                                <button class="btn btn-secondary" type="submit">Search</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <!-- Testimonial -->
                            <div class="card my-4">
                                <h5 class="card-header">Testimonial</h5>
                                <div class="card-body">
                                <?php
                                /*
                                    $sts=1;
                                    $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
                                    while ($row=mysqli_fetch_array($query)) {
                                */
                                ?>
                                    <div class="testi">
                                        <img class="d-flex me-3 rounded-circle" src="https://news.mineversal.com/images/usericon.png" alt="Testimoni Picture">
                                        <div class="testi-body" style="text-align: justify;">
                                            <h5 class="mt-0">Dannu Pamungkas <?php /* echo htmlentities($row['name']); */ ?></h5>
                                            <p>Sangat baik dalam melakukan pelatihan <?php /* echo htmlentities($row['comment']); */ ?></p>
                                        </div>
                                    </div>
                                <?php /* } */ ?>
                                </div>
                            </div>
                            
                            <!-- Blogs Feed -->
                            <div class="card mb-4">
                                <h5 class="card-header">Blogs Feed</h5>
                                <div class="card-body">
                                    <?php $query=mysqli_query($kon,"SELECT post.title AS posttitle, post.image, post.url FROM post WHERE category='Blog' AND Is_Active=1 ORDER BY post.id DESC LIMIT 3");
                                    while ($row_post=mysqli_fetch_array($query)) { 
                                    $url_link = $row_post['url'].".html";
                                    ?>
                                    <div class="recent-single-post">
                                        <div class="feed-img">
                                            <a href="<?php echo $url_link;?>">
                                                <img class="img-feed" src="assets/post-img/<?php echo htmlentities($row_post['image']);?>" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="<?php echo $url_link;?>"><?php echo htmlentities($row_post['posttitle']);?></a></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            
                            <!-- News Feed -->
                            <div class="card mb-4">
                                <h5 class="card-header">News Feed</h5>
                                <div class="card-body">
                                    <?php $query=mysqli_query($kon,"SELECT post.title AS posttitle, post.image, post.url FROM post WHERE category='News' AND Is_Active=1 ORDER BY post.id DESC LIMIT 3");
                                    while ($row_post=mysqli_fetch_array($query)) { 
                                    $url_link = $row_post['url'].".html";
                                    ?>
                                    <div class="recent-single-post">
                                        <div class="feed-img">
                                            <a href="<?php echo $url_link;?>">
                                                <img class="img-feed" src="assets/post-img/<?php echo htmlentities($row_post['image']);?>" alt="">
                                            </a>
                                        </div>
                                        <div class="pst-content">
                                            <p><a href="<?php echo $url_link;?>"><?php echo htmlentities($row_post['posttitle']);?></a></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php include("assets/includes/footer.php"); ?>
        
        <!-- Main JavaScript -->
        <script src="assets/js/main.js"></script>

        <!-- Venobox -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
        <script src="assets/lib/venobox/venobox.js"></script>
        
        <!-- Venobox JavaScript -->
        <script src="assets/js/main-venobox.js"></script>
    </body>
</html>