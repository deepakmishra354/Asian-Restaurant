<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   @include('admin.header_link')
</head>
<body>
   @include('admin.header')
    @yield('content')
    @include('admin.sidebar')
    @include('admin.footer_link')
</body>
</html>