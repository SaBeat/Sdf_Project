<?php 
     session_start(); 
     ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    
    </title>
    <link href="css/header_style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<style type="text/css">
 
@import url('https://fonts.googleapis.com/css?family=Inconsolata|Lato:300,400,700');
html, body, h1, h2, h3, h4, h5, h6, p, li, ol, ul, pre {
  margin: 0;
  padding: 0;
}
html, body { min-height: 100%; }

body {
  background-color: #345;
  background-image: linear-gradient(to bottom, #0009, transparent);
  color: #eee;
  font-family: 'Lato', sans-serif;
  font-size: 62.5%;
  padding: 0 20px;
  box-sizing: border-box;
}
code {
  background: #fff1;
  font-family: 'Inconsolata', monospace;
  padding: .2em .4em;
}

.btn_logout{
  background: #FF4742;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  width:180px;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  margin: 5px; 
  padding: 14px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;

}

.content {
  background-color: #fff;
  border-radius: 8px;
  box-sizing: border-box;
  color: #666;
  font-size: 1.6em;
  line-height: 1.4em;
  margin: 20px auto;
  margin-top: 80px;
  padding: 20px;
  width: 100%;
  max-width: 800px;
}
.content ul {
  margin: .5em 2em;
  padding: 0;
}
a{
  color:white;
}

#footer {
  background-color: #246c;
  background-image: linear-gradient(to bottom, transparent, #0009);
  border-top: 1px solid #fff3;
  box-shadow: inset 0 1px 0 #fff3, 0 0 32px #000;
  overflow: hidden;
  padding: 8px;
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9001;
}
#footer a {
  color: #85c6f6;
  padding: 1em 0;
  text-decoration: none;
}
#footer ul {
  display: flex;
  list-style: none;
  justify-content: center;
  font-size: 2em;
  font-weight: 300;
}
#footer ul li {
  padding: 0 .5em;
}

.links {
  background-color: #123;
  background-image: linear-gradient(to bottom, #0003, transparent);
  border-bottom: 1px solid #0003;
  box-shadow: 0 0 32px #0003;
  font-size: 2em;
  font-weight: 300;
}
.links > a {
 
  color: #9ab;
  padding: .75em;
  text-align: center;
  text-decoration: none;
  transition: all .5s;
}
.links > a:hover {
  background: #ffffff06;
  color: #adf;
}
.links > .line {
  background: #68a;
  height: 1px;
  pointer-events: none;
}

#header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
}
.links {
  display: grid;
  grid-template-columns: repeat(var(--items), 1fr);
  position: relative;
}
.links > .line {
  opacity: 0;
  transition: all .5s;
  position: absolute;
  bottom: 0;
  left: var(--left, calc(100% / var(--items) * (var(--index) - 1)));
  width: var(--width, calc(100% / var(--items)));
  --index: 0;
}
.links > a:hover ~ .line {
  opacity: 1;
}

.links > a:nth-of-type(1):hover ~ .line { --index: 1; }
.links > a:nth-of-type(2):hover ~ .line { --index: 2; }
.links > a:nth-of-type(3):hover ~ .line { --index: 3; }
.links > a:nth-of-type(4):hover ~ .line { --index: 4; }
.links > a:nth-of-type(5):hover ~ .line { --index: 5; }
.links > a:nth-of-type(6):hover ~ .line { --index: 6; }
.links > a:nth-of-type(7):hover ~ .line { --index: 7; }
.links > a:nth-of-type(8):hover ~ .line { --index: 8; }
.links > a:nth-of-type(9):hover ~ .line { --index: 9; }
.links > a:nth-of-type(10):hover ~ .line { --index: 10; }
.links > a:last-of-type:hover ~ .line { --index: var(--items); }

.btn_search {
  background: #FF4742;
  border: 1px solid #FF4742;
  border-radius: 6px;
  box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  width:180px;
  font-family: nunito,roboto,proxima-nova,"proxima nova",sans-serif;
  font-size: 16px;
  font-weight: 800;
  line-height: 16px;
  min-height: 40px;
  outline: 0;
  margin: 5px; 
  padding: 14px 14px;
  text-align: center;
  text-rendering: geometricprecision;
  text-transform: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
}

.btn_search:hover,
.btn_search:active {
  background-color: initial;
  background-position: 0 0;
  color: #FF4742;
}

.btn_search:active {
  opacity: .5;
}


.form__input {
  font-family: 'Roboto', sans-serif;
  color: #333;
  font-size: 1.2rem;
  margin: 4px 50px 4px 0px;
  border-radius: 0.2rem;
  padding:10px,8px,8px,10px;
  background-color: rgb(255, 255, 255);
  border: none;
  width: 100%;
  border-bottom: 0.3rem solid transparent;
  transition: all 0.3s;
}

.flex-container{
  width:100%;
  display:flex;
}
.box {
 padding:5px;
}

.box select {
  background-color: #0563af;
  color: white;
  padding: 12px;
  width: 120px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: button;
  outline: none;
}

.box select option {
  padding: 30px;
}
</style>

  </head>
  <body>

 


  <nav class="links" style="--items: 5;">
    <a href="index.php">Home</a>
    <a href="popular.php">Popular Movies</a>
    <a href="now-playing.php">Now Playing Movies</a>
    <a href="upcoming.php">Upcoming</a>
    <a href="tv-series.php">TV SERIES</a>
    <span class="line"></span>
  </nav>

      <form class="form_class" action="search.php" method="get">

      <div class="flex-container">  
      
      <input type="text" class="form__input" id="name" name="search" placeholder="Type Title Here" required />
     
      
    
     <div class="box">
        <select name="channel" required>
                <option value="movie" selected="selected">Movie
                </option>
                <option value="tv">TV Show
                </option>
              </select>

     </div>

     
     <div class="button_search">
          <button  class="btn_search" type="submit">Search...</button>
     </div>

     

    <?php
    $link = isset($_SESSION['user']) ? '/sdf/db/logout_index.php' :  '/sdf/db/logout.php';
    $title = isset($_SESSION['user']) ? "Log out" :  "Log in";
    ?>

     <a style="font-size:16px;letter-spaceing:4px;padding:5px;" href="<?=$link?>"><?=$title?></a>
   
     

     </div>
    </form>

  </body>
  </html>