<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" href="{{ URL::asset('css/style1.css') }}" />
</head>
<body>

		@yield('contain')
		@yield('header')
		@yield('content')
		@yield('footer')

</body>
</html>