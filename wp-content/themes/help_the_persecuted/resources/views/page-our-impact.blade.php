{{--
  Template Name: Our Impact Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  @include('partials.page-header')
    <section class="whythepersecuted-today has-text-centered container">
      <div class="ourimpact-content">
        <h2>In the past 7 years we’ve helped tens of thousands of individuals</h2>
      </div>
      <div class="columns stat-charts">
        <div class="column">
          <div class="inner">
            <div class="donut">
              <h2>15<sup>%</sup></h2>
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
          <div class="inner">
            <div class="donut">
              <h2>15<sup>%</sup></h2>
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
          <div class="inner">
            <div class="donut">
              <h2>4<sup>%</sup></h2>
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
          <div class="inner">
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
    </section>
    <section class="ourimpact-map fill-bg">
      <div class="ourimpact-content">
        <h5>Bringing Hope and Redemption to the Middle East and North Africa</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
      </div>
    </section>
    <section class="ourimpact-container has-text-centered">
      <h3>Mass Movement of the Holy Spirit</h3>
      <p>Copy Notes: Speak to hope and revival and what God is doing in spite of persecution. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
    </section>
    <section class="ourimpact-quote has-text-centered has-text-white fill-bg">
      <div class="ourimpact-content">
        <h5>“Through my suffering, I have discovered the truth. Therefore, I thank God for ISIS and the pain they caused me that lead me to Christ.”</h5>
        <p>&mdash; Saudi refugee</p>
      </div>
    </section>
    <section class="ourimpact-stories has-text-centered">
      <div class="ourimpact-content">
        <h2>Stories from the Field</h2>
        <p>Copy note: In spite of the horrific tragedies some Christians are facing. We are having a tremendous impact in the lives of many. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
      </div>
      <div class="container">
        <a class="video-image js-modal-video img-twowomen" data-video-id="XJS_UYNq4No" href="#"></a>
        <div class="story-highlight has-text-white">
          <!--TODO: below, no offset, numberposts 1 - if to be dynamic?-->
          <div class="columns">
            <div class="column"><img src="@asset('images/highlight-story.jpg')"></img></div>
            <div class="column">
              <div class="inner">
                <h5>The Only Family I Have Left is the Church</h5>
                <p>Copy note: Quote or callout from a featured story. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                <p><a href="#" class="arrow-link">Read My Story</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="story-grid container">
      <div class="columns is-multiline is-flex">
        <?php
        	$args = array( 'numberposts' => '5', 'order' => 'desc', 'offset' => 1 );
        	$recent_posts = wp_get_recent_posts( $args ); ?>
        	@foreach ( $recent_posts as $recent )
      		  <div class="column is-one-quarter is-half-mobile">
              <a href="<?php get_permalink($recent['ID']) ?>">
                <img src="{!! has_post_thumbnail($recent['ID']) ? wp_get_attachment_image_src( get_post_thumbnail_id( $recent['ID'] ), 'thumbnail' )[0] : '//placehold.it/360x360' !!}" alt="{{ $recent['post_title'] }}">
                <h6>{{ get_the_excerpt($recent['ID']) }}</h6>
                <span class="arrow-link">Read {{ get_the_title($recent['ID']) }}</span>
              </a>
            </div>
          @endforeach
        	<?php wp_reset_query(); ?>
      </div>
      <p class="has-text-centered"><a href="/stories" class="button">View All</a></p>
    </section>
  @endwhile
@endsection
