<?php get_header(); ?>

  <main>

  <section class="page-header">
    <div class="container">
      <h1>Page Not Found</h1>
      <p>The page you're looking for doesn't exist or has been moved.</p>
    </div>
  </section>

  <section class="section" style="text-align:center;">
    <div class="container">
      <p style="font-size:4rem;margin-bottom:20px;">🔍</p>
      <p style="margin-bottom:30px;color:var(--text-light);">Sorry, we couldn't find what you were looking for. Please check the URL or navigate back to our homepage.</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">Back to Home</a>
    </div>
  </section>

  </main>

<?php get_footer(); ?>
