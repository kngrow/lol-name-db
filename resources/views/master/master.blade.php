<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
        <title>
            @yield('title')
        </title>
    </head>
    <body>
      <div class="wapper">
        <h1> lol name DB<small>(β)</small></h1>
        @yield('body')

        <script src='{{ elixir("js/app.js")}}'>

        </script>
    </body>
</html>
