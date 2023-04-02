<!DOCTYPE html>
<?php include 'global.php';?>
<head>
    <link rel="icon" type="image/png" href="./favicon.ico">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
    <?php include("header.php"); ?>
    <div class="container-flex">
        <div class="col-2-3">
            <h3>Featured Videos</h3>
            <div class="featured-videos container-flex">
                <?php
                    $statement = $mysqli->prepare("SELECT * FROM videos WHERE featured = TRUE LIMIT 4"); //sexy variable names
                    //$statement->bind_param("s", $_POST['fr']);
                    $statement->execute();
                    $result = $statement->get_result();
                    $howmany = 0;
                    if($result->num_rows !== 0){
                        while($row = $result->fetch_assoc()) {
                            echo '
                            <div class="featured-video col-generic">
                                <div class="video-thumbnail">
                                    <a href="watch.php?v=' . $row['vid'] . '">
                                            <img src="content/thumb/' . $row['thumb'] . '">
                                    </a>
                                </div>
                                <div class="featured-video-info">
                                    <div class="video-title"><a href="watch.php?v='.$row['vid'].'">'.$row['videotitle'].'</a></div>
                                    <div class="video-author"><a href="profile.php?user='.$row['author'].'">'.$row['author'].'</a></div>
                                </div>
                            </div>';
                            $howmany++;
                        }
                        if($howmany !== 4){
                            for($i = 4-$howmany; $i > 3; $i++){
                                echo("the j");
                            }
                        }
                    }
                    else{
                        echo "It seems there are no videos here. Perhaps one of your videos could be here?";
                    }
                ?>
            </div>
            <hr>
            <h3>Recent Videos</h3>
            <div class="videos">
            <?php
                if($_POST !== null) {
                    if(isset($_POST['button2'])) {
                        $sql = "SELECT password FROM `users` WHERE username='" . htmlspecialchars($_POST['name']) .  "'";
                        $result = $mysqli->query($sql);
                        while($row = $result->fetch_assoc()) {
                            $hash = $row['password'];
                            if(password_verify($_POST['password'], $hash)){
                                // session_start();
                                $_SESSION["profileuser3"] = htmlspecialchars($_POST['name']);
                                echo 'Logged in.';
                                echo '<script>window.location.href = "index.php";</script>';
                            } else {
                                echo 'Invalid password/username';
                            }
                        }
                    } 
                }
                $statement = $mysqli->prepare("SELECT * FROM videos ORDER BY date DESC LIMIT 5");
                //$statement->bind_param("s", $_POST['fr']); i have no idea what this is but we don't need it
                $statement->execute();
                $result = $statement->get_result();
                if($result->num_rows !== 0){
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="video container-flex">
                                <div class="col-1-3 video-thumbnail">
                                <a href="watch.php?v='.$row['vid'].'">
                                <img src="content/thumb/' . $row['thumb'] . '">
                                </a>
                                </div>
                                <div class="col-1-3 video-title"><a href="watch.php?v='.$row['vid'].'">'.$row['videotitle'].'</a></div>
                                <div class="col-1-3 video-info">
                                    <div>From: <a href="profile.php?user='.$row['author'].'">'.$row['author'].'</a></div>
                                    <div>Views: <span>'.$row['views'].'</span></div>
                                    <div>Likes: <span>'.$row['likes'].'</span></div>
                                </div>
                            </div>
                            <hr>';
                    }
                }
                else{
                    echo "It seems there are no videos here. Why don't you upload one?";
                }
                $statement->close();
            ?>
            </div>
        </div>
        <div class="col-1-3">
            <?php
            if(!$loggedIn) {
                echo '<div class="card login">
                <div class="card-header">
                    Member Login
                </div>
                <div class="card-content">
                    <form method="post" action="">
                        <div class="input-group">
                            <label>Username: </label>
                            <input type="text" name="name">
                        </div> 
                        <div class="input-group">
                            <label>Password: </label>
                            <input type="password" name="password">
                        </div>
                        <div class="input-group">
                            <div></div>
                            <div><button type="submit" class="btn" name="button2" class="button">Login</button></div>
                        </div>
                    </form>
                </div>
            </div>';
            } else {
            }
            ?>
            <div class="card message">
                <div class="card-header">Whats New</div>
                YuoTueb has returned with an improved source code. The uploader now creates thumbnails as images and compresses videos. 
            </div>
        </div>
        </div>
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>