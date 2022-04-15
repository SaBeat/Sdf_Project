
<!DOCTYPE html>
<html>
<head>
<title>Popular Movies</title>

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
  $title="Popular Movies";
  include_once "header.php";
?>
    <h1>Popular Movies</h1>
    <hr>
    <ul class="tag">
      <?php
      
        include_once "api/api_popular.php";
        foreach($popular->results as $p){

          echo '<li>
          <a href="movie.php?id=' . $p->id . '">
          <div class="card">
          <img class="image_popular" src="'.$imgurl_1.''. $p->poster_path . '" width="300" height="400">
          <div class="container">
          <center style="color:white;<h2 style="text-align:center;">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h2>
          <h4><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " 
          . round($p->popularity) . "</em></h4></center>
          </div>
          </div>

          </a>

          </li>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>

</body>
</html>

