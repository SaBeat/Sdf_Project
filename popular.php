
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
          <h4 style="text-align:center;">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4>
          <h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " 
          . round($p->popularity) . "</em></h5>
          </div>
          </div>

          </a>

          </li>";
        }
      ?>
    </ul>

<?php
include_once "css/style.css";
  include_once "footer.php";
?>

</body>
</html>

