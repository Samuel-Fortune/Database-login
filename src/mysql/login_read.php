<?php

include "db.php";
include "function.php";

readRows();

?>
<?php include "includes/header.php";?>

    <div class="w-full h-screen flex items-center justify-center bg-indigo-100">

    <?php readRows(); ?>

<?php include "includes/footer.php";?>