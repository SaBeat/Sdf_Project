<!DOCTYPE html>
<html>
<head>
<title>Now Playing</title>


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
 
  include "conf/info.php";
  $title="Now Playing Movies";
  include_once "header.php";
?>

    <h1>Now Playing Movies</h1>
    <?php
      include_once "api/api_now.php";
    ?>
    <hr>
    <ul class="tag">
      <?php
        
        foreach($nowplaying->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '" width="300" height="400">
         <center style="color:white" <h3>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h3>
          <h4><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h4></center></a></li>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>

</body>
</html>

