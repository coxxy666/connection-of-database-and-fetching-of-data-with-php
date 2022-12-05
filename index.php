<?php

if (isset($_POST['sumbit'])){

$username = $_POST['username'];
$password = $_POST['password'];

echo 'HELLO' .$username;
echo'Your password is'  .$password;

// name validation

if(strlen($username) < 5 ) {

 echo "Too Short";
}


}



?>



<!DOCTYPE html>

<html>

<head>



</head>

<body>

    <form action="" method="post">

        
        <input type="text" placeholder="name" name="username">
        <input type="text" placeholder="password" name="password">
        
        <button type="submit" name="sumbit">submit</button>


 </form>
    



</body>

</html>