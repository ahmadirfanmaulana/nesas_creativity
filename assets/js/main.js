$(window).scroll(function () {
  if ($(window).scrollTop() > 10) {
    $('.navbar').css({
      "padding" : "0px 5%",
      "transition" : "padding 0.5s"
    })
  }
  else {
    $('.navbar').css({
      "padding" : "0px 0%"
    })
  }
})
 
