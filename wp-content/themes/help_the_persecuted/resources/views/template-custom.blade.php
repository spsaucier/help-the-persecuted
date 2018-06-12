{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section class="primary-container">
      @include('partials.content-page')
    </section>
  @endwhile
@endsection
