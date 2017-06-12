@extends('layouts/layouts')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')



		<div class="container-fluid content">
			<div>
				<img class="img-fluid " id="img" src="{{ $webData['weba']['zoom_url_link'] }}">
			</div>

			<div class="test">
				<div class="align"><span class="topa">Original-A</span></div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-5 col-xs-12 col-sm-12 "  >
						<h2 class="text">Switch to the recommended design</h2>
					</div>
					<div class="col-md-2 col-xs-12 col-sm-12" >
						<a href="/webpageB/{{ $webData['_id'] }}"><button class="a">B</button></a>
					</div>
					
				</div>
			</div>
			
		</div>

@endsection