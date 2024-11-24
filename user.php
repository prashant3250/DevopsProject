<?php
include 'connect.php'; 
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];

  $sql = "INSERT INTO `crud` (name, email, password, mobile) VALUES ('$name', '$email', '$password', '$mobile')";

  $result = mysqli_query($conn, $sql); 

  if ($result) {
    //echo "Data inserted successfully";
    header('location:display.php');
  } else {
    die(mysqli_error($conn));
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>CRUD OPERATION</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
      </div>

      <div class="form-group my-2">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off">
      </div>

      <div class="form-group my-2">
        <label>Mobile No.</label>
        <input type="text" class="form-control" placeholder="Enter your Mobile No." name="mobile" autocomplete="off">
      </div>

      <div class="form-group my-2">
        <label>Password</label>
        <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
    </form>
  </div>
</body>

</html>
