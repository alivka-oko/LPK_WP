
$().ready(function() {
    
    // The FlexSlider, page Products
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 123,
        itemMargin: 5,
        asNavFor: '#slider'
      });
     
      $('#slider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        slideshow: false,
        sync: "#carousel"
      });
      
      $('#productsDirectory').flexslider({
        animation: "slide",
        controlNav: false,
        slideshow: false,
        itemWidth: 280,
        itemMargin: 30,
      });
    
    
    // The Lightbox
    
    lightbox.option({
      'disableScrolling': false,
      'loader': true,
      'wrapAround': true,
      'showImageNumberLabel' : false
    });
    
    // Kwicks
    
    $('.kwicks').kwicks({
        maxSize : '50%',
        behavior: 'menu'
    });
    
    
    // Counter
    
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    
    // Mobil menu
    
    $(document).on("click", ".menuMobil_container .parent", function(e) {
        e.preventDefault();
        $(this).siblings("ul").addClass("active");
    });
    $(document).on("click", ".menuMobil_container .back", function(e) {
        e.preventDefault();
        $(this).parent().parent().removeClass("active");
    });
    $(document).on("click", ".menuMobil_btn", function(e) {
        e.preventDefault();
        $(".menuMobil_container").addClass("active");
        $("body").addClass("modal-open");
        $(".menuMobil_overlay").fadeIn();
    });
    $(document).on("click", ".menuMobil_overlay", function(e) {
        $(".menuMobil_container").removeClass("active");
        $("body").removeClass("modal-open");
        $(this).fadeOut();
    });
    $(document).on("click", ".menuMobil_btn-callback", function(e) {
        $(".menuMobil_container").removeClass("active");
        $(".menuMobil_overlay").fadeOut();
    });
    
    // Jobs 
    
    function expandit(id){
        obj=document.getElementById(id);
        $(document).on("click", "#obj .jobs-checkbox-labelTop", function(e) {
            e.preventDefault();
            $(this).addClass("hide");
            $("#obj .jobs-content").addClass("active");
        });
        $(document).on("click", "#obj .jobs-checkbox-labelBottom", function(e) {
            $("#obj .jobs-checkbox-labelTop").removeClass("hide");
            $("#obj .jobs-content").removeClass("active");
        });
    }
    
    // Candidate Profile
    
    $('select').on('change', function(){
        var $option = $(this);
        if ($option.val() == 'Не указано') {
            $option.css('font-weight','200');
        } else {
            $option.css('font-weight','400');
        }
    }).change();
        
    $('#gender').on('change', function(){
        var $option = $(this);
        if ($option.val() == 'Женщина') {
            $("#familyStatus").addClass("women");
            $("#familyStatus").removeClass("men");
            $(".nameSpouse-ending").addClass("women");
            $(".nameSpouse-ending").removeClass("men");
        } else {
            $("#familyStatus").addClass("men");
            $("#familyStatus").removeClass("women");
            $(".nameSpouse-ending").addClass("men");
            $(".nameSpouse-ending").removeClass("women");
        }
    }).change();
    
    $('#familyStatus').on('change', function(){
        var $option = $(this);
        if ($option.val() == 'Женат' || $option.val() == 'Замужем') {
            $(".familyStatus").addClass("married");
        } else {
            $(".familyStatus").removeClass("married");
        }
    }).change();
    
    $('#haveChildren').on('change', function(){
        var $option = $(this);
        if ($option.val() == '1' || $option.val() == '2' || $option.val() == '3 и более' ) {
            $(".ageChildren").addClass("yes");
        } else {
            $(".ageChildren").removeClass("yes");
        }
    }).change();

});



