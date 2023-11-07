<!DOCTYPE html>
<?php include 'global.php';?>
<html data-theme="light">
<head>
    <link rel="stylesheet" type="text/css" href="./css/global.css">
</head>
<body>
    <?php include("header.php");?>
    <div class="container-flex"> 
        <div class="col-1-2">
            <h3>Member Login</h3>
            <div class="card blue">
                <form method="post" action="alogin.php">
                    <div class="input-group">
                        <label>Username: </label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="input-group">
                        <label>Password: </label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="input-group">
                        <div></div>
                        <div><button type="submit" class="btn" name="reg_user" class="button">Login</button></div>
                    </div>
                    <a onclick="alert('Send an email to support@retrotube.ml or Send a message to one of our staff on Discord.')">Forgot your password?</a>
                    <div class="input-group">
                        <div></div>
                        <div class="red">
                            <?php
                                if(isset($_SESSION['profileuser3'])) {
                                    echo('<script>
                                         window.location.href = "index.php";
                                         </script>');
                                }
                                if(!empty($_POST)){
                                    $username = htmlspecialchars($_POST['name']);
                                    $statement = $mysqli->prepare("SELECT `password`, `is_verified`, `deactivated` FROM `users` WHERE `username` = ? LIMIT 1");
                                    $statement->bind_param("s", $username);
                                    $statement->execute();
                                    $result = $statement->get_result();
                                    if($result->num_rows !== 0){
                                    while($row = $result->fetch_assoc()){
                                            $hash = $row['password'];
                                            if(!isset($row['banned'])) {
                                            if(password_verify($_POST['password'], $hash)){
                                                if ($row['deactivated'] == 1) {
                                                    echo('<script>
                                         window.location.href = "index.php?err=This account is permanently deactivated. You can no longer login.";
                                         </script>');
                                         die();
                                                }
                                                session_start();
                                                $_SESSION["profileuser3"] = htmlspecialchars($_POST['name']);
                                                if ($row['is_verified'] == 1) {
                                                    $_SESSION['verifieduploads'] = true;
                                                } else {
                                                    $_SESSION['verifieduploads'] = false;
                                                }
                                                echo('<script>
                                         window.location.href = "index.php";
                                         </script>');
                                            }
                                            else {
                                                echo 'These credentials do not match our records.';
                                            }
                                        }
                                    }
                                    }
                                    else{
                                        echo 'These credentials do not match our records.';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-1-2">
            <h3>Thanks for making an account!</h3>
            <p>
Welcome to OldWire!
            </p>
            When you login, you can:
            <ul>
                <li>Upload</li>
                <li>Comment</li>
                <li>Subscribe</li>
            </ul>
            and more...
            <!-- <ul>
                <li>opensourcing this project</li>
            </ul> -->
        </div>
    </div>
    <hr>
    <?php include("footer.php") ?>
</body>
</html>
<?php $mysqli->close();?>