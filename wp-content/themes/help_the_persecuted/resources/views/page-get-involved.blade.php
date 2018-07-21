{{--
  Template Name: Get Involved Template
--}}

@extends('layouts.app')

@php
  function format_text_for_mailto_param($text) {
    return rawurlencode(htmlspecialchars_decode($text));
  }
@endphp

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
              <p><a href="/donate" class="button">Donate</a></p>
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
          		@php
          		  echo do_shortcode('[contact-form-7 id="235" title="Subscribe Form"]');
        		  @endphp
            </div>
          </div>
          <div class="column is-one-quarter">
            <div class="inner has-text-white js-sr-set-1">
              <p><img src="@asset('images/advocate-icon.svg')" alt=""></p>
              <h3>Spread the Word</h3>
              {{ the_field('advocate_text') }}
              <div>
                <p><a class="button"
                  href="https://twitter.com/intent/tweet/?text={{ format_text_for_mailto_param("Imagine facing torture and death for just five words—“I believe in Jesus Christ.” This is a reality for 215 million Christians today, and their burdens aren’t meant to be carried alone. Learn how you can #helpthepersecuted: @helppersecuted") }}&url={{ rawurlencode("https://htp.org") }}"
                  target="_blank"
                  aria-label="Share on Twitter"
                  ><i class="fab fa-twitter"></i> Twitter</a></p>
                <p><a class="button"
                  href="https://facebook.com/sharer/sharer.php?u={{ rawurlencode("https://htp.org") }}"
                  target="_blank"
                  aria-label="Share on Facebook"
                  ><i class="fab fa-facebook-f"></i> Facebook</a></p>
                <p><a class="button"
                 target="_self" aria-label="Share by E-Mail"
                 href="mailto:?subject={{ format_text_for_mailto_param("Help The Persecuted") }}&body={{ format_text_for_mailto_param("I thought you might be interested in this. Persecution is a reality for more than 215 million Christians today—and this organization is providing for their practical and spiritual needs. Check it out. www.htp.org") }}"
                 ><i class="fab fa-envelope"></i> Email</a></i></a></p>
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
  @endwhile
@endsection
