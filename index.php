<?php

$directory = '/site';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Danny Yassine</title>
    <meta charset="UTF-8">
    <meta name="description" content="Danny Yassine">
    <meta name="keywords" content="web, developer, portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?=$directory?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=$directory?>/css/reset.css"/>
    <link rel="stylesheet" href="<?=$directory?>/css/magnific-popup.css"/>
    <link rel="stylesheet" href="<?=$directory?>/css/animate.css"/>
    <link rel="stylesheet" href="<?=$directory?>/css/style.css"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/>

    <!-- Font icons -->
    <link rel="stylesheet" href="<?=$directory?>/icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css"/>
    <link rel="stylesheet" href="<?=$directory?>/icon-fonts/etlinefont/style.css"/>

</head>
<body>

<!-- LOADER -->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>


<!-- Fixed Header -->
<header class="fixed fixed-top">
    <div class="logo">
        <h1 id="name-header-title">Danny Yassine</h1>
        <!-- <img src="images/logo.png" alt=""> -->
    </div>
    <div class="nav-icon">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

<!-- FULL MENU -->
<div class="right-menu">
    <div class="menu-close"></div>
    <div class="right-inner">
        <nav>
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#whatwedo">What We Do</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#blogs">Blogs</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="right-copyright">
            <!-- <p>Copyright © 2018 Los Angeles, All rights Reserved. <br>
Created by tavonline</p> -->
        </div>
    </div>
</div>

<!-- HOME -->
<section id="home" class="home">
    <div class="home-content">
        <h1><span class="element" data-text1="Hi, I'm Danny" data-text2="Web Developer" data-text3="Mobile Developer" data-loop="true" data-backdelay="3000"></span></h1>
        <div class="social top_30">
            <a href="#"><i class="fab fa-facebook"></i>  </a>
            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
            <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
            <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
        </div>
        <a class="home-down bounce active" href="#about"><i class="fa fa-angle-down"></i></a>
    </div>
    <!-- bottom shape -->
    <svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>
</section>

<!-- ABOUT SECTION -->
<section class="about white-bg padbot_120" id="about">
    <div class="container">
        <div class="section-title bottom_15">
            <h2 class="title wow fadeInUp" data-wow-delay="0.2s">ABOUT ME <span class="number">01</span> </h2>
        </div>
        <div class="row bottom_60 top_90">
            <div class="col-lg-5 col-md-6 image wow fadeInUp" data-wow-delay="0.4s">
                <img src="<?=$directory?>/images/me.png" alt="">
            </div>
            <div class="col-lg-6 col-md-6 offset-lg-1 text wow fadeInUp" data-wow-delay="0.6s">
                <p>Experienced Mobile and Web Engineer with a demonstrated history of working and building entreprise applications.</p>
                <br>
                <p>Currently working as a Web Engineer for TapCanada in Montreal, Canada.</p>
                <p> <br></p>
            </div>
        </div>
    </div>
    <!-- bottom shape -->
    <svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>
</section>

<!-- WHAT CAN WE DO SECTION -->
<section class="whatwedo gray-bg padbot_120" id="whatwedo">
    <div class="container">
        <div class="section-title bottom_15">
            <h2 class="title wow fadeInUp" data-wow-delay="0.2s">My Passions<span class="number">02</span> </h2>
        </div>
        <div class="row bottom_60">
            <div class="col-md-4 col-sm-6 service text-center bottom_90 wow fadeInUp" data-wow-delay="0.4s">
                <i class="icon-desktop"></i>
                <h3 class="title top_30">Web Development</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
            <div class="col-md-4 col-sm-6  service text-center bottom_90 wow fadeInUp" data-wow-delay="0.6s">
                <i class="icon-tools"></i>
                <h3 class="title top_30">Architecture</h3>
                <p>Clean code, Domain Driven Design</p>
            </div>
            <div class="col-md-4 col-sm-6  service text-center bottom_90 wow fadeInUp" data-wow-delay="0.8s">
                <i class=" icon-paintbrush"></i>
                <h3 class="title top_30">Test Driven Development</h3>
                <p>Yup</p>
            </div>
            <div class="col-md-4 col-sm-6  service text-center wow fadeInUp" data-wow-delay="1.0s">
                <i class="icon-phone"></i>
                <h3 class="title top_30">Mobile Development</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
            <div class="col-md-4 col-sm-6  service text-center wow fadeInUp" data-wow-delay="1.2s">
                <i class=" icon-camera"></i>
                <h3 class="title top_30">Photography</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.</p>
            </div>
            <div class="col-md-4 col-sm-6  service text-center wow fadeInUp" data-wow-delay="1.4s">
                <i class="icon-lightbulb"></i>
                <h3 class="title top_30">UI / UX</h3>
                <p>If you are trying to explain something, it may already be too late.</p>
            </div>
        </div>
    </div>
    <!-- bottom shape -->
    <svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>
</section>

