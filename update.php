<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql = "Select * from crud where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "update crud set id =$id, name ='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
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
            <input type="text" id="name" name="name" value="<?php echo $name;?>"required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"  value="<?php echo $password;?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"  value="<?php echo $email;?>" required>
        </div>

        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="tel" id="mobile" name="mobile"  value="<?php echo $mobile;?>"required>
        </div>

        <button type="submit" name="submit">Update</button>
    </form>
</div>
</div>
</body>
</html>