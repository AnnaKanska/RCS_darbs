<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--bootstrap-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Acme|Dancing+Script|Lobster|Limelight|Quicksand:700&amp;subset=latin-ext" rel="stylesheet">
    

    <link rel="stylesheet" type="text/css" media="screen" href="/laravel/blog/public/css/header_footer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/laravel/blog/public/css/style.css" />
    @yield('css')
</head>
<body>
    @include('partials.header')
    @yield('slider')
    <div class="container">
            @yield('content')
    </div>
        
    
    @include('partials.backtotop')
    @include('partials.footer')
    <script src="js/proj.js"></script>
</body>
</html>
