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
			}
			input[type="text"] {
				background-color: #cdbfe3;
				border: 0;
				border-radius: 2px;
				color: #563d7c;
				padding: 1rem 1.25rem;
				text-align: center;
				width: 100%;
			}
			input[type="text"]::-webkit-input-placeholder {
				color: #563d7c;
			}
			input[type="text"]:active {
				border: 0;
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
				<input type="text" id="link-input-box" name="url" placeholder="Link to shorten...">
			</div>
		</div>
	</body>
</html>