<!-- PORTFOLIO SECTION -->
<section class="portfolio white-bg padbot_120" id="portfolio">
    <div class="container bottom_60">
        <div class="section-title bottom_15 wow fadeInUp" data-wow-delay="0.2s">
            <h2 class="title">Portfolio<span class="number">03</span> </h2>
            <div class="portfolio_filter">
                <ul>
                    <li data-filter=".web-design">Web Development</li>
                    <li data-filter=".aplication">Mobile Development</li>
                    <li data-filter=".development">Development</li>
                    <li class="select-cat" data-filter="*">All Works</li>
                </ul>
            </div>
        </div>
        <!--Portfolio Items-->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="isotope_items row">
                    <!-- Item -->
                    <a href="https://www.youtube.com/watch?v=M-M3rdL_WLQ" class="popup-youtube single_item link development col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <i class="fa fa-play" aria-hidden="true"></i>
                        <img src="<?=$directory?>/images/work-1.jpg" alt="">
                    </a>
                    <!-- Item -->
                    <a href="images/work-2.jpg" class="single_item link aplication col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                        <img src="<?=$directory?>/images/work-2.jpg" alt="">
                    </a>
                    <!-- Item -->
                    <a href="images/work-3.jpg" class="single_item link development col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                        <img src="<?=$directory?>/images/work-3.jpg" alt="">
                    </a>
                    <!-- Item -->
                    <a href="images/work-4.jpg" class="single_item link web-design col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.0s">
                        <img src="<?=$directory?>/images/work-4.jpg" alt="">
                    </a>
                    <!-- Item -->
                    <a href="images/work-5.jpg" class="single_item link aplication col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
                        <img src="<?=$directory?>/images/work-5.jpg" alt="">
                    </a>
                    <!-- Item -->
                    <a href="images/work-6.jpg" class="single_item link aplication col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.4s">
                        <img src="<?=$directory?>/images/work-6.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- bottom shape -->
    <svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>
</section>

<!-- BLOG SECTION -->
<section class="blogs gray-bg padbot_120" id="blogs">
    <div class="container bottom_60">
        <div class="section-title bottom_15">
            <h2 class="title wow fadeInUp" data-wow-delay="0.2s">Recent Blogs<span class="number">04</span> </h2>
        </div>
        <div class="row">
            <!-- blog 1 -->
            <a href="single-blog.html" class="col-md-4 blog wow fadeInUp" data-wow-delay="0.4s">
                <div class="image">
                    <img src="<?=$directory?>/images/blog-1.jpg" alt="">
                </div>
                <span>LIFESTYLE</span>
                <h3 class="title">His boss would certainly come round with the doctor from the medical...</h3>
                <div class="date">02 March, 2018</div>
            </a>
            <!-- blog 2 -->
            <a href="single-blog.html" class="col-md-4 blog wow fadeInUp" data-wow-delay="0.6s">
                <div class="image">
                    <img src="<?=$directory?>/images/blog-2.jpg" alt="">
                </div>
                <span>FASHION</span>
                <h3 class="title">Gregor then turned to look out the window at the dull weather.</h3>
                <div class="date">02 March, 2018</div>
            </a>
            <!-- blog 3 -->
            <a href="single-blog.html" class="col-md-4 blog wow fadeInUp" data-wow-delay="0.8s">
                <div class="image">
                    <img src="<?=$directory?>/images/blog-3.jpg" alt="">
                </div>
                <span>EVENT</span>
                <h3 class="title">One morning, when Gregor Samsa woke from troubled dreams.</h3>
                <div class="date">02 March, 2018</div>
            </a>
        </div>
        <a href="blogs.html" class="site-btn wow fadeInUp" data-wow-delay="1.0s">Load More </a>
    </div>
    <!-- bottom shape -->
    <svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>
</section>

<!-- CONTACT -->
<section class="contact last-section" id="contact">
    <div class="container text-center padbot_120">
        <div class="col-md-8 offset-md-2">
            <div class="section-title">
                <h2 class="title wow fadeInUp" data-wow-delay="0.2s">GET IN TOUCH<span class="number">05</span> </h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Out believe has request not how comfort evident. Up delight cousins we feeling minutes.
                Genius has looked end piqued spring.</p>
            <div class="information top_30 wow fadeInUp" data-wow-delay="0.6s">
                <a href="#">info@laagency.com</a><br>
                <a href="#">49 876 54 321</a>
            </div>
            <div class="social top_30 wow fadeInUp" data-wow-delay="0.8s">
                <a href="#"><i class="fab fa-facebook"></i>  </a>
                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
            </div>
            <!-- Contact Form -->
            <form class="contact-form top_60 wow fadeInUp" data-wow-delay="1.0s" method="POST">
                <div class="row">
                    <!--Name-->
                    <div class="col-md-6">
                        <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Name">
                    </div>
                    <!--Email-->
                    <div class="col-md-6">
                        <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Email">
                    </div>
                    <div class="col-md-12">
                        <!--Message-->
                        <textarea name="con_message" id="con_message" class="requie" placeholder="How can we help you?" rows="8"></textarea>
                        <button id="con_submit" class="site-btn top_60 pull-right" type="submit">Send a Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- bottom shape -->
    <svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L0 10 Z"></path>
    </svg>
    <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
        <path d="M0 100 L100 100 L100 10 Z"></path>
    </svg>
</section>

<footer>
    <div class="container text-center">
        <div class="social top_30 bottom_15">
            <a href="#"><i class="fab fa-facebook"></i>  </a>
            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
            <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
            <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
        </div>
        <p>Copyright © 2018 Los Angeles, All rights Reserved. <br>
            Created by tavonline</p>
    </div>

</footer>






<!-- Javascripts -->
<script src="<?=$directory?>/js/jquery-2.1.4.min.js"></script>
<script src="<?=$directory?>/js/typed.js"></script>
<script src="<?=$directory?>/js/isotope.pkgd.min.js"></script>
<script src="<?=$directory?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?=$directory?>/js/wow.min.js"></script>
<script src="<?=$directory?>/js/main.js"></script>

</body>
</html>