<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', app_name())</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="css/frontend/bootstrap/css/bootstrap.min.css">

    @yield('before-styles')

    {{ Html::style(elixir('css/frontend.css')) }}

<!-- Check if the language is set to RTL, so apply the RTL layouts -->
    @langRTL
    {!! Html::style(elixir('css/rtl.css')) !!}
    @endif

    @yield('after-styles')

            <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="app-layout">
<div id="app">
    <div class="container">
        @yield('content')
    </div><!-- container -->
</div><!--#app-->

<!-- Scripts -->
@yield('before-scripts')
{!! Html::script(elixir('js/frontend.js')) !!}
<script type="text/javascript" src="{{asset('js/frontend/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/bootstrap/bootstrap.min.js')}}"></script>
@yield('after-scripts')

@include('includes.partials.ga')
</body>
</html>