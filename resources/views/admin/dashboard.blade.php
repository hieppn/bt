<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="/img/logo.jpg"/>
	<title>DashBoard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	@if(Auth::user())
<p>{{Auth::user()->name}}</p>
<form action="/auth/logout" method="get">
<button>Đăng xuất</button></form>
<form action="/admin/user" method="get">
<button>Quản lý người dùng</button></form>
<form action="/admin/product" method="get">
<button>Quản lý sản phẩm</button></form>
<form action="/admin/category" method="get">
<button>Quản lý loại sản phẩm</button></form>
@else
	<form action="{{ route('login') }}" method="post">
	@csrf
<button>Đăng nhập</button></form>
<form action="{{ route('register') }}" method="post">
@csrf
<button>Đăng kí</button></form>
@endif
</body>
</html>