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
    $id1 = $_POST['testid'];
    $p_name = $_POST['p_name'];
    $category = $_POST['category'];
    $itemcode = $_POST['itemcode'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
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
        $update_product_qry="UPDATE `products` SET `p_name` = '$p_name', `itemcode` = '$itemcode',`brand`='$brand',`category`='$category',`price`='$price',`image`='$target_file',`description`='$description' WHERE `p_id`=$id1";
        mysqli_query($db, $update_product_qry);
            echo '
			<script type="text/javascript">
				  alert("Event has been updated successfully..!"); 
				  window.location.href="products.php";
			</script>';
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$result = $mysqli->query("SELECT * FROM `products` WHERE `p_id`='$id'");
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
    <form method="post" action="editproduct.php" enctype="multipart/form-data" role="form">
        <div class="modal-body">
            <input type="hidden" class="form-control" name="testid" value="<?php echo $row['p_id']; ?>">
            <div class="form-group">
                <label for="id">Product ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['p_id']; ?>" readonly="true" />
            </div>
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" name="p_name" value="<?php echo $row['p_name']; ?>" />
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="category" value="<?php echo $row['category']; ?>">
            </div>
            <div class="form-group">
                <label>Item Code</label>
                <input type="text" class="form-control" name="itemcode" value="<?php echo $row['itemcode']; ?>">
            </div>
            <div class="form-group">
                <label>Brand</label>
                <input type="text" class="form-control" name="brand" value="<?php echo $row['brand']; ?>">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>">
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label> <br>
                <img src="<?php echo $row['image']; ?>" width="50px" style="margin-bottom:5px" />
                <input type="file" name="fileToUpload">
                <small class="form-text text-muted">Max Size 3mb</small>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>">
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" name="submit" value="Update" />&nbsp;
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </form>
</body>

</html>