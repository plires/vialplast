import AOS from "aos/dist/aos.js";
import "jquery.easing/jquery.easing.min.js";
import $ from "jquery";

AOS.init({
  offset: 120,
  easing: "ease",
  once: false,
});

$(function () {
  $(".btn_to_form").bind("click", function (event) {
    var $anchor = $(this);
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $($anchor.attr("href")).offset().top - 350,
        },
        1500,
        "easeInOutExpo"
      );
    event.preventDefault();
  });
});
