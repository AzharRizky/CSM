<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("assets/includes/function.php");

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
        <meta property="og:title" content="CSM - We Deliver Value Added"/>
        <meta property="og:description"content="We Deliver Value Added"/>
        <meta property="og:image" content="../assets/img/logo.png"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content=""/>
        
        <!-- Default CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
        <!-- API Font -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap 5.0.0 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="../assets/lib/owlcarousel/owl.carousel.min.css">
        <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo.png"/>
        <link rel="apple-touch-icon" href="../assets/img/logo.png">
        <title>CSM Training & Consulting | News</title>
    </head>
    <body>
        <!-- Nav Bar -->
        <?php include("assets/includes/header.php"); ?>
        
        <!-- News & Blogs -->
        <section>
            <div class="container">
                <div class="row" style="margin-top: 4%">
                <!-- Blog Entries Column -->
                    <div class="col-md-8">
        
                    <!-- Blog Post -->
                    <?php
                            if (isset($_GET['pageno'])) {
                                $pageno = $_GET['pageno'];
                            } else {
                                $pageno = 1;
                            }
                            $no_of_records_per_page = 3;
                            $offset = ($pageno-1) * $no_of_records_per_page;
                            
                            $total_pages_sql = "SELECT COUNT(*) FROM post";
                            $result = mysqli_query($kon,$total_pages_sql);
                            $total_rows = mysqli_fetch_array($result)[0];
                            $total_pages = ceil($total_rows/$no_of_records_per_page);
                            
                            $query=mysqli_query($kon,"SELECT post.id AS pid, post.title AS posttitle, post.image, LEFT(post.description, 300) AS postdetails, post.PostingDate AS postingdate, post.url AS url FROM post WHERE post.Is_Active=1 AND category='News' ORDER BY post.id DESC LIMIT $offset, $no_of_records_per_page");
                            while ($rowpost=mysqli_fetch_array($query)) {
                                $url_link = $rowpost['url'].".html";
                        ?>
        
                    <div class="card mb-4">
                        <img class="card-img-top" src="../assets/post-img/<?php echo htmlentities($rowpost['image']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo htmlentities($rowpost['posttitle']);?></h2>
                                <p class="card-text"><?php echo $rowpost['postdetails'];?>...</p>
                                <a href="<?php echo $url_link;?>" class="btn btn-primary">Read More &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                Posted on <?php echo htmlentities($rowpost['postingdate']);?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Pagination -->
                    <ul class="pagination justify-content-center mb-4">
                        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
                        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
                        </li>
                        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="page-link">Next</a>
                        </li>
                        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
                    </ul>
                </div>
                <!-- Sidebar Widgets Column -->
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
                                    <?php $query=mysqli_query($kon,"SELECT post.title AS posttitle, post.image, post.url FROM post WHERE category='Blog' AND Is_Active=1 ORDER BY post.id DESC LIMIT 8");
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
        </section>
        
        <!-- Footer -->
        <?php include("assets/includes/footer.php"); ?>
        
        <!-- Main JavaScript -->
        <script src="assets/js/main.js"></script>
    
        <!-- Bootstrap 5.0.0 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>