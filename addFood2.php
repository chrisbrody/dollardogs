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

	        <h2 class="form-signin-heading">Food Items</h2>

	        <!-- ITEM GROUP 1 -->
		    <div class="form-group">
		    	<div class="row">
			        <!-- ITEM 1 -->
			        <div class="col-xs-6">
				        <label for="inputItem1" class="sr-only">Restaurant Item #1</label>
				        <input type="text" id="inputName" class="form-control" placeholder="Item #1" required name="rItem1">
			        </div>

			        <!-- ITEM PRICE 1 -->
			        <div class="col-xs-6">
				        <label for="inputItemPrice1" class="sr-only">Restaurant Item Price #1</label>
				        <input type="number" id="inputItemPrice1" class="form-control" placeholder="Item Price #1" required name="rItemPrice1">
			        </div>
		        </div>
		    </div>

		    <!-- ITEM GROUP 2 -->
		    <div class="form-group">
		    	<div class="row">
			        <!-- ITEM 2 -->
			        <div class="col-xs-6">
				        <label for="inputItem2" class="sr-only">Restaurant Item #2</label>
				        <input type="text" id="inputName" class="form-control" placeholder="Item #2" name="rItem2">
				    </div>
			        <!-- ITEM PRICE 2-->
			        <div class="col-xs-6">
				        <label for="inputItemPrice2" class="sr-only">Restaurant Item Price #2</label>
				        <input type="number" id="inputItemPrice2" class="form-control" placeholder="Item Price #2" name="rItemPrice2">
			    	</div>
			    </div>
		    </div>

		    <!-- ITEM GROUP 3 -->
		    <div class="form-group">
		    	<div class="row">
			        <!-- ITEM 3 -->
			        <div class="col-xs-6">
				        <label for="inputItem3" class="sr-only">Restaurant Item #3</label>
				        <input type="text" id="inputName" class="form-control" placeholder="Item #3" name="rItem3">
			        </div>
			        <!-- ITEM PRICE 3-->
			        <div class="col-xs-6">
				        <label for="inputItemPrice3" class="sr-only">Restaurant Item Price #3</label>
				        <input type="number" id="inputItemPrice3" class="form-control" placeholder="Item Price #3" name="rItemPrice3">
			        </div>
			    </div>
		    </div>

		    <!-- ITEM GROUP 4 -->
		    <div class="form-group">
		    	<div class="row">
			        <!-- ITEM 4 -->
			        <div class="col-xs-6">
				        <label for="inputItem4" class="sr-only">Restaurant Item #4</label>
				        <input type="text" id="inputName" class="form-control" placeholder="Item #4" name="rItem4">
				    </div>

			        <!-- ITEM PRICE 4-->
			        <div class="col-xs-6">
				        <label for="inputItemPrice4" class="sr-only">Restaurant Item Price #4</label>
				        <input type="number" id="inputItemPrice4" class="form-control" placeholder="Item Price #4" name="rItemPrice4">
				    </div>
			    </div>
		    </div>

		    <!-- ITEM GROUP 5 -->
		    <div class="form-group">
		    	<div class="row">
			        <!-- ITEM 5 -->
			        <div class="col-xs-6">
				        <label for="inputItem5" class="sr-only">Restaurant Item #5</label>
				        <input type="text" id="inputName" class="form-control" placeholder="Item #5" name="rItem5">
				    </div>

			        <!-- ITEM PRICE 5-->
			        <div class="col-xs-6">
				        <label for="inputItemPrice5" class="sr-only">Restaurant Item Price #5</label>
				        <input type="number" id="inputItemPrice5" class="form-control" placeholder="Item Price #5" name="rItemPrice5">
				    </div>
			    </div>
		    </div>

		    <!-- SUBMIT BUTTON -->
	        <button type="submit" class="btn btn-danger">Add Items</button>
	    </form>
	  </div>

	</body>
  <!-- include footer.php -->
  <?php include('footer.php') ?>
  <!-- Add any needed js after this -->

</html>
