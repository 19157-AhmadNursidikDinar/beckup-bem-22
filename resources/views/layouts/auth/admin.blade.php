<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  @include('includes.admin.style')

</head>

<body>
  <div id="app">
    
    @yield('content')
    
  </div>

  @include('includes.admin.script')
  
</body>
</html>
