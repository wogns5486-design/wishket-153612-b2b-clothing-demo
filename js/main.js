/* Main JS — Navigation, scroll effects, animations */
(function () {
  /* --- Mobile Nav Toggle --- */
  var toggle = document.querySelector('.nav__toggle');
  var menu = document.querySelector('.nav__menu');
  var overlay = document.querySelector('.nav__overlay');

  if (toggle) {
    toggle.addEventListener('click', function () {
      var isOpen = toggle.classList.toggle('nav__toggle--active');
      menu.classList.toggle('nav__menu--open');
      if (overlay) overlay.classList.toggle('nav__overlay--active');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  }

  if (overlay) {
    overlay.addEventListener('click', function () {
      toggle.classList.remove('nav__toggle--active');
      menu.classList.remove('nav__menu--open');
      overlay.classList.remove('nav__overlay--active');
      toggle.setAttribute('aria-expanded', 'false');
    });
  }

  /* --- Header scroll effect --- */
  var header = document.querySelector('.header');
  if (header) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 80) {
        header.classList.add('header--scrolled');
      } else {
        header.classList.remove('header--scrolled');
      }
    });
  }

  /* --- Scroll fade-in (IntersectionObserver) --- */
  var fadeEls = document.querySelectorAll('.fade-in');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('fade-in--visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    fadeEls.forEach(function (el) { observer.observe(el); });
  } else {
    fadeEls.forEach(function (el) { el.classList.add('fade-in--visible'); });
  }

  /* --- Statistics counter animation --- */
  var statNumbers = document.querySelectorAll('.stats__number');
  if (statNumbers.length && 'IntersectionObserver' in window) {
    var counted = false;
    var statsObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting && !counted) {
          counted = true;
          animateCounters();
          statsObserver.disconnect();
        }
      });
    }, { threshold: 0.5 });

    statsObserver.observe(statNumbers[0].closest('.stats') || statNumbers[0]);
  }

  function animateCounters() {
    statNumbers.forEach(function (el) {
      var target = parseInt(el.getAttribute('data-target'), 10);
      var suffix = el.getAttribute('data-suffix') || '';
      var duration = 2000;
      var start = 0;
      var startTime = null;

      function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = Math.min((timestamp - startTime) / duration, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        var value = Math.floor(eased * target);
        el.textContent = value + suffix;
        if (progress < 1) requestAnimationFrame(step);
      }

      requestAnimationFrame(step);
    });
  }

  /* --- FAQ Accordion --- */
  var faqQuestions = document.querySelectorAll('.faq__question');
  faqQuestions.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.parentElement;
      var isOpen = item.classList.contains('faq__item--open');
      // Close all
      document.querySelectorAll('.faq__item--open').forEach(function (openItem) {
        openItem.classList.remove('faq__item--open');
      });
      // Toggle current
      if (!isOpen) item.classList.add('faq__item--open');
    });
  });
})();
