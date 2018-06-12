{{--
  Template Name: Contact Us Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section class="contactus-message">
      <div class="contactus-container">
        <div class="columns">
          <div class="column is-two-thirds contactus-form">
            <iframe onload="window.parent.scrollTo(0,0)" height="411" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://secure.lglforms.com/form_engine/s/gIp6GpHEwzzOHYw9crJ7jg"></iframe>
          </div>
          <div class="column is-one-third has-text-centered">
            <div class="inner is-bg-gray">
              <p><i class="fab fa-phone"></i></p>
              <p><strong>{{ the_field('phone_number') }}</strong></p>
        
              <p><i class="fab fa-envelope"></i></p>
              {{ the_field('address') }}
            </div>
          </div>
        </div>
      </div>
    </section>
  @endwhile
@endsection
