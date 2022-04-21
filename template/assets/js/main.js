$(document).ready(function () {
  $(".mobile-nav-toggle").click(function () {
    if ($("#main-nav-w").hasClass("nav-hidden")) {
      $("#main-nav-w").removeClass("nav-hidden");
      $("#main-nav-w").addClass("nav-active");
    } else {
      $("#main-nav-w").removeClass("nav-active");
      $("#main-nav-w").addClass("nav-hidden");
    }
  });
});
