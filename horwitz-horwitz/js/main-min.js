/* After page load
-------------------------------------------------------------- */

if (
  navigator.userAgent.indexOf("MSIE") !== -1 ||
  navigator.appVersion.indexOf("Trident/") > 0
) {
  jQuery("html").addClass("is-ie");
}

jQuery(window).load(function () {
  jQuery("header .animated-overlay").addClass("loaded");
});

jQuery(document).ready(function () {
  jQuery("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");

  /* Lazy Load images
-------------------------------------------------------------- */

  jQuery(function () {
    jQuery(".lazy").lazy({
      threshold: 200,
    });
  });

  var controller = new ScrollMagic.Controller();

  new ScrollMagic.Scene({ triggerElement: "#section-2" })
    .setClassToggle(".delay-load", "add-background")
    //.addIndicators()
    .reverse(false)
    .addTo(controller);

  function lazyLoadSlideshow() {
    var getImgData = jQuery("#section-4 .award img").each(function () {
      var results = jQuery(this).attr("data-src");
      var newResults = jQuery(this).attr("src", results);
    });
  }

  new ScrollMagic.Scene({ triggerElement: "#section-2" })
    .on("start", function () {
      lazyLoadSlideshow();
    })
    .reverse(false)
    //.addIndicators()
    .addTo(controller);

  /* Run button animations on hover
-------------------------------------------------------------- */

  jQuery(".post .read-more").append("<div class='gradient-overlay'></div>");
  jQuery(".post .read-more").append("<p>read more</p>");

  if (jQuery(window).width() >= 1280) {
    jQuery("header .banner .left .left-inner a").mouseenter(function () {
      jQuery("header .banner .left .left-inner a .gradient-overlay").addClass(
        "animated"
      );
    });

    jQuery("header .banner .left .left-inner a .gradient-overlay").bind(
      "webkitAnimationEnd mozAnimationEnd animationend",
      function () {
        jQuery(this).removeClass("animated");
      }
    );

    jQuery(".gradient-hover").mouseenter(function () {
      jQuery(this).addClass("animated");
    });

    jQuery(".gradient-hover").bind(
      "webkitAnimationEnd mozAnimationEnd animationend",
      function () {
        jQuery(this).removeClass("animated");
      }
    );

    jQuery(".gform_footer").mouseenter(function () {
      jQuery(this).addClass("animated");
    });

    jQuery(".gform_footer").bind(
      "webkitAnimationEnd mozAnimationEnd animationend",
      function () {
        jQuery(this).removeClass("animated");
      }
    );

    jQuery(".post .read-more").mouseenter(function () {
      jQuery(this).addClass("animated");
    });

    jQuery(".post .read-more").bind(
      "webkitAnimationEnd mozAnimationEnd animationend",
      function () {
        jQuery(this).removeClass("animated");
      }
    );
  } // End if

  /* Slick Slider
-------------------------------------------------------------- */

  jQuery("#section-1 .pa-slider").slick({
    slidesToShow: 3,
    useTransform: true,
    cssEase: "ease-in-out",
    speed: 1500,
    responsive: [
      {
        breakpoint: 1279,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: false,
        },
      },
    ],
  });

  jQuery("#section-4 .awards").slick({
    slidesToShow: 6,
    useTransform: true,
    cssEase: "ease-in-out",
    speed: 1500,
    slidesToScroll: 6,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 1279,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
          arrows: false,
        },
      },
    ],
  });

  jQuery(".result-wrap").slick({
    slidesToShow: 3,
    useTransform: true,
    cssEase: "ease-in-out",
    speed: 1500,
    arrows: false,
    responsive: [
      {
        breakpoint: 1279,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: false,
        },
      },
    ],
  });

  jQuery(".page-template-template-team-member .awards-slider").slick({
    slidesToShow: 1,
    useTransform: true,
    cssEase: "ease-in-out",
    speed: 1500,
    arrows: false,
    dots: true,
  });

  /* Sticky Nav
-------------------------------------------------------------- */

  jQuery(window).bind("scroll load", function () {
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 5) {
      jQuery("html").addClass("sticky-nav");
    } else {
      jQuery("html").removeClass("sticky-nav");
    }
  });

  /* Main Menu
-------------------------------------------------------------- */

  jQuery(".main-menu-btn").click(function () {
    jQuery("html").addClass("menu-open");
  });

  jQuery(".close").click(function () {
    jQuery("html").removeClass("menu-open");
    jQuery("header .sub-menu").removeClass("active-secondary-menu");
    jQuery(
      "header .top-bar #main-menu-overlay .main-menu .primary-menu"
    ).removeClass("hide-primary");
    jQuery("header .top-bar #main-menu-overlay .main-menu span").removeClass(
      "show"
    );
  });

  jQuery("#menu-main-menu .menu-item-has-children").click(function () {
    jQuery(".secondary-menu").empty();
    jQuery(this).children(".sub-menu").removeClass("active-secondary-menu");
    jQuery(this)
      .children(".sub-menu")
      .clone()
      .appendTo(".secondary-menu")
      .delay(0)
      .queue(function () {
        jQuery(this).addClass("active-secondary-menu").dequeue();
      });
    jQuery(
      "header .top-bar #main-menu-overlay .main-menu .primary-menu"
    ).addClass("hide-primary");
    jQuery("header .top-bar #main-menu-overlay .main-menu span").addClass(
      "show"
    );
  });

  jQuery("header .top-bar #main-menu-overlay .main-menu span").click(
    function () {
      jQuery(this).removeClass("show");
      jQuery(
        "header .top-bar #main-menu-overlay .main-menu .primary-menu"
      ).removeClass("hide-primary");
      jQuery(
        "html.menu-open #main-menu-overlay .main-menu .secondary-menu .sub-menu"
      ).removeClass("active-secondary-menu");
    }
  );

  /* Gravity Forms
-------------------------------------------------------------- */

  jQuery(".gform_wrapper").append(
    "<p class='fields-required'>Required fields</p>"
  );

  /*
jQuery(".gform_footer").append("<p>submit</p>");

jQuery(".gform_footer").append("<div class='gradient-overlay'></div>");
*/

  /* Animations
-------------------------------------------------------------- */

  if (jQuery(window).width() >= 1280) {
    var loadImgs = new ScrollMagic.Controller();

    new ScrollMagic.Scene({ triggerElement: "#section-2" })
      .setClassToggle("#section-2", "animate")
      //.addIndicators()
      .offset(-300)
      .reverse(false)
      .addTo(loadImgs);

    var footerForm = new ScrollMagic.Controller();

    new ScrollMagic.Scene({ triggerElement: "footer" })
      .setClassToggle("footer .contact-form .form-wrap", "animate")
      //.addIndicators()
      .offset(-100)
      .reverse(false)
      .addTo(footerForm);

    /* 
		-------------------------------------------------------------- */

    jQuery(function () {
      var pOne = new ScrollMagic.Controller();

      var parallax = new TweenMax.from("#section-1 .background-texture", 1, {
        y: "200px",
      });

      var containerScene = new ScrollMagic.Scene({
        triggerElement: "header",
        offset: "0px",
        duration: 2500,
        triggerHook: 0,
      })

        .setTween(parallax)
        .addTo(pOne);
      //.addIndicators();
    });

    /* 
		-------------------------------------------------------------- */

    jQuery(function () {
      var pImg = new ScrollMagic.Controller();

      var parallax = new TweenMax.from(
        "#section-3 .section-3-inner .accent-box",
        1,
        {
          y: "200px",
        }
      );

      var containerScene = new ScrollMagic.Scene({
        triggerElement: "#section-2",
        offset: "300px",
        duration: 2500,
      })

        .setTween(parallax)
        .addTo(pImg);
      //.addIndicators();
    });

    /* 
		-------------------------------------------------------------- */

    jQuery(function () {
      var pImgTwo = new ScrollMagic.Controller();

      var parallax = new TweenMax.from(
        "#section-5 .section-5-inner .content-wrap .accent-box",
        1,
        {
          y: "200px",
        }
      );

      var containerScene = new ScrollMagic.Scene({
        triggerElement: "#section-4",
        offset: "0px",
        duration: 2500,
      })

        .setTween(parallax)
        .addTo(pImgTwo);
      //.addIndicators();
    });

    /* 
		-------------------------------------------------------------- */

    jQuery(function () {
      var pTwo = new ScrollMagic.Controller();

      var parallax = new TweenMax.from("#section-5 .background-texture", 1, {
        y: "250px",
      });

      var containerScene = new ScrollMagic.Scene({
        triggerElement: "#section-5",
        offset: "-200px",
        duration: 3500,
      })

        .setTween(parallax)
        .addTo(pTwo);
      //.addIndicators();
    });
  } // End if

  /* Smooth Scroll anchor
-------------------------------------------------------------- */

  jQuery(".smooth-scroll").click(function (event) {
    event.preventDefault();
    jQuery("html,body").animate(
      { scrollTop: jQuery(this.hash).offset().top - 100 },
      2000
    );
  });

  /* Sidebar
-------------------------------------------------------------- */

  jQuery(".sidebar li.menu-item-has-children").click(function () {
    jQuery(this).children(".sub-menu").slideToggle();
    jQuery(this).children("a").toggleClass("target");
  });

  /* Testimonials Page
-------------------------------------------------------------- */

  jQuery(".button-left").click(function () {
    jQuery(".button").removeClass("active");
    jQuery(this).addClass("active");
    jQuery(".testimonials.videos").show();
    jQuery(".testimonials.written").hide();
  });

  jQuery(".button-right").click(function () {
    jQuery(".button").removeClass("active");
    jQuery(this).addClass("active");
    jQuery(".testimonials.written").show();
    jQuery(".testimonials.videos").hide();
  });

  /* Case Results Page
-------------------------------------------------------------- */

  // Dropdown

  jQuery(".pa-dropdown").click(function () {
    jQuery(this).children(".pa-list").toggleClass("open");
  });

  jQuery(".pa-list ul li").click(function () {
    var paItem = jQuery(this).text();

    jQuery(".pa-list ul li").removeClass("currently-showing");
    jQuery(this).addClass("currently-showing");
    jQuery(".list-container p").text(paItem);
  });

  /* 
-------------------------------------------------------------- */

  jQuery(".vid-dropdown").click(function () {
    jQuery(this).children(".vid-list").toggleClass("open");
  });

  jQuery(".vid-list ul li").click(function () {
    var paItem = jQuery(this).text();

    jQuery(".vid-list ul li").removeClass("currently-showing");
    jQuery(this).addClass("currently-showing");
    jQuery(".list-container p").text(paItem);
  });

  // Filter

  jQuery(".pa-list ul li").on("click", function () {
    var classed = jQuery(this).attr("id");

    jQuery(".pa-result").hide();
    jQuery("[class*='" + classed + "']").show();
  });

  /* 
-------------------------------------------------------------- */

  jQuery(".vid-list ul li").on("click", function () {
    var classed = jQuery(this).attr("id");

    jQuery(".video-wrapper").hide();
    jQuery("[class*='" + classed + "']").show();
  });

  //Modal

  jQuery(".pa-result").click(function () {
    jQuery(".cr-modal-inner").empty();
    jQuery(this).clone().appendTo(".cr-modal-inner");

    jQuery(".cr-modal").addClass("active");
    jQuery("html").addClass("active-modal");
  });

  jQuery(".modal-close").click(function () {
    jQuery(".cr-modal").removeClass("active");
    jQuery("html").removeClass("active-modal");
  });
}); // End Document Ready attempting to apply changes

/**
 *
 * @param {*} src - string url of the source of the script
 * @param {*} timeout - the timeout period before the script is loaded
 * @param {*} attributes - an object map of attributes e.g. {apiKey: "asd;9vzx9;adsjf"}
 *
 * This function returns a new promise when the script is loaded and the api is accessible.
 *
 * (likely unnecessaryto call it as a promise but, you can if you want.)
 */
console.log("attempting to apply changes");

function delayScript(src, timeout, attributes) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const scriptElem = document.createElement("script");
      scriptElem.src = src;
      if (attributes) {
        for (const key in attributes) {
          const attribute = key;
          const value = attributes[key];
          scriptElem.setAttribute(attribute, value ? value : "");
        }
      }
      scriptElem.addEventListener("readystatechange", () => {
        resolve();
      });
      document.head.appendChild(scriptElem);
    }, timeout);
  });
}

delayScript(
  "https://messenger.ngageics.com/ilnksrvr.aspx?websiteid=244-114-91-248-145-38-209-6",
  5000
);
delayScript("https://fast.wistia.com/embed/medias/wzq96iioj4.jsonp", 5000);
delayScript("https://fast.wistia.com/assets/external/E-v1.js", 5000);