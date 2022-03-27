<?php require_once('../zvinodiwa/database.php');
      require_once('../zvinodiwa/session.php');
if (isset($_POST['upload'])){

	header("refresh:3;url=dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>IFF | Dashboard </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/Jquery-ui/jquery-ui.min.css">
<!--===============================================================================================-->
</head>
<body>

<div class="line"></div>
            <div class="row">
            <div class="col-md-12 ssm">
            <div class="card">
            <p class="card-header sammac-media"> Crop Damage Control </p>    
            <div class="card-body">
             
             <div class="row">
             <div class="col-md-6 form-group">
                 <label>Name</label>
                 <input type="text" name="name" class="form-control" pattern="[a-zA-Z ]{3,20}" maxlength="20" placeholder="Rajesh" required>
             </div>  	

<form action="crop_damage_upload.php" method="post"  enctype="multipart/form-data">
		<input type="file" name="f_name"  value="Upload">
		<input type="submit" name="upload" value="Submit">

		


	</form>

</body>
</html>
