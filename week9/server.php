<?php

session_start(); //a session is a way to store ur input(variable) to be used in several pages
include('config.php');
//this is where we will eventually place our include for out header.php
//connect to the database
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

//register user
// if isset reg_user

if(isset($_POST['reg_user'])) {
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

    // we want the user to fill everything out
    //if it is empty, use new function array_push()

    if(empty($first_name)) {
        array_push($errors, 'First name is required.');
    }

    if(empty($last_name)) {
        array_push($errors, 'Last name is required.');
    }

    if(empty($email)) {
        array_push($errors, 'Email is required.');
    }

    if(empty($username)) {
        array_push($errors, 'Username is required.');
    }

    if(empty($password_1)) {
        array_push($errors, 'Password is required.');
    }

    if($password_1 !== $password_2) {
        array_push($errors, 'Password do not match.');
    }

    //we are checking the username and password and selecting it from the table 
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 "; 
    //limit 1 = no username or email duplicate
    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($result);

    if($rows) {
        if($rows['username'] == $username) {
            array_push($errors, 'Username already exist.');
        }
        if($rows['email'] == $email) {
            array_push($errors, 'Email already exist.');
        }
    } //close big rows

    //if no error => very nice!
    if(count($errors) == 0) {
        //introduce a new function md5() - spit out in your database a 32 hex character of value for your password
        $password = md5($password_1);
        //we must insert our reg data into the table inside the database, and this will happen by using the INSERT
        $query ="INSERT INTO users(first_name, last_name, email, username, password) VALUES('$first_name', '$last_name', '$email', '$username', '$password')";

        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username; //reg username as global
        $_SESSION['success'] = $success;
        
        header('Location:login.php');
    } //end count
} //end if isset reg user

//now, we have to communicate to the login.php

if(isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($username)) {
        array_push($errors, 'Username is required.');
    }
    if(empty($password)) {
        array_push($errors, 'Password is required.');
    }
    //count the errors and if they == 0 => yay!
    if (count($errors) == 0) {
        $password = md5($password);
    }

    //we have to make sure that there is only one username and one password
    //we will SELECT info from our table
    $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($iConn, $query);

    //if our username and password is == 1, life is good
    if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = $success;
        //if we're successful, go to index.php
        header('Location:index.php');
    } else {
        array_push($errors, 'Wrong username and/or password.');
    }
} //end isset log in