<header class="banner header--fixed">
  <div class="columns">
    <div class="column is-narrow">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    </div>
    <a href="/donate" class="button is-primary show-mobile is-small">Donate</a>
    <input id="mobile-nav-input" type="checkbox"/>
    <label class="mobile-nav-button" for="mobile-nav-input">
      <i class="fab fa-bars"></i>
      <i class="fab fa-times"></i>
    </label>
    <nav class="nav-primary column">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>