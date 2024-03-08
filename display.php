<?php
include 'connection.php';
?>
<body>
    <button><a href= "user.php">Add User</a></button>

    <table >
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "Select * from `crud_data`";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $number = $row['mobile'];
                    $password = $row['password'];

                    

                    echo '
                        <tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $number . '</td>
                            <td>' . $password . '</td>
                            <td>
                            <button><a href="update.php?updateid=' . $id . '">Update</a></button>
                            <button><a href="delete.php?deleteid=' . $id . '">Delete</a></button> 
                            
                            </td>
                        </tr>
                    ';
                }
            }
            ?>

        </tbody>
    </table>
</body>

