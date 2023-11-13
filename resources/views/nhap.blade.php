<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Clone - Light Mode</title>
    <link href="{{asset('frontend/css/cssfilelayout.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/tailwind.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>             
<body>
   @yield('content')

    <script src="{{asset('frontend/js/menu.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@polymer/polymer@3.2.0/lib/legacy/polymer-fn.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@polymer/iron-selector@3.0.1/iron-selector.js"></script>
</body>
</html>
