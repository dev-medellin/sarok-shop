<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
        @isset($data)
            @foreach($data['css'] as $item)
                <link rel="stylesheet" href="{{url('assets/'.$item)}}" />
            @endforeach
        @endisset
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireStyles
    </head>
    <body>
        @include('templates.web-header')
        @include('templates.mobile-header')
            @livewireScripts
            {{ $slot }}
        @include('templates.footer')
        @isset($data)
            @foreach($data['js'] as $item)
             <script src="{{url('assets/'.$item)}}"></script>
            @endforeach
        @endisset
    </body>
</html>
