<?php 
require_once '../../database.php';
$errors = [];
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$phone = $_POST['phone'] ?? '';
$website = $_POST['website'] ?? '';
$message = $_POST['message'] ?? null;


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!$name){
        $errors[] = 'Please Enter Your Name';
    }
    if(!$email){
        $errors[] = 'Please Enter Your Email';
    }
    if(!$message){
        $errors[] = 'Please Enter Your Message';
    }
    if(empty($errors)){
$redirect = 'Thank you for Messaging Us, We Will contact you Soon!';

$statment = $pdo->prepare('INSERT INTO contacts (name, email, phone_number, website, message, created_date)
                            VALUES (:name, :email, :phone, :website, :message, :date)');
$statment->bindValue(':name',$name);
$statment->bindValue(':email',$email);
$statment->bindValue(':phone',$phone);
$statment->bindValue(':website',$website);
$statment->bindValue(':message',$message);
$statment->bindValue(':date',date('Y-m-d H:i:s'));
$statment->execute();
header("Location: /index.php?redirect=$redirect");
    }
}
?>


<?php include_once '../partials/header.php' ?>
<!-- هنا يبدا شغل ميسو حبيب قلبي❤️🌹😘 -->

<!--

<form method="post" action="">
    <label for="name">Name</label>
    <input class="name" type="text" name="name" placeholder="Please Enter your name">
    <label for="email">Email</label>
    <input name="email" type="email" value="@gmail.com" placeholder="Enter your Email">
    <label for="mobile-phone">Phone Number</label>
    <input type="number" name="mobile" placeholder="Enter your mobile number">
    <label for="message">Message</label>
    <textarea name="message" id="" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
    <input type="submit" value="Send Us Message">
    
</form>
-->

<!-- هنا ينتهي شغل ميسو حبيب قلبي❤️🌹😘 -->
<div class="contact-container">
    <?php if($errors): ?>
            <?php foreach($errors as $error): ?>
                <div class="error-message">
                <?php echo $error .'<br>' ?>
                </div>
            <?php endforeach; ?>
        
    <?php endif; ?>

    <form action="" method="post">
        <h2>Send us a Message</h2>
        <div class="db-field">
            <div class="field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" name="name">
            </div>
            <div class="field">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your eamil" name="email">
                
            </div>
        </div>
        <div class="db-field">
            <div class="field">
                <i class="fas fa-phone-alt"></i>
                <input type="text" placeholder="Enter your phone" name="phone">
            </div>
            <div class="field">
                <i class="fas fa-globe"></i>
                <input type="text" placeholder="Enter your website" name="website">
                
            </div>
        </div>
        <div class="message">
            <i class="fas fa-envelope-square"></i>
            <textarea placeholder="Write your message" name="message"></textarea>
            
        </div>
        <div class="button-area">
            <button type="submit" class="submit-btn">Send Message</button>
            <!-- <span>Sending your message...<span> -->
        </div>
    </form> 
</div>
<?php include_once '../partials/footer.php' ?>