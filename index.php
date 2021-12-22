<?php include_once 'views/partials/header.php' ?>
<?php if(isset($_GET['redirect'])): ?>
            <?php echo $_GET['redirect'] ?>
        
<?php endif; ?>

<h1>This is Home page</h1>

    

<a class="whatsapp-btn" target="_blank" href="https://api.whatsapp.com/send?phone=+966555555228"><i class="fab fa-whatsapp"></i></a>

<?php include_once 'views/partials/footer.php' ?>
