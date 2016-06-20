<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
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
				background-color: black;
			}
			#data-id-1{
				display: block;
			}
			#data-id-2,#data-id-3,#data-id-4,#data-id-5 {
				display:none;
			}
			.posterImage {
				height:auto;
				width: 100%;
				padding:15px;
			}
			.movie-poster-xs > img {
				height: 300px;
				width: auto;
			}
			/*.movie-details {
				background-color: #f2f3f5;
			}*/
		</style>
	</head>
	<body>


		<div id="app">

				<nav class="navbar" style="margin: 10px;">
				  <div class="container-fluid" style="">
				  	<div class="navbar-header">
				      <p class="navbar-brand pull-left" href="#" style="font-size: 36px;">In Theaters</p>
				  	</div>
	      		<p class="sub-navbar-brand text-muted" style="font-size: 24px;">Top Movies This Week</p>
		      </div>
				</nav>
					
		  		<div class="container" style="display: inline-flex;width: 95%;margin-left: 2.5%;margin-right: 2.5%;">
					@foreach($movies as $m)
	  				<div id="data-id-{{$m->id}}" v-touch:swipeleft="slideRight" v-touch:swiperight="slideLeft">
      			<a class="pull-right hidden-xs" href="https://{{$m->page_url}}" style="font-size: 32px;position: absolute;top:25px;right:25px;">View More</a>
							<div class="row" style="background-color: #f2f3f5;">
								<div class="movie-details col-sm-9 col-xs-12" style="height:auto;padding-right:0px;">
		  						<div class="" style="padding: 25px 50px 25px 50px;">
						  			<div class="movie-title">
						  				<h1 class="hidden-xs">
						  					{{ $m->title }}
						  				</h1>
						  				<div class="visible-xs text-center">
						  					<h2>{{ $m->title }}</h2>
						  					<a href="https://{{$m->page_url}}" style="font-size: 24px;">View More</a>
						  					<div class="movie-poster-xs">
						  						{!! $m->poster_img_url !!}
						  					</div>
						  				</div>
						  			</div>
						  			<br>
										<div class="movie-text">
							  				{{ $m->description }}
							  		</div>
							  		<br>
							  		<br>
							  		<div class="movie-rating">
							  				<span class="pull-left" v-if="{{$m->rating}} >= 0.20"><img src="{{ asset('images/star.svg') }}" height="40px"></img></span>
							  				<span class="pull-left" v-if="{{$m->rating}} > 0.30 && {{$m->rating}} < .40"><img src="{{ asset('images/half-star.svg') }}" height="40px"></img></span>
							  				<span class="pull-left" v-if="{{$m->rating}} >= 0.40"><img src="{{ asset('images/star.svg') }}" height="40px"></img></span>
							  				<span class="pull-left" v-if="{{$m->rating}} > 0.50 && {{$m->rating}} < .60"><img src="{{ asset('images/half-star.svg') }}" height="40px"></img></span>
							  				<span class="pull-left" v-if="{{$m->rating}} >= 0.60"><img src="{{ asset('images/star.svg') }}" height="40px"></img></span>
							  				<span class="pull-left" v-if="{{$m->rating}} > 0.70 && {{$m->rating}} < .80"><img src="{{ asset('images/half-star.svg') }}" height="40px"></img></span>
							  				<span class="pull-left" v-if="{{$m->rating}} >= 0.80"><img src="{{ asset('images/star.svg') }}" height="40px"></img></span>
							  				<span class="pull-left" v-if="{{$m->rating}} > 0.80 && {{$m->rating}} < .90"><img src="{{ asset('images/half-star.svg') }}" height="40px"></img></span>
							  				<span class="pull-left" v-if="{{$m->rating}} > 0.90"><img src="{{ asset('images/star.svg') }}" height="40px"></img></span>
							  				<span class="pull-right"><h2>{{ $m->rating*100 }} %</h2></span>
							  		</div>

							  	</div>
			  					</div>
								<div class="col-sm-3 col-xs-12" style="padding-left:0px;">
									<div class="movie-poster hidden-xs" style="">
										{!! $m->poster_img_url !!}
									</div>
								</div>
		  				</div>
			  		</div>
			  		@endforeach
			</div>
			<div class="text-center" style="width:100%">
	  		<span id="page-id-1" style="font-size:36px;">&#9679;</span>
	  		<span id="page-id-2" style="font-size:36px;">&#9675;</span>
	  		<span id="page-id-3" style="font-size:36px;">&#9675;</span>
	  		<span id="page-id-4" style="font-size:36px;">&#9675;</span>
	  		<span id="page-id-5" style="font-size:36px;">&#9675;</span>
			</div>
			</div>


		<script src="{{ elixir('js/app.js') }}"></script>

	</body>
</html>
