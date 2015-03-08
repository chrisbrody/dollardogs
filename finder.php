<?php include('header.php') ?>

  <body class="finder" id="sidebar">
    <!-- Top Navigation & Logo -->
    <nav class="navbar navbar-fixed-top finder">
      <a href="index.php">
        <i class="fa fa-long-arrow-left fa-4x"></i>        
      </a>
    </nav>
    <div class="container-fluid">
      <!-- Finder Item 1 -->
      <div class="row">
        <div class="finder_item first">
          <div class="col-sm-4 col-sm-offset-4">
            <h4 class="text-center">Fozzie's Pizza</h4>
            <div class="clearfix"></div>
              <div class="col-sm-6">
                <img src="img/250x250.jpg" alt="resturant logo">
                <h5>Open: 10:00am - 5:00am</h5>
                <h6>.07 miles away</h6></div>
              <div class="col-sm-6">
                <ol class="finder_selectable list-unstyled">
                  <li class="ui-state-default ui-selected"><a href="info.php"><i class="fa fa-info"></i></a></li>      
                  <li class="ui-state-default ui-selected google_map"><a href="https://www.google.com/maps/preview"><i class="fa fa-map-marker"></i></a></li>
                </ol>
              </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  	
  <?php include('footer.php') ?>
  <!-- Add any needed js after this -->

</html>
