	<!-- include header.php -->
	<?php include('header.php') ?>

	<body class="addFood finder">

	  <nav class="navbar navbar-fixed-top">
	  	<a href="index.php" class="pull-left">
	        <i class="fa fa-long-arrow-left fa-4x"></i>        
	      </a>
	      <div class="navbar-brand">DOLLAR DOGS</div>
	  </nav>

	  <div class="container">
		<form class="restaurantInfo" >
	        <h2 class="form-signin-heading">Restaurant Info</h2>
	        <div class="form-group">
		        <!-- NAME -->
		        <label for="inputName" class="sr-only">Restaurant Name</label>
		        <input type="text" id="inputName" class="form-control" placeholder="Restaurant Name" required autofocus name="rName">
	        </div>

	        <div class="form-group">
		        <!-- ADDRESS -->
		        <label for="inputAddress" class="sr-only">Restaurant Address</label>
		        <input type="text" id="inputAddress" class="form-control" placeholder="25 Broadway, Manhattan, Ny, 10004" required name="rAddress">
	        </div>


	        <!-- FOOD TYPE -->
	        <!-- <label for="inputFood" class="sr-only">Restaurant Food Type</label>
	        <input type="text" id="inputFood" class="form-control" placeholder="Restaurant Food Type" required name="rFood"> -->

	        <!-- ITEM GROUP 1 -->
		    <div class="form-group">
		    	<div class="row">
			        <input type="radio" name="yes" value="yes" style="margin-left: 15px;"> Yes, I have food under $3<br>
		        </div>
		    </div>
		    <!-- SUBMIT BUTTON -->
	        <button type="submit" class="btn btn-danger">Add Restaurant</button>
	    </form>
	  </div>

	</body>
  <!-- include footer.php -->
  <?php include('footer.php') ?>
  <!-- Add any needed js after this -->

</html>
