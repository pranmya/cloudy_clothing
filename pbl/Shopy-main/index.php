<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Google Fonts Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/swiper.css" />
        <link rel="stylesheet" href="assets/css/variables.css">

        <!-- JavaScript -->
        <script src="assets/js/swiper.js"></script>
        <script src="assets/js/scrollReveal.js"></script>
        <script src="assets/js/script.js" defer type="module"></script>
        <script src="assets/js/ProductCard.js"></script>
        <script src="assets/js/TrendingCard.js"></script>
        <script src="assets/js/scrollReveal.js"></script>



        <title>Shopy</title>
    </head>
    <body>
        <!-- ============= Header ============= -->
        <header class="header">
            <nav class="header__container container">
                <div class="header__logo">
                    <h1><a href="./">Cloudy.</a></h1>
                </div>
                <ul class="header__links">
                    <li class="header__link">
                        <a href="#home" class="active">home</a>
                    </li>
                    <li class="header__link">
                        <a href="#new">MENS</a>
                    </li>
                    <li class="header__link">
                        <a href="#shop">WOMENS</a>
                    </li>
                    <li class="header__link">
                        <a href="#trending">trending</a>
                    </li>
                    <li class="header__link">
                        <a href=""><span class="material-symbols-outlined">shopping_bag</span></a>
                    </li>
                </ul>
                <div class="header__btn">
                    <span style="--i: 0"></span>
                    <span style="--i: 10"></span>
                    <span style="--i: 20"></span>
                </div>
            </nav>
        </header>

        <!-- ============= Home Section ============= -->

        <section class="section home" id="home">
            <div class="home__content swiper">
                <div class="swiper-wrapper">
                    <div class="home__slide swiper-slide">
                        <div class="home__image">
                            <img src="./assets/images/home1.jpg" alt="home1" />
                        </div>
                        <div class="home__description">
                            <p class="home__sub-heading">new brand collection</p>
                            <h1 class="home__heading">awesome designs</h1>
                        </div>
                    </div>
                    <div class="home__slide swiper-slide">
                        <div class="home__image">
                            <img src="./assets/images/home2.jpg" alt="home2" />
                        </div>
                        <div class="home__description">
                            <p class="home__sub-heading">get 50% off</p>
                            <h1 class="home__heading">modern designs</h1>
                        </div>
                    </div>
                    <div class="home__slide swiper-slide">
                        <div class="home__image">
                            <img src="./assets/images/home3.png" alt="home3" />
                        </div>
                        <div class="home__description">
                            <p class="home__sub-heading">new women collection</p>
                            <h1 class="home__heading">unique designs</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#shop" class="home__btn btn shop-btn">shop now</a>
            <a href="#new" class="home__btn btn go-down-btn">
                <span class="material-symbols-rounded icon">arrow_downward</span>
                <p class="circle-text">Explore more</p>
            </a>
        </section>

        <!-- ============= New Section ============= -->

        <section class="section new" id="new">
            <div class="section__title">
                <h1>new arrivals</h1>
            </div>
            <div class="new__container container">
                <div class="new__btns swiper-btns">
                    <button class="swiper-btn swiper-button-prev btn btn-border btn-border-black" id="arrow-left">
                        <span class="material-symbols-rounded"> arrow_back_ios_new </span>
                    </button>
                    <button class="swiper-btn swiper-button-next btn btn-border btn-border-black" id="arrow-right">
                        <span class="material-symbols-rounded"> arrow_forward_ios </span>
                    </button>
                </div>
                <div class="new__content swiper">
                    <div class="new__products products swiper-wrapper"></div>
                </div>
            </div>
        </section>

        <!-- ============= Shop Section ============= -->

        <section class="section shop" id="shop">
            <div class="section__title">
                <h1>shop</h1>
            </div>
            <div class="shop__container container">
                <div class="shop__content">
                    <div class="shop__categories">
                        <button class="shop__category btn btn-border btn-border-black selected" data-category="all">all</button>
                        <a href="men.html"><button class="shop__category btn btn-border btn-border-black" data-category="men">men</button></a>
                        <a href="women.html"><button class="shop__category btn btn-border btn-border-black" data-category="women">women</button>
                        </a>
                    </div>
                    <div class="shop__products products"></div>
                </div>
            </div>
        </section>

        <!-- ============= Trending Section ============= -->

        <section class="section trending" id="trending">
            <div class="section__title">
                <h1>what's trending</h1>
            </div>
            <div class="trending__container container">
                <div class="trending__content swiper">
                    <div class="trending__products swiper-wrapper"></div>
                </div>
            </div>
        </section>

        <!-- ============= Subscribe Section ============= -->

        <section class="section subscribe">
            <div class="section__title">
                <h1>newsletter</h1>
            </div>
            <div class="subscribe__container container">
                <div class="subscribe__text">
                    <p>subscribe to our newsletter to get what's new in products</p>
                </div>
                <form class="form" autocomplete="off">
                    <input type="text" class="form__input" name="email" id="email" placeholder="Subscribe" />
                    <button type="submit" class="form__btn btn btn-border btn-border-white">subscribe</button>
                </form>
            </div>
        </section>

        <!-- ============= Footer ============= -->

        <footer class="footer">
            <div class="footer__container container">
                <div class="footer__col">
                    <div class="footer__logo">
                        <h1>
                            <a href="./">CLoudy.</a>
                        </h1>
                    </div>
                    <div class="footer__description">
                        <p>Where Fashion Meets The Sky.</p>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__title">
                        <h3>company</h3>
                        <ul class="footer__links">
                            <li class="footer__link"><a href="#home">Home</a></li>
                            <li class="footer__link"><a href="#new">MENS</a></li>
                            <li class="footer__link"><a href="#shop">WOMENS</a></li>
                            <li class="footer__link"><a href="#trending">Trending</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__title">
                        <h3>information</h3>
                        <ul class="footer__links">
                            <li class="footer__link">
                                <a href="#">
                                    <span class="material-symbols-rounded"> location_on </span>
                                    <p>Nashik Maharashtra</p>
                                </a>
                            </li>
                            <li class="footer__link">
                                <a href="#">
                                    <span class="material-symbols-rounded"> schedule </span>
                                    <p>
                                        Thursday-Saturday <br />
                                        9AM - 12PM
                                    </p>
                                </a>
                            </li>
                            <li class="footer__link">
                                <a href="tel:+12334567775">
                                    <span class="material-symbols-rounded"> call </span>
                                    <p>+917821862723</p>
                                </a>
                            </li>
                            <li class="footer__link">
                                <a href="mailto:shopy@gmail.com">
                                    <span class="material-symbols-rounded"> mail </span>
                                    <p>cloudyclothing@gmail.com</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__title">
                        <h3>social media</h3>
                    </div>
                    <ul class="footer__links">
                        <li class="footer__link"><a href="">Instagram</a></li>
                        <li class="footer__link"><a href="">Facebook</a></li>
                        <li class="footer__link"><a href="">Whatsapp</a></li>
                        <li class="footer__link"><a href="">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__copyRight">
                <p>&copy; 2023 <span>CodingWeb</span> All Rights Reserved</p>
            </div>
        </footer>

        <!-- ============= Scroll UP ============= -->
        <button class="scroll-up btn btn-border btn-border-black"><span class="material-symbols-rounded"> arrow_upward </span></button>
    </body>
</html>
