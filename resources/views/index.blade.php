<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel blog</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
</head>
<body>

   @include('partials.top_nav');

    <div class="row mt-3">
        @yield('content')
    </div>

    <script src="{{'js/bootstap.mim.js'  }}"> </script>
    
</body>
</html>