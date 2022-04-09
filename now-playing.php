<!DOCTYPE html>
<html>
<head>

<style>

.tag{
  display:flex;
  flex-wrap:wrap;
  gap:10px;
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
          <h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4>
          <h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5></a></li>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>

</body>
</html>

