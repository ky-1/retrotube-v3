<!DOCTYPE html>
<?php include 'global.php';?>
<?php include 'bancheck.php';?>
<head>
    <link rel="icon" type="image/png" href="./favicon.ico">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
    <?php include("header_home.php"); ?>
    <?php 
     error_reporting(~E_ALL & ~E_NOTICE);
        if(!is_null($_GET['err'])) {
            $err = $_GET['err'];
        echo '<div style="display: none;" class="errmsg">
                <center>'.$err.'</center>
            </div>';
         }   
         if(isset($_GET['err'])) {
            $err = $_GET['err'];
   echo '<div class="errmsg">
                <center>'.$err.'</center>
            </div>'; 
 } ?>
    <div class="container-flex">
        <div class="col-2-3">
        <!-- <div class="contentBox" style="margin-bottom: 15px;">
			<table cellpadding="6" cellspacing="0" border="0">
				<tbody><tr valign="top">
					<td width="33%">
						<h1><a href="/web/20060504082351/http://www.youtube.com/browse">Watch</a></h1>
						Instantly find and watch 1000's of fast streaming videos.
					</td>
					<td width="33%">
						<h1><a href="my_videos_upload">Upload</a></h1>
						Quickly upload and tag videos in almost any video format.
					</td>
					<td width="34%">
						<h1><a href="my_friends_invite">Share</a></h1>
						Easily share your videos with family, friends, or co-workers.
					</td>
				</tr>
			</tbody></table>
		</div> -->
            <h4 style="padding:0;margin:0;margin-bottom:2px;color:#4A4A4A;">Promoted Videos</h4>
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
                            <div class="trollsteranim4">
                                <div class="video-thumbnail">
                                    <a href="watch.php?v=' . $row['vid'] . '">
                                            <img src="content/thumb/' . $row['thumb'] . '">
                                    </a>
                                </div>
                                <div class="featured-video-info">
                                    <div class="video-title"><a href="watch.php?v='.$row['vid'].'">'.$row['videotitle'].'</a></div>
                                    <div class="video-author"><a href="profile.php?user='.$row['author'].'">'.$row['author'].'</a></div>
                                </div>
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
            <h3>Featured Videos</h3>
            <div id="hpFeaturedAndSmallTabs">
		<div id="hpEditorContainer">
				<div id="hpYTChannelImg"><a href="profile.php?user=kylarz"><img src="/pfp/1" alt="editor image" width="30" height="30" border="0"></a></div>
			<div id="hpEditorInfo">
				<div id="hpEditorHead">Featured Videos selected by:
				<b><a href="profile.php?user=kylarz">kylarz</a></b></div>
			</div>
		</div>
	</div>
            <div class="videos">
            <?php
                if($_POST !== null) {
                    if(isset($_POST['button2'])) {
                        $sql = "SELECT password, deactivated FROM `users` WHERE username='" . htmlspecialchars($_POST['name']) .  "'";
                        $result = $mysqli->query($sql);
                        while($row = $result->fetch_assoc()) {
                            $hash = $row['password'];
                            if(password_verify($_POST['password'], $hash)){
                                if ($row['deactivated'] == 1) {
                                    echo('<script>
                         window.location.href = "index.php?err=This account is permanently deactivated. You can no longer login.";
                         </script>');
                         die();
                                }
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
                        if($row['duration'] > 3600) {
                            $lengthlist = floor($row['duration'] / 3600) . ":" . gmdate("i:s", $row['duration'] % 3600);
                          } else { 
                            $lengthlist = gmdate("i:s", $row['duration'] % 3600) ;
                          };
                        echo '
                            <div class="video container-flex">
                                <div class="col-1-3 video-thumbnail">
                                <a href="watch.php?v='.$row['vid'].'">
                                <img src="content/thumb/' . $row['thumb'] . '">
                                </a>
                                </div>
                                <div class="col-1-3 video-title"><a href="watch.php?v='.$row['vid'].'">'.$row['videotitle'].'</a><br><span style="font-size: 12px;">'.$row['description'].'</span></div>
                                <div class="col-1-3 video-info">
                                    <div>From: <a href="profile.php?user='.$row['author'].'">'.$row['author'].'</a></div>
                                    <div>Views: <span>'.$row['views'].'</span></div>
                                    <div>Likes: <span>'.$row['likes'].'</span></div>
                                    <div>Time: <span><b>'.$lengthlist.'</b></span></div>
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
        <!--<?php
            if(!$loggedIn) {
        echo('<div style="font-size: 12px; border: 1px solid rgb(153, 153, 153); padding: 5px;">
	<div style="border: 1px solid rgb(204, 204, 204); padding: 4px; background: #eee; text-align: center;">
			<strong>Want to customize this homepage?
</strong><br>

				<a href="aregister.php"><strong>Sign up for a Revid Account</strong></a>

			<div style="border-bottom: 1px dotted #999; margin-bottom: 5px; margin-top: 5px;"></div>
			<span class="grayText smallText">
			<a href="alogin.php">Sign in with your Revid Account!</a>
			</span>

		<a href="#" onclick="window.open(\'/t/help_gaia\',\'login_help\',\'width=580,height=480,resizable=yes,scrollbars=yes,status=0\').focus();" rel="nofollow"><img src="https://web.archive.org/web/20090301060115im_/http://s.ytimg.com/yt/img/pixel-vfl73.gif" border="0" alt="" style="background: transparent url(https://web.archive.org/web/20090301060115im_/http://s.ytimg.com/yt/img/help-vfl69806.png) no-repeat scroll 0 0; width: 16px; height: 16px;vertical-align: middle;"></a>
	</div>  		</div>');}?>-->
        <?php
            if($loggedIn) {
                $rows = getSubscribers($_SESSION['profileuser3'], $mysqli);
                $statement = $mysqli->prepare("SELECT `date` FROM `users` WHERE `username` = ? LIMIT 1");
                $statement->bind_param("s", $_SESSION['profileuser3']);
                $statement->execute();
                $result = $statement->get_result();
                while($row = $result->fetch_assoc()) {
                $joined = time_elapsed_string($row['date']);
                }
                $statement = $mysqli->prepare("SELECT SUM(views) AS total FROM videos WHERE author = ?");
                $statement->bind_param("s", $_SESSION['profileuser3']);
                $statement->execute();
                $result = $statement->get_result();
                while($row = $result->fetch_assoc()) {
                $totalviews = $row["total"];
                }
                echo '<div class="card login">
                <div class="card-header">
                    Welcome, '.$_SESSION['profileuser3'].'!
                </div>
                <div class="card-content">
                You have '.$rows.' subscribers!
                <br>You joined '.$joined.'.<br>
                You have '.$totalviews.' views!
                </div>
                </div>';
            }?>
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
                <div class="card-header">What's New</div>
                The site has been rebranded (again, sorry). Additionally, we have mostly reverted the 2006 update. Also:<br><br>+ More header improvements<br>+ Added SubRocks 2009 player (yes, not accurate but it's all we got)<br>+ <b>Added Inbox (access by clicking the number next to the mail icon on the header)</b><br>+ Video responses<br>That's it!
            </div> 
            <!-- <div class="card login cardwn">
                <div class="card-header whatsnew">
                    <img src="http://web.archive.org/web/20060502232205im_/http://www.youtube.com/img/new_features.gif">
                </div>
                <div class="card-content">
                    <a href="#" class="newstitle">Redesigned UI</a><br>
                The site is now going to be more 2006 themed. More improvements will come soon, probably? Oh, we're adding a new player.
                </div>
                </div> -->
            <a href="https://discord.gg/rajbccdvmu"><img src="discordbanner.png"><a>
            <!-- <iframe width="300" height="300" style="border:none" src="ugc.html" name="kupbord"></iframe> -->
        </div>
        </div>
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>