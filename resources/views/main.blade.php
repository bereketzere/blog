<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
    @include('partials._nav')
    <body>
      <!--Defoult Bootstrap Navbar-->

        <div class="container">
           @include('partials._messages')

          @yield('content')
          @include('partials._footer')

        </div> <!-- end of .container-->

         @include('partials._javascript')

         @yield('scripts')

    </body>
</html>
