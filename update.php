<?php
include 'connection.php';

$id = $_GET['updateid'];
$sql = "select * from `crud_data` where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$number = $row['mobile'];
$password = $row['password'];
?>
<body>
    <form method = "post">
        <lable> Name:</label>
        <input type = "text" name ="name" value=<?php echo $name;?>>
        <br><br>
        <lable> Email:</label>
        <input type = "text" name ="email" value=<?php echo $email;?>>
        <br><br>
        <lable> Mobile no:</label>
        <input type = "text" name ="number" value=<?php echo $number;?>>
        <br><br>
        <lable> Password:</label>
        <input type = "password" name ="password"value=<?php echo $password;?>>
        <br><br>
        <button type = "submit" name="submit">Update</button>

</form>
</body>
<?php


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $sql = "update crud_data set id=$id, name='$name', email='$email', mobile = '$number',
    password = '$password'
    where id=$id";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data updated successfully <br>";
        //header('location;display.php');
    } else{
        die(mysqli_error($conn));
    }
}
?>

