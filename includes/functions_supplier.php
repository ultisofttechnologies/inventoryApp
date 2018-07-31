<?php require_once '../includes/functions.php'; ?>
<?php sessions(); ?>
<?php
//Database connection
$con = mysqli_connect("localhost","root","");

if (!$con) {
  die("Database connection failed". mysqli_error());
}


// Database selection
$dbSelect = mysqli_select_db($con,"shop_db");

if (!$dbSelect) {
  die("Database selection failed". mysqli_error());
}



//auto_suggest query
if (isset($_GET['search_text'])){
	$search_text = $_GET['search_text'];
}

if(!empty($search_text)){	
		$query = "SELECT name
				FROM suppliers 
				WHERE name LIKE '".mysqli_real_escape_string($con,$search_text)."%'";
		
		$query_run = mysqli_query($con,$query);
		
		while($query_row= mysqli_fetch_assoc($query_run)){
			echo $supplier = '<a>'.$query_row['name'].'</a><br>';
		}
		
		
	}




//Query to add supplier
if(isset($_POST['add'])){

//fetching and validating post variables
if(!empty($_POST['name'])){
	$name = mysqli_real_escape_string($con,$_POST['name']);
} else{
	$msgErr = "Please enter supplier name";
}
if(!empty($_POST['contact'])){
$contact = mysqli_real_escape_string($con,$_POST['contact']);
} else{	
	
}

if(!empty($_POST['email'])){
$email = mysqli_real_escape_string($con,$_POST['email']);
} else {
	
}
if(!empty($_POST['account'])){
$account = mysqli_real_escape_string($con,$_POST['account']);
}else{
	
}
	

if(!empty($_POST['name'])){	
$query = "INSERT INTO suppliers
		 (name,email,contact,account)
		  VALUES ('$name','$email','$contact','$account')";

if(!mysqli_query($con,$query)){
	echo mysqli_error($con);
}	
}  
}


//query to update supplier table
if(isset($_GET['search_text'])){
	
//validation	
$name = mysqli_real_escape_string($con,$_GET['search_text']);


//databse fetch and display data query
if(isset($_GET['search_text'])){
	$query = "SELECT * FROM suppliers
			  WHERE name='$name'";
	
	if(!$query = mysqli_query($con,$query)){
		echo mysqli_error($con);
	} else{
	$suppId=$name=$contact=$email=$account="";
	
	while($row=mysqli_fetch_array($query)){
	$suppId = $row['sId'];
	$name = $row['name'];
	$contact = $row['contact'];
	$email = $row['email'];
	$account = $row['account'];
	}
	$_SESSION['name'] = $name;
	include '../views/supplier_update_table.php';
}
}	

}

//Update query
if(isset($_POST['update_button']) && !empty($_POST['name'])){
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$account = $_POST['account'];
	
	$query = "UPDATE suppliers 
		      SET name='$name', contact='$contact', email='$email', account='$account'
			  WHERE name='$name'";
			  
	if(!$query = mysqli_query($con,$query)){
		echo mysqli_error($con);
	} else{
		echo "success";
	}		  
	if($_SESSION['supId']==0){	
	header('Location:../supplier.php?supId=0 ');
	}else{
	header('Location:../supplier.php?supId=1 ');	
	}

}


//query to delete supplier
if(isset($_POST['deletion'])){
	
//validation
if(!empty($_POST['delete_name'])){		
	$name = mysqli_real_escape_string($con,$_POST['delete_name']);
} else{
	$msgErr = "Please select supplier name";
}		
	
	$query = "SELECT * FROM suppliers
			  WHERE name='$name'";
	
	if(!$query = mysqli_query($con,$query)){
		echo mysqli_error($con);
	} else{
	$suppId=$name=$contact=$email=$account="";
	
	while($row=mysqli_fetch_array($query)){
	$suppId = $row['sId'];
	$name = $row['name'];
	$contact = $row['contact'];
	$email = $row['email'];
	$account = $row['account'];
	}
	
	include '../views/supplier_delete_table.php';
} 
}

//delete query
if(isset($_POST['delete_button']) && !empty($_POST['name'])){
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$account = $_POST['account'];
	
	$query = "DELETE FROM suppliers
			  WHERE name='$name'";
			  
	if(!$query = mysqli_query($con,$query)){
		echo mysqli_error($con);
	} else{
		echo "success";
	}
	if($_SESSION['supId']==0){	
	header('Location:../supplier.php?supId=0 ');
	}else{
	header('Location:../supplier.php?supId=1 ');	
	}
}

//supplier searrch query
if(isset($_POST['search_button']) && !empty($_POST['search_name'])){
	$name = mysqli_real_escape_string($con,$_POST['search_name']);
	$_SESSION['search_name']= $name;
	$query = "SELECT name FROM suppliers
			  WHERE name='$name'";
	$result = mysqli_query($con,$query);		  
	$count = mysqli_num_rows($result);
	
	if($count == 0){
		echo $msgErr="User does not exit";
	} else{
	$query = "SELECT * FROM suppliers
			  WHERE name='$name'";		  
	$query = mysqli_query($con,$query);
	
	$suppId=$name=$contact=$email=$account="";
	
	while($row=mysqli_fetch_array($query)){
	$suppId = $row['sId'];
	$name = $row['name'];
	$contact = $row['contact'];
	$email = $row['email'];
	$account = $row['account'];
	}
	
	include '../views/supplier_search_table.php';

}
}

if(isset($_POST['supp_edit'])){
	include '../views/update_dropdown.php';
}elseif(isset($_POST['supp_delete'])){
	include '../views/delete_dropdown.php';
}


?>