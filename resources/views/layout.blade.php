<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
            }

            .container {
                text-align: center;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 46px;
            }

            a {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">@yield('content')</div>
            </div>
        </div>
    </body>
</html>
