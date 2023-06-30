window.addEventListener("scroll", function() {
    var menuFixo = document.getElementById("menu_fixo");

    if (window.pageYOffset > 30) {
      menuFixo.classList.add("scroll");
    } else {
      menuFixo.classList.remove("scroll");
    }
  });
  window.addEventListener('scroll', function() {
    var menuNav = document.querySelector('.menu_nav');
    if (window.pageYOffset > 0) {
      menuNav.classList.add('scrolled');
    } else {
      menuNav.classList.remove('scrolled');
    }
  });
  