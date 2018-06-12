@extends('layouts.app')

@section('content')
  <div class="page-header has-bg-img" style="background-image: url('@asset('images/stories-header.jpg'));">
    <h1 class="has-text-white has-text-centered">Stories</h1>
  </div>
  
  <div class="container posts-list">
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @else
      <section class="story-grid container">
        <div class="columns is-multiline is-flex">
          @while (have_posts()) @php(the_post())
            @include('partials.content-'.get_post_type())
          @endwhile
        </div>
      </section>
    @endif
    
    <hr class="is-gray">
    {!! get_the_posts_navigation() !!}
  </div>

@endsection
