<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title??'Webin CMS' }}</title>

    {{ $head??'' }}

    @vite('resources/css/app.css')
    <style>
        .sidebar-menu li a::after {
            @apply absolute right-0 top-0 h-full bg-blue-500;
        }
        .form-select {
            -moz-padding-start: calc(.75rem - 3px);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div id="main-container">
        <div class="fixed flex flex-col top-0 left-0 w-60 h-full bg-slate-900">
            @include('layouts.sidebar')
        </div>
        <div class="ml-60 p-6">
            {{ $slot }}
        </div>
    </div>
    {{ $footer??'' }}
</body>
</html>