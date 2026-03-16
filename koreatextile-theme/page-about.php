<?php
/**
 * Template Name: About Us
 */
get_header(); ?>

  <main>

  <!-- Page Header -->
  <section class="page-header">
    <div class="container">
      <h1>About KoreaTextile</h1>
      <p>Your trusted partner in premium second-hand clothing export since 2011.</p>
    </div>
  </section>

  <!-- Company Overview -->
  <section class="section fade-in">
    <div class="container">
      <div class="two-col">
        <div>
          <h2>Who We Are</h2>
          <p>KoreaTextile Co. is a leading B2B exporter of premium second-hand clothing based in Seoul, South Korea. Founded in 2011, we have grown from a small local collector to one of Korea's largest used clothing exporters.</p>
          <p>Our mission is to bridge the gap between Korea's abundant supply of high-quality used clothing and the growing global demand for affordable, quality apparel. We serve buyers in over 30 countries, processing more than 500 tons of clothing every month.</p>
          <h3 style="margin-top:25px;margin-bottom:10px;">Our Vision</h3>
          <p>To be the most trusted name in the global second-hand clothing trade — known for consistent quality, fair pricing, and sustainable practices that give clothing a second life.</p>
        </div>
        <img src="<?php echo koreatextile_img( 'about-company.jpg' ); ?>" alt="KoreaTextile warehouse facility with sorted clothing" class="two-col__image">
      </div>
    </div>
  </section>

  <!-- Process -->
  <section class="section section--light fade-in">
    <div class="container">
      <div class="section__header">
        <h2>Our Process</h2>
        <p>From collection to container — every step is quality-controlled.</p>
      </div>
      <div class="process">
        <div class="process__step">
          <div class="process__icon">📦</div>
          <div>
            <h4 class="process__title">Collection</h4>
            <p class="process__text">Sourced from trusted collection networks across South Korea</p>
          </div>
        </div>
        <div class="process__step">
          <div class="process__icon">👔</div>
          <div>
            <h4 class="process__title">Sorting</h4>
            <p class="process__text">Expert sorters categorize by type, quality, and target market</p>
          </div>
        </div>
        <div class="process__step">
          <div class="process__icon">🔍</div>
          <div>
            <h4 class="process__title">Quality Check</h4>
            <p class="process__text">Two-stage inspection ensures every item meets export standards</p>
          </div>
        </div>
        <div class="process__step">
          <div class="process__icon">🗜️</div>
          <div>
            <h4 class="process__title">Compression</h4>
            <p class="process__text">Hydraulic press packing into standardized bales for efficient shipping</p>
          </div>
        </div>
        <div class="process__step">
          <div class="process__icon">🚢</div>
          <div>
            <h4 class="process__title">Export</h4>
            <p class="process__text">Containerized shipping to ports worldwide with full documentation</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Facility Gallery -->
  <section class="section fade-in">
    <div class="container">
      <div class="section__header">
        <h2>Our Facilities</h2>
        <p>State-of-the-art sorting and processing facilities in Seoul.</p>
      </div>
      <div class="gallery">
        <?php for ( $i = 1; $i <= 6; $i++ ) : ?>
        <div class="gallery__item">
          <img src="<?php echo koreatextile_img( "facility-{$i}.jpg" ); ?>" alt="KoreaTextile facility photo <?php echo $i; ?>" loading="lazy">
        </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>

  <!-- Certifications -->
  <section class="section section--light fade-in">
    <div class="container">
      <div class="section__header">
        <h2>Certifications &amp; Memberships</h2>
        <p>Quality and compliance you can trust.</p>
      </div>
      <div class="grid grid--4col" style="text-align:center;">
        <div class="card" style="padding:30px;">
          <div class="card__icon">🏅</div>
          <h4 class="card__title">ISO 9001:2015</h4>
          <p class="card__text">Quality Management System</p>
        </div>
        <div class="card" style="padding:30px;">
          <div class="card__icon">🌱</div>
          <h4 class="card__title">Eco-Certified</h4>
          <p class="card__text">Sustainable Textile Practices</p>
        </div>
        <div class="card" style="padding:30px;">
          <div class="card__icon">📋</div>
          <h4 class="card__title">KITA Member</h4>
          <p class="card__text">Korea International Trade Association</p>
        </div>
        <div class="card" style="padding:30px;">
          <div class="card__icon">🤝</div>
          <h4 class="card__title">Fair Trade</h4>
          <p class="card__text">Ethical Sourcing Partner</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2>Want to Learn More?</h2>
      <p>Contact us today to discuss your requirements and get a personalized quote.</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--outline">Get in Touch</a>
    </div>
  </section>

  </main>

<?php get_footer(); ?>
