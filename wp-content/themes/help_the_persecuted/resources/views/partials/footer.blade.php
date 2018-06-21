<footer class="content-info">
  <?php
    $the_sidebars = wp_get_sidebars_widgets();
    $footer_widget_count = count( $the_sidebars['sidebar-footer']);
  ?>
  @if ($footer_widget_count)
    <div class="footer-widgets">
      <div class="container">
        @php(dynamic_sidebar('sidebar-footer'))
      </div>
    </div>
  @endif
  <div class="footer has-text-white">
    <div class="columns">
      <div class="column has-text-centered">
        <img src="@asset('images/logo_white.png')" width="53"></img>
        <div class="social-icons">
          <a class="has-text-white" target="_blank" href="https://www.facebook.com/helppersecuted/"><i class="fab fa-facebook-f"></i></a>
          <a class="has-text-white" target="_blank" href="https://twitter.com/ltwhtp"><i class="fab fa-twitter"></i></a>
          <a class="has-text-white" target="_blank" href="https://www.instagram.com/helpthepersecuted/"><i class="fab fa-instagram"></i></a>
          <a class="has-text-white" target="_blank" href="https://www.youtube.com/channel/UCKblXi85l6XJtLOuBLC2TWg"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
    <div class="columns is-small">
      <div class="column">
        <span class="is-block-mobile has-text-centered-mobile">
          <a class="has-text-white" href="/contact-us">Contact Us</a> &nbsp; | &nbsp; 
          <a class="has-text-white" href="/about-us">About Us</a><span class="hide-mobile"> &nbsp; | &nbsp; </span>
        </span>
        <span class="is-block-mobile has-text-centered-mobile">
          <a class="has-text-white" href="/privacy-policy">Privacy Policy</a> &nbsp; | &nbsp; 
          <a class="has-text-white" href="/terms-conditions">Terms and Conditions</a>
        </span>
      </div>
      <div class="column has-text-right">
        <span class="is-block-mobile has-text-centered-mobile">&copy; {{ date("Y") }} <em>Help The Persecuted</em>. </span><span class="is-block-mobile has-text-centered-mobile">All Rights Reserved.</span>
      </div>
    </div>
  </div>
</footer>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVBTN86"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116967568-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116967568-1');
</script>