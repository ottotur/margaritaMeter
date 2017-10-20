<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div id="fb-root"></div>
<div class="fb-login-button" data-max-rows="3" data-size="large" data-button-type="continue_with" data-show-faces="true" data-auto-logout-link="true" data-use-continue-as="true"></div>  

  
<div id="formi" class="formi row align-center">
  <div class="column small-10">
    <form id="idForm" name="margaritagrade" action="save.php" method="post">
      <input type="hidden" id="name" name="name">
      <input type="hidden" id="fb-id" name="id">
      <div class="row">
        <div class="column small-12">
      <label>Select Menu
        <select name="restaurant">
          <option value="husker">Husker</option>
          <option value="starbuck">Starbuck</option>
          <option value="hotdog">Hot Dog</option>
          <option value="apollo">Apollo</option>
        </select>
      </label>
    </div>
       </div>
       <div class="row">
        <div class="column small-10" >
          <div class="slider" data-slider data-initial-start="5" data-end="10">
  <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="sliderOutput1"></span>
  <span class="slider-fill" data-slider-fill></span>
 
</div>
        </div>
        <div class="small-2 columns">
  <input type="number" name="grade" id="sliderOutput1">
</div>
       </div>
      <div class="row">
        <div class="column small-12 input-group-button">
          <input type="submit" name="submit" class="button" value="Submit">
        </div>
      </div>
     
    </form>
  </div>
</div>
<script>


</script>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/dist/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
  