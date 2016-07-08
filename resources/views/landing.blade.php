<!doctype html>
<html lang="en" xmlns:border-bottom="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Welcome to IMS</title>
    @include('includes.importcss')
</head>
<body style="background-image: url('http://www.wallpaperfo.com/thumbnails/detail/20120601/black%20and%20white%20beach%201680x1050%20wallpaper_www.wallpaperfo.com_92.jpg'); background-size:cover;background-repeat: no-repeat">
    <div class="row center-align" style="margin-top: 15%;">
<a href="{{route('admin')}}" style="font-size: 55px; margin:20px; border-bottom: 1px solid #ccc">Admin</a>
<a href="{{route('student')}}" style="font-size: 55px; margin: 20px; border-bottom: 1px solid #ccc">Students</a>
    </div>
</body>
    @include('includes.importjs')
</html>