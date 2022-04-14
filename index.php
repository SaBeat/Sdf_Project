<!DOCTYPE html>
<html>
<head>
  <title>Top-Rated Movies</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.tag{
  display:flex;
  flex-wrap:wrap;
  gap:10px;
}
a {
    text-decoration:none;
  }
</style>
</head>
<body>

<?php
  include "conf/info.php";
  $title="Welcome to";
  include_once "header.php";
?>
    <h1>Top Rated Movies</h1>
    <hr>
    <ul class="tag">
      <?php
        include_once "api/api_toprated.php";
        foreach($toprated->results as $p){
          echo '<li>
         
          <a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w300'. $p->poster_path . '" width="300" height="400"> 
          <center style="color:white;><h2 style="color:white;">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h2>
          <h4><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h4></center></a>


          </li>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>


</body>
</html>


