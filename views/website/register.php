<?php

require_once '../../database.php';
require_once '../../functions.php';
// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// echo '<hr>';
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// echo '<hr>';




$errors = [];
$name = '';
$email = '';
$password = '';


if($_SERVER['REQUEST_METHOD'] === 'POST'):
require_once '../../validate_data.php';

$statement = $pdo->prepare('SELECT * FROM register WHERE email = :email');
$statement->bindValue(':email',$email);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC) ?? 0;
// echo '<pre>';
// var_dump($data);
// echo '</pre>';
// echo '<hr>';
$theData = $data[0] ?? 0;
$emailExists = $theData['email'] ?? 0;
// echo '<pre>';
// var_dump($data[0]);
// echo '</pre>';
// echo '<hr>';
// echo '<pre>';
// var_dump($theData['email']);
// echo '</pre>';
// echo '<hr>';



if($emailExists == 0){
    

if(empty($errors)){
    
    $redirect = 'Thank you for Regestration';
$statement =  $pdo->prepare("INSERT INTO register (name, email, password, join_date)
                VALUES (:name,:email , :password, :date)
");
$statement->bindValue(':name',$name);
$statement->bindValue(':email',$email);
$statement->bindValue(':password',$password);
$statement->bindValue(':date',date('Y-m-d H:i:s'));
$statement->execute();
header("Location: /index.php?redirect=$redirect");
    }
}else {
    $errors[] = 'This Email is Already Exist';
}

endif;

?>

<?php include_once '../partials/header.php' ?>

<?php if($errors): ?>
    <div class="danger">
        <?php foreach($errors as $error): ?>
            <?php echo $error .'<br>' ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

    <h1>This is Register Page</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input value="<?php echo $name ?>" name="name" type="text" placeholder="Please Enter Your name">
        <label for="email">Email</label>
        <input value="<?php echo $email ?>" name="email" type="email" placeholder="Please Enter Your Email">
        <label for="password">Password</label>
        <input name="password" type="password" placeholder="Please Enter Your Password">
        <label for="password">Re-enter your Password</label>
        <input name="password2" type="password" placeholder="Please Re-enter your Password">
        <input type="submit">
    </form>
<?php include_once '../partials/footer.php' ?>