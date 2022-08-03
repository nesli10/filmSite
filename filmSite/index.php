<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anasayfa</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/anasayfaslider.css" type="text/css">


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">ANASAYFA</a></li>
                                <!-- <li><a href="./categories.html">KATEGORİLER <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">kategori</a></li>
                                        <li><a href="./anime-details.html">dizi detay</a></li>
                                        <li><a href="./anime-watching.html">dizi izle</a></li>
                                          <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="./login.html">Login</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="./login.html">DİZİ EKLE</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
         <div class="anaDiv">
            <div class="slide">
                <img src="img/sliderFoto/st.jpg" />
                <div class="aciklama">Stranger Things yeni sezon yayında</div>
            </div>
            <div class="slide">
                <img src="img/sliderFoto/euphoria.jpg" />
                <div class="aciklama">Euphoria 2. sezon finali</div>
            </div>
            <div class="slide">
                <img src="img/sliderFoto/friends.jpg" />
                <div class="aciklama">Friends tekrardan karşınızda</div>
            </div>


                <!-- <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>  -->
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>POPÜLER</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div id="carousel">
                                <a href="#" id="prev">
                                    <</a>
                                    <div class="clear"></div>

                                    <div class="clear"></div>

                                    <div id="slides">
                                        <ul >
                                           <?php include "baglanti.php"; 

                                           while ($cek = $sorgu->fetch_array()) {

                                             $film_id = $cek['film_id'];

                                            $film_adi = $cek['film_adi'];

                                            $film_aciklama = $cek['film_aciklama'];

                                            $film_img = $cek['film_img'];

                                            $film_kategori = $cek['film_kategori'];

                                            $film_sure = $cek['film_sure'];

                                            $film_kalite = $cek['film_kalite'];

                                            $film_tip = $cek['film_tip'];

                                            ?>
                                            <li >
                                                <div class="img-container" id="<?php echo $film_id; ?>">
                                                    <div class="product__item">
                                                        <div class="product__item__pic1 set-bg">
                                                            <img src="../filmSite/img/<?php echo $film_img; ?>" width="240" height="240" alt="Slide 2" />
                                                            <div class="ep"><?php echo $film_kalite ;?></div>
                                                            <div class="view"><i class="fa fa-eye"></i> <?php echo $film_kategori ;?></div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <p > <a style="color:#e1e7ed" href="./detay.php?film_id=<?php echo $film_id; ?>"><?php echo $film_adi; ?></a> </p>
                                            </li>
                                        <?php } ?>


                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <a href="#" id="next">></a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="recent__product">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="section-title">
                                <h4>YENİ FİLMLER</h4>
                            </div>
                        </div>
                           <!--  <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div> -->
                        </div>

                        <div class="row">
                            <?php include "baglanti.php"; 


                            while ($cek = $sorgu->fetch_array()) {

                                $film_id = $cek['film_id'];

                                $film_adi = $cek['film_adi'];

                                $film_aciklama = $cek['film_aciklama'];

                                $film_img = $cek['film_img'];

                                $film_kategori = $cek['film_kategori'];

                                $film_sure = $cek['film_sure'];

                                $film_kalite = $cek['film_kalite'];

                                $film_tip = $cek['film_tip'];

                                ?>

                                <div  style="color:#fff" class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product__item" id="<?php echo $film_id; ?>">
                                        <div  class="product__item__pic set-bg" data-setbg="../filmSite/img/<?php echo $film_img; ?>" >
                                            <div class="ep"><?php echo $film_kalite ;?></div>
                                            <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li><?php echo $film_kategori ;?></li>
                                                <li><?php echo $film_tip ;?></li>
                                            </ul>
                                            <h5><a style="color:#e1e7ed" href="./detay.php?film_id=<?php echo $film_id; ?>"><?php echo $film_adi; ?></a> </h5>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                </div>
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>EDİTORÜN SEÇİMİ</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div id="carouselR">
                            <a href="#" id="prevR">
                                <</a>
                                <div class="clear"></div>

                                <div class="clear"></div>

                                <div id="slidesR">
                                    <ul>
                                       <?php include "baglanti.php"; 

                                       while ($cek = $sorgu->fetch_array()) {

                                        $film_id = $cek['film_id'];

                                        $film_adi = $cek['film_adi'];

                                        $film_aciklama = $cek['film_aciklama'];

                                        $film_img = $cek['film_img'];

                                        $film_kategori = $cek['film_kategori'];

                                        $film_sure = $cek['film_sure'];

                                        $film_kalite = $cek['film_kalite'];

                                        $film_tip = $cek['film_tip'];

                                        ?>
                                        <li >
                                            <div class="img-container" id="<?php echo $film_id; ?>">
                                                <div class="product__item">
                                                    <div class="product__item__pic1 set-bg">
                                                        <img src="../filmSite/img/<?php echo $film_img; ?>" width="240" height="240" alt="Slide 2" />
                                                        <div class="ep"><?php echo $film_kalite ;?></div>
                                                        <div class="view"><i class="fa fa-eye"></i> <?php echo $film_kategori ;?></div>
                                                    </div>

                                                </div>
                                            </div>
                                            <p> <a style="color:#e1e7ed" href="./detay.php?film_id=<?php echo $film_id; ?>"><?php echo $film_adi; ?></a> </p>
                                        </li>
                                    <?php } ?>



                                </ul>
                                <div class="clear"></div>
                            </div>
                            <a href="#" id="nextR">></a>
                        </div>
                    </div>
                </div>


            </div>
                   <!-- <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="product__sidebar">
                            <div class="product__sidebar__view">
                                <div class="section-title">
                                    <h5>Top Views</h5>
                                </div>
                                <ul class="filter__controls">
                                    <li class="active" data-filter="*">Day</li>
                                    <li data-filter=".week">Week</li>
                                    <li data-filter=".month">Month</li>
                                    <li data-filter=".years">Years</li>
                                </ul>
                                <div class="filter__gallery">
                                    <div class="product__sidebar__view__item set-bg mix day years"
                                    data-setbg="img/sidebar/tv-1.jpg">
                                        <div class="ep">18 / ?</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        <h5><a href="#">Boruto: Naruto next generations</a></h5>
                                    </div>
                                    <div class="product__sidebar__view__item set-bg mix month week"
                                    data-setbg="img/sidebar/tv-2.jpg">
                                        <div class="ep">18 / ?</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    </div>
                                    <div class="product__sidebar__view__item set-bg mix week years"
                                    data-setbg="img/sidebar/tv-3.jpg">
                                        <div class="ep">18 / ?</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                                    </div>
                                    <div class="product__sidebar__view__item set-bg mix years month"
                                    data-setbg="img/sidebar/tv-4.jpg">
                                        <div class="ep">18 / ?</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                                    </div>
                                    <div class="product__sidebar__view__item set-bg mix day"
                                    data-setbg="img/sidebar/tv-5.jpg">
                                        <div class="ep">18 / ?</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                        <h5><a href="#">Fate stay night unlimited blade works</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        <!-- Product Section End -->

        <!-- Footer Section Begin -->
        <footer class="footer">
            <div class="page-up">
                <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer__nav">
                            <ul>
                                <li class="active"><a href="./index.html">Homepage</a></li>
                                <li><a href="./categories.html">Categories</a></li>
                                <li><a href="./blog.html">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                      </div>
                  </div>
              </div>
          </footer>
          <!-- Footer Section End -->
         
            <!-- <div class="modal  fade  bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Fate Stay Night: Unlimited Blade <?php echo $film_id ;?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="anime__details__pic set-bg" data-setbg="img/anime/details-pic.jpg">
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="anime__details__text">
                                    <div class="anime__details__title">
                                        <h4>Fate Stay Night: Unlimited Blade</h4>
                                        <span>フェイト／ステイナイト, Feito／sutei naito</span>
                                    </div>

                                    <p>Every human inhabiting the world of Alcia is branded by a “Count” or a number written on
                                        their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss,
                                        never to be seen again. But her mother’s last words send Hina on a quest to find a
                                    legendary hero from the Waste War - the fabled Ace!</p>
                                    <div class="anime__details__widget">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <ul>
                                                    <li><span>Type:</span> TV Series</li>
                                                    <li><span>Studios:</span> Lerche</li>
                                                    <li><span>Date aired:</span> Oct 02, 2019 to ?</li>
                                                    <li><span>Status:</span> Airing</li>
                                                    <li><span>Genre:</span> Action, Adventure, Fantasy, Magic</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <ul>
                                                    <li><span>Scores:</span> </li>
                                                    <li><span>Rating:</span> </li>
                                                    <li><span>Duration:</span> </li>
                                                    <li><span>Quality:</span> </li>
                                                    <li><span>Views:</span> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="anime__details__btn" ">
                                        <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> beğen</a>
                                        <a href="./izle.php?id=" class="watch-btn"><span> şimdi izle</span> <i
                                            class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
        
        <!-- Search model Begin -->
        <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch"><i class="icon_close"></i></div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search model end -->

        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/player.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/romantik.js"></script>
        <script src="js/xml.js"></script>





</body>

</html>