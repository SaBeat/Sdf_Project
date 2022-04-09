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

     


     </div>
    </form>

  </body>
  </html>