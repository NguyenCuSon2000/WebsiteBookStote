<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- <link rel="stylesheet" href="{{ asset('css/pay.css') }}"> -->
<!------ Include the above in your HEAD tag ---------->

@extends('layout')

@section('content')
<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url({{asset('img'.'/'.'banner1.3.jpg')}});">
</section>
<!--slider sec end-->

<div class="about_content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10  text-center text-lg-left wow slideInUp" data-wow-duration="2s">
                <h1 class="heading">Đặt hàng</h1>
                <p class="para_text">"Việc đọc rất quan trọng. Nếu bạn biết cách đọc, cả thế giới sẽ mở ra cho bạn.” <b>- Barack Obama -</b></p>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        
        <div class="row cart-body">
            <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Danh sách sản phẩm <div class="pull-right"><small><a class="afix-1" href="{{ route('cart.index') }}">Cập nhật</a></small></div>
                        </div>
                        <div class="panel-body">
                        @foreach($cart as $key)
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="{{ asset('img'.'/'.$key->options->img) }}" />
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">{{ $key->name }}</div>
                                    <div class="col-xs-12"><small>Số lượng x <span>{{ $key->qty }}</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6>{{ number_format($key->price)." "."VND"}}</h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                         @endforeach
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Subtotal</strong>
                                    <div class="pull-right">{{ Cart::subtotal()." "."VND" }}</div>
                                </div>
                                <div class="col-xs-12">
                                    <small>Shipping</small>
                                    <div class="pull-right"><span>-</span></div>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right">{{ Cart::total()." "."VND" }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Thông tin thanh toán</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>Tên khách hàng:</strong>
                                    <input type="text" name="name" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Thành phố:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="city" class="form-control" value="" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email:</strong></div>
                                <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="submit" class="form-control btn btn-success" value="Xác nhận thông tin" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                </div>
            </form>
        </div>
        <div class="row cart-footer">
            
        </div>
    </div>
</div>

@endsection