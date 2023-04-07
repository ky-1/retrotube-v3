<!DOCTYPE html>
<?php include 'global.php';?>
<?php include 'bancheck.php';?>
<head>
	<link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
	<?php
	include("header.php");
    echo ("<h2>Search results for &quot;".$_GET["q"]."&quot;</h2>")
	?>
	<?php
    if(($_GET['search_type'] == "search_users")) {
        $query = $_GET['q'];
        header("Location: results_users.php?q=$query"); 
    }
    $results = '';
    $searchErr = '';
    if(isset($_GET['q']))
{
	if(!empty($_GET['q']))
	{
		$search = htmlspecialchars($_GET['q']);
		$stmt = $mysqli->prepare("select * from videos where videotitle like '%$search%' or description like '%$search%'");
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
		    		echo 'No videos found.';
		    	 }
		    	 else{
		    	 	foreach($results as $key=>$value)
		    	 	{
		    	 		?>
                        <div class="video container-flex">
                    <div class="col-1-3 video-thumbnail">
                    <a href="watch.php?v=<?php echo $value['vid'];?>">
                    <img src="content/thumb/<?php echo $value['thumb'];?>">
                    </a>
                    </div>
                    <div class="col-1-3 video-title"><a href="watch.php?v=<?php echo $value['vid'];?>"><?php echo $value['videotitle'];?></a></div>
                    <div class="col-1-3 video-info">
                        <div>From: <a href="profile.php?username=<?php echo $value['author'];?>"><?php echo $value['author'];?></a></div>
                        <div>Views: <span><?php echo $value['views'];?></span></div>
                        <div>Likes: <span><?php echo $value['likes'];?></span></div>
                    </div>
                </div>
                <hr>
		    	 		
		    	 		<?php
		    	 	}
		    	 	
		    	 }
		    	?>
    <?php include("footer.php") ?>
</body>
<?php $mysqli->close();?>