
<!DOCTYPE html>
<html>
<head>

  <title>Upcoming</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  $title="Upcoming Movies";
  include_once "header.php";
?>
    <h1>Upcoming Movies</h1>
    <?php
      include_once "api/api_upcoming.php";
    
    ?>
    <hr>
    <ul class="tag">
      <?php
        foreach($upcoming->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '" width="300" height="400">
          <center style="color:white"<h2>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h2>
          <h4><em>Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h4>
          <h4>Release : ". date_default_timezone_set($p->release_date) . "</h4></center></a></li>";
        }
      ?>
    </ul>


<?php
  include_once "footer.php";
?>

</body>
</html>

