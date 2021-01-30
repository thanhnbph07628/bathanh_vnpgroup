<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuyển dụng - Ngân hàng TMCP Kiên Long</title>

    @include('frontend.layout.css')
    @yield('css')

</head>

<body>
    <div id="wrapper">
        @include('frontend.layout.header')

        @yield('content')

        @include('frontend.layout.footer')
    </div>
    @include('frontend.layout.script')
    @yield('script')

</body>

</html>