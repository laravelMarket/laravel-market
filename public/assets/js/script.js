(function($){
    "use strict"; // Start of use strict
    /* ---------------------------------------------
     Owl carousel
     --------------------------------------------- */
    function init_carousel(){
        $('.kt-owl-carousel').each(function(){
          var config = $(this).data();
          //config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
          var animateOut = $(this).data('animateout');
          var animateIn = $(this).data('animatein');

          if(typeof animateOut != 'undefined' ){
            config.animateOut = animateOut;
          }
          if(typeof animateIn != 'undefined' ){
            config.animateIn = animateIn;
          }
          var owl = $(this);
          owl.owlCarousel(config);
          $(this).find('.owl-item').removeClass('last-item');
          $(this).find('.owl-item.active').last().addClass('last-item');

          var t = $(this);
          owl.on('changed.owl.carousel', function(event) {
            var item      = event.item.index;
            t.find('.owl-item').removeClass('last-item');
            setTimeout(function(){
                t.find('.owl-item.active').last().addClass('last-item');
            }, 100);
            
          })
        });
    }

    /* Top menu*/
    function scrollCompensate(){
        var inner = document.createElement('p');
        inner.style.width = "100%";
        inner.style.height = "200px";
        var outer = document.createElement('div');
        outer.style.position = "absolute";
        outer.style.top = "0px";
        outer.style.left = "0px";
        outer.style.visibility = "hidden";
        outer.style.width = "200px";
        outer.style.height = "150px";
        outer.style.overflow = "hidden";
        outer.appendChild(inner);
        document.body.appendChild(outer);
        var w1 = parseInt(inner.offsetWidth);
        outer.style.overflow = 'scroll';
        var w2 = parseInt(inner.offsetWidth);
        if (w1 == w2) w2 = outer.clientWidth;
        document.body.removeChild(outer);
        return (w1 - w2);
    }

    function resizeTopmenu(){
        if($(window).width() + scrollCompensate() >= 768){
            var main_menu_w = $('#main-menu').innerWidth();
            $("#main-menu ul.mega_dropdown").each(function(){
                var menu_width = $(this).innerWidth();
                var offset_left = $(this).position().left;
                if(menu_width > main_menu_w){
                    $(this).css('width',main_menu_w+'px');
                    $(this).css('left','0');
                }else{
                    if((menu_width + offset_left) > main_menu_w){
                        var t = main_menu_w-menu_width;
                        var left = parseInt((t/2));
                        $(this).css('left',left);
                    }
                }
            });
        }

        if($(window).width()+scrollCompensate() < 1025){
            $("#main-menu li.dropdown:not(.active) >a").attr('data-toggle','dropdown');
        }else{
            $("#main-menu li.dropdown >a").removeAttr('data-toggle');
        }
    }
    /* ---------------------------------------------
     Stick menu
     --------------------------------------------- */
     function stick_menu(){
        if($('#header .main-menu').length >0){
            var offset = $('#header .main-menu').offset();
            var header_height = offset.top;
            var h = $(window).scrollTop();
            var width = $(window).width();
            if(width > 767){
                if(header_height==0){
                    $('#header .main-menu').removeClass('main-menu-ontop');
                    return;
                }
                if(h >= header_height){
                    $('#header .main-menu').addClass('main-menu-ontop');
                }else{
                    $('#header .main-menu').removeClass('main-menu-ontop');
                }
            }else{
                $('#header .main-menu').removeClass('main-menu-ontop');
            }
        }
        
     }

     function kt_bxslider(){
        $('.kt-bxslider').each(function(){
            var slider = $(this).bxSlider(
                {
                    nextText:'<i class="fa fa-angle-right"></i>',
                    prevText:'<i class="fa fa-angle-left"></i>',
                    //auto: true
                }
            );
            slider.reloadSlider();
        })
        
     }

    /**==============================
    ***  Auto width megamenu
    ===============================**/
    function auto_width_megamenu(){
        var full_width = parseInt($('.container').innerWidth());
        //full_width = $( document ).width();
        var menu_width = parseInt($('.vertical-menu-content').actual('width'));
        $('.vertical-menu-content').find('.vertical-dropdown-menu').each(function(){
            $(this).width((full_width - menu_width)-2);
        });
    }

    /* ---------------------------------------------
     Scripts ready
     --------------------------------------------- */
    $(document).ready(function() {
        init_carousel();
        resizeTopmenu();
        kt_bxslider();
        auto_width_megamenu();
        // Select menu
        $( "#category-select" ).selectmenu();
        // count downt
        if($('.countdown-lastest').length >0){
            var labels = ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'];
            var layout = '<span class="box-count day"><span class="number">{dnn}</span> <span class="text">Days</span></span><span class="dot">:</span><span class="box-count hrs"><span class="number">{hnn}</span> <span class="text">Hrs</span></span><span class="dot">:</span><span class="box-count min"><span class="number">{mnn}</span> <span class="text">Mins</span></span><span class="dot">:</span><span class="box-count secs"><span class="number">{snn}</span> <span class="text">Secs</span></span>';
            $('.countdown-lastest').each(function() {
                var austDay = new Date($(this).data('y'),$(this).data('m') - 1,$(this).data('d'),$(this).data('h'),$(this).data('i'),$(this).data('s'));
                $(this).countdown({
                    until: austDay,
                    labels: labels, 
                    layout: layout
                });
            });
        }

        // CATEGORY FILTER PRICE 
        $('.slider-range-price').each(function(){
            var min             = $(this).data('min');
            var max             = $(this).data('max');
            var unit            = $(this).data('unit');
            var value_min       = $(this).data('value-min');
            var value_max       = $(this).data('value-max');
            var label_reasult   = $(this).data('label-reasult');
            var t               = $(this);
            $( this ).slider({
              range: true,
              min: min,
              max: max,
              values: [ value_min, value_max ],
              slide: function( event, ui ) {
                var result = label_reasult +" "+ unit + ui.values[ 0 ] +' - '+ unit +ui.values[ 1 ];
                console.log(result);
                t.closest('.block-filter-inner').find('.amount-range-price').html(result);
              }
            });
        })
        /// tre menu category
        $(document).on('click','.tree-menu li',function(){
            $(this).toggleClass('active');
            $(this).children('ul').slideToggle();
            
            return false;
        })
        // Zoom
        if($('.easyzoom').length >0){
            // Instantiate EasyZoom instances
            var $easyzoom = $('.easyzoom').easyZoom();

            // Get an instance API
            var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

            // Setup thumbnails example
            $('.thumbnails').on('click', 'a', function(e) {
                $(this).closest('.product-list-thumb').find('a').each(function(){
                    $(this).removeClass('selected');
                })
                
                $(this).addClass('selected');

                var $this = $(this);
                e.preventDefault();
                // Use EasyZoom's `swap` method
                api1.swap($this.data('standard'), $this.attr('href'));

            });

            // Setup toggles example
            var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

            $('.toggle').on('click', function() {
                var $this = $(this);
                if ($this.data("active") === true) {
                    $this.text("Switch on").data("active", false);
                    api2.teardown();
                } else {
                    $this.text("Switch off").data("active", true);
                    api2._init();
                }
            });
        }
        /* Send conttact*/
        $(document).on('click','#btn-send-contact',function(){
            var subject = $('#subject').val(),
                email   = $('#email').val(),
                order_reference = $('#order_reference').val(),
                message = $('#message').val();
            var data = {
                subject:subject,
                email:email,
                order_reference:order_reference,
                message:message
            }
            $.post('ajax_contact.php',data,function(result){
                if(result.trim()=="done"){
                    $('#email').val('');
                    $('#order_reference').val('');
                    $('#message').val('');
                    $('#message-box-conact').html('<div class="alert alert-info">Your message was sent successfully. Thanks</div>');
                }else{
                    $('#message-box-conact').html(result);
                }
            })
        })

        /** TOP review**/
        $(document).on('click','.block-top-review .product-name',function(){
            $(this).closest('.list-product').find('.product').each(function(){
                $(this).removeClass('active');
            })
            $(this).closest('.product').addClass('active');
            return false;
        })
        /* scroll top */ 
        $(document).on('click','.scroll_top',function(){
            $('body,html').animate({scrollTop:0},400);
            return false;
        })
        // Top menu vetical
        if($('.shop-menu').length >0){
            $(document).on('click','.shop-menu .icon',function(){
                $(this).closest('.shop-menu').find('.block-vertical-menu').slideToggle();
            })
            /* Close vertical */
            $(document).on('click','*',function(e){
                var container = $(".shop-menu");
                if (!container.is(e.target) && container.has(e.target).length === 0){
                    container.find('.block-vertical-menu').hide();
                }
            })
        }
        // Slidder home 4
        if($('#bxslider-home4').length >0){
            var slider = $('#bxslider-home4').bxSlider({
                nextText:'<i class="fa fa-angle-right"></i>',
                prevText:'<i class="fa fa-angle-left"></i>',
                auto: true,
                onSliderLoad:function(currentIndex){
                    $('#bxslider-home4 li').find('.caption').each(function(i){
                        $(this).show().addClass('animated fadeInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                            $(this).removeClass('fadeInRight animated');
                        });
                    })                      
                },
                onSlideBefore:function(slideElement, oldIndex, newIndex){
                    //slideElement.find('.sl-description').hide();
                    slideElement.find('.caption').each(function(){                    
                       $(this).hide().removeClass('animated fadeInRight'); 
                    });                
                },
                onSlideAfter: function(slideElement, oldIndex, newIndex){  
                    //slideElement.find('.sl-description').show();
                    setTimeout(function(){
                        slideElement.find('.caption').each(function(){                    
                           $(this).show().addClass('animated fadeInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                                $(this).removeClass('fadeInRight animated');
                            }); 
                        });
                    }, 500);                                
                }
            });
            //slider.reloadSlider();
        }
    });
    /* ---------------------------------------------
     Scripts initialization
     --------------------------------------------- */
    $(window).load(function() {
        resizeTopmenu();
        auto_width_megamenu();
        /* Show hide scrolltop button */
        if( $(window).scrollTop() == 0 ) {
            $('.scroll_top').stop(false,true).fadeOut(600);
        }else{
            $('.scroll_top').stop(false,true).fadeIn(600);
        }
    });
    /* ---------------------------------------------
     Scripts resize
     --------------------------------------------- */
    $(window).resize(function(){
        resizeTopmenu();
        auto_width_megamenu();
    });
    /* ---------------------------------------------
     Scripts scroll
     --------------------------------------------- */
    $(window).scroll(function(){
        stick_menu();
        auto_width_megamenu();
        /* Show hide scrolltop button */
        if( $(window).scrollTop() == 0 ) {
            $('.scroll_top').stop(false,true).fadeOut(600);
        }else{
            $('.scroll_top').stop(false,true).fadeIn(600);
        }
    });
})(jQuery); // End of use strict