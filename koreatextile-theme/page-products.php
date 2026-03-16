<?php
/**
 * Template Name: Products
 */
get_header(); ?>

  <main>

  <!-- Page Header -->
  <section class="page-header">
    <div class="container">
      <h1>Our Products</h1>
      <p>Premium second-hand clothing sorted and packed for your specific market needs.</p>
    </div>
  </section>

  <!-- Category Quick Nav -->
  <section class="section" style="padding-bottom:40px;">
    <div class="container">
      <div class="grid grid--3col">
        <a href="#premium" class="card" style="text-align:center;">
          <img src="<?php echo koreatextile_img( 'product-premium.jpg' ); ?>" alt="Premium branded clothing on hangers" class="card__image">
          <div class="card__body">
            <h3 class="card__title">Premium Export</h3>
            <span class="card__link">View Details ↓</span>
          </div>
        </a>
        <a href="#africa" class="card" style="text-align:center;">
          <img src="<?php echo koreatextile_img( 'product-africa.jpg' ); ?>" alt="Bulk clothing sorted in large warehouse" class="card__image">
          <div class="card__body">
            <h3 class="card__title">Africa Export</h3>
            <span class="card__link">View Details ↓</span>
          </div>
        </a>
        <a href="#tropical" class="card" style="text-align:center;">
          <img src="<?php echo koreatextile_img( 'product-tropical.jpg' ); ?>" alt="Lightweight summer clothing collection" class="card__image">
          <div class="card__body">
            <h3 class="card__title">Tropical Mix</h3>
            <span class="card__link">View Details ↓</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Premium Export Detail -->
  <section class="section section--light fade-in" id="premium">
    <div class="container">
      <div class="product-detail">
        <img src="<?php echo koreatextile_img( 'product-premium.jpg' ); ?>" alt="Premium quality branded second-hand clothing" class="product-detail__image">
        <div class="product-detail__info">
          <h3>Premium Export</h3>
          <p>Our premium line features carefully selected branded items from top Korean and international labels. Each piece undergoes rigorous quality inspection to ensure it meets the high standards of discerning markets.</p>
          <dl class="product-detail__specs">
            <dt>Target Markets</dt>
            <dd>Europe, Japan, Middle East, Southeast Asia</dd>
            <dt>Item Categories</dt>
            <dd>Men's &amp; Women's outerwear, dresses, branded sportswear, designer items, denim</dd>
            <dt>Quality Grade</dt>
            <dd>Grade A — No stains, tears, or defects. Minimal wear.</dd>
            <dt>Packaging</dt>
            <dd>45kg bales, vacuum-sealed. 20ft / 40ft containers available.</dd>
            <dt>Minimum Order</dt>
            <dd>1 container (20ft: ~10 tons | 40ft: ~22 tons)</dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!-- Africa Export Detail -->
  <section class="section fade-in" id="africa">
    <div class="container">
      <div class="product-detail">
        <img src="<?php echo koreatextile_img( 'product-africa.jpg' ); ?>" alt="Bulk clothing bales for African market export" class="product-detail__image">
        <div class="product-detail__info">
          <h3>Africa Export</h3>
          <p>High-volume, cost-effective clothing mix designed specifically for African markets. We understand the unique requirements of Sub-Saharan and West African buyers and sort accordingly.</p>
          <dl class="product-detail__specs">
            <dt>Target Markets</dt>
            <dd>Nigeria, Ghana, Kenya, Tanzania, Uganda, Cameroon, Senegal</dd>
            <dt>Item Categories</dt>
            <dd>Men's &amp; Women's casual wear, T-shirts, trousers, children's clothing, shoes</dd>
            <dt>Quality Grade</dt>
            <dd>Grade A/B Mix — Good condition, sorted by category and season.</dd>
            <dt>Packaging</dt>
            <dd>55kg bales, compressed. Full container loads for best pricing.</dd>
            <dt>Minimum Order</dt>
            <dd>1 container (20ft: ~12 tons | 40ft: ~25 tons)</dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!-- Tropical Mix Detail -->
  <section class="section section--light fade-in" id="tropical">
    <div class="container">
      <div class="product-detail">
        <img src="<?php echo koreatextile_img( 'product-tropical.jpg' ); ?>" alt="Tropical lightweight clothing assortment" class="product-detail__image">
        <div class="product-detail__info">
          <h3>Tropical Mix</h3>
          <p>Lightweight, breathable clothing optimized for hot and humid climates. Our tropical mix excludes heavy winter items and focuses on the garments that sell best in warm-weather markets.</p>
          <dl class="product-detail__specs">
            <dt>Target Markets</dt>
            <dd>Chile, Peru, Brazil, Philippines, Malaysia, Indonesia, India</dd>
            <dt>Item Categories</dt>
            <dd>T-shirts, shorts, light dresses, linen shirts, cotton trousers, sandals</dd>
            <dt>Quality Grade</dt>
            <dd>Grade A/B — Climate-appropriate sorting, no heavy or winter items.</dd>
            <dt>Packaging</dt>
            <dd>45kg bales, heat-sealed. Mixed or single-category bales available.</dd>
            <dt>Minimum Order</dt>
            <dd>1 container (20ft: ~10 tons | 40ft: ~22 tons)</dd>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section fade-in">
    <div class="container">
      <div class="section__header">
        <h2>Frequently Asked Questions</h2>
        <p>Common questions from our buyers.</p>
      </div>
      <div style="max-width:800px;margin:0 auto;">
        <div class="faq__item">
          <button class="faq__question">What is the minimum order quantity?</button>
          <div class="faq__answer">
            <p>Our minimum order is 1 container (20ft or 40ft). A 20ft container holds approximately 10-12 tons depending on the product category, while a 40ft container holds 22-25 tons. We recommend starting with a 20ft container for first-time orders.</p>
          </div>
        </div>
        <div class="faq__item">
          <button class="faq__question">How do you ensure quality?</button>
          <div class="faq__answer">
            <p>We use a two-stage quality control process. First, trained sorters categorize items by type, condition, and market suitability. Then, a separate quality inspection team reviews random samples from each bale to ensure they meet our grade standards. We maintain a defect rate below 3%.</p>
          </div>
        </div>
        <div class="faq__item">
          <button class="faq__question">What are the payment terms?</button>
          <div class="faq__answer">
            <p>We accept T/T (Telegraphic Transfer), L/C (Letter of Credit), and Western Union. Standard terms are 30% deposit upon order confirmation and 70% balance before shipment. Long-term partners may qualify for special credit terms.</p>
          </div>
        </div>
        <div class="faq__item">
          <button class="faq__question">How long does shipping take?</button>
          <div class="faq__answer">
            <p>Production and loading takes 7-14 days after payment confirmation. Shipping times vary by destination: Southeast Asia 7-10 days, Africa 25-35 days, South America 30-40 days. We provide full tracking information for every shipment.</p>
          </div>
        </div>
        <div class="faq__item">
          <button class="faq__question">Can I visit your facility?</button>
          <div class="faq__answer">
            <p>Absolutely! We welcome buyer visits to our Seoul facility. You can see our sorting process firsthand, inspect inventory, and discuss your requirements with our team. Please contact us at least one week in advance to schedule a visit. We can also assist with travel arrangements.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2>Interested in Our Products?</h2>
      <p>Send us an inquiry and receive a detailed quotation within 24 hours.</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--outline">Request a Quote</a>
    </div>
  </section>

  </main>

<?php get_footer(); ?>
