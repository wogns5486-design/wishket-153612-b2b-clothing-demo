<?php get_header(); ?>

  <main>

  <!-- Hero Slider -->
  <section class="hero">
    <div class="hero__slide hero__slide--active">
      <div class="hero__bg" style="background-image:url('<?php echo koreatextile_img( 'hero-1.jpg' ); ?>')"></div>
      <div class="hero__overlay"></div>
      <div class="container hero__content">
        <h1 class="hero__title">Premium Second-Hand Clothing from Korea</h1>
        <p class="hero__subtitle">Trusted supplier of high-quality used clothing to global B2B buyers. From collection to export, we deliver excellence at every step.</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--primary">Get a Quote</a>
      </div>
    </div>
    <div class="hero__slide">
      <div class="hero__bg" style="background-image:url('<?php echo koreatextile_img( 'hero-2.jpg' ); ?>')"></div>
      <div class="hero__overlay"></div>
      <div class="container hero__content">
        <h1 class="hero__title">Rigorous Sorting &amp; Quality Control</h1>
        <p class="hero__subtitle">Two-stage quality inspection ensures only the best reaches your market. Every bale meets our strict quality criteria.</p>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn--outline">Learn More</a>
      </div>
    </div>
    <div class="hero__slide">
      <div class="hero__bg" style="background-image:url('<?php echo koreatextile_img( 'hero-3.jpg' ); ?>')"></div>
      <div class="hero__overlay"></div>
      <div class="container hero__content">
        <h1 class="hero__title">Exporting to 30+ Countries Worldwide</h1>
        <p class="hero__subtitle">From Africa to South America, we deliver reliability at scale. Your trusted partner for bulk second-hand clothing supply.</p>
        <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="btn btn--outline">View Products</a>
      </div>
    </div>

    <button class="hero__arrow hero__arrow--prev" aria-label="Previous slide">&#10094;</button>
    <button class="hero__arrow hero__arrow--next" aria-label="Next slide">&#10095;</button>
    <div class="hero__controls">
      <button class="hero__dot hero__dot--active" aria-label="Slide 1"></button>
      <button class="hero__dot" aria-label="Slide 2"></button>
      <button class="hero__dot" aria-label="Slide 3"></button>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="section features fade-in">
    <div class="container">
      <div class="section__header">
        <h2>Why Choose KoreaTextile</h2>
        <p>We combine quality, scale, and reliability to deliver the best second-hand clothing to your market.</p>
      </div>
      <div class="grid grid--3col">
        <div class="card">
          <div class="card__icon">🌍</div>
          <h3 class="card__title">Global Reach</h3>
          <p class="card__text">Serving buyers in over 30 countries across Africa, South America, and Southeast Asia with reliable logistics and on-time delivery.</p>
        </div>
        <div class="card">
          <div class="card__icon">✅</div>
          <h3 class="card__title">Quality Control</h3>
          <p class="card__text">Two-stage sorting process with strict quality criteria for every bale. Only the best items make it to export.</p>
        </div>
        <div class="card">
          <div class="card__icon">💰</div>
          <h3 class="card__title">Competitive Pricing</h3>
          <p class="card__text">Direct from source with no middlemen, ensuring the best value for bulk orders. Flexible pricing for long-term partners.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistics -->
  <section class="section section--dark stats fade-in">
    <div class="container">
      <div class="stats__item">
        <div class="stats__number" data-target="15" data-suffix="+">0</div>
        <div class="stats__label">Years Experience</div>
      </div>
      <div class="stats__item">
        <div class="stats__number" data-target="500" data-suffix="+">0</div>
        <div class="stats__label">Tons / Month</div>
      </div>
      <div class="stats__item">
        <div class="stats__number" data-target="200" data-suffix="+">0</div>
        <div class="stats__label">Employees</div>
      </div>
      <div class="stats__item">
        <div class="stats__number" data-target="150" data-suffix="+">0</div>
        <div class="stats__label">Product Types</div>
      </div>
    </div>
  </section>

  <!-- Products Overview -->
  <section class="section fade-in">
    <div class="container">
      <div class="section__header">
        <h2>Our Products</h2>
        <p>We offer a wide range of second-hand clothing categories tailored to different markets and climates.</p>
      </div>
      <div class="grid grid--3col">
        <a href="<?php echo esc_url( home_url( '/products/#premium' ) ); ?>" class="card">
          <img src="<?php echo koreatextile_img( 'product-premium.jpg' ); ?>" alt="Premium export clothing sorted on racks" class="card__image">
          <div class="card__body">
            <h3 class="card__title">Premium Export</h3>
            <p class="card__text">High-quality branded items sorted for European, Japanese, and Middle Eastern markets.</p>
            <span class="card__link">Learn More →</span>
          </div>
        </a>
        <a href="<?php echo esc_url( home_url( '/products/#africa' ) ); ?>" class="card">
          <img src="<?php echo koreatextile_img( 'product-africa.jpg' ); ?>" alt="Bulk clothing bales for Africa export" class="card__image">
          <div class="card__body">
            <h3 class="card__title">Africa Export</h3>
            <p class="card__text">Bulk volume clothing sorted for Sub-Saharan and West African markets at competitive prices.</p>
            <span class="card__link">Learn More →</span>
          </div>
        </a>
        <a href="<?php echo esc_url( home_url( '/products/#tropical' ) ); ?>" class="card">
          <img src="<?php echo koreatextile_img( 'product-tropical.jpg' ); ?>" alt="Tropical climate clothing selection" class="card__image">
          <div class="card__body">
            <h3 class="card__title">Tropical Mix</h3>
            <p class="card__text">Lightweight clothing mix optimized for tropical climates in South America and Southeast Asia.</p>
            <span class="card__link">Learn More →</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section section--light testimonials fade-in">
    <div class="container">
      <div class="section__header">
        <h2>Trusted by Buyers Worldwide</h2>
        <p>Hear from our long-term partners across the globe.</p>
      </div>
      <div class="grid grid--3col">
        <div class="card">
          <p class="testimonials__quote">"KoreaTextile has been our most reliable supplier for the past 5 years. Their quality consistency is unmatched in the industry."</p>
          <p class="testimonials__author">🇳🇬 Adebayo Okonkwo</p>
          <p class="testimonials__role">Import Manager, Lagos Trading Co.</p>
        </div>
        <div class="card">
          <p class="testimonials__quote">"The sorting quality is excellent. We rarely find items below grade, which saves us significant re-sorting costs at our end."</p>
          <p class="testimonials__author">🇨🇱 Carlos Mendoza</p>
          <p class="testimonials__role">Director, Santiago Textiles</p>
        </div>
        <div class="card">
          <p class="testimonials__quote">"Competitive pricing, reliable shipping schedules, and responsive customer service. KoreaTextile is a true partner, not just a supplier."</p>
          <p class="testimonials__author">🇵🇭 Maria Santos</p>
          <p class="testimonials__role">CEO, Manila Garments Hub</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Global Reach -->
  <section class="section fade-in">
    <div class="container">
      <div class="section__header">
        <h2>Global Export Markets</h2>
        <p>We export to over 30 countries across 4 continents.</p>
      </div>
      <div class="flags">
        <div class="flags__item"><div class="flags__emoji">🇳🇬</div><div class="flags__name">Nigeria</div></div>
        <div class="flags__item"><div class="flags__emoji">🇬🇭</div><div class="flags__name">Ghana</div></div>
        <div class="flags__item"><div class="flags__emoji">🇰🇪</div><div class="flags__name">Kenya</div></div>
        <div class="flags__item"><div class="flags__emoji">🇹🇿</div><div class="flags__name">Tanzania</div></div>
        <div class="flags__item"><div class="flags__emoji">🇺🇬</div><div class="flags__name">Uganda</div></div>
        <div class="flags__item"><div class="flags__emoji">🇨🇱</div><div class="flags__name">Chile</div></div>
        <div class="flags__item"><div class="flags__emoji">🇵🇪</div><div class="flags__name">Peru</div></div>
        <div class="flags__item"><div class="flags__emoji">🇧🇷</div><div class="flags__name">Brazil</div></div>
        <div class="flags__item"><div class="flags__emoji">🇵🇭</div><div class="flags__name">Philippines</div></div>
        <div class="flags__item"><div class="flags__emoji">🇲🇾</div><div class="flags__name">Malaysia</div></div>
        <div class="flags__item"><div class="flags__emoji">🇵🇰</div><div class="flags__name">Pakistan</div></div>
        <div class="flags__item"><div class="flags__emoji">🇮🇳</div><div class="flags__name">India</div></div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2>Ready to Order? Request a Quote Today</h2>
      <p>Get competitive pricing on bulk second-hand clothing. Fast response guaranteed.</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--outline">Contact Us Now</a>
    </div>
  </section>

  </main>

<?php get_footer(); ?>
