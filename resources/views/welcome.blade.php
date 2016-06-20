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
			}

			.container {
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
			#data-id-1{
				display: block;
			}
			#data-id-2,#data-id-3,#data-id-4,#data-id-5 {
				display:none;
			}
		</style>
	</head>
	<body>


		<div id="app">

			<div class="container-fluid">

				<nav class="navbar">
				  <div class="container-fluid">
				  	<div class="navbar-header">
				      <a class="navbar-brand pull-left" href="#">In Theaters</a>
	      			<a class="btn btn-primary pull-right" href="http://" style="">View More</a>
				  	</div>
		      	<p class="sub-navbar-brand">Top Movies This Week</p>
		      </div>
				</nav>

			</div>
			<div class="container-fluid">
					
					<span class="slideLeft" v-on:click="slideLeft"> < </span>
		  		<div class="container" style="display: inline-flex;width: 90%">
					@foreach($movies as $m)
	  				<div id="data-id-{{$m->id}}" style="height:auto;width: 80%;padding: 30px;margin-left: 10%;margin-right: 10%;">
							<div class="row">
								<div class="col-xs-9">
		  						<div class="" style="width:80%;background-color: white;">
						  			<div class="movie-title">
						  				<h1>
						  					{{ $m->title }}
						  				</h1>
						  			</div>
										<div class="movie-text">
							  				{{ $m->description }}
							  		</div>
							  		<div class="movie-rating">
							  				{{ $m->rating }}
							  		</div>
			  					</div>
		  					</div>
							<div class="col-xs-3">
								<div class="movie-poster" style="width:100%;">
									{!! $m->poster_img_url !!}
								</div>
							</div>
			  		</div>
			  		</div>
		  		@endforeach
		  		</div>

					<span class="slideRight" v-on:click="slideRight"> > </span>

				</div>
			</div>

		</div>
		<script src="{{ elixir('js/app.js') }}"></script>

	</body>
</html>
