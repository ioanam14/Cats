<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        {{--<form action='/addcat' method="post">--}}
            {{--<fieldset>--}}
                {{--<legend>Informations about your cat:</legend>--}}
                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                {{--Cat's name:<br> <input type="text" name="catname" value="Pookie">--}}
                {{--<br>--}}
                {{--Cat's race:<br> <input type="text" name="catrace" value="Munchkin">--}}
                {{--<br>--}}
                {{--Photo with cat:<br> <input type="text" name="photourl" value="http://assets6.heart.co.uk/2017/09/pooky-the-munchkin-2-1488301236-large-article-0.png">--}}
                {{--<br> <br>--}}
                {{--<input type="submit" value="Submit">--}}
            {{--</fieldset>--}}
        {{--</form>--}}


        {{ Form::open(['url' => '/addcat']) }}
            <fieldset>
                <legend>Informations about your cat:</legend>
                {{ Form::text('catname', 'Pookie') }}
                {{ Form::text('catrace', 'Munchkin') }}
                {{ Form::text('photourl', 'http://www.iizcat.com/uploads/2017/06/hsx8h-gordon-ramsay-cat-2.JPG') }}

                {{ Form::submit('Click Me!') }}
            </fieldset>
        {{ Form::close() }}
    </body>
</html>
