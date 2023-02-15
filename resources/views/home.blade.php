<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href={{ asset("css/main.css") }} />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />
	<script src="js/main.js"></script>
	<title>Plan It | Main</title>
</head>
<body>
	<header>
		<div id="primary-header">
            <img class="logo" src="{{ asset("images/plan-it-logo.png") }}" alt="Logo of Plan It" />
			<a href="/" class="title">Plan It</a>
		</div>
		<div id="secondary-header">
            <div id="header-links">
                <a href="#">Authorize</a>
                <a href="#">Commands</a>
                <a href="#">Embeds</a>
                <a href="#">Terms of service</a>
                <a href="#">Privacy Policy</a>
            </div>
		</div>
	</header>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
