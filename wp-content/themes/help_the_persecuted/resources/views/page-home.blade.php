{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  <section class="home-header fill-bg has-text-centered">
    <div class="background-video">
      <video loop muted autoplay poster="@asset('images/alley.jpg')" class="bg__video">
        <source src="https://static.htp.org/site/20180626205415/htp-homepage.webm" type="video/webm">
        <source src="https://static.htp.org/site/20180626205415/htp-homepage-web.mp4" type="video/mp4">
        <source src="https://static.htp.org/site/20180626205415/htp_homepage.ogv" type="video/ogg">
      </video>
    </div>
    <h1 class="has-text-white">{{ the_field('header_text') }}</h1>
    <a class="js-modal-video" data-video-id="{{ the_field('youtube_video_id') }}" href="#">
      <img width="60" src="@asset('images/play-icon-white.svg')">
    </a>
  </section>
  <section class="home-extinction has-text-centered">
    <div class="container">
      <h3>{{ the_field('section_2_heading') }}</h3>
      {{ the_field('section_2_text') }}
      <p><a href="/donate" class="button is-primary">Donate</a></p>
      <div class="pale-boxes columns">
        <div class="column is-flex">
          <div class="pale-box js-sr-set-1">
            <img src="@asset('images/magnify-icon.svg')" alt="">
            <h4>Identify</h4>
            {{ the_field('box_1_text') }}
          </div>
        </div>
        <div class="column is-flex">
          <div class="pale-box js-sr-set-1">
            <img src="@asset('images/parachute-icon.svg')" alt="">
            <h4>Support</h4>
            {{ the_field('box_2_text') }}
          </div>
        </div>
        <div class="column is-flex">
          <div class="pale-box js-sr-set-1">
            <img src="@asset('images/heartshake-icon.svg')" alt="">
            <h4>Empower</h4>
            {{ the_field('box_3_text') }}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="newsletter-brown">
    <div class="columns is-centered has-text-centered-mobile is-multiline">
    	<div class="column is-narrow">
    		<h3 class="js-sr-set-2">
    			Be the First to Know
    		</h3>
    	</div>
    	<div class="column is-narrow js-sr-set-2">
    		<p>Get our e-newsletter for inspiring stories, <br/>prayer requests, and updates from the field.</p>
    	</div>
    	<div class="column is-narrow js-sr-set-2">
    		@php
    		  echo do_shortcode('[contact-form-7 id="42" title="Contact form"]');
  		  @endphp
    	</div>
    </div>
  </section>
  <section>
    <div class="container has-text-centered home-millions">
      <div class="columns">
        <div class="column center-children">
          <h3 class="js-sr">{{ the_field('slider_side_text') }}</h3>
        </div>
        <div class="column">
          <div class="js-carousel home-carousel">
            <div class="carousel-cell">
              <div class="cell-content">
                <h1 class="has-text-white"><span>Every </span>6 Min</h1>
                <hr class="mini is-white" />
                <p class="has-text-white">a Christian is killed for following Jesus</p>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="cell-content">
                <h1 class="has-text-white">58%</h1>
                <hr class="mini is-white" />
                <p class="has-text-white">of the more than 7 million Iraqi and Syrian refugees are Christians</p>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="cell-content">
                <h1 class="has-text-white">25K</h1>
                <hr class="mini is-white" />
                <p class="has-text-white">Christians have received life-giving support since 2011</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <h3 class="section-title">{{ the_field('sub-slider_headline') }}</h3>
  <section class="alternating-image-text">
    <div class="columns">
      <div class="column fill-bg img-desertpeople"><div></div></div>
      <div class="column center-children is-text-dark js-sr">
        <h5>{{ the_field('alternating_textimage_heading_1') }}</h5>
        <hr class="mini">
        {{ the_field('alternating_textimage_text_1') }}
        <p><a href="/why-the-persecuted" class="arrow-link">Why The Persecuted?</a></p>
      </div>
    </div>
    <div class="columns">
      <div class="column fill-bg img-womanchild"><div></div></div>
      <div class="column center-children has-text-centered js-sr">
        <h5>{{ the_field('alternating_textimage_heading_2') }}</h5>
        <p><a href="{{ the_field('alternating_textimage_link_url_2') }}" class="arrow-link">{{ the_field('alternating_textimage_link_text_2') }}</a></p>
      </div>
    </div>
    <div class="columns">
      <div class="column fill-bg img-addressing-the-need"><div></div></div>
      <div class="column center-children js-sr">
        <h5>{{ the_field('alternating_textimage_heading_3') }}</h5>
        <hr class="mini">
        {{ the_field('alternating_textimage_text_3') }}
        <p><a href="/how-we-work" class="arrow-link">How We Work</a></p>
      </div>
    </div>
    <div class="columns">
      <div class="column fill-bg img-kids"><div></div></div>
      <div class="column center-children js-sr">
        <h5>{{ the_field('alternating_textimage_heading_4') }}</h5>
        <hr class="mini">
        {{ the_field('alternating_textimage_text_4') }}
        <p><a href="/our-impact" class="arrow-link">Our Impact</a></p>
      </div>
    </div>
  </section>
  <section class="home-getinvolved has-text-centered">
    <h1 class="js-sr">{{ the_field('last_heading_text') }}</h1>
    <p class="js-sr"><a href="/get-involved" class="button is-yellow">Get Involved</a></p>
  </section>
@endsection
