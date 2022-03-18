<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title>Admin</title>
</head>
<body>
<div class="align_controller">
    <div class="admin_controller">
        <a href="{{ route('admin.home')}}">Dashboard</a>
        <a href="{{ route('admin.posts.index')}}">Posts</a>
        <a href="#">Users</a>
        <a href="#">Categories</a>
        <a href="#">Tags</a>
    </div>
    @yield('content')
</div>
</body>
</html>