/*  ---------------------------------------------------
    Theme Name: Anime
    Description: Anime video tamplate
    Author: Colorib
    Author URI: https://colorib.com/
    Version: 1.0
    Created: Colorib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            FIlter
        --------------------*/
        $('.filter__controls li').on('click', function () {
            $('.filter__controls li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.filter__gallery').length > 0) {
            var containerEl = document.querySelector('.filter__gallery');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    // Search model
    $('.search-switch').on('click', function () {
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
		Hero Slider
	--------------------*/
    var hero_s = $(".hero__slider");
    hero_s.owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        nav: true,
        navText: ["<span class='arrow_carrot-left'></span>", "<span class='arrow_carrot-right'></span>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        mouseDrag: false
    });

    /*------------------
        Video Player
    --------------------*/
    const player = new Plyr('#player', {
        controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'captions', 'settings', 'fullscreen'],
        seekTime: 25
    });

    /*------------------
        Niceselect
    --------------------*/
    $('select').niceSelect();

    /*------------------
        Scroll To Top
    --------------------*/
    $("#scrollToTopButton").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
     });

})(jQuery);

// anasayfa slider
var slide=document.getElementsByClassName("slide");
//Yine sayfadaki bütün açılamarı dizi olarak aldık.
var aciklama=document.getElementsByClassName("aciklama");
//slider başlangıcı için bir sayaç oluşturduk ve sıfır değerini atadık.
var slideSira=0;
//Sliderin oluşturan anaDivi bir değişkenin içine atadık
var anaDiv=document.getElementsByClassName("anaDiv")[0];
 
/*zaman start*/
/* iki saniyede bir sliderStart fonksiyonunu çalıştırdık.*/
var zaman=setInterval(slideStart,2000);
//Mouse anadivin üzerine gelince zamansal akışı durdurduk.
anaDiv.onmouseover=function(){
    clearInterval(zaman);
    }
//Mouse üzerinden ayrılınca zaman akışını tekrardan başlattık.
anaDiv.onmouseout=function(){
    zaman=setInterval(slideStart,2000);
    }
/*zaman end*/
/*sag start*/
//Sağ butonu fantazi olsundiye dinamik olarak oluşturduk.
//Amacım bütün sliderı html yazamdanda dinamik olarak javascriptle oluşturacağımızı
//anlatabilmekti.
var sagButton=document.createElement("span");
sagButton.appendChild(document.createTextNode(">"));
sagButton.setAttribute("class","btnSag");
anaDiv.appendChild(sagButton);
sagButton.onclick=function(){slideStart();};
 
/*sag end*/
/*sol start*/
//Yine butonu oluşturduk. Ve her iki butonada click olduğunda çalıştıracakları fonksiyonları atadık
var solButton=document.createElement("span");
solButton.appendChild(document.createTextNode("<"));
solButton.setAttribute("class","btnSol");
anaDiv.appendChild(solButton);
solButton.onclick=function(){
    //sol buton yani geriye git denildiğinde çalışan fonsiyon
    slide[slideSira-1].style.animation="ortadanSola 1s ease";
    slide[slideSira-1].style.right="-950px";
    aciklama[slideSira-1].style.animation="aciklamaGit 1s ease";
    aciklama[slideSira-1].style.left="100%";
    slideSira-=2;
    slideSira<0 ? slideSira=slide.length-1:"";
    slideStart();
    }
 
/*sol end*/
//slider fonksiyonunu bir kez start ettik.
slideStart();
 
function slideStart(){
    //döngüsel  olarak çalışan ana fonksiyon
    
    if(slideSira!=0){
        //console.log("gelecek : "+slideSira);    
        slide[slideSira-1].style.animation="ortadanSola 1s ease";
        slide[slideSira-1].style.right="-950px";
        aciklama[slideSira-1].style.animation="aciklamaGit 1s ease";
        aciklama[slideSira-1].style.left="100%";
        
        
        }
    
    slideSira>=slide.length ? slideSira=0:"";
    slide[slideSira].style.animation="sagdanOrtaya 1s ease";
    aciklama[slideSira].style.animation="aciklama 1s ease";
    slide[slideSira].style.right="0px";
    aciklama[slideSira].style.left="1em";
    slideSira++;
}
 
function imgGetir(index){
    slide[slideSira-1].style.animation="ortadanSola 1s ease";
    slide[slideSira-1].style.right="-950px";
    aciklama[slideSira-1].style.animation="aciklamaGit 1s ease";
    aciklama[slideSira-1].style.left="100%";
    aciklama[slideSira-1].style.animation="aciklamaGit 1s ease";
    aciklama[slideSira-1].style.left="100%";
    slideSira=index;
    slideStart();
    }
    

    //popülerslider

   var speed = 2000;
    // var run = setInterval('rotate()', speed);    
    
    //grab the width and calculate left value
    var item_width = $('#slides li').outerWidth(); 
    var left_value = item_width * (-1); 
        
    //move the last item before first item, just in case user click prev button
    $('#slides li:first').before($('#slides li:last'));
    
    //set the default item to the correct position 
    $('#slides ul').css({'left' : left_value});

    //if user clicked on prev button
    $('#prev').click(function() {

        //get the right position            
        var left_indent = parseInt($('#slides ul').css('left')) + item_width;

        //slide the item            
        $('#slides ul').animate({'left' : left_indent}, 200,function(){    

            //move the last item and put it as first item               
            $('#slides li:first').before($('#slides li:last'));           

            //set the default item to correct position
            $('#slides ul').css({'left' : left_value});
        
        });

        //cancel the link behavior            
        return false;
            
    });

 
    //if user clicked on next button
    $('#next').click(function() {
        
        //get the right position
        var left_indent = parseInt($('#slides ul').css('left')) - item_width;
        
        //slide the item
        $('#slides ul').animate({'left' : left_indent}, 200, function () {
            
            //move the first item and put it as last item
            $('#slides li:last').after($('#slides li:first'));                  
            
            //set the default item to correct position
            $('#slides ul').css({'left' : left_value});
        
        });
                 
        //cancel the link behavior
        return false;
        
    });        
    
    //preventing default img/page drag
        $('#slides li img').on('dragstart', function(event) {
            event.preventDefault();
        });
        $('#carousel').on('touchstart', function(event) {
            event.preventDefault();
        });

//Hammer init
var listItem = document.getElementById('slides');
var swipe = new Hammer(listItem);

    //if user swipes any li right
    swipe.on('swiperight', function() {

        //get the right position            
        var left_indent = parseInt($('#slides ul').css('left')) + item_width;

        //slide the item            
        $('#slides ul').animate({'left' : left_indent}, 200,function(){    

            //move the last item and put it as first item               
            $('#slides li:first').before($('#slides li:last'));           

            //set the default item to correct position
            $('#slides ul').css({'left' : left_value});
        
        });
            
    });

    //if user swipes any li right
    swipe.on('swipeleft', function() {

        //get the left position            
            var left_indent = parseInt($('#slides ul').css('left')) - item_width;
            
            //slide the item
            $('#slides ul').animate({'left' : left_indent}, 200, function () {
                
                //move the first item and put it as last item
                $('#slides li:last').after($('#slides li:first'));                  
                
                //set the default item to correct position
                $('#slides ul').css({'left' : left_value});
            
            });
            
    });

    