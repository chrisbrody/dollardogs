<?php include('header.php') ?>

  <body onload="getLocation()" class="finder">
    <!-- Top Navigation & Logo -->
    <nav class="navbar navbar-fixed-top">
      
      <div class="navbar-brand">DOLLAR DOGS</div>


      <div class="navbar-brand pull-right">
        <a href="addFood.php" style="color:white;">
          add your location
        </a>
      </div>

    </nav>
    <div class="container-fluid">


      <!-- How Much to Spend -->
      <!-- <div class="col-sm-4 col-sm-offset-4">
        <div class="amount">
          <h2>I want to spend...</h2>
          <ol id="amount_selectable" class="list-unstyled">
            <li class="ui-state-default ui-selected">$1</li>  
            <li class="ui-state-default">$2</li>   
            <li class="ui-state-default">$3</li>               
          </ol>         
        </div>
      </div> -->


      <!-- How Far to Travel -->
      <div class="distance">
        <div class="col-sm-4 col-sm-offset-4">
          <h2>Max travel distance...miles</h2>
          <ol id="distance_selectable" class="list-unstyled">
            <li class="ui-state-default ui-selected">.25</li>  
            <li class="ui-state-default">.50</li>   
            <li class="ui-state-default">.75</li>               
          </ol>
          <div class="clearfix"></div>
          <h5></h5>
          <div class="clearfx">
          
          </div>
          <a id="find" class="btn btn-danger btn-block btn-lg" href="finder.php">Find Me Cheap Food</a>
        </div>
      </div>


      <!-- What to Eat -->
      <!-- <div class="col-sm-4 col-sm-offset-4">
        <div class="food">
          <h2>I want to eat...</h2>
          <div class="input-group input-lg">
            <input class="form-control" type="text" placeholder="Item, Restaurant, Food">
            <a href="#" class="input-group-addon"><i class="fa fa-search fa-2x"></i></a>
          </div>
        </div>
      </div> -->


      <!-- Find Food Button -->
      <div class="find">
        <div class="col-sm-4 col-sm-offset-4">
          
        </div>
      </div>
    </div>
  </body>
  	
  <?php include('footer.php') ?>
  <!-- Add any needed js after this -->

</html>
