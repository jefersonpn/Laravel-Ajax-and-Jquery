<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Chamada | Nova Época - Sistema de gerenciamento de presença</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- third party css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dripicons/2.0.0/webfont.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">

        <!-- third party css end -->

       <!-- App css -->
       <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
       <link href="css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />

       {{-- Map css --}}
       <link rel="stylesheet" href="css/jquery-jvectormap-2.0.5.css" type="text/css" media="screen"/>

       {{-- Jquery-map --}}
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>       <script src="js/jquery-jvectormap-2.0.5.min.js"></script>
       <script src="js/jquery-jvectormap-2.0.5.min.js"></script>
       <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    </head>

    <body class="loading" data-layout-color="light" data-layout="detached" data-rightbar-onstart="true">