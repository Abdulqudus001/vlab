
@yeild('beforeDoctype')
<!DOCTYPE html>
@yeild('html')
<!-- <html lang="en"> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::Vlab @yield('page-title')</title>
    @yield('head')
   @include('layouts.head')
</head>
<body>

    <div class="container-fluid" id="app" style="padding-right: 0;">
       @yield('content-body')
    </div>

    @include('layouts.scripts')
      
   @yield('scripts_section')
    
</body>
</html>