<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <div class="mail-pop-up">
        <?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?> 
    </div>
    <div class="site-blur">
      @php do_action('get_header') @endphp
      @include('partials.header')
      <div class="site-wrapper">     
        <main class="main">
          @yield('content')
        </main>
      </div>
      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @php wp_footer() @endphp
    </div>
  </body>
</html>
