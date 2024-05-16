<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <style>
            body {
                background-color: #181818;
                color: white;
                font-family: IRANSansX, serif;
            }
        </style>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
