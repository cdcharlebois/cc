@extends('layouts.main')

@section('header')
	<title>Conner Charlebois</title>
	<style>
		/*colors:
		#cee8f2 - white
		#224032 - green
		#bf9380 - midbrown
		#d9c4b8 - lightbrown
		#73482f - darkbrown*/
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			height:auto !important;
		}

		.banner{
			width:100%;
			background-image: url('assets/img/bethpage2.jpg');
			height:400px;
		}
		.avatar{
			background-image: url('assets/img/conner.svg');
			background-size: 100% 100%;
			background-color:#cee8f2;
			height:250px;
			width:250px;
			border-radius: 125px;
			margin:auto;
		}

		h1.title{
			background-color: rgba(0,0,0,0.7);
			color:#cee8f2;
			font-size: 75px;
			font-weight: 200;
			padding-left: 1em;
			height:200px;
			margin:0;
			vertical-align: middle;
		}
		h3.title{
			background-color: rgba(0,0,0,0.7);
			color:#cee8f2;
			font-weight: 200;
			padding-left: 78px;
			height:50px;
			margin:0;
			font-size: 15px
		}
		.header{
			margin-top: 100px
		}
		h2{
			color:#73482f;
			text-align: center
		}
		.shortcut{
			background-color:#bf9380; /*midbrown*/
			height: 200px;
			width: 200px;
			border-radius: 100px;
			margin:auto;
			text-align: center;
			position: relative;
		}
		.shortcut > img{
			position: absolute;
			top:33px;
			left:33px;
		}
		p{
			font-size: 1.6em
		}
		a.text-link:hover{
			background-color:#224032;
			color:#ffffff;
			text-decoration: none
		}
		a.text-link{
			padding:0.1em 0.2em;
			color:#224032;
		}
		.hint{
			position:fixed;
			bottom:0;
			left:47%;
			padding:1em 1em 0 1em;
			background-color:#cee8f2;
			border:1px solid black;
		}

	</style>
@stop

@section('content')
	<!-- 
	<div class="banner bcg"
		data-0="background-position:50% 0px;" 				// when the scroll top is 0 (right at the top of the page)
		data-top-bottom="background-position: 50% -100px;"	// when the bottom of the element (target) is at the top of the page
		data-anchor-target="#para"
	> 
	-->
	<div class="banner bcg"
		data-0="background-position:50% 0px;"	
		data-400="background-position: 50% -100px;"
	>
		<div class="container">
			<div class="row header">
				<div class="col-md-4">
					<div class="avatar"></div>
				</div>	
				<div class="col-md-7">
					<h1 class="title">Conner<br>Charlebois</h1>
					<h3 class="title">Consultant at Adobe. Netflix Enthusiast. Coffee Aficionado</h3>
				</div>
			</div>	
		</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="title">About Me</h2>
			<p class="font">
				Born and raised in a small town just outside of Toronto, ON, I attended (and graduated from) <a class="text-link" href="http://www.bentley.edu">Bentley University</a> in Waltham, MA. I work as a solution consultant for the Adobe Marketing Cloud, and I help change the way marketers work. When I'm not working, I dabble in web development, pretend I know how to dance, and cross my fingers that the Maple Leafs will one day make the playoffs again.
				<!-- Lorem ipsum dolor sit amet, consectetur adip<span style="color:red">*</span>isicing elit, sed do eiusmod <span style="color:red">*</span>tempor incididunt ut labore et dolore magna aliqua. -->
			</p>
		</div>
	</div>
		<div class="row"
			data-0="opacity:0"
			data-100="opacity:1"
		>
			<div class="col-md-4">
				<h2 class="title">Blog</h2>
				<a href="/blog">
				<div class="shortcut">
					<img src="/assets/img/book.svg" width="134" alt="">
				</div>
				</a>
			</div>
			<div class="col-md-4">
				<h2 class="title">Tools</h2>
				<a href="http://tools.connercharlebois.com">
					<div class="shortcut">
						<img src="/assets/img/wrench.svg" width="134" alt="">
					</div>
				</a>
			</div>
			<div class="col-md-4">
				<h2 class="title">Projects</h2>
				<a href="/projects">
					<div class="shortcut">
						<img src="/assets/img/case.svg" width="134" alt="">
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="hint"
		data-0="opacity:1"
		data-100="opacity:0"
 	>
		V Scroll V
	</div>
	
@stop

@section('footer')
	<script type="text/javascript" src="/assets/js/skrollr.js"></script>
    <script type="text/javascript">
    var s = skrollr.init();
    </script>

@stop
