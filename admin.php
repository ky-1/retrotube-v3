<!DOCTYPE html>
<?php include 'global.php';?>
<head>
	<link rel="stylesheet" type="text/css" href="./css/global.css">
</head>
<body>
	<?php
	include("header.php");
	?>
    <?php
                    $statement = $mysqli->prepare("SELECT * FROM users WHERE username = ? ");
                    $statement->bind_param("s", $_SESSION['profileuser3']);
                    $statement->execute();
                    $result = $statement->get_result();
                    if($result->num_rows !== 0){
                        while($row = $result->fetch_assoc()) {
                        if ($row["is_admin"] !== 1) {
                          echo('<script>
      window.location.href = "index.php?msg=You are not allowed to view that page.";
      </script>');
                        }  
                        }
                    }
                    else{
                        echo "";
                    }
                ?>
	<h2>Admin</h2>
    <?php
       $sql = "SELECT COUNT(*) FROM users";
       $result = mysqli_query($mysqli, $sql);
       $usercount = mysqli_fetch_assoc($result)['COUNT(*)'];
       $sql2 = "SELECT COUNT(*) FROM videos";
       $result2 = mysqli_query($mysqli, $sql2);
       $videocount = mysqli_fetch_assoc($result2)['COUNT(*)'];
       $sql3 = "SELECT COUNT(*) FROM comments";
       $result3 = mysqli_query($mysqli, $sql3);
       $commentcount = mysqli_fetch_assoc($result3)['COUNT(*)'];
       $phpver = phpversion();
       echo "Users: $usercount <br> Videos: $videocount <br> Comments: $commentcount <br> PHP Version: $phpver<br>";
       ?>
       <?php
function convert($size)
 {
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
 }
echo 'Memory usage: ';
echo convert(memory_get_usage(true)); // 123 kb
?>
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>