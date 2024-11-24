<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add user</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `crud`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $email = $row["email"];
                        $mobile = $row["mobile"];
                        $password = $row["password"];
                        echo '
         <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      <td>' . $mobile . '</td>
      <td>' . $password . '</td>
      <td>
                                <button class="btn btn-primary">
                                    <a href="update.php?updateid=' . $id . '" class="text-light" style="text-decoration: none;">Update</a>
                                </button>
                                <button class="btn btn-danger">
                                    <a href="delete.php?deleteid=' . $id . '" class="text-light" style="text-decoration: none;">Delete</a>
                                </button>
                            </td>
    </tr>';
                    }
                }
                ?>




    </div>
</body>

</html>