<?php

include "db.php";

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query FAILED' . mysqli_error());

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body>

    <div class="w-full h-screen flex items-center justify-center bg-indigo-100">

    <?php
while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
}

?>

    </div>
</body>
</html>