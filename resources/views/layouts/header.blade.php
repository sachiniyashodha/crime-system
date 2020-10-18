<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Google-Style-Login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Hero-Technology.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Registration-Form.css') }}">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Refresh </a>
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav navbar-right">
                <li role="presentation"><a href="home.html">Home </a></li>
                <li role="presentation"><a href="main.html">Main </a></li>
                <li role="presentation"><a href="add_data.html">Add Data</a></li>
                <li role="presentation"><a href="row_data.html">Row Data</a></li>
                <li role="presentation"><a href="administratr.html">Administratr </a></li>
                <li role="presentation"><a href="index.html">Logout </a></li>
            </ul>
        </div>
    </div>
</nav>