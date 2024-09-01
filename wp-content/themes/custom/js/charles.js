var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
});

function myFunction() {
  var x = document.getElementById("myNavigation");
  if (x.className === "mainmenu") {
    x.className += "-responsive";
  } else {
    x.className = "mainmenu";
  }
}