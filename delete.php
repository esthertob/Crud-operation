<?php
include 'connect.php';
// if(isset($_GET['deleteid'])){
//     $id = $_GET['deleteid'];

//     $sql = "delete from crud where id = $id";
//     $result = mysqli_query($conn, $sql);
//     if($result){
//         echo "Deleted";
//     }else{
//         die("Connection failed: " . $conn->connect_error);
//     }
// }

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM crud WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "Deleted";
        header('location:display.php');
    } else {
        die("Deletion failed: " . mysqli_error($conn));
    }
}
?>