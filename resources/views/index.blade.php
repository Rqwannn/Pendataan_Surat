<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css')}}/app.css">
    <link rel="stylesheet" href="{{asset('fonts')}}/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('css')}}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/style.css">

    <title></title>
</head>
<body>
    <div id="app">
        <header-component v-bind:status="SetHeader"></header-component>
        <router-view @header="ChangeHeader($event)"></router-view>
        {{-- <footer-component></footer-component> --}}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="{{asset('js')}}/app.js"></script>
    <script src="{{asset('js')}}/jquery-3.3.1.min.js"></script>
    <script src="{{asset('js')}}/popper.min.js"></script>
    <script src="{{asset('js')}}/main.js"></script>
</body>
</html>