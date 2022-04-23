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

  var exampleModal = document.getElementById("contact-update-modal");
  exampleModal.addEventListener("show.bs.modal", function (event) {
    var button = event.relatedTarget;


    $(".updId").val(button.getAttribute("data-contact-id"));
    $(".updName").val(button.getAttribute("data-contact-name"));
    $(".updSurname").val(button.getAttribute("data-contact-surname"));
    $(".updEmail").val(button.getAttribute("data-contact-email"));
    $(".updPhone").val(button.getAttribute("data-contact-phone"));
    $(".updNow").val(button.getAttribute("data-contact-now"));
    $(".updGoal").val(button.getAttribute("data-contact-goal"));
    $(".updDo").val(button.getAttribute("data-contact-do"));
  });
});
