<?php

$connection = mysqli_connect("localhost", "root","", "localuser(databasename)");
if($connection) {
    echo "successful"
};

    else{

        die("Database failed");
    }

    $query = "INSERT INTO user(tablename)(username, password) ";
    $query .= "VALUES ('$username', '$password' )";

   $result = mysqli_query ($connection, $query);

   if(!$result) {

    die("query failed" . mysqli_error );

   }
  $query_select = "SELECT * FROM  users";
    



if (isset($_POST['sumbit'])){

$username = $_POST['username'];
$password = $_POST['password'];

echo 'HELLO' .$username;
echo'Your password is'  .$password;

// name validation

if(strlen($username) < 5 ) {

 echo  "Too Short";
}


}



?>



<!DOCTYPE html>

<html>

<head>



</head>

<body>


<?php

while ($row = mysqli_fetch_row($result)) {

    print_r($row);

}



?>
    <form action="" method="post">

        
        <input type="text" placeholder="name" name="username">
        <input type="text" placeholder="password" name="password">
        
        <button type="submit" name="sumbit">submit</button>


 </form>
    



</body>

</html>
