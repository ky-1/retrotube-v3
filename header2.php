<style>
    .utility {
    position: absolute;
    top: 0;
    right: 0;
}
.search {
    /* position: absolute;
    bottom: 0;
    right: 0; */
    float: right;
    padding-right: 5px;
    margin-top: -29px;
}
.header {
    position: relative;
}
.navbutton {
    padding: 5px;
    border: 1px solid gray;
    color: #000;
    text-decoration: none;
    border-radius: 5px;
    width: 10px;
    font-weight: bold;
    background: #fcfff4;
    background: linear-gradient(#FCFCFC, #DBDBDB);}
.navbutton:active {
    background: #b3bead;
    background: linear-gradient(#DBDBDB, #FCFCFC);
}
.uploadbutton {
    background: #fff9c1;
background: -moz-linear-gradient(top,  #fff9c1 0%, #fff9c0 4%, #fff2a2 21%, #fff2a0 27%, #ffed8d 34%, #ffed8b 40%, #ffe877 48%, #ffe876 52%, #fee568 58%, #fee566 62%, #fee152 70%, #fede43 79%, #fedb36 83%, #fedb32 89%, #fed81d 97%, #fcd519 98%, #f3ca0b 100%);
background: -webkit-linear-gradient(top,  #fff9c1 0%,#fff9c0 4%,#fff2a2 21%,#fff2a0 27%,#ffed8d 34%,#ffed8b 40%,#ffe877 48%,#ffe876 52%,#fee568 58%,#fee566 62%,#fee152 70%,#fede43 79%,#fedb36 83%,#fedb32 89%,#fed81d 97%,#fcd519 98%,#f3ca0b 100%);
background: linear-gradient(to bottom,  #fff9c1 0%,#fff9c0 4%,#fff2a2 21%,#fff2a0 27%,#ffed8d 34%,#ffed8b 40%,#ffe877 48%,#ffe876 52%,#fee568 58%,#fee566 62%,#fee152 70%,#fede43 79%,#fedb36 83%,#fedb32 89%,#fed81d 97%,#fcd519 98%,#f3ca0b 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff9c1', endColorstr='#f3ca0b',GradientType=0 ); 
float: right; margin: 0; font-size: 10px; border-radius:2px; padding: 5px;padding-top:3px;padding-bottom:3px;margin-top:-1px;color: #994800;text-decoration: none;border: 1px solid #fde367;
/* border: 1px solid #fde367; */
}
.bar {
    height: 35px;
    border: 1px solid #999;
    background: #f2f2f2;
background: -moz-linear-gradient(top,  #f2f2f2 0%, #efefef 11%, #efefef 21%, #ececec 24%, #eaeaea 35%, #eaeaea 45%, #e6e6e6 51%, #e4e4e4 76%, #e0e0e0 82%, #e0e0e0 94%, #dddddd 97%, #dddddd 100%);
background: -webkit-linear-gradient(top,  #f2f2f2 0%,#efefef 11%,#efefef 21%,#ececec 24%,#eaeaea 35%,#eaeaea 45%,#e6e6e6 51%,#e4e4e4 76%,#e0e0e0 82%,#e0e0e0 94%,#dddddd 97%,#dddddd 100%);
background: linear-gradient(to bottom,  #f2f2f2 0%,#efefef 11%,#efefef 21%,#ececec 24%,#eaeaea 35%,#eaeaea 45%,#e6e6e6 51%,#e4e4e4 76%,#e0e0e0 82%,#e0e0e0 94%,#dddddd 97%,#dddddd 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f2f2', endColorstr='#dddddd',GradientType=0 );
}
.baritem {
    padding: 0 9px 0;
    float: left;
    vertical-align:middle;
    border-right: 1px solid #999;
    border-left: 1px solid #fff;
    /* margin-top: 10px !important; */
    text-decoration: none;
    text-align: center;
    height: 35px;
    font-weight: bold;
    font-size: 13px;
}
.baritemtext {
    margin-top: 10px !important;
    float: left;
    color: #03c;
}
.header2009 {
    width: 800px;
    position: relative;
    margin-top: 3px;
}
    </style>
<div class="header2009">
    <a href="/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Logo_of_YouTube_%282006-2011%29.svg/2560px-Logo_of_YouTube_%282006-2011%29.svg.png" width="133.5px" style="padding:5px;padding-left:0px;"></a>
    <br>
    <a href="/upload" style="font-size: 15px; font-weight: bolder;margin-top: -30px;" class="yt-button dark uploadbutton">Upload</a>
    <div class="bar">
        <a class="baritem" href="."><span class="baritemtext">Home</span></a>
        <a class="baritem" href="videos.php"><span class="baritemtext">Videos</span></a>
        <a class="baritem" href="channels.php"><span class="baritemtext">Channels</span></a>
        <a class="baritem" href="#"><span class="baritemtext">Community</span></a>
</div>
    <?php
if(!isset($_SESSION['profileuser3'])) {
    echo '<div class="utility"><a href="aregister.php">Register</a> | <a href="alogin.php">Login</a> | <a href="help.php">Help</a></div>';
  } else {
    $statement = $mysqli->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
            $statement->bind_param("s", $_SESSION['profileuser3']);
            $statement->execute();
            $result = $statement->get_result();
            if($result->num_rows === 0) echo('Uh oh, something is wrong with your session:<br> The logged in user couldn&#39t be found.');
            while($row = $result->fetch_assoc()) {
                echo '<div class="utility"><b>Hi, <a href="/user/'.$_SESSION["profileuser3"].'">'.$_SESSION["profileuser3"].'</a>!</b> | <a href="account.php">My Account</a> | <a href="help.php">Help</a> | <a href="alogout.php">Log Out</a><!-- | <a href="#" class="adminlink">Admin</a>--></div>';
            }
            $statement->close();
  }
  ?>
    <form action="results.php" class="search"><input type="text" name="q" placeholder="Search for videos">
    <select class="search-type" name="search_type" fdprocessedid="72jizy">
						<option value="search_videos">Videos</option>
						<option value="search_users">Channels</option>
					</select>
    <input type="submit" value="Search"></form>
</div>