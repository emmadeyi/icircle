<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    
    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

      @section('main-content')
          
      @show
    
    @include('admin.layouts.footer')

    @include('admin.layouts.scripts')

      @section('custom-scripts')
          
      @show
  </div>  
</body>
</html>