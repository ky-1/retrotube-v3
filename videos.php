<!DOCTYPE html>
<?php include 'global.php';?>
<?php include 'bancheck.php';?>
<html dark-theme='light'>
<head>
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/upload.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/videos.css">
</head>
<body>
    <?php include("header_video.php");?>
    <strong><h2>Videos</h2></strong>
    <strong><h3>Recently Uploaded</h3></strong>
    <div class="vidpage-vidlist">
    <?php
    $statement = $mysqli->prepare("SELECT * FROM videos ORDER BY date DESC LIMIT 6");
    //$statement->bind_param("s", $_POST['fr']); i have no idea what this is but we don't need it
    $statement->execute();
    $result = $statement->get_result();
    if($result->num_rows !== 0){
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="vidpage-video col-generic">
                        <div class="video-thumbnail">
                            <a href="watch.php?v=' . $row['vid'] . '">
                                <img width="120px" height="72" src="content/thumb/'.$row['vid'].'.jpg" />
                            </a>
                        </div>
                        <div class="vidpage-video-info">
                            <div class="video-title"><a href="watch.php?v='.$row['vid'].'">'.$row['videotitle'].'</a></div>
                            <div class="video-author"><a href="profile.php?user='.$row['author'].'">'.$row['author'].'</a></div>
                        </div>
                    </div>';
        }
    }
    else{
        echo "It seems there are no videos here. Why don't you upload one?";
    }
    $statement->close();
    ?>
    </div>
    <br>
    <strong><h3>Most Viewed</h3></strong>
    <div class="vidpage-vidlist">
    <?php
    $statement = $mysqli->prepare("SELECT * FROM videos ORDER BY views DESC LIMIT 6");
    //$statement->bind_param("s", $_POST['fr']); i have no idea what this is but we don't need it
    $statement->execute();
    $result = $statement->get_result();
    if($result->num_rows !== 0){
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="vidpage-video col-generic">
                        <div class="video-thumbnail">
                            <a href="watch.php?v=' . $row['vid'] . '">
								<img width="120px" height="72" src="content/thumb/'.$row['vid'].'.jpg" />
                            </a>
                        </div>
                        <div class="vidpage-video-info">
                            <div class="video-title"><a href="watch.php?v='.$row['vid'].'">'.$row['videotitle'].'</a></div>
                            <div class="video-author"><a href="profile.php?user='.$row['author'].'">'.$row['author'].'</a></div>
                        </div>
                    </div>';
        }
    }
    else{
        echo "It seems there are no videos here. Why don't you upload one?";
    }
    $statement->close();
    ?>
    </div>
    <br>
    <strong><h3>Most Liked</h3></strong>
    <div class="vidpage-vidlist">
    <?php
    $statement = $mysqli->prepare("SELECT * FROM videos ORDER BY likes DESC LIMIT 6");
    //$statement->bind_param("s", $_POST['fr']); i have no idea what this is but we don't need it
    $statement->execute();
    $result = $statement->get_result();
    if($result->num_rows !== 0){
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="vidpage-video col-generic">
                        <div class="video-thumbnail">
                            <a href="watch.php?v=' . $row['vid'] . '">
                                <img width="120px" height="72" src="content/thumb/'.$row['vid'].'.jpg" />
                            </a>
                        </div>
                        <div class="vidpage-video-info">
                            <div class="video-title"><a href="watch.php?v='.$row['vid'].'">'.$row['videotitle'].'</a></div>
                            <div class="video-author"><a href="profile.php?user='.$row['author'].'">'.$row['author'].'</a></div>
                        </div>
                    </div>';
        }
    }
    else{
        echo "It seems there are no videos here. Why don't you upload one?";
    }
    $statement->close();
    ?>
    <hr>
	<?php include("footer.php") ?>
</body>
</html>
