@extends('frontend.layouts.master')

@section('styles')
    @parent
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <style>
        body, html {
            margin: 0px;
            width: 100%;
            padding:0px;
        }
        html, body, div, span, p, a, h1, h2, h3, h4, h5 {
            font-family: 'Tajawal', sans-serif;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            align-items: center;
        }

        .img-logo {
            max-width: 360px;
        }

        .link {
            text-decoration: none;
            font-size: large;
            color: darkgoldenrod;
        }

        a, div, h1, h2, span {
            color: darkgoldenrod;
        }

        .social {
            font-size: 30px;
            text-align: center;
            margin: 5px
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 18%;
            padding: 10px;
            border-top: 1px solid whitesmoke;
            background-color: whitesmoke;
            text-align: center;
            justify-content: center;
            align-items: center;
            align-self: center;
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
        }

        .text-follow-us {
            height: auto;
            margin-bottom: 2px;
            text-decoration: none;
            font-size: small;
            color: black;
            font-weight: bolder;
            width: 100%;
        }
    </style>
@endsection
@section('header')
@stop
@section('content')
    <div class="col-lg-12">
        <div class="header">
            <a href="{{ asset('images/brochure/BROCHURE-2.pdf') }}">
                <img src="{{ asset('images/soon_1.jpeg') }}" alt="{{ env('APP_NAME') }}" class="img-logo"/>
            </a>
        </div>
        <div class="col-lg-12" style="margin: 20px; text-align: center">
            <h3>
                <a href="{{ asset('images/brochure/BROCHURE-2.pdf') }}" class="link">اضغط من هنا لمشاهدة
                    الكتالوج</a>
            </h3>
        </div>
        <div class="img-wrapper">
            @for($i=1;$i<=14;$i++)
                <img class="img-brochure" src="{{ asset('images/brochure/BROCHURE -2-' . $i .'.jpg') }}"
                     alt="{{ env('APP_NAME') }}">
            @endfor
            <hr>
        </div>
    </div>
@endsection

@section('footer')
    <footer>
        <div class="text-follow-us">
            تابعونا على مواقع التواصل الإجتماعي
        </div>
        <hr>
        <a href="https://www.instagram.com/harayer7/" class="social" style="color: #e4405f" target="_blank"><i
                    class="fa fa-fw fa-instagram"></i></a>
        <a href="https://www.twitter.com/harayer7/" class="social" style="color: #55acee" target="_blank"><i
                    class="fa fa-fw fa-twitter"></i></a>
        <a href="https://www.youtube.com/watch?v=Rn1i3vRhU7s" class="social" style="color: #cd201f" target="_blank"><i
                    class="fa fa-fw fa-youtube"></i></a>
        <a href="https://www.snapchat.com/add/harayer7" class="social" style="color: #FFFC00" target="_blank"><i
                    class="fa fa-fw fa-snapchat"></i></a>
        <a href="https://api.whatsapp.com/send?phone=96596967707" class="social" style="color: #25D366" target="_blank"><i
                    class="fa fa-fw fa-whatsapp"></i></a>
        </div>
    </footer>
@stop
