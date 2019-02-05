<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MercKeyPasser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="Styles/main.css" />
    <script src="main.js"></script>
</head>
<body class="page">
    <div class="container title-bar">
        <h1>MercKeyPasser</h1>
    </div>
    <div class="container login-box">
        <form action="#" method="post">
            <input type="text" name="Username" class="input-textfield form-control bg-dark border-dark text-white" autocomplete="off" placeholder="Enter username">
            <input type="password" class="input-textfield form-control bg-dark border-dark text-white" name="Password" placeholder="Enter password">
            <input type="submit" class="btn btn-dark" name="Submit" value="Log in">
            <p id="Sign-up-text">Don't have an account? <a href="#" class="alert-link" data-toggle="modal" data-target="#Sign-up-modal">Click here</a> to create one</p>
        </form>
    </div>

    <div class="modal modal-dark" id="Sign-up-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign up</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./sql/signup.php" method="post">
                        <input type="text" class="input-textfield form-control" autocomplete="off" placeholder="Enter username" name="Username">
                        <input type="password" class="input-textfield form-control" placeholder="Enter password" name="Password">
                        <input type="submit" class="btn btn-primary" name="Submit" value="Sign up">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>