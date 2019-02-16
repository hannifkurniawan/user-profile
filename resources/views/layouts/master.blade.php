<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	@yield('styles')
	<title>@yield('title')</title>
</head>
<body>
	@yield('nav')
	@yield('content')
	@yield('footer')
	@yield('scripts')
</body>
</html>