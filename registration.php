<?php
    session_start();
    // header('location:login.php'); for redirection to login page

    $con = mysqli_connect('localhost','root', '');

    mysqli_select_db($con, 'userregistration');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "select * from usertable where name = '$name'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Ooops username is already, please try another name";
    }
    
    else {
        $reg = "insert into usertable(name, password) values ('$name', '$pass')";
        mysqli_query($con, $reg);
        echo "Yessai !! Registration Successfull";
        
        
    }
?>