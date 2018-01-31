<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partial._head')
  </head>
    @include('partial._nav')
    <body>
      <!--Defoult Bootstrap Navbar-->

        <div class="container">

          @yield('content')
          @include('partial._footer')

        </div> <!-- end of .container-->

         @include('partial._javascript')

         @yield('scripts')

    </body>
</html>
