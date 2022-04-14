<!DOCTYPE html>
<html>
<head>
	<style>
		.tag{
		display:flex;
		flex-wrap:wrap;
		gap:10px;
		}
a{
	text-decoration:none;
}		
	</style>
</head>
<body>

<?php
$input=$_GET['search'];
$channel=$_GET['channel'];
$search=$input;
include_once "conf/info.php";
$title = 'Result Search | '.$input;
include_once "header.php";
include_once "api/api_search.php";
?>
    <h3>Result Search: <em><?php echo $input?></em></h3>
    <hr>
    <ul class="tag">
<?php
	if($channel=="movie"){	
                foreach($search->results as $results){
			$title 		= $results->title;
			$id 		= $results->id;
			
			
			$backdrop 	= $results->backdrop_path;
			if (empty($backdrop) && is_null($backdrop)){
				$backdrop =  dirname($_SERVER['PHP_SELF']).'/image/no-gambar.jpg';
			} else {
				$backdrop = 'http://image.tmdb.org/t/p/w300'.$backdrop;
			}
			echo '<li>
			 
			   
			 
			   <a href="movie.php?id=' . $id . '"><img src="'.$backdrop.'" width="300" height="270"><center style="color:white;"><h2>'.$title.'</h2></center></a>
			 
			  
			   
			</li>';
		}
        }elseif($channel=="tv"){
            foreach($search->results as $results){
			$title 		= $results->original_name;
			$id 		= $results->id;
			
			$backdrop 	= $results->backdrop_path;
			if (empty($backdrop) && is_null($backdrop)){
				$backdrop = dirname($_SERVER['PHP_SELF']).'/image/no-gambar.jpg';
			} else {
				$backdrop = 'http://image.tmdb.org/t/p/w300'.$backdrop;
			}
			echo '<li><a href="tvshow.php?id=' . $id . '"><img src="'.$backdrop.'" width="300" height="270"><center style="color:white;"><h2>'.$title.'</h2></center></a></li>';
		}
        }
        ?>
        </ul>
 <?php
include_once('footer.php');
?>


</body>
</html>



