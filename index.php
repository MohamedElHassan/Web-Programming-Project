<?php include_once 'views/partials/header.php' ?>
<?php if(isset($_GET['redirect'])): ?>
            <?php echo $_GET['redirect'] ?>
        
<?php endif; ?>

<section class="home" id="home">
    <div class="container">
        <div class="column">
            <div class="right">
                <h1>Product Management System</h1>
                <p class="text">A clean and simple interface to organize your Products. Add, Delete, Edit Your Products,  Try it for free.</p>
                <div class="btns">
                    <button>Try It for Free</button>
                    <button>Contact Us now</button>
                </div>
            </div>
            <div class="left">
                <img src="/images/illustration-hero.svg" alt="hero">
                <div class="shape"></div>
            </div>
        </div>
    </div>
</section>
<section class="features" id="features">
    <div class="container">
        <h2 class="title">Features</h2>
        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, optio qui? Suscipit sequi numquam natus.</p>
        <ul class="menu-btns">
            <li data-clickedtab="1">Adding Products</li>
            <li class="active" data-clickedtab="2">Editing Products</li>
            <li data-clickedtab="3">Deleting Products</li>
        </ul>
        <div data-contentnum="1" class="content">
            <div class="column">
                <div class="left">
                    <img src="/images/illustration-features-tab-1.svg" alt="tab1">
                </div>
                <div class="right">
                    <h2>Adding Products</h2>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem unde recusandae architecto reiciendis hic quaerat earum obcaecati, ea dolor? Eum!</p>
                    <a href="">More Info</a>
                </div>
            </div>
        </div>
        <div data-contentnum="2"class="content active">
            <div class="column">
                <div class="left">
                    <img src="/images/illustration-features-tab-2.svg" alt="tab1">
                </div>
                <div class="right">
                    <h2>Editing Products</h2>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem unde recusandae architecto reiciendis hic quaerat earum obcaecati, ea dolor? Eum!</p>
                    <a href="">More Info</a>
                </div>
            </div>
        </div>
        <div data-contentnum="3" class="content">
        <div class="column">
                <div class="left">
                    <img src="/images/illustration-features-tab-3.svg" alt="tab1">
                </div>
                <div class="right">
                    <h2>Deleting Products</h2>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem unde recusandae architecto reiciendis hic quaerat earum obcaecati, ea dolor? Eum!</p>
                    <a href="">More Info</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Don't forget to use SSI tech -->
<!-- #include file name  -->

<?php include_once 'views/website/section3.php' ?>

<a class="whatsapp-btn" target="_blank" href="https://api.whatsapp.com/send?phone=+201557817439"><i class="fab fa-whatsapp"></i></a>

<?php include_once 'views/partials/footer.php' ?>
