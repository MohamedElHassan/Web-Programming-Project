<?php 
require_once '../../database.php';
require_once '../../functions.php';
$errors = [];
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// echo '<hr>';
if($_SERVER['REQUEST_METHOD'] === 'POST'):
if(empty($errors)):
$statement = $pdo->prepare('SELECT * FROM register WHERE email = :email');
$statement->bindValue(':email',$email);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC) ?? null;

$theData = $data[0];

// echo '<pre>';
// var_dump($data);
// echo '</pre>';
// echo '<hr>';

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

    <h1>This is Login Page</h1>

    <?php if($errors): ?>
        <div class="danger">
            <?php foreach($errors as $error): ?>
                <?php echo $error; ?>
            <?php endforeach; ?>
        </div>
    <?php endif;  ?>


<!-- هنا يبدا شغل محمد عبد السلام -->

    <form action="" method="post" enctype="multipart/form-data">
        <label for="email">Email</label>
        <input value="<?php echo $email ?>" name="email" type="email" placeholder="Please Enter Your Email">
        <label for="password">Password</label>
        <input name="password" type="password" placeholder="Please Enter Your Password">
        <input type="submit">
    </form>
    <span>Don't Have an Account Yet,<a href="/views//website/register.php">Register Here</a></span>
<!-- هنا ينتهي شغل محمد عبد السلام -->

<?php include_once '../partials/footer.php' ?>