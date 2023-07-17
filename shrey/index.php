<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body{
            margin: 50px;
        }
    </style>
</head>
<body>
    <h2>Account Details: </h2>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>U-TYPE</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $servicename = "localhost";
            $username ="root";
            $password ="";
            $database = "user_db";

            $connection = new mysqli($servicename , $username , $password , $database);

            if ($connection -> connect_error) {
                die("connection failed : ".$connection -> connect_error);
            }

            $sql = "SELECT id,name,email,user_type FROM user_form";
            $result = $connection -> query($sql);

            if (!$result) {
                die("Invalid query: ".$connection->error);
            }

            while ($row = $result->fetch_assoc()) {
                # code...
                echo"<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["user_type"] . "</td>
                <td>
                    <a class='btn btn-primary btn-sm' href='update'>Update</a>
                    <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                </td>
                </tr>";
            }
            
            ?>
        </tbody>

    </table>
</body>
</html>