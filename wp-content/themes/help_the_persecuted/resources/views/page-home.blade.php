{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  <section class="home-header fill-bg has-text-centered">
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
        <div class="column">
          <div class="pale-box">
            <img src="@asset('images/magnify-icon.svg')" alt="">
            <h4>Identify</h4>
            {{ the_field('box_1_text') }}
          </div>
        </div>
        <div class="column">
          <div class="pale-box">
            <img src="@asset('images/parachute-icon.svg')" alt="">
            <h4>Support</h4>
            {{ the_field('box_2_text') }}
          </div>
        </div>
        <div class="column">
          <div class="pale-box">
            <img src="@asset('images/heartshake-icon.svg')" alt="">
            <h4>Empower</h4>
            {{ the_field('box_3_text') }}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="newsletter-brown">
    <div class="columns is-centered is-multiline">
    	<div class="column is-narrow">
    		<h3>
    			Stay Informed
    		</h3>
    	</div>
    	<div class="column is-narrow">
    		<p>Get our e-newsletter for inspiring stories, <br/>prayer requests, and updates from the field.</p>
    	</div>
    	<div class="column is-narrow">
    		<!-- Begin MailChimp Signup Form -->
    		<div id="mc_embed_signup">
    		<form action="https://htp.us18.list-manage.com/subscribe/post?u=0a845938efd03f3fe32533187&amp;id=9f6f85e542" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    				<div id="mc_embed_signup_scroll">
    
    		<div class="mc-field-group">
    			<label for="mce-FNAME"></label>
    			<input type="text" value="First Name" name="FNAME" class="required" id="mce-FNAME">
    		</div>
    		<div class="mc-field-group">
    			<label for="mce-LNAME"></label>
    			<input type="text" value="Last Name" name="LNAME" class="required" id="mce-LNAME">
    		</div>
    		<div class="mc-field-group">
    			<label for="mce-EMAIL"></label>
    			<input type="email" value="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
    		</div>
    			<div id="mce-responses" class="clear">
    				<div class="response" id="mce-error-response" style="display:none"></div>
    				<div class="response" id="mce-success-response" style="display:none"></div>
    			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0a845938efd03f3fe32533187_9f6f85e542" tabindex="-1" value=""></div>
    				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    				</div>
    		</form>
    		</div>
    
    		<!--End mc_embed_signup-->
    	</div>
    </div>
  </section>
  <section>
    <div class="container has-text-centered home-millions">
      <div class="columns">
        <div class="column center-children">
          <h3>{{ the_field('slider_side_text') }}</h3>
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
      <div class="column fill-bg img-desertpeople"></div>
      <div class="column center-children is-text-dark">
        <h5>{{ the_field('alternating_textimage_heading_1') }}</h5>
        <hr class="mini">
        {{ the_field('alternating_textimage_text_1') }}
        <p><a href="/why-the-persecuted" class="arrow-link">Why The Persecuted?</a></p>
      </div>
    </div>
    <div class="columns">
      <div class="column fill-bg img-womanchild"></div>
      <div class="column center-children has-text-centered">
        <h5>{{ the_field('alternating_textimage_heading_2') }}</h5>
        <p><a href="{{ the_field('alternating_textimage_link_url_2') }}" class="arrow-link">{{ the_field('alternating_textimage_link_text_2') }}</a></p>
      </div>
    </div>
    <div class="columns">
      <div class="column fill-bg img-refugees"></div>
      <div class="column center-children">
        <h5>{{ the_field('alternating_textimage_heading_3') }}</h5>
        <hr class="mini">
        {{ the_field('alternating_textimage_text_3') }}
        <p><a href="/how-we-work" class="arrow-link">How We Work</a></p>
      </div>
    </div>
    <div class="columns">
      <div class="column fill-bg img-kids"></div>
      <div class="column center-children">
        <h5>{{ the_field('alternating_textimage_heading_4') }}</h5>
        <hr class="mini">
        {{ the_field('alternating_textimage_text_4') }}
        <p><a href="/our-impact" class="arrow-link">Our Impact</a></p>
      </div>
    </div>
  </section>
  <section class="home-getinvolved has-text-centered">
    <h1>{{ the_field('last_heading_text') }}</h1>
    <p><a href="/get-involved" class="button is-yellow">Get Involved</a></p>
  </section>
@endsection
