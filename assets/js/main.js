$(document).ready(function () {
  var stickyElement = $(".header"),
    stickyClass = "stiky-header",
    stickyPos = stickyElement.offset().top, //Distance from the top of the window.
    stickyHeight;

  //Sticker function:
  function stickerFn() {
    var winTop = $(this).scrollTop();
    // Check element position and scrolling:
    if (winTop > 100 && winTop >= stickyPos) {
      stickyElement.addClass(stickyClass);
    } else {
      stickyElement.removeClass(stickyClass);
    }
  }
  stickerFn(); //Run.

  //Function trigger:
  $(window).scroll(function () {
    stickerFn();
  });
});
