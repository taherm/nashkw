<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato', sans-serif;
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        .container {
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 72px;
            margin: 40px;
        }
        .link {
            text-decoration: none;
            font-size: 72px;
            color : darkgoldenrod;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <img src="{{ asset('images/soon.jpeg') }}" alt="{{ env('APP_NAME') }}" style="max-width: 700px;"/>
        <div class="title">
            <a href="{{ asset('images/pdf.pdf') }}" class="link">View Our Brochure</a>
        </div>
        <div class="title">
            {{ $exception->getMessage() }}
        </div>
    </div>
</div>
</body>
</html>
