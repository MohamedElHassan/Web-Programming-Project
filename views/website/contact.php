<?php 
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// $name = $_POST['name'] ;
// echo $name;
?>

<?php include_once '../partials/header.php' ?>

    <h1>This is Contact Page</h1>
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
    <h2>Send us a Message</h2>
    <form action="#">
        <div class="db-field">
            <div class="field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name">
            </div>
            <div class="field">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your eamil">
                
            </div>
        </div>
        <div class="db-field">
            <div class="field">
                <i class="fas fa-phone-alt"></i>
                <input type="text" placeholder="Enter your phone">
            </div>
            <div class="field">
                <i class="fas fa-globe"></i>
                <input type="text" placeholder="Enter your website">
                
            </div>
        </div>
        <div class="message">
            <i class="fas fa-envelope-square"></i>
            <textarea placeholder="Write your message"></textarea>
            <i class="material-icons">message</i>
        </div>
        <div class="button-area">
            <button type="submit">Send Message</button>
            <span>Sending your message...<span>
        </div>
    </form> 
</div>
<?php include_once '../partials/footer.php' ?>