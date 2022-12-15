<?php 
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $name = ['samuel', 'fortune', 'chibueze'];

        if(strlen($username) < 5){
            echo "Username has to be longer than 5";

        }

        if(strlen($username) > 10){
            echo "Username cannot be more than 10";

        }
        if(!in_array($username, $name)){
            echo "User not found";

        }else{
            echo "Welcome";
        }

        //echo "Hello", $username;
        //echo "Your password is ", $password;

    }

   

?>