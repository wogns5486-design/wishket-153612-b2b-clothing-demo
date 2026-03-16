  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer__grid">
        <div>
          <h3 class="footer__title">Korea<span style="color:var(--primary)">Textile</span></h3>
          <p class="footer__text">Leading B2B exporter of premium second-hand clothing from South Korea. Serving global markets with quality, reliability, and competitive pricing since 2011.</p>
        </div>
        <div>
          <h3 class="footer__title">Quick Links</h3>
          <div class="footer__links">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a>
            <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Products</a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
          </div>
        </div>
        <div>
          <h3 class="footer__title">Contact Us</h3>
          <div class="footer__contact-item">📞 <span><?php echo koreatextile_contact( 'phone' ); ?></span></div>
          <div class="footer__contact-item">✉️ <span><?php echo koreatextile_contact( 'email' ); ?></span></div>
          <div class="footer__contact-item">📍 <span><?php echo koreatextile_contact( 'address' ); ?></span></div>
          <div class="footer__social">
            <a href="#" aria-label="LinkedIn">in</a>
            <a href="#" aria-label="Facebook">f</a>
            <a href="#" aria-label="Instagram">ig</a>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <p>&copy; <?php echo date( 'Y' ); ?> KoreaTextile Co. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
