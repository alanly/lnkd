<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Lnkd.</title>

		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Nixie+One">

		<style>
			body {
				background-color: #563d7c;
				color: #cdbfe3;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			}
			a {
				color: #cdbfe3;
			}
			.site-container {
				margin: auto;
				max-width: 500px;
			}
			.masthead {
				margin: 2.75rem 0 4rem;
				text-align: center;
			}
			.masthead h1, .masthead p {
				margin: 0;
			}
			.brand {
				font-family: "Nixie One", serif;
				font-weight: 400;
			}
			h1.brand {
				font-size: 5rem;
			}
			.user-control {
				margin-top: 2rem;
				text-align: center;
			}
			.url-input {
				background-color: rgba(205, 191, 227, 0.7);
				border: 0;
				border-radius: 2px;
				color: #563d7c;
				display: block;
				margin-left: -1.25rem;
				padding: 1rem 1.25rem;
				text-align: center;
				width: 100%;
			}
			.url-input::-webkit-input-placeholder {
				color: rgba(86, 61, 124, 0.6);
			}
			.url-input:focus {
				background-color: rgba(205, 191, 227, 0.9);
				border: 0;
				box-shadow: 0;
				outline: 0;
			}
			.url-submit {
				background-color: rgba(205, 191, 227, 0.7);
				border: 0;
				border-radius: 2px;
				color: #563d7c;
				display: block;
				margin: 1rem auto;
				padding: 0.5rem 1rem;
			}
			.url-submit:focus {
				border: 0;
				box-shadow: 0;
				outline: 0;
			}
			.url-submit:active {
				background-color: rgba(205, 191, 227, 0.9);
			}
		</style>
	</head>

	<body>
		<div class="site-container">
			<header class="masthead">
				<h1 class="brand">Lnkd.</h1>
				<p>Short your links for most the wholesome feeling.</p>
			</header>

			<div class="user-control">
				@yield('user-control')
			</div>
		</div>

		@yield('scripts')
	</body>
</html>