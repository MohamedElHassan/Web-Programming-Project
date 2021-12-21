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
    // if(!is_dir(__DIR__.'/public/images')) mkdir(__DIR__.'/public/images');
    // if(empty($errors)){
    //         $imagePath= $product['image'];
    //         $image = $_FILES['image'] ?? null;
    //         if($image && $image['tmp_name']){
    //             if($product['image']){
    //                 unlink(__DIR__.'/public/'.$product['image']);
    //             }
    //             $imagePath = 'images/'.randomString(8).'/'.$image['name'];
    //             mkdir(dirname(__DIR__ . '/public/' . $imagePath));
    //             move_uploaded_file($image['tmp_name'],__DIR__ . '/public/' . $imagePath);
    //         }
    //     }