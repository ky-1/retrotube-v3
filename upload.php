<!DOCTYPE html>
<?php include 'global.php';?>
<?php include 'bancheck.php';?>
<head>
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/upload.css">
</head>
<body>
    <?php include("header.php");?>
    <div class="container-flex">
        <div class="col-2-3">
            <div class="card blue">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="videofile">Select video to upload: </label>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div class="input-group">
                        <label for="videotitle">Video Title: </label>
                        <input type="text" id="videotitle" name="videotitle">
                    </div>
                    <div class="input-group">
                        <label for="bio">Description: </label>
                        <textarea style="background-color: var(--inputlol);" name="bio" rows="4" cols="50" required="required"></textarea>
                    </div>
                    <div class="input-group">
                        <div></div>
                        <div><input type="submit" value="Upload" name="submit"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-1-3">
            <div class="card message">
                <div class="card-header">Uploading Rules:</div>
                <ul>
                    <li>NO GORE/NSFW (video will be deleted)</li>
                    <li>NO ILLEGAL VIDEOS (permanant ip ban off of retrotube.ml)</li>
                    <li>VIDEO METADATA IS NOT CORRUPTED (video will be deleted)</li>
                    <li>NO OFFENSIVE CONTENT (account deletion & discord ban if applicable)
                </ul>
                Thanks.
            </div>
        </div>
    </div>
    <?php
    if(!isset($_SESSION['profileuser3'])) {
        echo('<script>
             window.location.href = "index.php";
             </script>');
    }
   if (isset($_POST['submit'])){
//     if(empty($_POST['fileToUpload'])) {
//         error_reporting(E_ALL);
// ini_set('display_errors', '1');
//         echo('<script>
//         window.location.href = "index.php?err=No video file.";
//         </script>');
//     }
    if(empty($_POST['videotitle'])) {
        echo('<script>
        window.location.href = "index.php?err=No title.";
        </script>');
    }
    if(empty($_POST['bio'])) {
        echo('<script>
        window.location.href = "index.php?err=No description.";
        </script>');
    }
    if (strlen($_POST['videotitle']) > 40) {
        echo('<script>
        window.location.href = "index.php?err=Video title too long.";
        </script>');
        exit();
    }
       if(!isset($_SESSION['profileuser3'])) {
        echo '<script>
        window.location.href = "alogin.php";
        </script>';
       }
       function randstr($len, $charset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-"){
           return substr(str_shuffle($charset),0,$len);
       }
       $v_id = randstr(11);
       $target_dir = "content/tmp/";
       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       if(!is_dir($target_dir)){
           mkdir($target_dir);
       }
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
       if (file_exists($target_file)) {
           echo "
           <div class='alert-message error page-alert'>
           Video with the same filename already exists.
           </div>
           ";
           $uploadOk = 0;
       }
       if($imageFileType != "mp4" && $imageFileType != "avi") {
           echo "
           <div class='alert-message error page-alert'>
           MP4 files only.
           </div>
           ";
           $uploadOk = 0;
       }
       if ($uploadOk == 0) {
           echo "
           <div class='alert-message error page-alert'>
           Unknown error.
           </div>
           ";
       } else {
           if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
               rename("$target_file", "content/unprocessed/$v_id.mp4");
               $new_target_file = "content/unprocessed/$v_id.mp4";
               if ($_SESSION['verifieduploads'] = true) {
               exec("$ffmpeg -i ".$new_target_file." -vf scale=640x480 -c:v libx264 -b:a 128k  -c:a aac -ar 22050 content/video/$v_id.mp4");
               } else {
                exec("$ffmpeg -i ".$new_target_file." -vf scale=640x360 -c:v libx264 -b:a 72k  -c:a aac -ar 22050 content/video/$v_id.mp4");
               }
               $processed_file = "content/video/$v_id.mp4";
               unlink("content/unprocessed/$v_id.mp4");
               $target_thumb = "content/thumb/".$v_id.".jpg";
               $thumbcmd = "$ffmpeg -i $processed_file -vf \"thumbnail\" -frames:v 1 -s 120x70 $target_thumb";
               $length = round(exec("$ffprobe -v error -show_entries format=duration -of default=noprint_wrappers=1:nokey=1 ".$processed_file));
               $video = $_POST['videotitle'];
               $user = $_SESSION['profileuser3'];
             //  $v_id = randstr(11);
               $statement = $mysqli->prepare("INSERT INTO videos (videotitle, vid, description, author, filename, thumb, duration, date) VALUES (?, ?, ?, ?, ?, ?, ?, now())");
               $statement->bind_param("sssssss", $videotitle, $v_id, $description, $author, $filename, $thumb, $length);
               $videotitle = htmlspecialchars($_POST['videotitle']);
               $description = str_replace(PHP_EOL, "<br>", htmlspecialchars($_POST['bio']));
               $author = htmlspecialchars($_SESSION['profileuser3']);
               $filename = "$v_id.mp4";
               $thumb = "$v_id.jpg";
               exec($thumbcmd);
               $statement->execute();
               $statement->close();
               $webhookurl = $webhook;
               $msg = "**$user** just uploaded **$video**\nDescription: $description";
               $json_data = array ('content'=>"$msg");
               $make_json = json_encode($json_data);
               $ch = curl_init( $webhookurl );
               curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
               curl_setopt( $ch, CURLOPT_POST, 1);
               curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
               curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
               curl_setopt( $ch, CURLOPT_HEADER, 0);
               curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
               $response = curl_exec( $ch );
               echo('<script>
             window.location.href = "index.php?msg=Your video has been uploaded!";
             </script>');
           } else {
               echo "The upload failed. Error code: ";
               echo $_FILES["fileToUpload"]["error"];
           }
       }
   }
   ?>
    <hr>
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>