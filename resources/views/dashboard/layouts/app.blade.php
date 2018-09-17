<!DOCTYPE html>
<html lang="en">
<head>
  @include('dashboard.layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    
    @include('dashboard.layouts.header')

    @include('dashboard.layouts.sidebar')

      @section('main-content')
          
      @show
    
    @include('dashboard.layouts.footer')

    @include('dashboard.layouts.scripts')

      @section('custom-scripts')
          
      @show
  </div>  
</body>
</html>