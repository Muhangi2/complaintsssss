  @include('website.includes.head')

  @include('website.includes.header.header')

  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  @include('website.includes.footer.footer')

  @include('website.includes.scripts')