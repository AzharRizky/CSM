<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("assets/includes/function.php");

if (isset($_POST['btn-send'])) {
    if(msg($_POST) != 0){
        $_SESSION['berhasil-tambah'] = true;
    } else {
        echo mysqli_error($kon);
    }
}

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
        <title>CSM Training & Consulting | Home</title>
    </head>
    <body>
        <?php if(isset($_SESSION['berhasil-tambah'])) : ?>
        <div class="alert alert-success text-center" role="alert">Pesan Berhasil dikirim</div></div>
        <?php unset($_SESSION['berhasil-tambah']) ?>
        <?php endif ?>
        
        <!-- Nav Bar -->
        <?php include("assets/includes/header.php"); ?>
        
        <!-- Carousel -->
        <section>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/img/slide-1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Training</h5>
                            <p>Melatih dengan sepenuh hati</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/slide-2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Consulting</h5>
                            <p>Konsultasikan dengan kami</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/slide-3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Education</h5>
                            <p>Mendidik untuk menjadi yang terbaik</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/slide-4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Leadership</h5>
                            <p>Mengembangkan sifat kepemimpinan</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/img/slide-5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Service</h5>
                            <p>Memberikan layanan pelatihan dan konsultasi terbaik</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>
        
        <!-- Content -->
        <section>
            <!-- Training, Consulting, Education with icon -->
            <div class="bg-white pt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Program</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center pb-4">
                        <div class="col-lg-4">
                            <a class="program-icon" href="#"><i class="fa fa-soccer-ball-o"></i></a>
                            <div class="mt-3">
                                <h5>Training</h5>
                                <p>The Best Trainer</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a class="program-icon" href="#"><i class="fa fa-edit"></i></a>
                            <div class="mt-3">
                                <h5>Consulting</h5>
                                <p>The Number One Consultant</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a class="program-icon" href="#"><i class="fa fa-graduation-cap"></i></a>
                            <div class="mt-3">
                                <h5>Education</h5>
                                <p>Simple and Complex Education</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Simple About Us -->
            <div class="bg-light pt-3 border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>About CSM</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-md-6 text-center">
                            <img class="home-about-img" src="../assets/img/kegiatan.jpeg">
                        </div>
                        <div class="col-md-6 align-self-center" id="home-about">
                            <p><b>PT. CITRA SELARAS MANDIRI</b> adalah Consultant Management & General Consultant dengan solusi Training & Consulting, Management Information System, Education, Printing, Event Organizer & Services.</p>
                            <p>Our Program Service:</p>
                            <ul>
                                <li>Training</li>
                                <li>Consulting</li>
                                <li>Education</li>
                            </ul>
                            <p>Terpercaya dan sudah memiliki banyak client yang tersebar diseluruh Indonesia. Selain itu juga sudah melatih ribuan pegawai dan itu menjadikan CSM salah satu perusahaan training dan consulting terbaik di Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Paralax -->
            <div class="parallax">
                <div class="parallax-inner inner-padding">
                    <div class="inner-overly">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <a class="quote mt-4" href="#"><i class="fa fa-quote-right"></i></a>
                                    <div class="testi-text">
                                        <p>Pendidikan adalah pasport untuk masa depan, untuk hari esok yang dimiliki oleh mereka yang mempersiapkan hari ini.</p>
                                        <h6>Malcolm X</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Post -->
            <div class="pt-3 bg-white" id="recent-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-headline text-center">
                                <h2>RECENT POST</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <!-- Left Side -->
                        <div class="col-md-8 post">
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
                            
                            $query=mysqli_query($kon,"SELECT post.id AS pid, post.title AS posttitle, post.image, LEFT(post.description, 100) AS postdetails, post.PostingDate AS postingdate, post.url AS url FROM post WHERE post.Is_Active=1 AND category='Blog' ORDER BY post.id DESC LIMIT $offset, $no_of_records_per_page");
                            while ($rowpost=mysqli_fetch_array($query)) {
                                $url_link = $rowpost['url'].".html";
                        ?>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img class="post-img" src="assets/post-img/<?php echo htmlentities($rowpost['image']);?>" alt="Post Image">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo htmlentities($rowpost['posttitle']);?></h5>
                                            <p class="card-text"><?php echo $rowpost['postdetails'];?>.. <a href="<?php echo $url_link;?>">More!</a></p>
                                            <p class="card-text"><small class="text-muted">Posted on <?php echo htmlentities($rowpost['postingdate']);?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <ul class="pagination justify-content-center mb-4">
                                <li class="page-item"><a href="?pageno=1#recent-post"  class="page-link">First</a></li>
                                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                                    <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>#recent-post" class="page-link">Prev</a>
                                </li>
                                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                                    <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>#recent-post" class="page-link">Next</a>
                                </li>
                                <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>#recent-post" class="page-link">Last</a></li>
                            </ul>
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
                            
                            <!-- News Feed -->
                            <div class="card mb-4">
                                <h5 class="card-header">News Feed</h5>
                                <div class="card-body">
                                    <?php $query=mysqli_query($kon,"SELECT post.id, post.title AS posttitle, post.image, post.url FROM post WHERE category='News' AND Is_Active=1 ORDER BY post.id DESC LIMIT 2");
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
            
            <!-- Subscribe Us on Youtube -->
            <div class="suscribe-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                            <div class="suscribe-text text-center">
                                <h3>Subscribe our youtube channel</h3>
                                <a class="sus-btn" href="https://youtube.com/channel/UCKwhXIRvdA6ayb1y7vNjeow">Click here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Small Gallery -->
            <div class="bg-light pt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-headline text-center">
                                <h2>Gallery</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <a class="venobox" data-gall="myGallery" href="assets/img/kegiatan.jpeg"><img src="assets/img/kegiatan.jpeg" /></a>
                                <a class="venobox" data-gall="myGallery" href="assets/img/post-4.jpeg"><img src="assets/img/post-4.jpeg" /></a>
                                <a class="venobox" data-gall="myGallery" href="assets/img/post-3.jpeg"><img src="assets/img/post-3.jpeg" /></a>
                                <a class="venobox" data-gall="myGallery" href="assets/img/post-2.jpeg"><img src="assets/img/post-2.jpeg" /></a>
                                <a class="venobox" data-gall="myGallery" href="assets/img/post-1.jpeg"><img src="assets/img/post-1.jpeg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Paralax -->
            <div class="parallax">
                <div class="parallax-inner inner-padding">
                    <div class="inner-overly">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <a class="quote mt-4" href="#"><i class="fa fa-quote-right"></i></a>
                                    <div class="testi-text">
                                        <p>Pendidikan adalah pasport untuk masa depan, untuk hari esok yang dimiliki oleh mereka yang mempersiapkan hari ini.</p>
                                        <h6>Malcolm X</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Client -->
            <div class="bg-white border-top">
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-headline text-center">
                                <h2>Our Client</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <div class="m-3">
                                    <img src="assets/img/client/Chevron.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/KOMINFO.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Kementerian-Pertanian.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/BI.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/PAL-Indonesia.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Indofood.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/PaninBank.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/BCA.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Bank-BNI.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Bank-BRI.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Bank-BJB.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Bank-Bengkulu.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Utomo-Bank.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Bank-Mandiri-Syariah.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/BNI-Syariah.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Bank-BJB-Syariah.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Bank-Mandiri-Pensiun.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/DISKUK-JABAR.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/Kejaksaan-Negeri-Jakarta-Barat.png" class="card-img" alt="merk" width="50">
                                </div>
                                <div class="m-3">
                                    <img src="assets/img/client/SEAMEO.png" class="card-img" alt="merk" width="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Maps | Hubungi Kami, Nama, Email, No Telp, Subject, Pesan -->
            <div class="bg-light border-top">
                <div class="container pt-3 pb-5">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Ask Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="ask-title">Ask Us Anything.</h1>
                            <h1 class="ask-title">Anytime.</h1>
                        </div>
            
                        <div class="col-md-6">
                            <div class="form contact-form">
                                <form action="" method="post">
                                    <div class="row mb-4">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Phone Number" name="telp" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <textarea type="text" class="form-control tell-us-form" placeholder="Tell us more" name="msg" required></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" style="width: 7rem;" class="btn btn-danger" name="btn-send">Send</button>
                                    </div>
                                </form>
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