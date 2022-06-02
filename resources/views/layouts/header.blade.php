<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }} :: {{ __('One Login.') }} {{ __('Multiple Games.') }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
    </head>

    <body class="overflow-x-hidden overflow-y-auto">
