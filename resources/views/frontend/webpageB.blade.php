@extends('layouts/layouts')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="full-abs">
	<div class="test1">
		<h3>Recommendation in progress</h3>
		<h3>Email notification sent on completion</h3>
	</div>
</div>
<div class="container-fluid content">
	<div>

		@if(isset($webData['webb']['zoom_url_link']))

	        <img class="img-fluid " id="img"src="{{ $webData['webb']['zoom_url_link'] }}">

	    @else

	        <img class="img-fluid " id="img"src="{{ $webData['weba']['zoom_url_link'] }}">

	    @endif

		<div class="test">
				<div class="align1"><span class="topa1">Recommended-B</span></div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-4 col-xs-12 col-sm-12 "  >
						<h2 class="text">Switch to the original design</h2>
					</div>
					<div class="col-md-1 col-xs-12 col-sm-12 ">
						<a href="/webpageA/{{ $webData['_id']}}"><button class="a">A</button></a>
					</div>
				</div>
		</div>
</div>
@endsection