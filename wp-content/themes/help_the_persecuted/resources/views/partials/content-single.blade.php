<article @php(post_class())>
  <div class="page-header">
    <h1 class="has-text-centered">{!! App::title() !!}</h1>
  </div>
  <div class="post-container">
    <div class="entry-content">
      @php(the_content())
    </div>
    <hr class="is-gray">
    <div class="navigation">
      <div class="next-post"><?php next_post_link(); ?></div>
      <div class="previous-post"><?php previous_post_link(); ?></div>
    </div>
  </div>
</article>
