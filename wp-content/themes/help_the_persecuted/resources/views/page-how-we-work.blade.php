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
          <h3>Our Field Team</h3>
          <p>Copy: Text block describing our “Secret Sauce” – the embedded field team. Importance of this- how they operate – including verbiage on trusted LOCAL church partners.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab consectus.</p>
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
    <section>
      <div class="js-carousel-controlled howwework-slider has-text-centered">
        <div class="carousel-cell fill-bg img-manpensive has-text-white">
          <h1>Our Process</h1>
          <h3 class="circle">1</h3>
          <h4>Identify</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="carousel-cell fill-bg img-manpensive has-text-white">
          <h1>Our Process</h1>
          <h3 class="circle">2</h3>
          <h4>Support</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="carousel-cell fill-bg img-manpensive has-text-white">
          <h1>Our Process</h1>
          <h3 class="circle">3</h3>
          <h4>Empower</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="slider-controls">
        <button id="slider-control-0" autofocus>Identify</button>
        <button id="slider-control-1">Support</button>
        <button id="slider-control-2">Empower</button>
      </div>
    </section>
    <section class="howwework-container has-text-centered">
      <h3>How We're Helping</h3>
      <p>Problem Statement, and description of how we help. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </section>
    <section class="howwework-squares">
      <div class="columns is-multiline has-text-centered">
        <div class="column is-one-third has-text-white">
          <img src="@asset('images/medical-icon.svg')" alt="Medical" />
          <h4>Medical</h4>
          <p>A large number of persecuted people suffer torture or physical abuse for their faith. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <p><a href="#" class="button is-outlined is-inverted">[Name Here's Story]</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <img src="@asset('images/education-icon.svg')" alt="Education" />
          <h4>Education</h4>
          <p>Vulnerable children and young people often have to leave home without being able to complete their their education. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <p><a href="#" class="button is-outlined is-inverted">[Name Here's Story]</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <img src="@asset('images/crisis-funds-icon.svg')" alt="Crisis Funds" />
          <h4>Crisis Funds</h4>
          <p>A common form of persecution is being forced from employment, losing the ability to provide for a family. We provide short term help to get people back on their feet. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <p><a href="#" class="button is-outlined is-inverted">[Name Here's Story]</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <img src="@asset('images/livelihood-icon.svg')" alt="Livelihood" />
          <h4>Livelihood</h4>
          <p>Having helped short term to stabilize persecuted families, we help get people back to work or help them to start a small business to provide for their families needs. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <p><a href="#" class="button is-outlined is-inverted">[Name Here's Story]</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <img src="@asset('images/safe-housing-icon.svg')" alt="Safe Housing" />
          <h4>Safe Housing</h4>
          <p>Having left their homes and churches idea – we pick up with getting them connected with a local church and providing ongoing pastoral support and discipleship. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <p><a href="#" class="button is-outlined is-inverted">[Name Here's Story]</a></p>
        </div>
        <div class="column is-one-third has-text-white">
          <img src="@asset('images/pastoral-trauma-icon.svg')" alt="Pastoral &amp; Trauma Care" />
          <h4>Pastoral &amp; Trauma Care</h4>
          <p>Many persecuted people have witnessed family members killed or tortured. Talk about the counseilling / at retreats, etc. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
          <p><a href="#" class="button is-outlined is-inverted">[Name Here's Story]</a></p>
        </div>
      </div>
    </section>
    <section class="is-bg-teal has-text-white has-text-centered">
      <div class="howwework-container">
        <p><img src="@asset('images/cross-icon.svg')" /></p>
        <h4>Future Ops</h4>
        <p>HTP sees an opportunity to be more proactive and less reactionary in their approach to helping the persecuted. Mention future community projects that solve some of the root conditions associated with persecution. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
      </div>
    </section>
    <section class="img-tremendousimpact has-text-centered">
      <div class="howwework-container">
        <h2>We are having tremendous impact</h2>
        <p>Copy note: You can be a part of that by helping us. A gift of just X can help us X.  lorem ipsum dolor sit amet consectetur idirpiscing.</p>
        <p><a href="/donate" class="button is-primary">Give Today</a></p>
      </div>
    </section>
  @endwhile
@endsection
