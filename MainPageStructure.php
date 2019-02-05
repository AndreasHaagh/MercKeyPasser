<!DOCTYPE html>
<html lang ="en">
<head>
	<title>MercKeyPasser</title>
  <?php session_start(); ?>
	<meta charset = "utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: #343A40;
      /*background-image: url("img/keyP3.jpg");*/
    }
  </style>
</head>
<body >

  <div class = "container-fluid"> 
    <div class = "jumbotron">
    	<h1>MercKeyPasser <?php echo " - Hello ". $_SESSION["Username"] .""; ?></h1>
    </div>
  </div>

   <div class = "row">
    <!-- Switch for dark/ light mode -->
  	  <div class="col-sm-2">
    	  <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="switch1">
          <label class="custom-control-label text-warning" for="switch1">Dark/Light mode</label>
        </div>
  	  </div>

    <!-- Main Button Group -->
  	  <div class="col-sm-8">
        
        <!-- Edit and delete buttons Group -->
  	    <button type="button" class="btn btn-dark btn-outline-primary">Edit</button>
  	    <button type="button" class="btn btn-light">Delete</button>

      	<!-- Button to Open the Modal -->
      	<button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#myModal">Create</button>
  	  </div>

        <!-- Log Out button -->
  	  <div class="col-sm-2">
        <form action="./sql/logout.php" method="post">
          <input class="btn btn-info" type="submit" value="Log Out">
        </form>
        <!-- <button type="button" class="btn btn-info">LogOut</button> -->
      </div>
  </div>

  <div class = "row">
  	  <div class="col-sm-2"></div>
  	  <div class="col-sm-8">
  	   <img class="img-responsive" src="img/keyP2.jpg" > 
  	  </div>
  	  <div class="col-sm-2"></div>
  </div>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create new record</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Title</span>
              </div>
              <input type="text" class="form-control" placeholder="Title">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Username</span>
              </div>
              <input type="text" class="form-control" placeholder="Username">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
              </div>
              <input type="text" class="form-control" placeholder="Password">
              <div class="input-group-append">
                
                  <button type="button" class="btn btn-info">Create</button>
              </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Url:</span>
              </div>
              <input type="text" class="form-control" placeholder="Source">
            </div>
          </form> 
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>