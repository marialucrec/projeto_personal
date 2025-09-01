let lastScrollTop = 0;
const navbar = document.getElementById('mainNavbar');

window.addEventListener('scroll', function () {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop + 10) {
    navbar.classList.remove('visible-navbar');
    navbar.classList.add('hidden-navbar');
  } else if (scrollTop < lastScrollTop - 10) {
    navbar.classList.remove('hidden-navbar');
    navbar.classList.add('visible-navbar');
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});
