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
      @php
        if (get_field('video_image')) {
          $video_style = 'style="background-image: url(' . get_field('video_image') . ');"';
        } else {
          $video_class = 'womantalking';
        }
      @endphp
      <a class="video-image js-sr js-modal-video {{ $video_class }}" data-video-id="{{ the_field('youtube_video_id') }}" href="#" {!! $video_style !!}></a>
    </section>
    <section class="container has-text-white has-text-centered">
      <div class="columns stats">
        <div class="column">
          <div class="inner js-sr-set-1">
            <img src="@asset('images/icon-no-1.png')" />
            <h5>Christians are the #1 most persecuted people group on earth</h5>
          </div>
        </div>
        <div class="column">
          <div class="inner js-sr-set-1">
            <img src="@asset('images/icon-six.png')" />
            <h5>Every 6 minutes, a Christian is killed for following Jesus Christ</h5>
          </div>
        </div>
        <div class="column">
          <div class="inner js-sr-set-1">
            <img src="@asset('images/icon-58-percent.png')" />
            <h5>58% of the more than 7 million Iraqi and Syrian refugees are Christians</h5>
          </div>
        </div>
      </div>
    </section>
    @if (have_rows('slider'))
      <section class="whythepersecuted-slider-container">
        <h1 class="whythepersecuted-slider-heading has-text-centered has-text-white">What the Bible says</h1>
        <div class="js-carousel whythepersecuted-slider has-text-centered fill-bg img-manreading">
        	@while( have_rows('slider') ) @php(the_row())
            <div class="carousel-cell has-text-white">
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
        <div class="column center-children js-sr">
          <h5>{{ the_field('red_box_headline') }}</h5>
          <hr class="mini">
          {{ the_field('red_box_text') }}
          <p><a href="/about-us" class="arrow-link">Learn More About Us</a></p>
        </div>
      </div>
    </section>
    <section class="fill-bg img-mosque has-text-centered">
      <div class="whythepersecuted-content">
        <h1 class="js-sr">{{ the_field('mosque_headline') }}</h1>
        <div class="js-sr">{{ the_field('mosque_text') }}</div>
        <p class="js-sr"><a href="/donate" target="_blank" class="button is-primary">Give Today</a></p>
      </div>
    </section>
  @endwhile
@endsection
