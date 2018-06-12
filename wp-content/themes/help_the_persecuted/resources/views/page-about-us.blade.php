{{--
  Template Name: About Us Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section class="aboutus-message">
      <div class="columns">
        <div class="column">
          <div class="inner">
            @php(the_content())
          </div>
        </div>
        <div class="column fill-bg img-team"></div>
      </div>
    </section>
    <section>
      <div class="aboutus-container has-text-centered">
        <h5>{{ the_field('endorsement_text') }}</h5>
        <p>{{ the_field('endorser') }}</p>
      </div>
    </section>
    <section class="fill-bg img-alley has-text-white">
      <div class="container has-text-centered">
        <h2>Board of Directors</h2>
        @if (have_rows('board_of_directors'))
        	@while( have_rows('board_of_directors') ) @php(the_row()) 
            <h5>{{ the_sub_field('director_name') }}</h5>
	        @endwhile
        @endif
      </div>
    </section>
  @endwhile
@endsection
