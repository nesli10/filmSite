<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

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
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">ANASAYFA</a></li>
                               <!--  <li><a href="./categories.html">KATEGORİLER <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">kategori</a></li>
                                        <li><a href="./anime-details.html">dizi detay</a></li>
                                        <li><a href="./anime-watching.html">dizi izle</a></li>
                                         <li><a href="./blog-details.html">Blog Details</a></li> 
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="./login.html">Login</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a href="./blog.html">Our Blog</a></li>
                                    <li><a href="#">Contacts</a></li> -->
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

        <!-- Breadcrumb Begin -->
        <div class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__links">
                            <a href="./index.php"><i class="fa fa-home"></i> anasayfa</a>
                            <a href="./categories.html">kategori</a>
                            <a href="#">sitcom</a>
                            <span>how i met your mother</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Anime Section Begin -->
        <section class="anime-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="anime__video__player">
                            <video id="player" playsinline controls data-poster="./videos/hımym.jpg">
                                <source src="videos/1.mp4" type="video/mp4" />
                                <!-- Captions are optional -->
                                <track kind="captions" label="English captions" src="#" srclang="en" default />
                            </video>
                        </div>
                        <div class="anime__details__episodes">
                            <div class="section-title">
                                <h5>bölümler</h5>
                            </div>
                            <a href="#">bölüm 01</a>
                            <a href="#">bölüm 02</a>
                            <a href="#">bölüm 03</a>
                            <a href="#">bölüm 04</a>
                            <a href="#">bölüm 05</a>
                            <a href="#">bölüm 06</a>
                            <a href="#">bölüm 07</a>
                            <a href="#">bölüm 08</a>
                            <a href="#">bölüm 09</a>
                            <a href="#">bölüm 10</a>
                            <a href="#">bölüm 11</a>
                            <a href="#">bölüm 12</a>
                            <a href="#">bölüm 13</a>
                            <a href="#">bölüm 14</a>
                            <a href="#">bölüm 15</a>
                            <a href="#">bölüm 16</a>
                            <a href="#">bölüm 17</a>
                            <a href="#">bölüm 18</a>
                            <a href="#">bölüm 19</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>yorumlar</h5>
                            </div>
                            <?php include "baglanti.php"; 

                            while ($cek = $sorgu2->fetch_array()) {



                                $yorum = $cek['yorum'];

                                ?>
                                <div class="anime__review__item">
                                    <div class="anime__review__item__pic">
                                        <img src="img/anime/review-1.jpg" alt="">
                                    </div>
                                    <div class="anime__review__item__text">
                                        <h6>Chris Curry  <span></span></h6>
                                        <p><?php echo $yorum ;?></p>
                                    </div>
                                </div>
                                 <?php } ?>
                                
                                
                           
                            <div class="anime__details__form">
                                <div class="section-title">
                                    <h5>yorumunuz:</h5>
                                </div>
                                <form action="#">
                                    <textarea placeholder="yorum" id="yorum" name="yorum" ></textarea>
                                    <button type="button"id="yorumEkle"><i class="fa fa-location-arrow" ></i> yorum yap </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Anime Section End -->

            <!-- Footer Section Begin -->
            <footer class="footer">
                <div class="page-up">
                    <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
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

            <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
            <script type="text/javascript">
                $(document).ready(function()
                {


                    $("#yorumEkle").click(function() {

                        var yorum=$("textarea[name=yorum]").val();
                        if (yorum!="" ) {

                            $.ajax({

                                url:"yorumekle.php",
                                type:"POST",
                                data:{
                                    'yorum':yorum

                                },

                                success:function(result)
                                {

                                    $("textarea[name=yorum]").val("");



                                }});
                            alert("yorum ekleme başarılı");
                        }
                        else{
                            alert("yorum yazınız");
                        }



                    });
                });
            </script>

        </body>

        </html>