<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ AdminDashboard::getTitle() }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        {!! AdminDashboard::loadStyles() !!}
        {!! AdminDashboard::loadScripts(true) !!}
        @livewireStyles
    </head>

    <body class="overflow-x-hidden overflow-y-auto">
