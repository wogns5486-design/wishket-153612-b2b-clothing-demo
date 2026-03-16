/* Hero Slider — Vanilla JS */
(function () {
  const slides = document.querySelectorAll('.hero__slide');
  const dots = document.querySelectorAll('.hero__dot');
  const prevBtn = document.querySelector('.hero__arrow--prev');
  const nextBtn = document.querySelector('.hero__arrow--next');

  if (!slides.length) return;

  let current = 0;
  let timer;

  function goTo(index) {
    slides[current].classList.remove('hero__slide--active');
    dots[current].classList.remove('hero__dot--active');
    current = (index + slides.length) % slides.length;
    slides[current].classList.add('hero__slide--active');
    dots[current].classList.add('hero__dot--active');
  }

  function next() { goTo(current + 1); }
  function prev() { goTo(current - 1); }

  function startAutoplay() {
    timer = setInterval(next, 5000);
  }

  function resetAutoplay() {
    clearInterval(timer);
    startAutoplay();
  }

  if (prevBtn) prevBtn.addEventListener('click', function () { prev(); resetAutoplay(); });
  if (nextBtn) nextBtn.addEventListener('click', function () { next(); resetAutoplay(); });

  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () { goTo(i); resetAutoplay(); });
  });

  // Pause on hover / focus
  var heroEl = document.querySelector('.hero');
  if (heroEl) {
    heroEl.addEventListener('mouseenter', function () { clearInterval(timer); });
    heroEl.addEventListener('mouseleave', startAutoplay);
    heroEl.addEventListener('focusin', function () { clearInterval(timer); });
    heroEl.addEventListener('focusout', startAutoplay);
  }

  startAutoplay();
})();
