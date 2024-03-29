<!DOCTYPE html>
<?php include 'global.php';?>
<html data-theme="light">
    <head>
        <title><?php 
            $statement = $mysqli->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
            $statement->bind_param("s", $_GET['user']);
            $statement->execute();
            $result = $statement->get_result();
            while($row = $result->fetch_assoc()) {
               // $channelbackground = $row['channel_background'];
                if ($row['banned'] == '1') {
                    header("Location: index.php?err=This account has been suspended by OldWire staff<br/>Reason: ".$row['ban_reason']);
              }else{
                echo $row['username']."'s Profile - OldWire";
              }
            }
            $statement->close();
        ?></title>
        <link rel="stylesheet" type="text/css" href="./css/global.css">
        <link rel="stylesheet" type="text/css" href="./css/profile.css">
        <style>
            body {
                background: url(/background/<?php $id = idFromUser($_GET["user"]); echo getBackground($id);?>) !important;
            }
            .container-flex, header {
                background: #FFF;
            }
            html {
    --card-login-1: #666;
    --colw: #fff;
    --colg: #999;
    --colg-1: #666;
    --colbl: #000;
    --inputlol-1: #fff;
    --colg-4: #444;
}
.card.login .card-header {
    background: var(--card-login-1);
    padding: 5px;
    font-weight: bold;
    font-size: 14px;
    color: #FFF;
}
.card.login .card-content {
    padding: 10px;
    border: 1px solid var(--card-login-1);
    border-top: 0px;
    font-size: 12px;
}
.userinfo {
    background-color: #e6e6e6;
}
            </style>
    </head>
    <body>
        <?php include("header_r.php");?>
        <div class="container-flex">
            <div class="col-2-3">
                <?php
                   $rows = getSubscribers($_GET['user'], $mysqli);
                    $statement = $mysqli->prepare("SELECT `username`, `id`, `subscribers`, `is_verified`, `deactivated` FROM `users` WHERE `username` = ? LIMIT 1");
                    $statement->bind_param("s", $_GET['user']);
                    $statement->execute();
                    $result = $statement->get_result();
                    while($row = $result->fetch_assoc()) {
                        if ($row['deactivated'] == 1) {
                            echo('<script>
                 window.location.href = "index.php?err=This user has deactivated their account.";
                 </script>');
                        }
                        if ($row['is_verified'] == 1) {
                            $verified = '<a style="/*height:15px;display:inline-block;margin-top:2px !important;*/" href="help.php#verified"><img src="verified3.png" width=15px height=15px></a>';
                        } else {
                            $verified = '';
                        }
                        echo "<h3>User ".$row["username"]."</h3>
                        <img class=\"user-pic\" src=\"pfp/".getUserPic($row["id"])."\">
                        <div class=\"user-info\">
                            <div class=\"user-name\"><a href=\"profile.php?id=".$row["id"]."\">".$row["username"]."</a> ".$verified."</div>
                            <div><span class=\"black\">".$rows."</span> subscribers</div>"; $username = $row['username'];}?>
                            <?php 
                 if ($_SESSION['profileuser3'] == $_GET['user']) {
                                    echo "<div><a href='account.php'><img src='editprofile.png'></a></div></div>";
                                } else {
                            if(isset($_SESSION['profileuser3'])) {
                                if(ifSubscribed($_SESSION['profileuser3'], $_GET['user'], $mysqli) == false) {
                               echo '<div><a href="subscribe.php?user='.$_GET['user'].'"><img src="buttonsub.png"></a></div></div>';
                               } else { 
                                echo '<div><a href="unsubscribe.php?user='.$_GET['user'].'"><img src="buttonunsub.png"></a></div></div>';
                                 } 
                                } else {
echo "<div><a onclick='alert('You are not logged in.')'><img src='buttonsub.png'></a></div></div>";
                            }
                 }
                                 ?>
                                <?php
                    $statement = $mysqli->prepare("SELECT * FROM `videos` WHERE `author` = ?");
                    $statement->bind_param("s", $username);
                    $statement->execute();
                    $result = $statement->get_result();
                    echo "<hr><h3>Videos</h3>";
                    if($result->num_rows !== 0){
                    while($row = $result->fetch_assoc()) {
                        echo '
                        <div class="video container-flex">
                                <div class="col-1-3 video-thumbnail">
                                <a href="watch.php?v='.$row['vid'].'">
                                <img onerror="this.src=\'comingsoon.png\'" src="content/thumb/' . $row['thumb'] . '">
                                </a>
                                </div>
                                <div class="col-1-3 video-title"><a href="watch.php?v='.$row['vid'].'">'.$row['videotitle'].'</a></div>
                                <div class="col-1-3 video-info">
                                    <div>Views: <span>'.$row['views'].'</span></div>
                                    <div>Likes: <span>'.$row['likes'].'</span></div>
                                </div>
                            </div>
                            <hr>';
                    }
                    }
                    else{
                        echo("This user has no videos.");
                    }
                    $statement->close();
                ?>
            </div>
            <div class="col-1-3">
                <?php
                                    $statement = $mysqli->prepare("SELECT SUM(views) AS total FROM videos WHERE author = ?");
                                    $statement->bind_param("s", $_GET['user']);
                                    $statement->execute();
                                    $result = $statement->get_result();
                                    if($result->num_rows == 0) {
                                        $totalviews = 0;
                                    }
                                    while($row = $result->fetch_assoc()) {
                                    $totalviews = $row["total"];
                                    }
                                    ?>
                <?php
                $statement = $mysqli->prepare("SELECT `description`, `date` FROM `users` WHERE `username` = ? LIMIT 1");
                $statement->bind_param("s", $_GET['user']);
                $statement->execute();
                $result = $statement->get_result();
                while($row = $result->fetch_assoc()) {
                    $join = date("F d, Y", strtotime($row["date"]));
                    echo "<!--<div class='card message'>
                    <div class='card-header'>Description</div>
                    ".$row["description"]."
                    <hr>
                    &#9432; Joined ".$join."<br>&#128202;&#xFE0E; ".$totalviews." views
                    </div>-->
                    <div class='card login userinfo'>
                <div class='card-header'>
                    ".$_GET['user']."
                </div>
                <div class='card-content'>
                ".$row["description"]."
                <hr>
                &#9432; Joined ".$join."<br>&#128202;&#xFE0E; ".$totalviews." views
                </div>
                </div>";
                }
                $statement->close();
                ?>
            </div>
        </div>
        <script src="js/themes-global.js"></script>
        <?php include("footer.php"); ?>
    </body>
    <?php $mysqli->close();?>
<html>
