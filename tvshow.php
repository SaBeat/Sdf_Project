<!DOCTYPE html>
<html>
<head>
<title>Tv Shows</title>

<style>
  
.tag{
  display:flex;
  flex-wrap:wrap;
  gap:10px;
}
a{
  text-decoration:none;
}

.main_div{
  width:100%;
  display:flex;
}

.image_div{
  width:40%;
}
.text_div{
  width:60%;
  font-size:16px;
  padding:8px;
}

</style>

</head>
<body>

<?php
  $id_tv = $_GET['id'];
  include "conf/info.php";
  include_once "api/api_tv_id.php";
  include_once "api/api_tv_video_id.php";
  $title = "Watch TV (".$tv_id->original_name.")";
  include_once "header.php";
?>
    <?php
    session_start();

    if($_SESSION['user']){

      if(isset($_GET['id'])){
        $id_tv = $_GET['id'];
        
      ?>
      <h1><?php echo $tv_id->original_name?></h1>
  
      <?php 
  
        foreach($tv_video_id->results as $video){
                      echo '<iframe width="560" height="315" style="margin:8px;" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>';
        }
       ?>"
  
  
  
        <div class="main_div">
  
          <div class="image_div">
          <img  style="width:100%;" src="http://image.tmdb.org/t/p/w300<?php echo $tv_id->poster_path ?>" />
          </div>
  
          <div class="text_div">
            <p>Title : <?php echo $tv_id->original_name ?></p>
            <p>Status : <?php echo $tv_id->status ?></p>
            <p>Genres : 
                      <?php
                        foreach($tv_id->genres as $g){
                          echo '<span>' . $g->name . '</span> ';
                        }
                      ?>
            </p>
            <p>Overview : <?php echo $tv_id->overview ?></p>
            <p>Production Companies : 
                      <?php
                        foreach($tv_id->production_companies as $pc){
                          echo $pc->name;
                        }
                      ?>
            </p>
            <p>Original Country : 
                      <?php
                        foreach($tv_id->origin_country as $pco){
                          echo $pco. "&nbsp;&nbsp;" ;
                        }
                      ?>
            </p>
            <p>Created by : 
                      <?php
                        foreach($tv_id->created_by as $pco){
                          echo $pco->name. "&nbsp;&nbsp;" ;
                        }
                      ?>
            </p>
            <p>Vote Average : <?php echo $tv_id->vote_average ?></p>
            <p>Vote Count : <?php echo $tv_id->vote_count ?></p>
          </div>
  
        </div>
  
      <hr>
      
      
      <hr>
      <h3>Similar TV Show</h3>
      <ul class="tag">
        <?php
          $count = 4;
          $output=""; 
          foreach($tv_id_similar->results as $sim){
            $backdrop 	= $sim->backdrop_path;
            if (empty($backdrop) && is_null($backdrop)){
              $backdrop =  dirname($_SERVER['PHP_SELF']).'/image/no-gambar.jpg';
            } else {
              $backdrop = 'http://image.tmdb.org/t/p/w300'.$backdrop;
            }
            $output.='<li><a href="tvshow.php?id='.$sim->id.'"><img src="'.$backdrop.'" width="300" height="270">
            <center style="color:white"><h3>'.$sim->original_name.'</h3></center></a></li>';
            if($count <=0){
              break;
              $count--;
            }
          }
          echo $output;
        ?>
      </ul>
  
      
      <?php 
      } else{
        echo "<h5>Movie tidak ditemukan.</h5>";
      }


    }else{
      echo '<center><p style="font-size:40px;margin-top:50px;">Please log in!</p></center>';
    }
    ?>

<?php
  include_once "footer.php";
?>

</body>
</html>



