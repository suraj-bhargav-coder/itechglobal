<?php
/*
Template Name: Blog (Itech Global)
*/
get_header();
?>
<main>
  <section class="section" id="blog">
    <div class="container">
      <header class="section-title">
        <h2>Insights & Updates</h2>
        <p>Thought leadership, implementation notes, and updates from Itech Global.</p>
      </header>

      <div class="card-grid">
        <?php if (have_posts()) : ?>
          <?php
            // Query latest posts
            $blog_query = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page' => 9,
              'post_status' => 'publish'
            ));
          ?>
          <?php if ($blog_query->have_posts()) : ?>
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
              <article class="card reveal">
                <?php if (has_post_thumbnail()) : ?>
                  <div style="margin-bottom:12px;border-radius:12px;overflow:hidden;border:1px solid var(--line);">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large', array('style' => 'width:100%;height:180px;object-fit:cover;display:block;')); ?></a>
                  </div>
                <?php endif; ?>
                <h3 style="margin-top:0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p style="color:var(--muted);margin-bottom:12px;">
                  <?php echo esc_html(get_the_date('F j, Y')); ?>
                </p>
                <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22, '...')); ?></p>
                <p style="margin-top:12px;"><a href="<?php the_permalink(); ?>" style="color:var(--accent);font-weight:700;">Read more</a></p>
              </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <p>No blog posts yet. Check back soon.</p>
          <?php endif; ?>
        <?php else : ?>
          <p>No content found.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
