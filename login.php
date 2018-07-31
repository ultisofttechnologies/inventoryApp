<?php require 'config/dbconnection.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php sessions(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Shop Mate</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="login/hstyle.css">
</head>
<body>

<?php validation($con); ?>

<div class="section"></div>
  <main>
    <center>
      <div class="section"></div>

      <h5 class="indigo-text">Please login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action="login.php">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
              <i class="material-icons prefix"></i>
                <input class='validate' type='text' name='username' id='username' />
                <label for='username'>Enter your username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
              <i class="material-icons prefix"></i>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>

            </div>

            <center>
              <div class='row'>
                <button type='submit' name='login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>

    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
</div>
</body>
</html>
<?php buffer(); ?>
