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
            <h3>A Message From Our President</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
            <h5>&mdash; Joshua Youssef</h5>
          </div>
        </div>
        <div class="column fill-bg img-team"></div>
      </div>
    </section>
    <section>
      <div class="aboutus-container has-text-centered">
        <h5>“This is an endorsement talking about HTP. Lorem ipsum dolor sit amet consectetur iderpiscing elit. Anandandum madagas.”</h5>
        <p>&mdash; Endorser's Name</p>
      </div>
    </section>
    <section class="fill-bg img-alley has-text-white">
      <div class="container has-text-centered">
        <h2>Board of Directors</h2>
        <h5>Name Here</h5>
        <h5>Name Here</h5>
        <h5>Name Here</h5>
        <h5>Name Here</h5>
        <h5>Name Here</h5>
        <h5>Name Here</h5>
        <h5>Name Here</h5>
      </div>
    </section>
  @endwhile
@endsection
