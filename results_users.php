<!DOCTYPE html>
<?php include 'global.php';?>
<head>
	<link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" type="text/css" href="./css/channels.css">
</head>
<body>
	<?php
	include("header.php");
    echo ("<h2>Search results for &quot;".$_GET["q"]."&quot;</h2>")
	?>
	<?php
    $results = '';
    $searchErr = '';
    if(isset($_GET['q']))
{
	if(!empty($_GET['q']))
	{
		$search = htmlspecialchars($_GET['q']);
		$stmt = $mysqli->prepare("select * from users where username like '%$search%' or description like '%$search%'");
		$stmt->execute();
		$results = $stmt->get_result();
		
	}
	else
	{
		$searchErr = "You didn't put anything in the box.";
	}
   
}
?>
<?php
		    	 if(!$results)
		    	 {
		    		echo 'No users found.';
		    	 }
		    	 else{
		    	 	foreach($results as $key=>$value)
		    	 	{
		    	 		?>
                        <div class='user'>
				    	<div class='user-info'>
						    <div><a href='./profile.php?user=<?php echo $value['username'];?>'><?php echo $value['username'];?></a></div>
						    <div><span class='black'><?php echo $value['subscribers'];?></span> subscribers</div>
					    </div>
					    <div><a href='./profile.php?user=<?php echo $value['username'];?>'><img class='user-picture' src='./pfp/<?php echo $value['id']; ?></a></div>
				    </div>
				    <hr>
		    	 		
		    	 		<?php
		    	 	}
		    	 	
		    	 }
		    	?>
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>