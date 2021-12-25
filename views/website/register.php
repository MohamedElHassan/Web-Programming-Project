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
                VALUES (:name, :email, :password, :date)
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


<div class="register-container">
    <?php if($errors): ?>
        
            <?php foreach($errors as $error): ?>
                <div class="error-message">
                <?php echo $error .'<br>' ?>
                </div>
            <?php endforeach; ?>
        
    <?php endif; ?>
    <form class="register-form" action="" method="post" enctype="multipart/form-data">
        <h3>Registration</h3>
        <div class="cont">
            <div class="cont1">
                <label for="name">Name</label>
                <input value="<?php echo $name ?>" name="name" type="text" placeholder="Please Enter Your name">
                <label for="email">Email</label>
                <input value="<?php echo $email ?>" name="email" type="email" placeholder="Please Enter Your Email">
            </div>
            <div class="cont2">
                <label for="password">Password</label>
                <input name="password" type="password" placeholder="Please Enter Your Password">
                <label for="password">Re-enter your Password</label>
                <input name="password2" type="password" placeholder="Please Re-enter your Password">
                
            </div>
        </div>
        <input class="submit-btn" type="submit" value="Register">
    </form>
</div>
<?php include_once '../partials/footer.php' ?>