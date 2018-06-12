<div class="column is-one-quarter is-half-mobile">
  <a href="<?php the_permalink() ?>">
    <img src="{!! has_post_thumbnail() ? wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'thumbnail' )[0] : '/wp-content/themes/help_the_persecuted/resources/assets/images/placeholder.png' !!}" alt="{{ the_title() }}">
    <h6>{{ the_excerpt() }}</h6>
    <span class="arrow-link">Read {{ the_title() }}</span>
  </a>
</div>
