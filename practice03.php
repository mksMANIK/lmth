<?php 
    $conn=mysqli_connect("localhost","root","","form");

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $password=$_POST['password'];

        $sqli="INSERT INTO data(name,password) values('$name','$password')";
        $result=mysqli_query($conn,$sqli);
        if($result==TRUE){
            echo "Data submited";

        }else{
        echo "NOT submited";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="password">Password:</label>
    <input type="password" name="Password" id="password">
    <button type="submit" name="submit">Submit</button>
    
    </form>
</body>
</html>