<?php 
    if(isset($_POST['submit'])){
       $username =  $_POST['username'];
       $password =  $_POST['password'];

       if(strlen($username) < 5){
        echo "Username has to be longer than 5";


       }
       //echo "Your username is ", $username;
       //echo "Your password is ", $password;

       if(strlen($username) > 10){
        echo "Username cannot be more than 10";

       }

       

       $name = ['samuel', 'fortune', 'chibueze'];

       if(!in_array($username, $name)){
        echo "Username not found";

       }else{
        echo "WELCOME";
       }

    }

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter username"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="submit">

    </form>    

    
</body>
</html>