@if (wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0])
  <div class="page-header has-bg-img" style="background-image: url('{!! wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0] !!}');">
    <h1 class="has-text-white has-text-centered">{!! App::title() !!}</h1>
  </div>
@else
  <div class="page-header" style="background-image: url('{!! wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0] !!}');">
    <h1 class="has-text-centered">{!! App::title() !!}</h1>
  </div>
@endif