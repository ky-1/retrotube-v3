<!DOCTYPE html>
<?php include '../global.php';?>
<?php include '../bancheck.php';?>
<html dark-theme='light'>
<head>
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <link rel="stylesheet" type="text/css" href="../css/upload.css">
    <link rel="stylesheet" type="text/css" href="../css/inbox.css">
</head>
<body>
    <?php include("../header_community.php");?>
    <strong><h2>Compose</h2></strong>
    <hr>
            <?php
    if(!isset($_SESSION['profileuser3'])) {
        echo('<script>
             window.location.href = "index.php";
             </script>');
    }
   if (isset($_POST['submit'])){
//     if(empty($_POST['fileToUpload'])) {
//         error_reporting(E_ALL);
//  ini_set('display_errors', '1');
//         echo('<script>
//         window.location.href = "index.php?err=No video file.";
//         </script>');
//     }
    if(empty($_POST['reciever'])) {
        echo('<script>
        window.location.href = "index.php?err=No reciever.";
        </script>');
    }
    if(empty($_POST['content'])) {
        echo('<script>
        window.location.href = "index.php?err=No content.";
        </script>');
    }
    if(empty($_POST['subject'])) {
        echo('<script>
        window.location.href = "index.php?err=No subject.";
        </script>');
    }
    // if (strlen($_POST['subject']) > 21) {
    //     echo('<script>
    //     window.location.href = "index.php?err=subject";
    //     </script>');
    //     exit();
    // }
       if(!isset($_SESSION['profileuser3'])) {
        echo '<script>
        window.location.href = "../alogin.php";
        </script>';
       }
               $statement = $mysqli->prepare("INSERT INTO inbox (sender, reciever, subject, content, date) VALUES (?, ?, ?, ?, now())");
               $statement->bind_param("ssss", $user, $reciever, $subject, $content);               
               $user = $_SESSION['profileuser3'];
               $reciever = $_POST['reciever'];
               $subject = $_POST['subject'];
               $content = str_replace(PHP_EOL, "<br>", htmlspecialchars($_POST['content']));
               $statement->execute();
               $statement->close();
               echo('<script>
             window.location.href = "index.php";
             </script>');
       }
   ?>
   <div class="container-flex">
        <div class="col-2-3">
            <div class="card blue">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <label for="reciever">To: </label>
                        <input type="text" name="reciever" id="reciever" required>
                    </div>
                    <div class="input-group">
                        <label for="subject">Subject: </label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="input-group">
                        <label for="content">Content: </label>
                        <textarea style="background-color: var(--inputlol);" name="content" rows="4" cols="50" required="required"></textarea>
                    </div>
                    <div class="input-group">
                        <div></div>
                        <div><input type="submit" value="Send!" name="submit"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-1-3">
            <div class="card message">
                <div class="card-header">Welcome to Messages (Beta)</div>
  This is a beta feature, so there may be bugs. Report any to real#6606 on Discord. Or to kylarz via inbox (if it's working).
                <br>Thanks.
            </div>
        </div>
    </div>
                    <?php include("../footer.php") ?>
</body>
</html>