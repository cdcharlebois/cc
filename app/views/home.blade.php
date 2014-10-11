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
		}

		.banner{
			width:100%;
			background-size: cover;
			background-image: url('assets/img/bethpage2.jpg');
			height:500px;
		}
		.avatar{
			background-image: url('assets/img/conner.svg');
			background-size: 100% 100%;
			background-color:#cee8f2;
			height:200px;
			width:200px;
			border-radius: 100px;
			margin:auto;
		}

		h1.title{
			background-color: rgba(0,0,0,0.7);
			color:#cee8f2;
			font-size: 75px;
			font-weight: 100;
			padding-left: 1em;
			height:200px;
			margin:0;
			vertical-align: middle;
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

	</style>
@stop

@section('content')
	<div class="banner">
		<div class="container">
			<div class="row header">
				<div class="col-md-4">
					<div class="avatar"></div>
				</div>	
				<div class="col-md-7">
					<h1 class="title">Conner<br>Charlebois</h1>
				</div>
			</div>	
		</div>
	</div>
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="title">About Me</h2>
			<p class="font">
				Lorem ipsum dolor sit amet, consectetur adip<span style="color:red">*</span>isicing elit, sed do eiusmod <span style="color:red">*</span>tempor incididunt ut labore et dolore magna aliqua.
			</p>
		</div>
	</div>
		<div class="row">
			<div class="col-md-4">
				<h2 class="title">Blog</h2>
				<div class="shortcut">
					<img src="/assets/img/book.svg" width="134" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<h2 class="title">Tools</h2>
				<div class="shortcut">
					<img src="/assets/img/wrench.svg" width="134" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<h2 class="title">Projects</h2>
				<div class="shortcut">
					<img src="/assets/img/case.svg" width="134" alt="">
				</div>
			</div>
		</div>
	</div>
	
@stop