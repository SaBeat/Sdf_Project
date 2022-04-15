<!DOCTYPE html>
<html>
<head>
<title>Movie</title>


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
 
}

</style>

</head>
<body>


<?php
  include "conf/info.php";
  
    $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_video_id.php";
    include_once "api/api_movie_similar.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
    include_once "header.php";
  
?>

    <?php 
      session_start();

      if($_SESSION['user']){



    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
    ?>
    <h1><?php echo $movie_id->original_title?></h1>

    <?php 

      foreach($movie_video_id->results as $video){
                    echo '<iframe width="560" height="315" style="margin:8px;" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>';
      }
     ?>"

    <hr>
    <div class="main_div">

      <div class="image_div">
        <img style="width:100%;" src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>">
      </div>

      <div class="text_div" style="font-size:16px;padding:8px;">

      <p>Title : <?php echo $movie_id->original_title ?></p>
          <p>Tagline : <?php echo $movie_id->tagline ?></p>
          <p>Genres : 
              <?php
                foreach($movie_id->genres as $g){
                  echo '<span>' . $g->name . '</span> ';
                }
              ?>
          </p>
          <p>Overview : <?php echo $movie_id->overview ?></p>
          <p>Release Date : <?php $rel = date_default_timezone_set($movie_id->release_date); echo $rel ?>
          <p>Production Companies :
              <?php
                foreach($movie_id->production_companies as $pc){
                  echo $pc->name." ";
                }
              ?>
          </p>
          <p>Production Countries:
              <?php
                foreach($movie_id->production_countries as $pco){
                  echo $pco->name. "&nbsp;&nbsp;" ;
                }
              ?>
          </p>
          <p>Budget: $ <?php echo $movie_id->budget ?> </p>
          <p>Vote Average : <?php echo $movie_id->vote_average ?></p>
          <p>Vote Count : <?php echo $movie_id->vote_count ?></p>

      </div>

    </div>

          
          

    <hr>
    <h3>Similar Movies</h3>
      <ul class="tag">
      <?php
        $count = 4;
        $output=""; 
        foreach($movie_similar_id->results as $sim){
          $backdrop 	= $sim->backdrop_path;
          if (empty($backdrop) && is_null($backdrop)){
            $backdrop =  dirname($_SERVER['PHP_SELF']).'/image/no-gambar.jpg';
          } else {
            $backdrop = 'http://image.tmdb.org/t/p/w300'.$backdrop;
          }
          $output.='<li style="display:flex"><a style="flex:0.5" href="movie.php?id='.$sim->id.'"><img src="'.$backdrop.'">
          <center><h3 style="flex:0.5; color:white;">'.$sim->title.'</h3></center></a></li>';
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