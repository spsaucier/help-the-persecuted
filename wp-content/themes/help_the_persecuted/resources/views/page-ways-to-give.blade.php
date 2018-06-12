{{--
  Template Name: Ways To Give Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section class="waystogive-container">
      @php(the_content())
    </section>
  @endwhile
@endsection