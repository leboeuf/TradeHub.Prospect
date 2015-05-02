<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>@yield('title', 'TradeHub Prospect')</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/combo?pure/0.6.0/base-min.css&pure/0.6.0/grids-min.css">
	<link rel="stylesheet" href="{!! elixir('css/app.css') !!}" />
</head>
<body>
	<div style="margin-top: 15px;"></div>
	<div class="pure-g container">
		<div class="pure-u-1">
			@yield('content')
		</div>
	</div>
	@include('layout.footer')
	<div id="dialog-placeholder" class="hidden"></div>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="{{ elixir('js/all.js') }}"></script>
</body>
</html>