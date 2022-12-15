<?php

include "db.php";

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query FAILED' . mysqli_error());

}

?>
<?php include "includes/header.php";?>

    <div class="w-full h-screen flex items-center justify-center bg-indigo-100">

    <?php
while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
}

?>

<?php include "includes/footer.php";?>