<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        html, body {
            height: auto;
        }

        body {
            margin: 0;
            padding: 0;
            color: #B0BEC5;
            font-weight: 100;
            font-family: 'Lato', sans-serif;
            display: flex;
            width: 100%;
            height: auto;
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
            margin-top: 13%;
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

            .header {
                position: fixed;
                top: 0;
                width: 100%;
                height: 10%;
                background-color: white;
                margin-bottom: 10px;
                clear: both;
                border-bottom: 1px solid darkgoldenrod;
            }

            .img-logo {
                width: 40%;
                height: auto;
                max-height: 220px;
                border-radius: 10px;
            }

        }

        @media screen and (max-width: 400px) and (min-width: 1000px), (min-width: 1100px) {
            .pdf-frame {
                width: 600px;
                min-height: 500px;
            }

            .header {
                position: fixed;
                top: 0;
                width: 100%;
                height: 25%;
                background-color: white;
                margin-bottom: 10px;
                clear: both;
                border-bottom: 1px solid darkgoldenrod;
            }

            .img-logo {
                width: 25%;
                height: auto;
                max-height: 220px;
                border-radius: 10px;
            }
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 6%;
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

        .img-brochure {
            width: 100%;
            height: auto;
        }

        .img-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            flex-wrap: nowrap
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="header">
            <a href="{{ asset('images/brochure.pdf') }}">
                <img src="{{ asset('images/soon.jpeg') }}" alt="{{ env('APP_NAME') }}" class="img-logo"/>
            </a>
        </div>
        <div class="title">
            <div>
                <a href="{{ asset('images/brochure/BROCHURE -2.pdf') }}" class="link">View Our Brochure</a>
            </div>
            <div class="img-wrapper">
                @for($i=1;$i<=14;$i++)
                    <img class="img-brochure" src="{{ asset('images/brochure/BROCHURE -2-' . $i .'.jpg') }}"
                         alt="{{ env('APP_NAME') }}">
                @endfor
            </div>

        </div>
    </div>
</div>
<footer>
    <a href="https://www.instagram.com/harayer7/" class="social" target="_blank"><i
                class="fa fa-fw fa-instagram"></i></a>
    <a href="https://www.twitter.com/harayer7/" class="social" target="_blank"><i
                class="fa fa-fw fa-twitter"></i></a>
    <a href="https://www.youtube.com/watch?v=Rn1i3vRhU7s" class="social" target="_blank"><i
                class="fa fa-fw fa-youtube"></i></a>
    <a href="mailto:info@harayer7.com" class="social" target="_blank"><i
                class="fa fa-fw fa-inbox"></i></a>
    <hr>
    <span style="text-decoration: none; font-size: large; color: black; font-weight: bolder; margin : 15px;">info@harayer7.com لمزيد من المعلومات </span>
    <br>
    </div>
    </br>
</body>
</html>
