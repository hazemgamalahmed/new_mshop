@include('layouts.parts.header')
@include('layouts.parts.css')

@include('layouts.parts.nav')

  @include('layouts.parts.aside')


  @yield('menue')

    <!-- Main content -->
    @yield('content')
  @include('layouts.parts.footer')

  @include('layouts.parts.js')
  @yield('js');
  </body>
</html>