<?php

include("../assets/includes/auth1.php");

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $arr = explode(" ",$title);
    $url = implode("-",$arr);
    $status = 1;
    $query = mysqli_query($kon, "UPDATE post SET title='$title', description='$description', url='$url', Is_Active='$status' WHERE id='$id'");
    if($query) {
        $msg = "Post successfully updated";
    } else {
        $error = "Something went wrong. Please try again.";
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

        <!-- Bootstrap 5.0.0 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script src="../assets/js/tiny-editor.js"></script>
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo.png"/>
        <link rel="apple-touch-icon" href="../assets/img/logo.png">
        <title>CSM Training & Consulting | Edit Post</title>
    </head>
    <body>
        <!-- Nav Bar -->
        <?php include("../assets/includes/header-admin.php"); ?>
        
        <!-- Side Bar -->
        <?php include("../assets/includes/sidebar-admin.php"); ?>
        
        <!-- Post -->
        <section class="container-fluid">
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 kanan">
                <div class="container-fluid mb-5 pt-5">
                    <div class="row">
                        <div class="col">
                            <h2>Edit Post</h2>
                        </div>
                    </div>
                    <hr>
                    <!-- Alert -->
                    <?php if($msg){ ?>
                        <div class="alert alert-success" role="alert"><strong>Well done!</strong> <?php echo htmlentities($msg);?></div>
                    <?php } ?>
                    <?php if($error){ ?>
                        <div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
                    <?php } ?>
                    
                    <?php
                        $id = intval($_GET['id']);
                        $query = mysqli_query($kon,"SELECT post.id as id, post.image, post.title as title, post.description FROM post WHERE post.id='$id' AND post.Is_Active=1");
                        while($rows = mysqli_fetch_array($query)) {
                    ?>
                    
                    <div class="row">
                        <div class="col-md-12 col-md-offset-1">
                            <div class="p-6">
                                <div class="">
                                    <form name="addpost" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                        <input type="hidden" name="id" value="<?php echo intval($_GET['id']);?>">
                                        <div class="form-group mb-3">
                                            <label for="Writer">Writer</label>
                                            <input type="text" class="form-control" name="admin" value="<?= $row['name']?>" placeholder="Enter Admin Name" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Post Title">Post Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter title" value="<?= $rows['title']?>" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Post Details">Post Details</label>
                                            <textarea id="editor" name="description" required><?= $rows['description']?></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Save and Post</button>
                                            <a type="button" class="btn btn-danger waves-effect waves-light" href="post">Discard</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php } ?>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php include("../assets/includes/footer-admin.php"); ?>
    
        <!-- Bootstrap 5.0.0 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>