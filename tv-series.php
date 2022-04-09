<!DOCTYPE html>
<html>
<head>
  <title>TV Series</title>

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
  $title="TV Series";
  include_once "header.php";
?>

    <?php
      include_once "api/api_tv.php";
    ?>
        <h3>Top Rated TV Show</h3>
        <hr>
        <ul class="tag">
          <?php
            foreach($tv_top->results as $tt){
              echo '<li><a href="tvshow.php?id=' . $tt->id . '"><img src="'.$imgurl_2.''. $tt->poster_path . '"><h4>' . $tt->original_name . "</h4><h5><em>First Air Date : ".$tt->first_air_date."<br />Popularity : " . round($tt->popularity) . "</em></h5></a></li>";
            }
          ?>
        </ul>
      </div>
    </div>
    

<?php
  include_once "footer.php";
?>

</body>
</html>

