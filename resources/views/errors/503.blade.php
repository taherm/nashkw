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
            color: #B0BEC5;
            font-weight: 100;
            font-family: 'Lato', sans-serif;
            display: flex;
            width: 100%;
            height: 100%;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            align-items: center;
            flex-wrap: nowrap;
        }

        .container {
            flex-direction: row;
            justify-content: center;
            align-items: center;

        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            align-self: center;
            text-align: center;
            flex-wrap: nowrap;
        }

        .title {
            font-size: 72px;
            margin: 40px;
        }

        .link {
            text-decoration: none;
            font-size: 72px;
            color: darkgoldenrod;
        }

        @media only screen and (max-width: 400px) {
            .pdf-frame {
                width: 200px;
                min-height: 500px;
            }
        }
        @media screen and (max-width: 400px) and (min-width: 1000px), (min-width: 1100px) {
            .pdf-frame {
                width: 600px;
                min-height: 500px;
            }
        }


        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 3%;
            padding: 20px;
            border-top: 1px solid whitesmoke;
            background-color: lightgrey;
            text-align: center;
            justify-content: center;
            align-items: center;
            align-self: center;
        }

        a {
            color: darkgoldenrod;
        }

        .social {
            font-size: 25px;
            text-align: center;
            margin: 20px
        }
        .img-logo {
            width: 150px;
            /*width: 60%;*/
            height: auto;
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>
<body>
<div class="container">
    <div class="content">
        <a href="{{ asset('images/brochure.pdf') }}">
            <img src="{{ asset('images/soon.jpeg') }}" alt="{{ env('APP_NAME') }}" class="img-logo"/>
        </a>
        <div class="title">
            <a href="{{ asset('images/brochure.pdf') }}" class="link">View Our Brochure</a>
        </div>
        <div>
            <iframe id="iframepdf" src="{{ asset('images/brochure.pdf') }}" class="pdf-frame"></iframe>
        </div>
        <div class="title">
            {{ $exception->getMessage() }}
        </div>
    </div>
</div>
<footer>
    <a href="https://www.instagram.com/harayer7/" class="social" target="_blank"><i
                class="fa fa-instagram"></i></a>
    <a href="https://www.twitter.com/harayer7/" class="social" target="_blank"><i
                class="fa fa-twitter"></i></a>
    </div>
</footer>
</body>
</html>
