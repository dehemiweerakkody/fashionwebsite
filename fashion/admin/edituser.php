<?php include('config.php'); ?>
<?php include('user.php'); ?>
<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>
<?php
require('conn.php');
$id = $_GET['id'];
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$id2 = $_POST['testid'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];

    // Check if $uploadOk is set to 0 by an error
    if(($password1)!=($password2)){
		echo '
		<script type="text/javascript">
			  alert("Update Failed..!!"); 
			  window.location.href=user_account.php";
		</script>';
    }else {
		$enpass = md5($password1);
		$update_user_qry="UPDATE `users` SET `user_name` = '$user_name', `email` = '$email',`password`='$enpass' WHERE `user_id`=$id2";
        mysqli_query($db, $update_user_qry);
            echo '
			<script type="text/javascript">
				  alert("Event has been updated successfully..!"); 
				  window.location.href="user_account.php";
			</script>';
    }
}

$result = $mysqli->query("SELECT * FROM `users` WHERE `user_id`='$id'");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Bootstrap modal</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method="post" action="edituser.php" enctype="multipart/form-data" role="form">
        <div class="modal-body">
		<input type="hidden" class="form-control" name="testid" value="<?php echo $row['user_id']; ?>">
            <div class="form-group">
                <label for="id">User ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['user_id']; ?>" readonly="true" />
            </div>
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" name="user_name" value="<?php echo $row['user_name']; ?>" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password2">
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" name="submit" value="Update" />&nbsp;
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </form>
</body>

</html>