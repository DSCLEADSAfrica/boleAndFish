<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!--Stylesheets-->
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
    {{--Hello world! <br>--}}
    {{--<b>index.blade.php</b>--}}

    {{--Main div--}}
    <div id="app"></div>

    {{--Script files--}}
    <script src="{{mix('js/app.js')}}" ></script>
</body>
</html>