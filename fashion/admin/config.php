<?php
session_start();
$db=mysqli_connect('localhost','root','','fashion');
$errors= array();
$fullname="";
$pass="";

//log user in from login page
if (isset($_POST['login']))
{
    $username= ($_POST['username']);
    $pass1= ($_POST['password']);
    
if(empty($username))
{
	array_push($errors, "Username is required");
}

if(empty($pass1))
{
	array_push($errors, "Password is required");
}

if (count($errors)==0){
	$password1= md5($pass1);//encript password before comparing with that from data base
	$query="SELECT * FROM users WHERE user_name='$username' AND password='$password1'";
	$result = mysqli_query($db, $query);

	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_assoc($result);
		$user_id = $row['user_id'];
		
		$_SESSION["user_id"] = $user_id;

		header("Location: home.php");		    
		}else{
            // array_push($errors,"wrong username/password");
            echo '<script type="text/javascript">
            window.onload = function () { alert("Username or password incorrect..!!"); }
            </script>';
		}   
}
}

// insert details to users table
if (isset($_POST['adduser']))
{
$username= ($_POST['username']);
$email= ($_POST['email']);
$password= ($_POST['password']);
$confirmpass= ($_POST['password2']);

//fields empty
if(empty($username))
{
array_push($errors,"Please enter username!");
}
if(empty($email))
{
array_push($errors,"Please enter e-mail!");
}
if(empty($password))
{
array_push($errors,"Please enter password!");
}
if(empty($confirmpass))
{
array_push($errors,"Please enter password!");
}
if(($password) != ($confirmpass))
{
array_push($errors,"Password is not matched!");
}


//no errors
if(count($errors) == 0)
{
$enpass = md5($password);
$sql="INSERT INTO users (user_name,email,password) VALUES ('$username','$email','$enpass')";
mysqli_query($db, $sql);

header('location:user_account.php');
}
}

// User table update query 
if(isset($_POST['user_update'])){
	$user_id = $GET['user_id'];
    $username = $row['name'];   
	$email = $row['user_name'];
	$userpw = $row['password'];
	
	$usr_update_qry = "UPDATE users
	SET name= $username, user_name=$email,password=$userpw
	WHERE user_id=$user_id";
}

//Delete Users
if (isset($_GET['user_delete']))
{
$userid = ($_GET['user_id']);
$user_delete_qry="DELETE FROM users WHERE user_id = $userid;";
mysqli_query($db, $user_delete_qry);

header("Location: user_account.php");
}

// insert Product details
if (isset($_POST['addproduct']))
{
	$p_name= ($_POST['product_name']);
	$category= ($_POST['category']);
	$item_code= ($_POST['item_code']);
	$brand= ($_POST['brand']);
	$gender= ($_POST['formGender']);
	$price= ($_POST['price']);
	$description= ($_POST['description']);
	$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
    // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$add_product_qry="INSERT INTO products(p_name,itemcode,Brand,category,price,gender,image,description) VALUES ('$p_name','$item_code','$brand','$category','$price','$gender','$target_file','$description')";
			mysqli_query($db, $add_product_qry);
			echo '
			<script type="text/javascript">
				  alert("Event has been updated successfully..!"); 
				  window.location.href="products.php";
			</script>';
		}else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}

//Delete Product
if (isset($_GET['product_delete']))
{
$product_id = ($_GET['p_id']);
$product_delete_qry="DELETE FROM products WHERE p_id = $product_id;";
mysqli_query($db, $product_delete_qry);

header("Location: products.php");
}

//logout
if(isset($_GET['logout'])){
session_destroy();
header('location:index.php');
}
