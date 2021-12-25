<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if(!$name){
        $errors[] = 'Please Enter Your Name';
    }
    if(!$email){
        $errors[] = 'Please Enter Your Email';
    }
    if(!$password){
        $errors[] = 'Please Enter Your Password';
    }
    if(!($password === $password2)){
        $errors[] = 'Please Type the same Password';
    }