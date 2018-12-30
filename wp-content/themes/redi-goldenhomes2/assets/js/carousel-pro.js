jQuery(document).ready(function(){    
    jQuery(".owl_carousel_banner").owlCarousel({
        autoplay:true,                    
        loop:true,
        margin:0,                        
        nav:false,
        dots:true,            
        mouseDrag: true,
        touchDrag: true,  
        lazyLoad: true,                              
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            }
        }
    });    
    jQuery(".owl_carousel_customer").owlCarousel({
        autoplay:false,                    
        loop:true,
        margin:10,                        
        nav:false,
        dots:true,            
        mouseDrag: true,
        touchDrag: true,     
        center:true,  
        lazyLoad: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,                
            },
            768:{
                items:3,                
            }
        }
    });
    jQuery(".owl_carousel_gallery").owlCarousel({
        autoplay:false,                    
        loop:true,
        margin:0,                        
        nav:true,
        navText: ["<i class=\"fa fa-chevron-left\"></i>","<i class=\"fa fa-chevron-right\"></i>"],
        dots:false,            
        mouseDrag: true,
        touchDrag: true,                                
        responsiveClass:true,
        lazyLoad: true,
        responsive:{
            0:{
                items:1
            }
        }
    });
    jQuery(".owl_carousel_gallery2").owlCarousel({
        autoplay:false,                    
        loop:false,
        margin:0,                                
        dots:true,            
        mouseDrag: true,
        touchDrag: true,                                
        responsiveClass:true,
        lazyLoad: true,
        responsive:{
            0:{
                items:1
            }
        }
    });
    jQuery(".owl_carousel_trade").owlCarousel({
        autoplay:false,                    
        loop:true,
        margin:5,                        
        nav:true,
        navText: ["<i class=\"fa fa-chevron-left\"></i>","<i class=\"fa fa-chevron-right\"></i>"],
        dots:false,            
        mouseDrag: true,
        touchDrag: true,                                
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            360:{
               items:2
            },
            740:{
                items:3
            },            
            768:{
                items:6
            }
        }
    });
    jQuery(".owl_carousel_product_detail").owlCarousel({
        autoplay:false,                    
        loop:true,
        margin:5,                        
        nav:true,
        navText: ["<i class=\"fa fa-chevron-left\"></i>","<i class=\"fa fa-chevron-right\"></i>"],
        dots:false,            
        mouseDrag: true,
        touchDrag: true,                                
        responsiveClass:true,
        responsive:{   
            0:{
                items:3
            },                                                                   
        }
    }); 
    jQuery(".owl_carousel_product_related").owlCarousel({
        autoplay:false,                    
        loop:false,
        margin:30,                        
        nav:true, 
        navText: ["<i class=\"fa fa-chevron-left\"></i>","<i class=\"fa fa-chevron-right\"></i>"],       
        dots:false,            
        mouseDrag: true,
        touchDrag: true,                                
        responsiveClass:true,
        responsive:{   
            0:{
                items:2
            },                                                                   
        }
    }); 
});         