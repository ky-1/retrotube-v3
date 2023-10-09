<?php include("global.php");?>
<?php include 'bancheck.php';?>
<!DOCTYPE html>
<html data-theme="light">
<head>
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/watch.css">
    <?php 
            $statement = $mysqli->prepare("SELECT * FROM videos WHERE vid = ? LIMIT 1");
            $statement->bind_param("s", $_GET['v']);
            $statement->execute();
            $result = $statement->get_result();
            while($row = $result->fetch_assoc()) {
   echo ' <meta name="title" content="'.$row['videotitle'].'">

<meta name="description"
    content="'.$row['description'].'">

<meta name="keywords" content="">

<meta property="og:url" content="/watch.php?v='.$row['vid'].'">
<meta property="og:title" content="'.$row['videotitle'].'">
<meta property="og:description"
    content="'.$row['description'].'">
<meta property="og:type" content="video">
<meta property="og:image" content="/content/thumb/'.$row['vid'].'.jpg">
<meta property="og:video" content="/content/video/'.$row['vid'].'.mp4">
<meta property="og:video:width" content="1280">
<meta property="og:video:height" content="720">
<meta property="og:video:type" content="video/mp4" />
<meta name="twitter:card" value="player">
<meta name="twitter:player" value="/content/video/'.$row['vid'].'.mp4">
<meta property="twitter:player:width" content="1280">
<meta property="twitter:player:height" content="720">
<meta name="title" content="'.$row['videotitle'].'">
<title>'.$row['videotitle'].' - hyperion</title> ';
}
$statement->close();
?>
</head>
</html>
<?php
include("header_video.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<div class="topLeft">
    <?php


        $stmt = $mysqli->prepare("SELECT * FROM videos WHERE vid = ?");
        $stmt->bind_param("s", $_GET['v']);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 0) exit('No rows');
        while($row = $result->fetch_assoc()) {
            echo '
            <h2>' . $row['videotitle'] . '</h2>
            <iframe id="vid-player" style="border: 0px; overflow: hidden;" src="playersr/lolplayer.php?v=' . $_GET['v'] . '" height="360px" width="480px"></iframe> <br><br>
                <script>
                    var vid = document.getElementById(\'vid-player\').contentWindow.document.getElementById(\'video-stream\');
                    function hmsToSecondsOnly(str) {
                        var p = str.split(\':\'),
                            s = 0, m = 1;

                        while (p.length > 0) {
                            s += m * parseInt(p.pop(), 10);
                            m *= 60;
                        }

                        return s;
                    }


                    function setTimePlayer(seconds) {
                        var parsedSec = hmsToSecondsOnly(seconds);
                        document.getElementById(\'vid-player\').contentWindow.document.getElementById(\'video-stream\').currentTime = parsedSec;
                    }
                </script>';

            $videoembed = '\
            <iframe id="vid-player" style="border: 0px; overflow: hidden;" src="player/lolplayer.php?v=' . $_GET['v'] . '" height="360px" width="480px"></iframe> <br><br>
            <script>
                var vid = document.getElementById(\'vid-player\').contentWindow.document.getElementById(\'video-stream\');
                function hmsToSecondsOnly(str) {
                    var p = str.split(\':\'),
                        s = 0, m = 1;

                    while (p.length > 0) {
                        s += m * parseInt(p.pop(), 10);
                        m *= 60;
                    }

                    return s;
                }


                function setTimePlayer(seconds) {
                    var parsedSec = hmsToSecondsOnly(seconds);
                    document.getElementById(\'vid-player\').contentWindow.document.getElementById(\'video-stream\').currentTime = parsedSec;
                }
            </script>';
            $videoid = $row['vid'];
        }
        ?>

<div class="topRight" style="float: right; margin-left: 500px; margin-top: -386px;">
        <?php
            $stmt = $mysqli->prepare("SELECT * FROM videos WHERE vid = ?");
            $stmt->bind_param("s", $_GET['v']);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows === 0) exit('No rows');
            while($row = $result->fetch_assoc()) {
                $join = date("F d, Y", strtotime($row["date"]));
                $rows = getSubscribers($row['author'], $mysqli);
                $uid = idFromUser($row['author']);
                echo '<div class="card gray">
                <a href="/profile.php?user=' . $row['author'] . '"><img class="user-picture" src="/pfp/'.getUserPic($uid).'"></a><div class="videoinf"><strong><a href="/profile.php?user=' . $row['author'] . '">' . $row['author'] . '</a></strong><br><span><strong>'.$rows.'</strong> subscribers</span><br><span>'.$join.'</span><br><br><strong>' . $row['views'] . '</strong> views<br><strong>' . $row['likes'] . '</strong> likes<br><br>"' . $row['description'] . '"</div><br><a href="likevideo.php?v=NSnUIxfAwv6">Like Video</a>  
            </div>';
            }

        ?>  
        <br>
        <div class="card message">     
        <?php
            $stmt = $mysqli->prepare("SELECT * FROM videos WHERE vid = ?");
            $stmt->bind_param("s", $_GET['v']);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows === 0) exit('No rows');
            while($row = $result->fetch_assoc()) {
                echo "URL <input value=\"https://revid.pw/watch.php?v=" . $row["vid"] . "\"><br>
                Embed <input style=\"margin-right: 13px;\" value='<iframe style=\"border: 0px; overflow: hidden;\" src=\"https://revid.pw/player/embed.php?v=" . $_GET['v'] . "\" height=\"360\" width=\"480\"></iframe>'>";
                echo "<br>";
                echo "Direct URL <input value=\"https://revid.pw/content/video/" . $row["filename"] . "\">";
            }

        ?>  
    </div>
        </div>

</div>

        <?php
        if(isset($_SESSION['views'.$videoid.'']))
        $_SESSION['views'.$videoid.''] = $_SESSION['views'.$videoid.'']+1;
    else
        $_SESSION['views'.$videoid.'']=1;
        //check if the user has already viewed the video
        if ($_SESSION['views'.$videoid.''] > 1) {
        echo "";
        } else {
        mysqli_query($mysqli, "UPDATE videos SET views = views+1 WHERE vid = '" . $videoid . "'");
        $stmt->close();
        }        
        echo '<hr style="/*
    margin-top: 50px;
*/">';
            $stmt = $mysqli->prepare("SELECT * FROM videos WHERE vid = ?");
            $stmt->bind_param("s", $_GET['v']);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows === 0) exit('No rows');
            while($row = $result->fetch_assoc()) {
                
                if ($row['featured'] == '1') {
                    echo "
                <div style=\"
                    color: #000;
                    background-color: var(--card-blue-1);
                    border: 1px solid var(--card-blue-2);
                    padding: 7px 15px;
                    font-size: 12px;
                    border-radius: 7px;
                    text-align: center;
                \"><strong>This video is featured on the main page!</strong></div>
                </div>
                ";
                }
            }

        echo '<h3 style="
/*    margin-top: 32px; */
">Comments &amp; Responses</h3>';
?>


<?php

        if(isset($_POST['submit'])) {
            if(!isset($_SESSION['profileuser3'])) {
                die("Please login to comment.");
            }
            else {
                $stmt = $mysqli->prepare("INSERT INTO comments (tovideoid, author, comment, date) VALUES (?, ?, ?, now())");
                $stmt->bind_param("sss", $_GET['v'], $_SESSION['profileuser3'], $comment);
    
                $comment = str_replace(PHP_EOL, "<br>", htmlspecialchars($_POST['bio']));
    
                $stmt->execute();
                $stmt->close();
                
                echo "<h3>Comment added</h3>";
            }
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data"><br>
        Comment: <br><textarea name="bio" rows="4" cols="40" required="required"></textarea><br><br>
        <input type="submit" value="Upload" name="submit">
    </form>
    <hr>
    <?php
        $stmt = $mysqli->prepare("SELECT * FROM comments WHERE tovideoid = ?");
        $stmt->bind_param("s", $_GET['v']);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 0) echo('No comments.');
        while($row = $result->fetch_assoc()) {
            echo "<div class='videocomment'><div class='commenttitle'><a href='profile.php?user=" . $row['author'] . "'><img class='user-picture' src='/pfp/1'></a><strong><a href='profile.php?user=" . $row['author'] . "'>" . $row['author'] . "</a></strong> (" . $row['date'] . ")</div><span>" . $row['comment'] . "</span></div><br><br>";
        }
        $stmt->close();
    ?>
    <hr>
    <?php include("footer.php") ?>
</div>


</html>
    

<?php $mysqli->close();?>
