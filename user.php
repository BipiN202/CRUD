<!DOCTYPE html>
<html>
<head>
    <title>Your Page Title</title>
    <style>
    
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('https://source.unsplash.com/1600x900/?landscape');
        margin: 0;
        padding: 0;
        
    }

    form {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border radius: 3px;
    }

    form label {
        display: block;
        margin-bottom: 5px;
    }

    form input[type="text"], form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
    }

    form button {
        padding: 10px 20px;
        background-color: #007BFF;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    form button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
<?php
include 'connection.php';
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $sql = "insert into `crud_data` (name,email,mobile,password)
    values('$name', '$email', '$number', '$password')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data inserted successfully <br>";
        // header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>   
</body>




<body>
    <form method = "post">
        <lable> Name:</label>
        <input type = "text" name ="name">
        <br><br>
        <lable> Email:</label>
        <input type = "text" name ="email">
        <br><br>
        <lable> Mobile no:</label>
        <input type = "text" name ="number">
        <br><br>
        <lable> Password:</label>
        <input type = "password" name ="password">
        <br><br>
        <button type = "submit" name="submit">Submit</button>

</form>
</body>


</html>