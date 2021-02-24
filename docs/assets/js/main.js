$(".main-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  fade: true
});

$(".product-images-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='assets/img/icons/arrow_left.svg'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='assets/img/icons/arrow_right.svg'></button>"
});

$(".gallery-images-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='assets/img/icons/arrow_left.svg'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='assets/img/icons/arrow_right.svg'></button>",
  responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

new WOW().init();

function addActiveNavLink() {
  const href = window.location.href;
  const links = $("#laKazBourbonNavbar .nav-link").get();
  const activeLink = links.find(link => link.href === href);
  if (activeLink) {
    activeLink.classList.add("active");
  }
}

addActiveNavLink();

$(window).on("scroll", () => {
  if ($(this).scrollTop()) {
    $(".js-gotop").fadeIn();
  } else {
    $(".js-gotop").fadeOut();
  }
});

$(".js-gotop").on("click", () => {
  $("html, body").animate({ scrollTop: 0 }, 500);
});

// BANNER VIDEO CONTROLS
const bannerVideo = $("#bannerVideo").get(0);
$(".pause-video").on("click", () => {
  if (bannerVideo.paused) {
    bannerVideo.play();
  } else {
    bannerVideo.pause();
  }
});

// $(".mute-video").on("click", () => {
//   if ($("#bannerVideo").prop('muted')) {
//     console.log("muteado")
//     $("#bannerVideo").prop("mute", false)
//   } else {
//     console.log("no muteado")
//     $("#bannerVideo").prop("mute", true)
//   }
// })
