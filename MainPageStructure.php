<!DOCTYPE html>
<html lang ="en">
<head>
	<title>MercKeyPasser</title>
  <?php
    require './sql/connection.php';
    session_start(); 
  ?>
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
  <!-- Background color for main page and create nodal -->
  <style>
    body {
      background-color: #343A40;
    }
    .modal-header, .modal-body {
      background-color: #343A40;
      color: white;

    }

    .table {
      margin-top: 25px;
      color: white;
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
        <table class="table">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Source</th>
            <th scope="col">Eidt / Delete</th>
          </tr>
          <?php
            $userId = $_SESSION["Id"];
            $sql = "SELECT * FROM passwordKeys WHERE UserId = '". $userId ."'";

            if ($result = $conn->query($sql)) {
              $row_count = $result->num_rows;

              if ($row_count <= 0) {
                echo '<tr><td>No keys yet. press the create button to create some</td></tr>';
              } else {
                $index = 1;
                $rows = [];
                while ($row = $result->fetch_assoc()) {
                  $rows[] = $row;
                }

                foreach ($rows as $item) {
                  echo '
                  <tr>
                    <th>'.$index.'</th>
                    <td>'.$item["Title"].'</td>
                    <td>'.$item["Username"].'</td>
                    <td>'.$item["Password"].'</td>
                    <td>'.$item["Source"].'</td>
                    <td>
                      <button type="button" class="btn btn-dark btn-outline-primary">Edit</button>
                      <button type="button" class="btn btn-light delete-btn" value="'. $item["Id"] .'">Delete</button>
                    </td>
                  </tr>';
                  $index++;
                }
              }
            }
          ?>
        </table>
  	  </div>
  	  <div class="col-sm-2"></div>
  </div>

  <!-- The Modal Form Create new record-->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create new record</h4>
          <button type="button" class="close text-primary" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body modal-dark">
          <form action="./sql/create.php" method="post">
 
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Title</span>
              </div>
              <input type="text" class="form-control" name= "title" placeholder="Title">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Username</span>
              </div>
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
              </div>
              <input type="text" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                
                  <button id="generateBtn" type="button" class="btn btn-info" action="">Generate</button>
              </div>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Url:</span>
              </div>
              <input type="text" class="form-control" name="source" placeholder="Source">
            </div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" name="save">Save</button>
          </form> 
        </div>
      </div>
    </div>
  </div>

  <script>
    $(".delete-btn").click(function() {
      var approved = confirm("Are you sure you want to delete this?");
      if (approved == true) {
        var url = './sql/delete.php';
        var form = $('<form action="' + url + '" method="post">' +
                     '  <input type="hidden" name="passwordKeyId"  value="' + this.value + '" />' +
                     '</form>');
        $('body').append(form);
        form.submit();
      }
    });
  </script>
</body>
</html>
