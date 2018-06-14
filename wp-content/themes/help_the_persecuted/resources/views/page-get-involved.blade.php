{{--
  Template Name: Get Involved Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <section class="getinvolved has-text-centered">
      <div class="getinvolved-container has-text-white">
        <h1>Get Involved</h2>
        <div>{{ the_field('get_involved_text') }}</div>
      </div>
      <div class="container">
        <div class="columns">
          <div class="column is-one-quarter">
            <div class="inner has-text-white js-sr-set-1">
              <p><img src="@asset('images/donate-icon.svg')" alt=""></p>
              <h3>Donate</h3>
              {{ the_field('donate_text') }}
              <p><a href="/donate" target="_blank" class="button">Donate</a></p>
            </div>
          </div>
          <div class="column is-one-quarter">
            <div class="inner has-text-white js-sr-set-1">
              <p><img src="@asset('images/pray-icon.svg')" alt=""></p>
              <h3>Pray</h3>
              {{ the_field('pray_text') }}
              <p><a href="/prayer-network" class="button">Join The Prayer Team</a></p>
            </div>
          </div>
          <div class="column is-one-quarter">
            <div class="inner js-sr-set-1">
              <p><img src="@asset('images/stay-informed-icon.svg')" alt=""></p>
              <h3>Stay Connected</h3>
              {{ the_field('stay_informed_text') }}
              
          		<!-- Begin MailChimp Signup Form -->
          		<div id="mc_embed_signup">
            		<form action="https://htp.us18.list-manage.com/subscribe/post?u=0a845938efd03f3fe32533187&amp;id=9f6f85e542" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            				<div id="mc_embed_signup_scroll">
            
            		<div class="mc-field-group">
            			<label for="mce-FNAME"></label>
            			<input type="text" placeholder="First Name" name="FNAME" class="required" id="mce-FNAME">
            		</div>
            		<div class="mc-field-group">
            			<label for="mce-LNAME"></label>
            			<input type="text" placeholder="Last Name" name="LNAME" class="required" id="mce-LNAME">
            		</div>
            		<div class="mc-field-group">
            			<label for="mce-EMAIL"></label>
            			<input type="email" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
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
            <div class="inner has-text-white js-sr-set-1">
              <p><img src="@asset('images/advocate-icon.svg')" alt=""></p>
              <h3>Spread the Word</h3>
              {{ the_field('advocate_text') }}
              <div>
                <p><a href="#" class="button" data-open-share="twitter" data-open-share-url="https://htp.org"><i class="fab fa-twitter"></i> Twitter</a></p>
                <p><a href="#" class="button" data-open-share="facebook" data-open-share-link="https://htp.org"><i class="fab fa-facebook-f"></i> Facebook</a></p>
                <p><a target="_blank" href="mailto:?subject=Help%20The%20Persecuted&body=Check%20out%20Help%20the%20Persecuted%20%28https%3A//htp.org%29%20-%20they%20help%20persecuted%20Christians%20around%20the%20world." class="button"><i class="fab fa-envelope"></i> Email</a></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="getinvolved-container has-text-white">
        <h5 class="is-uppercase js-sr">Other Ways to Give</h5>
        <div class="js-sr">{{ the_field('other_ways_to_give_text') }}</div>
      </div>
    </section>
    <script src='https://cdn.rawgit.com/OpenShare/openshare/master/dist/openshare.js'></script>
  @endwhile
@endsection
