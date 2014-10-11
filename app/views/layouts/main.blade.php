<html>
<head>
	<script src="//use.typekit.net/umc1lom.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<script type="text/javascript" src="/assets/sweetalert/sweet-alert.min.js"></script>
	<link rel="stylesheet" href="/assets/sweetalert/sweet-alert.css">
	@yield('header')
</head>
<body>
<!-- BEGIN global header -->
<!-- END global header -->
	
		@yield('content')

<!-- BEGIN global footer -->
<br>
<!-- END global footer -->
</body>
	@yield('footer')
</html>