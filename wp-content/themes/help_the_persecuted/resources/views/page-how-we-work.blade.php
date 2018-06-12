{{--
  Template Name: How We Work Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section class="howwework-team container">
      <div class="columns">
        <div class="howwework-content column is-one-third-desktop">
          <h3>{{ the_field('team_headline') }}</h3>
          {{ the_field('team_text') }}
        </div>
        <div class="column">
          <div class="snapshots">
            <div class="snapshot"><img src="@asset('images/snapshot-backs.jpg')" /></div>
            <div class="snapshot"><img src="@asset('images/snapshot-silhouette.jpg')" /></div>
            <div class="snapshot"><img src="@asset('images/snapshot-womanbag.jpg')" /></div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="js-carousel-controlled howwework-slider has-text-centered">
        <div class="carousel-cell fill-bg img-manpensive has-text-white">
          <h1>Our Process</h1>
          <h3 class="circle">1</h3>
          <h4>Identify</h4>
          {{ the_field('slide:_identify_text') }}
        </div>
        <div class="carousel-cell fill-bg img-manpensive has-text-white">
          <h1>Our Process</h1>
          <h3 class="circle">2</h3>
          <h4>Support</h4>
          {{ the_field('slide:_support_text') }}
        </div>
        <div class="carousel-cell fill-bg img-manpensive has-text-white">
          <h1>Our Process</h1>
          <h3 class="circle">3</h3>
          <h4>Empower</h4>
          {{ the_field('slide:_empower_text') }}
        </div>
      </div>
      <div class="slider-controls">
        <button id="slider-control-0" autofocus>Identify</button>
        <button id="slider-control-1">Support</button>
        <button id="slider-control-2">Empower</button>
      </div>
    </section>
    <section class="howwework-container has-text-centered">
      <h3>{{ the_field('highlight_section_1_heading') }}</h3>
      {{ the_field('highlight_section_1_text') }}
    </section>
    <section class="howwework-squares">
      <div class="columns is-multiline has-text-centered">
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/crisis-funds-icon.svg')" alt="Crisis Funds" /></p>
          <h4>Crisis Funds</h4>
          {{ the_field('box_text_1') }}
          <p><a href="{{ the_field('box_link_url_1') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_1') }}</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/safe-housing-icon.svg')" alt="Safe Housing" /></p>
          <h4>Safe Housing</h4>
          {{ the_field('box_text_2') }}
          <p><a href="{{ the_field('box_link_url_2') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_2') }}</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/pastoral-trauma-icon.svg')" alt="Pastoral &amp; Trauma Care" /></p>
          <h4>Pastoral &amp; Trauma Care</h4>
          {{ the_field('box_text_3') }}
          <p><a href="{{ the_field('box_link_url_3') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_3') }}</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/medical-icon.svg')" alt="Medical" /></p>
          <h4>Medical</h4>
          {{ the_field('box_text_4') }}
          <p><a href="{{ the_field('box_link_url_4') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_4') }}</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/education-icon.svg')" alt="Education" /></p>
          <h4>Education</h4>
          {{ the_field('box_text_5') }}
          <p><a href="{{ the_field('box_link_url_5') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_5') }}</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/livelihood-icon.svg')" alt="Livelihood" /></p>
          <h4>Livelihood</h4>
          {{ the_field('box_text_6') }}
          <p><a href="{{ the_field('box_link_url_6') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_6') }}</a></p>
        </div>
      </div>
    </section>
    <section class="is-bg-teal has-text-white has-text-centered">
      <div class="howwework-container">
        <p><img src="@asset('images/cross-icon.svg')" /></p>
        <h4>{{ the_field('cross_section_heading') }}</h4>
        {{ the_field('cross_section_text') }}
      </div>
    </section>
    <section class="img-tremendousimpact has-text-centered">
      <div class="howwework-container">
        <h2>{{ the_field('highlight_section_2_heading') }}</h2>
        {{ the_field('highlight_section_2_text') }}
        <p><a href="/donate" class="button is-primary">Give Today</a></p>
      </div>
    </section>
  @endwhile
@endsection
