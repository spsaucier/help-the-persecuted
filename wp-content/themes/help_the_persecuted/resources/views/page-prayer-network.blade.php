{{--
  Template Name: Prayer Network Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <section class="prayernetwork-container has-text-centered">
      @php(the_content())
    </section>
    <section>
      <div class="columns has-text-centered">
        <div class="column is-one-half fill-bg img-praybox"></div>
        <div class="column is-one-half prayernetwork-join">
          <div class="inner">
            <img src="@asset('images/pray-icon-brown.svg')" alt="">
            <h5>Join Our <br>Prayer List</h5>
            
        		<!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="https://htp.us18.list-manage.com/subscribe/post?u=0a845938efd03f3fe32533187&amp;id=2975ccf002" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0a845938efd03f3fe32533187_2975ccf002" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
            </div>
            
            <!--End mc_embed_signup-->
      		</div>
        </div>
      </div>
    </section>
  @endwhile
@endsection