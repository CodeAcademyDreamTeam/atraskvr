<!DOCTYPE html>
<html>
<head>

    @include('admin.includes.meta')
    <title>@yield('title')</title>
    @include('admin.includes.css')
</head>
<body>

@include('admin.includes.navigation')

@yield('content')

@include('admin.includes.footer')


@include('admin.includes.js')
@yield('script')

</body>
</html>