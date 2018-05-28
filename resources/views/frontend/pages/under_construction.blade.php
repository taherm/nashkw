{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--<title>{{ config('app.name') }}</title>--}}

{{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}
{{--<style>--}}
{{--html, body {--}}
{{--height: auto;--}}
{{--}--}}

{{--body {--}}
{{--margin: 0;--}}
{{--padding: 0;--}}
{{--color: #B0BEC5;--}}
{{--font-weight: 100;--}}
{{--font-family: 'Lato', sans-serif;--}}
{{--display: flex;--}}
{{--width: 100%;--}}
{{--height: auto;--}}
{{--flex-direction: column;--}}
{{--justify-content: center;--}}
{{--align-content: center;--}}
{{--align-items: center;--}}
{{--flex-wrap: nowrap;--}}
{{--}--}}

{{--.container {--}}
{{--flex-direction: row;--}}
{{--justify-content: center;--}}
{{--align-items: center;--}}
{{--width: 100%;--}}
{{--overflow: hidden;--}}

{{--}--}}

{{--.content {--}}
{{--display: flex;--}}
{{--flex-direction: column;--}}
{{--justify-content: center;--}}
{{--align-items: center;--}}
{{--align-self: center;--}}
{{--text-align: center;--}}
{{--flex-wrap: nowrap;--}}
{{--}--}}

{{--.title {--}}
{{--font-size: 72px;--}}
{{--margin-top: 13%;--}}
{{--text-align: center;--}}
{{--}--}}

{{--.link {--}}
{{--text-decoration: none;--}}
{{--font-size: 72px;--}}
{{--color: darkgoldenrod;--}}
{{--}--}}

{{--@media only screen and (max-width: 400px) {--}}
{{--.pdf-frame {--}}
{{--width: 200px;--}}
{{--min-height: 500px;--}}
{{--}--}}

{{--.header {--}}
{{--position: fixed;--}}
{{--top: 0;--}}
{{--width: 100%;--}}
{{--height: 10%;--}}
{{--background-color: white;--}}
{{--margin-bottom: 10px;--}}
{{--clear: both;--}}
{{--border-bottom: 1px solid darkgoldenrod;--}}
{{--}--}}

{{--.img-logo {--}}
{{--width: 100%;--}}
{{--height: auto;--}}
{{--max-height: 220px;--}}
{{--border-radius: 10px;--}}
{{--}--}}

{{--.img-brochure {--}}
{{--width: 46%;--}}
{{--height: auto;--}}
{{--}--}}

{{--.img-wrapper {--}}
{{--display: flex;--}}
{{--flex-direction: column;--}}
{{--justify-content: center;--}}
{{--align-items: center;--}}
{{--margin-top: 10px;--}}
{{--flex-wrap: nowrap;--}}
{{--width: 46%;--}}
{{--}--}}

{{--}--}}

{{--@media screen and (min-width: 1000px) {--}}
{{--.pdf-frame {--}}
{{--width: 600px;--}}
{{--min-height: 500px;--}}
{{--}--}}

{{--.header {--}}
{{--position: fixed;--}}
{{--top: 0;--}}
{{--width: 100%;--}}
{{--height: 25%;--}}
{{--background-color: white;--}}
{{--margin-bottom: 10px;--}}
{{--clear: both;--}}
{{--border-bottom: 1px solid darkgoldenrod;--}}
{{--}--}}

{{--.img-logo {--}}
{{--width: 25%;--}}
{{--height: auto;--}}
{{--max-height: 220px;--}}
{{--border-radius: 10px;--}}
{{--}--}}

{{--.img-brochure {--}}
{{--width: 100%;--}}
{{--height: auto;--}}
{{--}--}}

{{--.img-wrapper {--}}
{{--display: flex;--}}
{{--flex-direction: column;--}}
{{--justify-content: center;--}}
{{--align-items: center;--}}
{{--margin-top: 10px;--}}
{{--flex-wrap: nowrap;--}}
{{--width: 100%;--}}
{{--}--}}
{{--}--}}

{{--footer {--}}
{{--position: fixed;--}}
{{--bottom: 0;--}}
{{--width: 100%;--}}
{{--height: 6%;--}}
{{--padding: 20px;--}}
{{--border-top: 1px solid whitesmoke;--}}
{{--background-color: lightgrey;--}}
{{--text-align: center;--}}
{{--justify-content: center;--}}
{{--align-items: center;--}}
{{--align-self: center;--}}
{{--}--}}

{{--a {--}}
{{--color: darkgoldenrod;--}}
{{--}--}}

{{--.social {--}}
{{--font-size: 25px;--}}
{{--text-align: center;--}}
{{--margin: 20px--}}
{{--}--}}
{{--</style>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>--}}
{{--</head>--}}
{{--<body>--}}

@extends('frontend.layouts.master')

@section('styles')
    @parent
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <style>
        .link {
            text-decoration: none;
            font-size: large;
            color: darkgoldenrod;
        }
        a, div , h1, h2, span {
            color: darkgoldenrod;
        }

        .social {
            font-size: 25px;
            text-align: center;
            margin: 20px
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 17%;
            padding: 20px;
            border-top: 1px solid whitesmoke;
            background-color: lightgrey;
            text-align: center;
            justify-content: center;
            align-items: center;
            align-self: center;
        }
    </style>
@endsection
@section('header')
@stop
@section('content')
    <div class="container">
        <div class="content">
            <div class="header">
                <a href="{{ asset('images/brochure.pdf') }}">
                    <img src="{{ asset('images/soon.jpeg') }}" alt="{{ env('APP_NAME') }}" class="img-logo"/>
                </a>
            </div>
            <div class="col-lg-12" style="text-align: center">
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
@endsection

@section('footer')
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
        <div style="margin: auto; height: 50px; text-decoration: none; font-size: large; color: black; font-weight: bolder;">info@harayer7.com لمزيد من المعلومات </div>
        </div>
    </footer>
@stop
