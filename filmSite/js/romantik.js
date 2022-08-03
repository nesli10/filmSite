  //romantik


   var speedR = 2000;
    // var run = setInterval('rotate()', speed);    
    
    //grab the width and calculate left value
    var item_widthR = $('#slidesR li').outerWidth(); 
    var left_valueR = item_widthR * (-1); 
        
    //move the last item before first item, just in case user click prev button
    $('#slidesR li:first').before($('#slidesR li:last'));
    
    //set the default item to the correct position 
    $('#slidesR ul').css({'left' : left_valueR});

    //if user clicked on prev button
    $('#prevR').click(function() {

        //get the right position            
        var left_indentR = parseInt($('#slidesR ul').css('left')) + item_widthR;

        //slide the item            
        $('#slidesR ul').animate({'left' : left_indentR}, 200,function(){    

            //move the last item and put it as first item               
            $('#slidesR li:first').before($('#slidesR li:last'));           

            //set the default item to correct position
            $('#slidesR ul').css({'left' : left_valueR});
        
        });

        //cancel the link behavior            
        return false;
            
    });

 
    //if user clicked on next button
    $('#nextR').click(function() {
        
        //get the right position
        var left_indentR = parseInt($('#slidesR ul').css('left')) - item_widthR;
        
        //slide the item
        $('#slidesR ul').animate({'left' : left_indentR}, 200, function () {
            
            //move the first item and put it as last item
            $('#slidesR li:last').after($('#slidesR li:first'));                  
            
            //set the default item to correct position
            $('#slidesR ul').css({'left' : left_valueR});
        
        });
                 
        //cancel the link behavior
        return false;
        
    });        
    
    //preventing default img/page drag
        $('#slidesR li img').on('dragstart', function(event) {
            event.preventDefault();
        });
        $('#carouselR').on('touchstart', function(event) {
            event.preventDefault();
        });

//Hammer init
var listItemR = document.getElementById('slidesR');
var swipeR = new Hammer(listItemR);

    //if user swipes any li right
    swipeR.on('swiperight', function() {

        //get the right position            
        var left_indentR = parseInt($('#slidesR ul').css('left')) + item_widthR;

        //slide the item            
        $('#slidesR ul').animate({'left' : left_indentR}, 200,function(){    

            //move the last item and put it as first item               
            $('#slidesR li:first').before($('#slidesR li:last'));           

            //set the default item to correct position
            $('#slidesR ul').css({'left' : left_valueR});
        
        });
            
    });

    //if user swipes any li right
    swipeR.on('swipeleft', function() {

        //get the left position            
            var left_indentR = parseInt($('#slidesR ul').css('left')) - item_widthR;
            
            //slide the item
            $('#slidesR ul').animate({'left' : left_indentR}, 200, function () {
                
                //move the first item and put it as last item
                $('#slidesR li:last').after($('#slidesR li:first'));                  
                
                //set the default item to correct position
                $('#slidesR ul').css({'left' : left_valueR});
            
            });
            
    });
   