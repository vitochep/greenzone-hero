<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
    <title>greenzone-hero</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/fonts.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css"/>
</head>
<body>

@include('sprite')


<main>
    @include('components.section-1.section-1')
    @include('components.section-2.section-2')

</main>



<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>