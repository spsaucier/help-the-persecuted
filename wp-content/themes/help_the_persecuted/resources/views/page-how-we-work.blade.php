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
          <div>{{ the_field('team_text') }}</div>
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
    <section class="howweeork-slider-container fill-bg img-manpensive has-text-white">
      <h1 class="is-absolute">Our Process</h1>
      <div class="js-carousel-controlled howwework-slider has-text-centered">
        <div class="carousel-cell">
          <h3 class="circle">1</h3>
          <h4>Identify</h4>
          <div>{{ the_field('slide:_identify_text') }}</div>
        </div>
        <div class="carousel-cell">
          <h3 class="circle">2</h3>
          <h4>Support</h4>
          <div>{{ the_field('slide:_support_text') }}</div>
        </div>
        <div class="carousel-cell">
          <h3 class="circle">3</h3>
          <h4>Empower</h4>
          <div>{{ the_field('slide:_empower_text') }}</div>
        </div>
      </div>
      <div class="slider-controls">
        <button id="slider-control-0" autofocus>Identify</button>
        <button id="slider-control-1">Support</button>
        <button id="slider-control-2">Empower</button>
      </div>
    </section>
    <section class="howwework-container has-text-centered">
      <h3 class="js-sr">{{ the_field('highlight_section_1_heading') }}</h3>
      <div class="js-sr">{{ the_field('highlight_section_1_text') }}</div>
    </section>
    <section class="howwework-squares">
      <div class="columns is-multiline has-text-centered">
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/crisis-funds-icon.svg')" alt="Crisis Funds" /></p>
          <div class="js-sr">
            <h4>Crisis Funds</h4>
            <div>{{ the_field('box_text_1') }}</div>
          </div>
          <p class="js-sr"><a href="{{ the_field('box_link_url_1') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_1') }}</a></p>
        </div>
        <div class="column is-one-third">
          <p><img src="@asset('images/safe-housing-icon.svg')" alt="Safe Housing" /></p>
          <div class="js-sr">
            <h4>Safe Housing</h4>
            <div>{{ the_field('box_text_2') }}</div>
          </div>
          <p class="js-sr"><a href="{{ the_field('box_link_url_2') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_2') }}</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/pastoral-trauma-icon.svg')" alt="Pastoral &amp; Trauma Care" /></p>
          <div class="js-sr">
            <h4>Pastoral &amp; Trauma Care</h4>
            <div>{{ the_field('box_text_3') }}</div>
          </div>
          <p class="js-sr"><a href="{{ the_field('box_link_url_3') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_3') }}</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/medical-icon.svg')" alt="Medical" /></p>
          <div class="js-sr">
            <h4>Medical</h4>
            <div>{{ the_field('box_text_4') }}</div>
          </div>
          <p class="js-sr"><a href="{{ the_field('box_link_url_4') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_4') }}</a></p>
        </div>
        <div class="column is-one-third">
          <p><img src="@asset('images/education-icon.svg')" alt="Education" /></p>
          <div class="js-sr">
            <h4>Education</h4>
            <div>{{ the_field('box_text_5') }}</div>
          </div>
          <p class="js-sr"><a href="{{ the_field('box_link_url_5') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_5') }}</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <p><img src="@asset('images/livelihood-icon.svg')" alt="Livelihood" /></p>
          <div class="js-sr">
            <h4>Livelihood</h4>
            <div>{{ the_field('box_text_6') }}</div>
          </div>
          <p class="js-sr"><a href="{{ the_field('box_link_url_6') }}" class="button is-outlined is-inverted">{{ the_field('box_link_text_6') }}</a></p>
        </div>
      </div>
    </section>
    <section class="is-bg-teal has-text-white has-text-centered">
      <div class="howwework-container">
        <p class="js-sr"><img src="@asset('images/cross-icon.svg')"  /> </p>
        <!--<h4>{{ the_field('cross_section_heading') }}</h4>-->
        <div>{{ the_field('cross_section_text') }}</div>
      </div>
    </section>
    <section class="img-tremendousimpact has-text-centered">
      <div class="howwework-container">
        <h2 class="js-sr">{{ the_field('highlight_section_2_heading') }}</h2>
        <div class="js-sr">{{ the_field('highlight_section_2_text') }}</div>
        <p class="js-sr"><a href="/donate" target="_blank" class="button is-primary">Give Today</a></p>
      </div>
    </section>
  @endwhile
@endsection
