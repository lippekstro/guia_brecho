window.addEventListener("scroll", function () {
  var menuFixo = document.getElementById("menu_fixo");

  if (window.pageYOffset > 30) {
    menuFixo.classList.add("scroll");
  } else {
    menuFixo.classList.remove("scroll");
  }
});
window.addEventListener('scroll', function () {
  var menuNav = document.querySelector('.menu_nav');
  if (window.pageYOffset > 0) {
    menuNav.classList.add('scrolled');
  } else {
    menuNav.classList.remove('scrolled');
  }
});

const productContainers = [...document.querySelectorAll('.index .product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
