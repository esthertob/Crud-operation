<?php
include 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <button type="button" class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php 
                            $no =1;
                            $query = mysqli_query($conn, "SELECT * FROM crud");

                            // PHP FOR THE WHILE LOOP BEGINS
                            while($row = mysqli_fetch_array($query)){
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $mobile = $row['mobile'];
                                $password = $row['password'];
                            
                            ?>
                          


<th scope="row"><?php echo $id; ?></th>
<td><?php echo $name; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $mobile; ?></td>
<td><?php echo $password; ?></td>
<td>
<button type="button" class="btn btn-primary"><a href="update.php?updateid=<?php echo $id; ?>" class="text-light">Update</a></button>
<button type="button" class="btn btn-danger"><a href="delete.php?deleteid=<?php echo $id; ?>" class="text-light">Delete</a></button>
</td>
</tr>
<?php }?>



  </tbody>
</table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>