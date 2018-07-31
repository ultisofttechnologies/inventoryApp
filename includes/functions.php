<?php
//login validation functions
function validation($con)
{ //declaration of variables
  $name=$password=$username=$msgErr="";

  //Validation of user credentials
  if (isset($_POST['login'])) {
    if (empty($_POST['username']) && empty($_POST['password']) ) {
      echo '<script type="text/javascript">alert("Please ensure both username and password fields are filled!")</script>';
      //$msgErr = "Please ensure both username and password fields are filled!";
    }else{
    if (!empty($_POST['username'])) {
      $username = mysqli_real_escape_string($con, $_POST['username']);

    }else {
      echo '<script type="text/javascript">alert("Please enter required username!")</script>';
      //$msgErr = "Please enter required username!";
    }

    if (!empty($_POST['password'])) {
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $password = htmlentities(sha1($password));
    }else {
      echo '<script type="text/javascript">alert("Please enter a valid password!")</script>';
      //$msgErr = "Please enter a valid password!";
    }


    //User authentication
    //checking user credentials from database
    $query = "SELECT *
              FROM users
              WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con,$query);
    while ($row = mysqli_fetch_array($result)) {
      $id = $row['uId'];
      $name = $row['name'];
      $username = $row['username'];
      $notifications = $row['notifications'];
      $analytics = $row['analytics'];
      $sales = $row['sales'];
      $products = $row['products'];
      $suppliers = $row['suppliers'];
      $customers = $row['customers'];
      $finances = $row['finances'];

    }
    $count = mysqli_num_rows($result);

    if ($count == 1) {
      $_SESSION['id'] = $id;
      $_SESSION['name'] = $name;
      $_SESSION['username'] = $username;
      $_SESSION['notifications'] = $notifications;
      $_SESSION['analytics'] = $analytics;
      $_SESSION['sales'] = $sales;
      $_SESSION['products'] = $products;
      $_SESSION['suppliers'] = $suppliers;
      $_SESSION['customers'] = $customers;
      $_SESSION['finances'] = $finances;

      header ('Location: index.php');
  }else {
    echo '<script type="text/javascript">alert("User does not exist!")</script>';
    //$msgErr = "User does not exist";
  }

  }
  }
}

 ?>

<?php
//function to starts session and output buffering;
function sessions(){
  session_start();
  ob_start();
}
 ?>

<?php
//function to end output buffering
function buffer(){
  ob_end_flush();
}
  ?>
