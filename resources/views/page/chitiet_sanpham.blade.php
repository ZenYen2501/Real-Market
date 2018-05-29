	@extends('master')
	@section('content')

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title" style="font-size: 40px;color: #DC4422FF;font-weight: bold; font-family: Comic Sans MS;">{{$sanpham->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Thông tin chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/{{$sanpham->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title" ><h1>{{$sanpham->name}}</h1></p>
								<p class="single-item-price">
									@if($sanpham->promotion_price==0)
										<span class = "flash-sale">{{number_format($sanpham->unit_price)}} VNĐ</span>
										@else
										<span class = "flash-del">{{number_format($sanpham->unit_price)}} VNĐ</span>
										<span class="flash-sale">{{number_format($sanpham->promotion_price)}} VNĐ</span>
									@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$sanpham->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							
							<div class="single-item-options">
								
								<a class="add-to-cart" href="{{route('themgiohang', $sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
							<!-- <li><a href="#tab-reviews">Reviews (0)</a></li> -->
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$sanpham->description}}</p>
						</div>
						<!-- <div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div> -->
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list" >
						<h4 style="font-size: 30px;color: #DC4422FF;font-weight: bold; font-family: Comic Sans MS;">Sản phẩm tương tự</h4>

						<div class="row">
							@foreach($sp_tuongtu as $sptt)
							<div class="col-sm-4">
								<div class="single-item">
									@if($sptt->promotion_price==0)
										@else
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
									<div class="single-item-header">
										<a href="{{route('chitietsanpham', $sptt->id)}}"><img src="source/image/product/{{$sptt->image}}" alt="" height="150px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"style="font-size: 20px; font-family: Comic Sans MS;">{{$sptt->name}}</p>
										<p class="single-item-price" style="font-size: 18px">
											@if($sptt->promotion_price==0)
												<span class = "flash-sale">{{number_format($sptt->unit_price)}} VNĐ</span>
												@else
												<span class = "flash-del">{{number_format($sptt->unit_price)}} VNĐ</span>
												<span class="flash-sale">{{number_format($sptt->promotion_price)}} VNĐ</span>
												@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{route('themgiohang', $sptt->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('chitietsanpham',$sptt->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row">{{$sp_tuongtu->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Sản Phẩm mới</h3>

						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($spm as $new)
								<div class="media beta-sales-item" style="padding-left: 0px">
									<a class="pull-left" href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt="" style="width: 85px" height="250px"></a>
									<div class="media-body" style="font-size: 14px">
										{{$new->name}}
										<p class="single-item-price" style="font-size: 16px">
												@if($new->promotion_price==0)
												<span class = "flash-sale">{{number_format($new->unit_price)}} VNĐ</span>
												@else
												<span class = "flash-del">{{number_format($new->unit_price)}} VNĐ</span>
												<span class="flash-sale">{{number_format($new->promotion_price)}} VNĐ</span>
												@endif
											</p>
											<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $new->id)}}" style="display: inline-block;margin: 0px"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$new->id)}}" style="display: inline-block;padding: 10px 15px">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								<div class="beta-breadcrumb font-large">
									<a href="{{route('trang-chu')}}" style="font-size: 16px;color: #0891F6FF">Xem thêm ></a> 
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản phẩm khuyến mãi</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								@foreach($sanphamkm as $spkm)
								<div class="media beta-sales-item" style="padding-left: 0px">
									<a class="pull-left" href="{{route('chitietsanpham',$spkm->id)}}"><img src="source/image/product/{{$spkm->image}}" alt="" style="width: 85px"
										height="250px"></a>
									<div class="media-body" style="font-size: 14px">
										{{$spkm->name}}
										<p class="single-item-price" style="font-size: 16px">
												<span class = "flash-del">{{number_format($spkm->unit_price)}} VNĐ</span>
												<span class="flash-sale">{{number_format($spkm->promotion_price)}} VNĐ</span>
											</p>
											<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $spkm->id)}}" style="display: inline-block;margin: 0px"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham',$spkm->id)}}" style="display: inline-block;padding: 10px 15px">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								<div class="beta-breadcrumb font-large">
									<a href="{{route('trang-chu')}}" style="font-size: 16px;color: #0891F6FF">Xem thêm ></a> 
								</div>
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection