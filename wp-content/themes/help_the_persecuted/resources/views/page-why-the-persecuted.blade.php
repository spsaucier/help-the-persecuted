{{--
  Template Name: Why The Persecuted Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <section class="whythepersecuted-today has-text-centered container">
      <div class="whythepersecuted-content">
        <h3>Today, XX,XXX,XXX people are facing persecution for their Christian beliefs.</h3>
        <p>Copy note: What exactly does persecution mean, and why are we so commited to this issue? Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
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
    <section>
      <div class="js-carousel whythepersecuted-slider has-text-centered">
        <div class="carousel-cell fill-bg img-manreading has-text-white">
          <h1>What the Bible says</h1>
          <h5 class="textbox">Although thousands of miles may stand between us, our persecuted brothers and sisters are as much our family as our own flesh and blood—and we are called to bear their burdens with them.</h5>
          <p class="is-larger">“Carry each other’s burdens, and in this way you will fulfill the law of Christ.”</p>
          <p><small>Galatians 6:2 (NIV)</small></p>
        </div>
        <div class="carousel-cell fill-bg img-manreading has-text-white">
          <h1>What the Bible says</h1>
          <h5 class="textbox">Although thousands of miles may stand between us, our persecuted brothers and sisters are as much our family as our own flesh and blood—and we are called to bear their burdens with them.</h5>
          <p class="is-larger">“Carry each other’s burdens, and in this way you will fulfill the law of Christ.”</p>
          <p><small>Galatians 6:2 (NIV)</small></p>
        </div>
        <div class="carousel-cell fill-bg img-manreading has-text-white">
          <h1>What the Bible says</h1>
          <h5 class="textbox">Although thousands of miles may stand between us, our persecuted brothers and sisters are as much our family as our own flesh and blood—and we are called to bear their burdens with them.</h5>
          <p class="is-larger">“Carry each other’s burdens, and in this way you will fulfill the law of Christ.”</p>
          <p><small>Galatians 6:2 (NIV)</small></p>
        </div>
      </div>
    </section>
    <section class="alternating-image-text alternate">
      <div class="columns">
        <div class="column fill-bg img-mankid"></div>
        <div class="column center-children">
          <h5>Our Hearts Are With The People of the Middle East and North Africa</h5>
          <hr class="mini">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
          sed diam nonummy nibh euismod tincidunt ut laoreet dolore
          magna aliquam erat volutpat.</p>
          <p><a href="/about-us" class="arrow-link">Learn More About Us</a></p>
        </div>
      </div>
    </section>
    <section class="fill-bg img-mosque has-text-centered">
      <div class="whythepersecuted-content">
        <h1>The need is great, but together, we can overcome</h1>
        <p>Copy note: A gift of just X can help us X. lorem ipsum dolor sit amet consectetur idirpiscing.</p>
        <p><a href="/donate" class="button is-primary">Give Today</a></p>
      </div>
    </section>
  @endwhile
@endsection
