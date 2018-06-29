{{--
  Template Name: Our Impact Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  @include('partials.page-header')
    <section class="whythepersecuted-today has-text-centered container">
      <div class="ourimpact-content">
        <h1>{{ the_field('stats_heading') }}</h1>
      </div>
      <div class="columns stat-charts">
        <div class="column">
          <div class="inner js-sr-set-1">
            <div class="donut">
              <h2>16<sup>%</sup></h2>
              <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <title>Layer 1</title>
                  <circle id="bg1" r="69.85699" cy="81" cx="81" stroke-width="12" stroke="#e6e6e6" fill="none"/>
                  <circle id="circle1" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="12" stroke="#deb540" fill="none"/>
                </g>
              </svg>
            </div>
            <h6>Were directly affected by Isis</h6>
          </div>
        </div>
        <div class="column">
          <div class="inner js-sr-set-1">
            <div class="donut">
              <h2>16<sup>%</sup></h2>
              <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <title>Layer 1</title>
                  <circle id="bg2" r="69.85699" cy="81" cx="81" stroke-width="12" stroke="#e6e6e6" fill="none"/>
                  <circle id="circle2" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="12" stroke="#a57b51" fill="none"/>
                </g>
              </svg>
            </div>
            <h6>Suffered physical torture or abuse</h6>
          </div>
        </div>
        <div class="column">
          <div class="inner js-sr-set-1">
            <div class="donut">
              <h2>8<sup>%</sup></h2>
              <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <title>Layer 1</title>
                  <circle id="bg3" r="69.85699" cy="81" cx="81" stroke-width="12" stroke="#e6e6e6" fill="none"/>
                  <circle id="circle3" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="12" stroke="#44b2a5" fill="none"/>
                </g>
              </svg>
            </div>
            <h6>Had a family member killed for their faith</h6>
          </div>
        </div>
        <div class="column">
          <div class="inner js-sr-set-1">
            <div class="donut">
              <h2>56<sup>%</sup></h2>
              <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <title>Layer 1</title>
                  <circle id="bg4" r="69.85699" cy="81" cx="81" stroke-width="12" stroke="#e6e6e6" fill="none"/>
                  <circle id="circle4" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="12" stroke="#aa2c2b" fill="none"/>
                </g>
              </svg>
            </div>
            <h6>Of those helped were converts from Islam</h6>
          </div>
        </div>
      </div>
      <div class="is-absolute disclaimer"><small>(Percentages based on records from fiscal years 2017 and 2018)</small></div>
    </section>
    <section class="ourimpact-map fill-bg">
      <div class="ourimpact-content">
        <h5>{{ the_field('map_heading') }}</h5>
        <div class="js-sr">{{ the_field('map_text') }}</div>
      </div>
    </section>
    <section class="ourimpact-container has-text-centered">
      <h3 class="js-sr">{{ the_field('highlight_section_1_heading') }}</h3>
      <div class="js-sr">{{ the_field('highlight_section_1_text') }}</div>
    </section>
    <section class="ourimpact-quote has-text-centered has-text-white fill-bg">
      <div class="ourimpact-content">
        <h5 class="js-sr">{{ the_field('quote_text') }}</h5>
        <p class="js-sr">{{ the_field('quote_attribution') }}</p>
      </div>
    </section>
    <section class="ourimpact-stories has-text-centered">
      <div class="ourimpact-content">
        <h1 class="js-sr">{{ the_field('stories_main_heading') }}</h1>
        <div class="js-sr">{{ the_field('stories_main_text') }}</div>
      </div>
      <div class="container">
        @php
          if (get_field('video_image')) {
            $video_style = 'style="background-image: url(' . get_field('video_image') . ');"';
          } else {
            $video_class = 'img-twowomen';
          }
        @endphp
        <a class="video-image js-sr js-modal-video {{ $video_class }}" data-video-id="{{ the_field('youtube_video_id') }}" href="#" {!! $video_style !!}></a>
        
        <div class="story-highlight has-text-white">
          <?php $post_object = get_field('highlight_story');
          if( $post_object ): 
          	// override $post
          	$post = $post_object;
          	setup_postdata( $post ); ?>
            <div class="columns">
              <div class="column">
                <div class="fill-bg js-sr" style="background-image: url({!! has_post_thumbnail($post) ? wp_get_attachment_image_src( get_post_thumbnail_id( $post ), 'medium' )[0] : '/wp-content/themes/help_the_persecuted/resources/assets/images/placeholder.png' !!});"></div>
              </div>
              <div class="column">
                <div class="inner">
                  <h5 class="js-sr">{{ get_the_excerpt($post) }}</h5>
                  <p class="js-sr">{{ the_field('highlight_excerpt_text', $post) }}</p>
                  <p class="js-sr"><a href="{{ get_the_permalink($post) }}" class="arrow-link">Read Story</a></p>
                </div>
              </div>
            </div>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="story-grid container">
      <div class="columns is-multiline is-flex">
        <?php $post_objects = get_field('story_links'); ?>
        @if( $post_objects )
          @foreach( $post_objects as $post_object)
      		  <div class="column is-one-quarter is-half-mobile js-sr-set-2">
              <a href="{{ get_permalink($post_object->ID) }}">
                <img src="{!! has_post_thumbnail($post_object->ID) ? wp_get_attachment_image_src( get_post_thumbnail_id( $post_object->ID ), 'thumbnail' )[0] : '/wp-content/themes/help_the_persecuted/resources/assets/images/placeholder.png' !!}" alt="{{ $recent['post_title'] }}">
                <h6>{{ get_the_excerpt($post_object->ID) }}</h6>
                <span class="arrow-link">Read {{ get_the_title($post_object->ID) }}</span>
              </a>
            </div>
          @endforeach
        @endif
      </div>
      <p class="has-text-centered"><a href="/stories" class="button">View All</a></p>
    </section>
    <section class="has-bg-gray has-text-centered">
      <div class="ourimpact-content ourimpact-donate">
        <h1 class="js-sr">{{ the_field('call_to_donate_headline') }}</h1>
        <div class="js-sr">{{ the_field('call_to_donate_text') }}</div>
        <p class="js-sr"><a href="/donate" class="button is-primary">Give Today</a></p>
      </div>
    </section> 
  @endwhile
@endsection
