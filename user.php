<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "insert into crud (name,password,email,mobile) values ('$name', '$password', '$email', '$mobile')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        // echo "Data Inserted";
        header('location:display.php');
    }else{
        die("Connection failed: " . $conn->connect_error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
<div class="container">
<div class="registration-form">
    <form method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="tel" id="mobile" name="mobile" required>
        </div>

        <button type="submit" name="submit">Register</button>
    </form>
</div>
</div>
</body>
</html>