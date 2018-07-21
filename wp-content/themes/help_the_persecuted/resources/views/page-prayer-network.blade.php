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
            <h5>Join Our <br>Prayer Team</h5>
        		@php
        		  echo do_shortcode('[contact-form-7 id="236" title="Prayer List Form"]');
      		  @endphp
      		</div>
        </div>
      </div>
    </section>
  @endwhile
@endsection