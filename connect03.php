<?php

    $con=mysqli_connect("localhost","root","","form");

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];

        $sql=" INSERT INTO dataa(name, email, Phone_Number, Password, Gender) values ('$name','$email','$phone','$password','$gender')";

        $result=mysqli_query($con,$sql);
        if($result==True){
          echo "Data is Inserted";
        }else{
            echo "Not inserted";
        }
    }

?>