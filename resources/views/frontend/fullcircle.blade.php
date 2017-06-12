@extends('layouts/layouts')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
    
    <div ng-controller="fullCircleCtrl">
        <div class="content">
          <div class="row">
            <div class="col-md-9 col-xs-12 col-sm-12 offset-md-3">
              <p>Filter by Section</p>
              <div class="section">
                <select class="single">
                    <option value="" disabled  >Country</option>
                    <option value=""   >Country</option>
                </select>
                <select class="single">
                    <option value="" disabled  >City</option>
                    <option value=""   >City</option>
                </select>
                <select class="single">
                    <option value="" disabled  >industry</option>
                    <option value=""   >Industry</option>
                </select>
                <select class="single">
                    <option value="" disabled  >Technology</option>
                    <option value=""   >Technology</option>
                </select>
                <select class="single">
                    <option value="" disabled  >strategy</option>
                    <option value=""   >strategy</option>
                </select>
              </div>
              <p>Filter by Tag</p>
                <div class="tags">
                  <input type="text" name="pp">
                  <input type="text" name="pp">
                  <input type="text" name="pp">
                  <input type="text" name="pp">
                  <input type="text" name="pp">
                  <input type="text" name="pp">
                </div>
            </div>
            <div class="col-md-9 offset-md-3 generate">
              <button class="btn-success map">GENERATE MAP</button>
            </div>
          </div>
        </div>
        <div class="footer">
            <div class="row">
              	<div class="col-md-12 col-sm-12 col-xs-12">
	                <ul>
	                	<li><a href="#">About Us</a></li>
	                	<li><a href="#">Data</a></li>
	                	<li><a href="#">Share Map</a></li>
	                	<li><a href="#">Contact Us</a></li>
	                </ul>
	                <hr>
                </div>
           	   
           	</div>
           	<div class="row" >
           		<div class="col-md-12 col-sm-12 col-xs-12">
	           		<h6 class="text-center">@2017 innovation graph. All rights reserved. Powered by 
	           		<a href="http://slashwebsite.weebly.com/"><img src="{{asset('img/slash.png')}}"></a></h6>
           		</div>
           	</div>
        </div>
        
    </div>


@endsection


@section('scripts')
    

@stop