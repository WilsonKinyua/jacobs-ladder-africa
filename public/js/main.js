$(document).ready(function () {
  // preloader
  setTimeout(function () {
    $("#loader-container").fadeOut();
  }, 1500);
  // pillars carousel
  $(".pillars-carousel").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1500,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 650,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  // contact us form
  $("#contact-form").submit(function (e) {
    var recaptcha = $("#g-recaptcha-response").val();
    if (recaptcha === "") {
      event.preventDefault();
      $("#errorMessage").show();
    }
  });
});
