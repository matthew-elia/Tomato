<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{ elixir('css/app.css') }}">

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}

			.navbar-header {
				width: 100%;
			}

			.slideLeft, .slideRight{
				display: inline;
				width: 5%;
				font-size: 50px;
				font-weight: bold;
				cursor: pointer;
			}
		</style>
	</head>
	<body>

			<div class="container-fluid">

				<nav class="navbar">
				  <div class="container-fluid">
				  	<div class="navbar-header">
				      <a class="navbar-brand pull-left" href="#">In Theaters</a>
				      <a class="btn btn-primary pull-right" href="#">View More</a>
				  	</div>
		      	<p class="sub-navbar-brand">Top Movies This Week</p>
		      </div>
				</nav>

			</div>

		<div id="app">
		
			<div class="container-fluid text-center">
					
					<span class="slideLeft" v-on:click="slideLeft"> < </span>

		  		<div class="container" style="display: inline-flex;width: 90%">
						<div class="movie-text" style="height:500px;width:70%;background-color: purple;">
			  				@{{ message }}
			  		</div>
						<div class="movie-poster" style="height:500px;width:30%;background-color: red;">
			  				@{{ message }}
			  		</div>
		  		</div>

					<span class="slideRight" v-on:click="slideRight"> > </span>

				</div>
			</div>

		</div>
		<script src="{{ elixir('js/app.js') }}"></script>
	</body>
</html>
