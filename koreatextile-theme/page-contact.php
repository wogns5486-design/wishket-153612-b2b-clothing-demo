<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

  <main>

  <!-- Page Header -->
  <section class="page-header">
    <div class="container">
      <h1>Contact Us</h1>
      <p>Ready to place an order? Have questions? We'd love to hear from you.</p>
    </div>
  </section>

  <!-- Contact Info Cards -->
  <section class="section" style="padding-bottom:20px;">
    <div class="container">
      <div class="contact-info">
        <div class="contact-info__item">
          <div class="contact-info__icon">📞</div>
          <h3 class="contact-info__title">Phone</h3>
          <p class="contact-info__text"><?php echo koreatextile_contact( 'phone' ); ?><br><small style="color:var(--text-light)">Mon-Fri 9:00-18:00 KST</small></p>
        </div>
        <div class="contact-info__item">
          <div class="contact-info__icon">✉️</div>
          <h3 class="contact-info__title">Email</h3>
          <p class="contact-info__text"><?php echo koreatextile_contact( 'email' ); ?><br><small style="color:var(--text-light)">Response within 24 hours</small></p>
        </div>
        <div class="contact-info__item">
          <div class="contact-info__icon">📍</div>
          <h3 class="contact-info__title">Address</h3>
          <p class="contact-info__text"><?php echo koreatextile_contact( 'address' ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Inquiry Form (Contact Form 7) -->
  <section class="section fade-in" style="padding-top:20px;">
    <div class="container">
      <div class="section__header">
        <h2>Send Us an Inquiry</h2>
        <p>Fill out the form below and our team will get back to you within 24 hours with a detailed quotation.</p>
      </div>

      <div class="form">
        <?php
        // Output CF7 shortcode — form ID will be set after plugin installation
        $cf7_form = get_posts( array(
            'post_type'  => 'wpcf7_contact_form',
            'numberposts' => 1,
            'orderby'    => 'date',
            'order'      => 'ASC',
        ) );
        if ( $cf7_form ) {
            echo do_shortcode( '[contact-form-7 id="' . $cf7_form[0]->ID . '" title="Inquiry Form"]' );
        } else {
            echo '<p style="text-align:center;color:var(--text-light);">Contact form will be available after Contact Form 7 plugin is installed and configured.</p>';
        }
        ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2>Prefer a Direct Conversation?</h2>
      <p>Call us at <?php echo koreatextile_contact( 'phone' ); ?> or email <?php echo koreatextile_contact( 'email' ); ?> for immediate assistance.</p>
      <a href="mailto:<?php echo esc_attr( koreatextile_contact( 'email' ) ); ?>" class="btn btn--outline">Email Us Directly</a>
    </div>
  </section>

  </main>

<?php get_footer(); ?>
