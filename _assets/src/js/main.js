window.onload = function () { // After loading the page and all of the assets used in the page

  $('html').removeClass("scrollBlock"); // Removes class that prevent page scrolling while the document is loading

  $('.loader').css({ // Removes loader after finishing loading the document, jQuery and the animation
    opacity: 0,
    zIndex: "-1"
  });

  $(".hero").mousemove(function (e) { // Hero Paralax onMouseMove
    parallaxIt(e, ".hero", -50);
  });

  function parallaxIt(e, target, movement) { // Paralax onMouseMove function
    var $this = $("html");
    var relX = e.clientX - $this.offset().left;
    var relY = e.clientY - $this.offset().top;

    gsap.to(target, {
      duration: 0.5,
      x: (relX - $this.width() / 2) / $this.width() * movement,
      y: (relY - $this.height() / 2) / $this.height() * movement
    });
  }

  // Adds scrollToSection animation
  $('.navbar li').click(function (e) { // After selecting an item in the navBar...
    e.preventDefault(); // Prevents the default action to be performed
    let selectedSection = e.target.getAttribute('href'); // Save the section we clicked in the navBar
    $('html,body').animate({ // Animate the whole page
      scrollTop: $(selectedSection).offset().top - 90 // Scroll to the selectedSection minus the height of the navBar(80px)
    }, 'slow');
  });

  $('.next-section').click(function () { // After clicking the next-section icon in the hero...
    $('html,body').animate({ // Animate the whole page
      scrollTop: $('#section_sobre').offset().top - 90 // Scroll to the next section minus the height of the navBar(80px)
    }, 'slow');
  })

  // GSAP Timeline for the hero text animation
  const gsapTl = gsap.timeline({ defaults: { duration: 1 } });
  gsapTl.from(document.querySelector(".hero-title h1"), { opacity: 0 }, "+=.8")
    .to(document.querySelector(".hero-title h1"), { opacity: 1, y: -25 }, "+=.5")
    .from(document.querySelector(".hero-title h2"), { opacity: 0, y: -20 }, "-=1")
    .to(document.querySelector(".hero-title h2"), { opacity: 1, y: 25 }, "-=1");

  // Creates a ripple effect onClick
  $(window).on('click', function (e) {
    $('body').append('<span class="ripple"></span>');
    $('.ripple').css({
      top: e.clientY - 30,
      left: e.clientX - 30
    });
    $("body").on('animationend webkitAnimationEnd oAnimationEnd oanimationend MSAnimationEnd', function () {
      $('.ripple').remove();
    });
  });

  // Animate Spotify Player onMouseOver
  $(".spotify_player").mouseenter(function () {
    gsap.to($(".spotify_player"), {
      duration: 0.6,
      width: 350,
      height: 235,
      zIndex: 5
    });
  });
  $(".spotify_player").mouseleave(function () {
    gsap.to($(".spotify_player"), {
      duration: 0.6,
      width: 80,
      height: 80,
      zIndex: 4
    });
  });

  $(window).on('scroll', function () { // If page scroll...

    if (window.pageYOffset >= $('#section_sobre').offset().top - 90) {
      $("header").css({ "background-color": "rgba(0,0,0,0.7)", "height": "90px" })
      $('.next-section').css("opacity", "0");
    } else {
      $("header").css({ "background-color": "rgba(0,0,0,0)", "height": "150px" })
      $('.next-section').css("opacity", "1");
    }

    if (window.pageYOffset >= $('#section_contato').offset().top - 400) {
      gsapTl.to($(".form_contato"), { duration: 2, ease: Elastic.easeOut.config(1, 0.5), right: "15%" })
        .to($(".contato_content"), { duration: 1.5, ease: Elastic.easeOut.config(1, 0.5), left: "10%" }, '-=1.5');
    }
  })



};


var wpcf7Elm = document.querySelector('.wpcf7');

wpcf7Elm.addEventListener('wpcf7mailfailed', function (event) {
  $('.wpcf7-response-output').slideDown();
  $('.wpcf7-response-output').css({
    'background': '#f7e700',
    'border-color': '#f7e700'
  });
  setTimeout(function () {
    $('.wpcf7-response-output').slideUp();
  }, 4000)
}, false);

wpcf7Elm.addEventListener('wpcf7invalid', function (event) {
  $('.wpcf7-response-output').slideDown();
  $('.wpcf7-response-output').css('background', '#f7e700');
  setTimeout(function () {
    $('.wpcf7-response-output').slideUp();
  }, 4000)
}, false);

wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
  $('.wpcf7-response-output').slideDown();
  $('.wpcf7-response-output').css({
    'background': '#00ff00',
    'border-color': '#00ff00'
  });
  setTimeout(function () {
    $('.wpcf7-response-output').slideUp();
  }, 4000)
}, false);
