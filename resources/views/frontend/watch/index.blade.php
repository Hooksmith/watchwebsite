@extends('layouts/watchlayout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 topheader">
            <div class="row">
            <div class="col-md-4 nav-main">
                <ul>
                    <li><a href="#" class="nav-item nav">&pound; CURRENCY</a>
                    <div class="nav-content">
                      <div class="nav-sub">
                        <ul>
                          <li><a href="#">&euro; Euro</a></li>
                          <li><a href="#">&pound; Pound Sterling</a></li>
                          <li><a href="#">$ US Dollar</a></li>
                        </ul>
                      </div>
                      </div> 
                      </li>
                      <li><a href="#" class="nav-item"><img src="{{asset('img/en-gb.png')}}">  LANGUAGE</a>
                    <div class="nav-content">
                      <div class="nav-sub">
                        <ul>
                          <li><a href="http://www.google.com"><img src="{{asset('img/en-gb.png')}}"> English</a></li>
                          <li><a href="#"><img src="{{asset('img/ar-lb.png')}}"> Arabic</a></li>
                        </ul>
                      </div>
                      </div> 
                      </li>
                      <li><span class="icon-phone"></span> 123456789</li>
                </ul>
            </div>
            <div class="col-md-3 offset-md-5">
                <div class="nav-main">
                <ul class="icon">
                    <li><a href="#" class="nav-item">My Account</a>
                    <div class="nav-content">
                      <div class="nav-sub">
                        <ul>
                          <li><a href="#"><span class="icon-person"></span> Register</a></li>
                          <li><a href="#"><span class="icon-enter"></span> Login</a></li>
                        </ul>
                      </div>
                      </div> 
                      </li>
                      <li><span class="icon-search"></span></li>
                      <li><span class="icon-favorite_border"></span></li>        
                      <li><span class="icon-cart"></span></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-12 headermenu">
            <img src="{{asset('img/watch.png')}}">
            <div id="nav">
               <ul class="menu">
                <li class=”first”><a href=”#”>For men <span class="icon-arrow-down"></span></a>
                <ul>
                    <li><a href=”#”>Sale</a></li>
                    <li><a href=”#”>Appraisal</a></li>
                    <li><a href=”#”>Open House</a></li>
                </ul>
                </li>
                <li><a href=”#”>For Women</a>
                </li>
                <li><a href=”#”>For kids</a>
                
                </li>
                <li><a href=”#”>Accessories <span class="icon-arrow-down "></span></a>
                  <ul> 
                  <li><a href="#">Accessories</a>
                    <ul>
                    <li><a href=”#”>Scanner</a></li>
                    <li><a href=”#”>printer</a></li>
                    <li><a href=”#”>web cameras</a></li>
                  </ul>
                  </li>
                  </ul>
                  
                </li>
                <li><a href=”#”>More <span class="icon-arrow-down "></span></a>
                    <ul>
                      <li><a href=”#”>Pair</a></li>
                      <li><a href=”#”>Blog</a></li>
                    </ul>
                </li>
               </ul>  
            </div>
        </div>
        <div class="col-md-12 headerslide">
            <div class="owl-carousel owl-theme big">
              <div class="item"><img src="{{asset('img/slider2.jpg')}}"></div>
              <div class="item"><img src="{{asset('img/slider1.jpg')}}"></div>
            </div>
            <div class="sildemenu">
                <div class="row menu1">
                  <div class="col-md-4 "><a href="#"><span class="icon-truck "></span> Free Delivery</a></div>
                  <div class="col-md-4"><a href="#"><span class="icon-lock "></span> Secure Payments</a></div>
                  <div class="col-md-4"><a href="#"><span class="icon-money"></span> Big saving Brands</a></div>
                </div>
                <div row menu2>
                  <div class=" col-md-12">
                    <h3 style="text-align: center; margin-top: 2em; margin-bottom: 1em;">TRENDING PRODUCTS</h3>
                   <div class="pill">
                   <ul class="nav nav-pills"  role="tablist">
                      <li class="nav-item active">
                        <a class="nav-link active" data-toggle="tab" href="#featured" role="tab">Featured</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#lastest" role="tab">Lastest</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#bestseller" role="tab">Bestseller</a>
                      </li>
                    </ul>
                    </div>
                      <div class="tab-content">
                        <div class="row tab-pane active " id="featured" role="tabpanel">
                          <div class="row">
                          <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>  
                          <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                          <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="lastest" role="tabpanel">
                          <div class="row">
                          <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>  
                          <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                          <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                          </div>
                        </div>
                        <div class="row tab-pane" id="bestseller" role="tabpanel">
                          <div class="row">
                          <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>  
                          <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div>
                           <div class="col-md-3">
                            <img src="{{asset('img/watch3.jpg')}}">
                            <div class="col-md-6 icon">
                            <span class="icon-cart" style="padding-right: 1em;"></span>
                            <span class="icon-favorite_border" style="padding-right: 1em;"></span>
                            <span class="icon-loop2"></span>
                            </div>
                            <p>gulp watch</p>
                            <p>&pound;94.46</p>
                          </div> 
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        <div class="col-md-12 content">
            <div class="topcontent">
                 
            </div>
            <div class="midcontent">
              <div class="row" style="text-align: center;">
                <div class="col-md-4 bone">
                  <div class="row">
                  <div class="col-md-6">
                    <p>Jewelry</p>
                    <p>VERIACE</p>
                    <p>WOMEN'S</p>
                  </div>
                  <div class="col-md-6"><img src="{{asset('img/banner.png')}}"></div>
                  </div>
                </div>
                <div class="col-md-6 back">
                <div class="row">
                  <div class="col-md-6">
                    <p>EVERSILM</p>
                    <p>MEGIA MENS</p>
                    <p>stylus</p>
                  </div>
                  <div class="col-md-6"><img src="{{asset('img/banner1.png')}}"></div>
                  </div>
                </div>
              </div>
              <div class="row middle">
                <div class="col-md-5 midleft">
                <p>Lastest News</p>
                <img src="{{asset('img/blog.jpg')}}">
                <img src="{{asset('img/blog2.jpg')}}">
                </div>
                <div class="col-md-5 midright"></div>
              </div>
            </div>
            <div class="bottomcontent">
              <div class="row" style="text-align: center;">
                
                  <div class="col-md-3">
                  <span class="icon-smile"></span>
                  <span><h2>100%</h2></span>
                  <span>SATISFACTION</span>
                  </div>
                  <div class="col-md-3">
                  <span class="icon-favorite_border"></span>
                  <span><h2>60+</h2></span>
                  <span>BRANDED WATCH</span>
                  </div>
                  <div class="col-md-3">
                  <span class="icon-textsms"></span>
                  <span><h2>900+</h2></span>
                  <span>PRODUCT SALES</span>
                  </div>
                  <div class="col-md-3">
                  <span class="icon-pin_drop"></span>
                  <span><h2>63+</h2></span>
                  <span>STORE LOCATION</span>
                  </div>
              </div>
              <div class="row">
                <div class="topback">
                  
                </div>
                <div class="backbone">
                  <div class="owl-carousel owl-theme top">
                      <div class="item"><img src="{{asset('img/logo.png')}}"></div>
                      <div class="item"><img src="{{asset('img/logo2.png')}}"></div>
                      <div class="item"><img src="{{asset('img/logo.png')}}"></div>
                      <div class="item"><img src="{{asset('img/logo2.png')}}"></div>
                      <div class="item"><img src="{{asset('img/logo.png')}}"></div>
                      <div class="item"><img src="{{asset('img/logo2.png')}}"></div>
                      <div class="item"><img src="{{asset('img/logo.png')}}"></div>
                      <div class="item"><img src="{{asset('img/logo2.png')}}"></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-12 footer">
            <div class="row topfooter">
              
                <div class="col-md-4" style="background: spaceblack; text-align: center;">
                  <h5>connect with us</h5>
                  <h5>Join The Conversation About Modern Design</h5>
                  <div class="icon">
                    <span class="icon-twitter"></span>
                    <span class="icon-instagram"></span>
                    <span class="icon-facebook2"></span>
                    <span class="icon-google"></span>
                    <span class="icon-pinterest2"></span>
                  </div>
                </div>
                <div class="col-md-4" style="background: black;">
                </div>
                <div class="col-md-4" style="background: spaceblack;">
                </div>
              </div>
              <div class="row buttomfooter">
                
              </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    

@stop