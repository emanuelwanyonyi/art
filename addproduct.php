<?php
// Include config file
require_once "db/config.php";
$name = $code = $image = $price = $filerror = $category = "";
// $filerror = $_FILES["photo"]["error"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Check if file was uploaded without errors
  if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    $filename = $_FILES["photo"]["name"];
    $filetype = $_FILES["photo"]["type"];
    $filesize = $_FILES["photo"]["size"];
    $filerror = $_FILES["photo"]["error"];

    // Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

    // Verify file size - 5MB maximum
    $maxsize = 5 * 1024 * 1024;
    if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

    // Verify MYME type of the file
    if(in_array($filetype, $allowed)){
        // Check whether file exists before uploading it
        if(file_exists("product-images/" . $filename)){
            echo $filename . " is already exists.";
        } else{
            $name=trim($_POST["name"]);
            $code=trim($_POST['code']);
            $image=trim($_POST['image']);
            $price=trim($_POST['price']);
            $category=trim($_POST['category']);
          
            // Prepare an insert statement
            $sql = "INSERT INTO tblproduct (name, code, image, price, category) VALUES (?,?,?,?,?)";
           
            if($stmt = mysqli_prepare($link, $sql)){
              // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "sssds", $param_name, $param_code, $param_image, $param_price, $param_category);
              
              /* Set the parameters values and execute
              the statement again to insert another row */
              // create a variable
              $param_name = $name;
              $param_code=$code;
              $param_image = "product-images/" . $filename;
              $param_price = $price;
              $param_category = $category;
          
              // Attempt to execute the prepared statement
              if(mysqli_stmt_execute($stmt)){
                  // Redirect to login page
                  header("location: addproduct.php");
              } else{
                  echo "Something went wrong. Please try again later." . mysqli_error($link);
              }
              mysqli_stmt_close($stmt);
            } else{
              echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
            }
           
            // Close connection
            mysqli_close($link);

            move_uploaded_file($_FILES["photo"]["tmp_name"], "product-images/" . $filename);
            echo "Your file was uploaded successfully.";
        } 
    } else{
        echo "Error: There was a problem uploading your file. Please try again."; 
    }
} else{
    echo "Error: " . $filerror;
}

 
}

?>

<!DOCTYPE html>
<html>
<head>
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
  padding: 15px;
}
.bs-example{
  margin: 20px;
}

form {
  margin: 0 auto;
  padding: 15px;
  border: 1px;
  border-style: solid;
  border-radius: 6px;
  border-color: gray;
  width: 1000px;
  align: center;
}
/* label{display:inline-block;width:100px;margin-bottom:10px;} */
</style>
<title>Fancy Art</title>
</head>
<body>
<div class="bs-example">
<nav class="navbar navbar-light bg-light">
 <h2>Fancy Arts</h2>
</nav>
<form method="post" action="" enctype="multipart/form-data"> 
<p>Add a New Product</p>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Product Name:</label>
  <div class="col-sm-5">
  <input type="text" class="form-control"  name="name" placeholder="Product Name" selected required>
</div>
</div>

<div class="form-group row">
  <label class="col-sm-2 col-form-label">Product Description:</label>
  <div class="col-sm-5">
  <input type="text" class="form-control" name="code" placeholder="Product Description" required>
</div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Product Category:</label>
  <div class="col-sm-5">
  <select name="category" class="form-control" required>
     <option value="graffitti">Drawings</option>
     <option value="graffitti">Graffitti</option>
     <option value="paintings">Paintings</option>
     <option value="photography">Photography</option>
  </select>
</div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Product Image:</label>
  <div class="col-sm-5">
  <input type="file" class="form-control" name="photo" placeholder="Product Image" required>
</div>
</div>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Product Price:</label>
  <div class="col-sm-5">
  <input type="number" min="1.00" max="1000000.00" step="0.01" name="price" placeholder="Product Price" required>
</div>
</div>
<div class="form-group row">
  <div class="col-sm-10 offset-sm-2">
    <input type="submit" class="btn btn-primary" value="Save">
    &nbsp   &nbsp &nbsp   &nbsp
    <a class="btn btn-secondary" href="drawings.php">Back To Shop</a>
  </div>
</div>
  </form>
</div> 
</body>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>