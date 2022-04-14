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
a{
  text-decoration:none;
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
              echo '<li><a href="tvshow.php?id=' . $tt->id . '"><img src="'.$imgurl_2.''. $tt->poster_path . '">
              <center style="color:white" <h2>' . $tt->original_name . "</h2><h4><em>First Air Date : ".$tt->first_air_date."<br />Popularity : " . round($tt->popularity) . "</em></h4></center></a></li>";
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

