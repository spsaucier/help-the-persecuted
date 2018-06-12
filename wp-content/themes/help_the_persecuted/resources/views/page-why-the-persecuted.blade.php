{{--
  Template Name: Why The Persecuted Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section class="whythepersecuted-today has-text-centered container">
      <div class="whythepersecuted-content">
        <h3>{{ the_field('headline_1') }}</h3>
        {{ the_field('text_1') }}
      </div>
      <a class="video-image js-modal-video womantalking" data-video-id="XJS_UYNq4No" href="#"></a>
    </section>
    <section class="container has-text-white has-text-centered">
      <div class="columns stats">
        <div class="column">
          <div class="inner">
            <img src="@asset('images/icon-no-1.png')" />
            <h5>Christians are the #1 most persecuted people group on earth</h5>
          </div>
        </div>
        <div class="column">
          <div class="inner">
            <img src="@asset('images/icon-six.png')" />
            <h5>Every 6 minutes, a Christian is killed because of their faith</h5>
          </div>
        </div>
        <div class="column">
          <div class="inner">
            <img src="@asset('images/icon-80-percent.png')" />
            <h5>80% of the 5 million Iraqi and Syrian refugees are Christians</h5>
          </div>
        </div>
      </div>
    </section>
    @if (have_rows('slider'))
      <section>
        <div class="js-carousel whythepersecuted-slider has-text-centered">
        	@while( have_rows('slider') ) @php(the_row()) 
        		@php($image = get_sub_field('slide_background_image'))
            <div class="carousel-cell fill-bg {{ !$image ? 'img-manreading' : '' }} has-text-white" {{ $image ? "style='background-image: url(" . $image['url'] . ")'" : '' }}
              >
              <h1>{{ the_sub_field('slide_heading') }}</h1>
              <h5 class="textbox">{{ the_sub_field('slide_textbox') }}</h5>
              <p class="is-larger">{{ the_sub_field('slide_verse') }}</p>
              <p><small>{{ the_sub_field('slide_verse_reference') }}</small></p>
            </div>
	        @endwhile
        </div>
      </section>
    @endif
    <section class="alternating-image-text alternate">
      <div class="columns">
        <div class="column fill-bg img-mankid"></div>
        <div class="column center-children">
          <h5>{{ the_field('red_box_headline') }}</h5>
          <hr class="mini">
          {{ the_field('red_box_text') }}
          <p><a href="/about-us" class="arrow-link">Learn More About Us</a></p>
        </div>
      </div>
    </section>
    <section class="fill-bg img-mosque has-text-centered">
      <div class="whythepersecuted-content">
        <h1>{{ the_field('mosque_headline') }}</h1>
        {{ the_field('mosque_text') }}
        <p><a href="/donate" class="button is-primary">Give Today</a></p>
      </div>
    </section>
  @endwhile
@endsection
