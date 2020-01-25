$(window).on('load', function() {

    // Cache selectors
    var lastId,
        banerAl = $('.banner-principal').height(),
        topMenu = $(".navbar-nav"),
        topMenuHeight = topMenu.outerHeight() + 100,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function() {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    $('.img-pop').on('click', function() {
        $('.slider').slick('setPosition');
    });
    $('.slide').slick({
        fade: true,
    });

    $('.carouselmarcas').slick({
        slidesToShow: 4,
        infinite: true,
          responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
          ]
    });

    if ($(window).scrollTop() > banerAl - 112) {
        $('header').css('background', '#ffffff');
    } else {
        $('header').css('background', 'rgba(255,255,255,0.5)');
    }

    $(".navbar-nav a,.js-btn,.menu a").click(function() {
        let href = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(href).offset().top - 112
        }, 500);
    });

    $(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > banerAl - 112) {
                $('header').css('background', '#ffffff');
            } else {
                $('header').css('background', 'rgba(255,255,255,0.5)');
            }
        });
    });

    function scrollmenu(){
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;
        // Get id of current scroll item
        var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#" + id + "']").parent().addClass("active");
        }
    }
    scrollmenu();
    $(window).scroll(function() {
        scrollmenu();
    });

});

function restartSlick() {
    setTimeout(function() {
        $('.slide').slick('setPosition');
    }, 200);
}