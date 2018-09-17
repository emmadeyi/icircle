<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    @include('site.layouts.head')    
    
    </head>
      
      <body data-spy="scroll" data-target="#navbar-example">
      
        <div id="preloader"></div>
      
        <!-- header-area start -->
        @include('site.layouts.header')
        <!-- header end -->

        <!-- contents start -->
        @yield('contents')
        <!-- contents end -->       
      
        @include('site.layouts.footer')
      </body>
</html>
