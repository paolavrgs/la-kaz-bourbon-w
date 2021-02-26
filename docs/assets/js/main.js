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

$('.modal').on('shown.bs.modal', function (e) {
  $('.product-images-slider').slick('setPosition');
  $('.wrap-modal-slider').addClass('open');
})

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

  const $el = $('.widget-scroll'); 
  const isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 600 && !isPositionFixed){ 
    $el.css({'position': 'fixed', 'top': '0px', 'display': 'block'}); 
  }
  if ($(this).scrollTop() < 600 && isPositionFixed){
    $el.css({'position': 'static', 'top': '0px', 'display': 'none'}); 
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
