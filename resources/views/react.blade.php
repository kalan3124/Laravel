<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>

    <!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">--}}

    <link rel="icon" type="image/x-icon" class="js-site-favicon" href="{{ url('/images/favicon.ico')}}">

    <!-- App Styles -->
    {{--<link href="{{ url('/css/app.css?v='.config('gitlab.last_job_id'))}}" rel="stylesheet" type="text/css">--}}

    {{--<script src="{{ url('/js/app.js?v='.config('gitlab.last_job_id'))}}" defer></script>--}}
</head>
<body>
<div id="root">
    <div id="stage">
        {{--<img id="spinner" src="{{ url('images/logo.jpg') }}" />--}}
    </div>
</div>
</body>
</html>