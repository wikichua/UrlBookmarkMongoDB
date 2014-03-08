<!DOCTYPE html>
<html>
<head>
	<title>URL Bookmark on {{ Session::get('dbtype') }}DB</title>
	<style type="text/css">
		body {
			font-family:arial;
		}
		ul {
			list-style: none;
		}
		a {
			text-decoration: none;
		}
	</style>
</head>
<body>
<h1>URL Bookmark on {{ Session::get('dbtype') }}DB</h1>
@yield('content')
</body>
</html>