{{--
  Template Name: Get Involved Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <section class="getinvolved has-text-centered has-text-white">
      <div class="getinvolved-container">
        <h1>Get Involved</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
      </div>
      <div class="container">
        <div class="columns">
          <div class="column is-one-quarter">
            <div class="inner">
              <img src="@asset('images/donate-icon.svg')" alt="">
              <h3>Donate</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
              <p><a href="/donate" class="button">Donate</a></p>
            </div>
          </div>
          <div class="column is-one-quarter">
            <div class="inner">
              <img src="@asset('images/pray-icon.svg')" alt="">
              <h3>Pray</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
              <p><a href="/prayer-network" class="button">Join The Prayer List</a></p>
            </div>
          </div>
          <div class="column is-one-quarter">
            <div class="inner">
              <img src="@asset('images/stay-informed-icon.svg')" alt="">
              <h3>Stay Informed</h3>
              <p>Copy note: Sign up for our newsletter and… why?</p>
              
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
          <div class="column is-one-quarter">
            <div class="inner">
              <img src="@asset('images/advocate-icon.svg')" alt="">
              <h3>Advocate</h3>
              <p>Copy note: Spread the word about this issue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
              <div>
                <p><a href="#" class="button"><i class="fab fa-twitter"></i> Twitter</a></p>
                <p><a href="#" class="button"><i class="fab fa-facebook-f"></i> Facebook</a></p>
                <p><a href="#" class="button"><i class="fab fa-envelope"></i> Email</a></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="getinvolved-container">
        <h5 class="is-uppercase">Other Ways to Give</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <a class="is-underlined" href="/ways-to-give">Ways To Give</a></p>
      </div>
    </section>
  @endwhile
@endsection
