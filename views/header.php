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
	
<script type="text/javascript">

function insert() {
	if (window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}  else {
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('message').innerHTML = xmlhttp.responseText;
		}
	}
	
	parameters = 'name='+document.getElementById('name').value+'&contact='+document.getElementById('contact').value+'&email='+document.getElementById('email').value+'&account='+document.getElementById('account').value+'&add='+document.getElementById('add').value;
	
	xmlhttp.open('POST','includes/functions_supplier.php',true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xmlhttp.send(parameters);    
}


function update() {
	if (window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}  else {
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('update_message').innerHTML = xmlhttp.responseText;
		}
	}
	
	parameters = 'update_name='+document.getElementById('update_name').value+'&update='+document.getElementById('update').value;
	
	xmlhttp.open('POST','includes/functions_supplier.php',true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xmlhttp.send(parameters);    
}

function deletion() {
	if (window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}  else {
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('delete_message').innerHTML = xmlhttp.responseText;
		}
	}
	
	parameters = 'delete_name='+document.getElementById('delete_name').value+'&deletion='+document.getElementById('deletion').value;
	
	xmlhttp.open('POST','includes/functions_supplier.php',true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xmlhttp.send(parameters);    
}

function findmatch() {
	if (window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}  else {
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('results').innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open('GET','includes/functions_supplier.php?search_text='+document.search.search_text.value,true);
	xmlhttp.send();    
}

function search(){
		if (window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}  else {
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('search_message').innerHTML = xmlhttp.responseText;
		}
	}
	
	parameters = 'search_name='+document.getElementById('search_name').value+'&search_button='+document.getElementById('search_button').value;
	
	xmlhttp.open('POST','includes/functions_supplier.php',true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xmlhttp.send(parameters);  
}


function edit_dropdown(){
			if (window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}  else {
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('drop_edit_message').innerHTML = xmlhttp.responseText;
		}
	}
	
	parameters = 'supp_edit='+document.getElementById('supp_edit').value;
	
	xmlhttp.open('POST','includes/functions_supplier.php',true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xmlhttp.send(parameters);
}

function delete_dropdown(){
			if (window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}  else {
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			document.getElementById('drop_delete_message').innerHTML = xmlhttp.responseText;
		}
	}
	
	parameters = 'supp_delete='+document.getElementById('supp_delete').value;
	
	xmlhttp.open('POST','includes/functions_supplier.php',true);
	xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	xmlhttp.send(parameters);
}


</script>
	
	
</head>
