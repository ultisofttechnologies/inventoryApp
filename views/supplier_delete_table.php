<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Ultisoft Point of Sales</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/alert-message-box.css">
    <link rel="stylesheet" type="text/css" href="css/chat-box.css">
    <link rel="stylesheet" type="text/css" href="css/mystyles.css">


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	</head>


<form method="POST" action="includes/functions_supplier.php">
<table id="mainTable" class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Contact</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row"><?php echo $suppId; ?></th>
                                      <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                                      <td><input type="name" name="contact" value="<?php echo $contact; ?>"></td>
                                      <td><input type="email" name="email" value="<?php echo $email; ?>"></td>
									  <td><input type="text" name="account" value="<?php echo $account; ?>"></td>
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                      <td>
                                        
                                        <input type="submit" value="Delete" name="delete_button" class="btn btn-primary btn-lg m-l-15 waves-effect">
                                      </td>
                                      </div>
                                    </tr>
                                    
                                  </tbody>
								  </table>
								  </form>