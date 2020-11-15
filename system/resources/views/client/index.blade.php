@extends('section.mainbase')

@section('content')
    <div class="header-end">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{url('public')}}/img/3.jpg" style="width: 400px;">
                        <div class="carousel-caption car-re-posn">
                            <h3>AirMax</h3>
                            <h4>You feel to fall</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                    <div class="item">
                      <img src="{{url('public')}}/img/1.jpg" style="width: 400px;">
                        <div class="carousel-caption car-re-posn">
                            <h3>AirMax</h3>
                            <h4>You feel to fall</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                    <div class="item">
                      <img src="{{url('public')}}/img/2.jpg" style="width: 400px;">
                        <div class="carousel-caption car-re-posn">
                            <h3>AirMax</h3>
                            <h4>You feel to fall</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="shop-grid">
        <div class="container">
        	@foreach($list_produk as $produk)
            <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="{{url('public')}}/img/{{$loop->iteration}}.jpg" alt="/" class="img-responsive gri-wid" style="width: 300px; height: 300px;"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>{{$produk->nama}}</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">{{$produk->harga}}</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="quick-view">
                        <a href="{{url('/single')}}">Quick view</a>
                    </div>
                </div>
			@endforeach
       	 		<div class="clearfix"></div>
            </div>
            
        </div>
        <div class="sub-news">
            <div class="container">
                <form>
                    <h3>NewsLetter</h3>
                <input type="text" class="sub-email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                <a class="btn btn-default subs-btn" href="#" role="button">SUBSCRIBE</a>
                </form>
            </div>
        </div>
       

@endsection
      