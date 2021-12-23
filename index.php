<?php include_once 'views/partials/header.php' ?>
<?php if(isset($_GET['redirect'])): ?>
            <?php echo $_GET['redirect'] ?>
        
<?php endif; ?>

<section class="home" id="home">
    <div class="container">
        <div class="column">
            <div class="right">
                <h1>A Simple Bookmark Manager</h1>
                <p class="text">A clean and simple interface to organize your favourite websites. Open a new browser tab and see your sites load instantly. Try it for free.</p>
                <div class="btns">
                    <button>Get it on Chrome</button>
                    <button>Get it on Firefox</button>
                </div>
            </div>
            <div class="left">
                <img src="/images/illustration-hero.svg" alt="hero">
                <div class="shape"></div>
            </div>
        </div>
    </div>
</section>



<a class="whatsapp-btn" target="_blank" href="https://api.whatsapp.com/send?phone=+966555555228"><i class="fab fa-whatsapp"></i></a>

<?php include_once 'views/partials/footer.php' ?>
