<?php 
require_once '../../database.php';
require_once '../../functions.php';
$errors = [];
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if($_SERVER['REQUEST_METHOD'] === 'POST'):
    if(!$email){
        $errors[] = 'Please Enter Your Email';
    }
    if(!$password){
        $errors[] = 'Please Enter Your Password';
    }
if(empty($errors)):
$statement = $pdo->prepare('SELECT * FROM register WHERE email = :email');
$statement->bindValue(':email',$email);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC) ?? null;
if(empty($data)){
    $errors[] = 'This Email is not Registered';
    header("Location:/views/website/login.php");
}
$theData = $data[0];

if($theData['password'] === $password){
    $redirect = "Welcome Back, ". $theData['name'];
    header("Location:/index.php?redirect=$redirect");
}else {
    $errors[] = 'Please Enter a Correct Email / Password';
}

endif;
endif;
?>

<?php include_once '../partials/header.php' ?>

<div class="login-container">
    <?php if($errors): ?>
            <div class="error-message">
                <?php foreach($errors as $error): ?>
                    <?php echo $error .'<br>'; ?>
                <?php endforeach; ?>
            </div>
        <?php endif;  ?>
    <form class="login-form" action="" method="post" enctype="multipart/form-data">
        <h3>Login</h3>
        <label for="email">Email</label>
        <input value="<?php echo $email ?>" name="email" type="email" placeholder="Please Enter Your Email">
        <label for="password">Password</label>
        <input name="password" type="password" placeholder="Please Enter Your Password">
        <span>Don't Have an Account Yet, <a href="/views//website/register.php">Register Here</a></span>
        <input class="submit-btn" type="submit" value="Submit">
    </form>
</div>
<?php include_once '../partials/footer.php' ?>