@extends('site.layout.app')
@section('title')
    Home | {{config('app.name')}}
@endsection
@section('content')

<div class="abt">
	<div class="container">
		<div class="row">
			<div class="col-md-4 margbot">
				<div class="ovr"><img src="{{asset('site/assets/images/img3.jpg')}}" class="img-fluid" alt="" /></div>
				<h3>Matchballs</h3>
				<p>We will soon introduce Football Shoes so you can buy everything in one place, not other brand shoes.</p>
			</div>
			<div class="col-md-4 margbot">
				<div class="video"><img src="{{asset('site/assets/images/img2.jpg')}}"  class="img-fluid" alt="" /> <a href="https://youtu.be/3OKagE2ZIRA" data-fancybox="bigbuckbunny" class="sprite clck"></a></div>
				<h3>What's inside The Soccer Ball?</h3>
				<p>We bring you a video, have a look what's inside the world cup soccer ball, and we follow the same.</p>
			</div>
			<div class="col-md-4 margbot">
				<div class="ovr"><img src="{{asset('site/assets/images/img3.jpg')}}" class="img-fluid" alt="" /></div>
				<h3>Coaches equipment</h3>
				<p>Coming soon</p>
			</div>
		</div>
	</div>
</div>



<div class="products">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-wrap">
					<h2>
						Customize Your Training Ball
					</h2>
					<div class="line"></div>
				</div>
			</div>
		</div>
		<div class="row move">
			<div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <img src="{{asset('site/assets/images/1.jpg')}}" class="img-fluid img-thumbnail" alt="" />
						<a href="{{asset('site/assets/images/1.jpg')}}" data-fancybox=""  class="sprite zom"></a>
                    </div>
                    <div class="card-body">
                         <h2>
                            Title
                        </h2>
                        <h4 class="price fa-2x">
                            Price:
                            $ 44.90
                        </h4>
                        <p>
                            Short Description
                        </p>
                        <hr>

						<div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-rounded cart-wishlist-btn cart-wishlist-btn-animation-1" title="Add to Cart">
                                <i class="fa fa-cart-plus"></i>
                            </a>
                            <a href="#" class="btn btn-rounded cart-wishlist-btn cart-wishlist-btn-animation-1 ml-1" title="Add to Wishlist">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="btn btn-rounded cart-wishlist-btn cart-wishlist-btn-animation-1 ml-1" title="See Details">
                                <i class="fa fa-info"></i>
                            </a>
                        </div>
                    </div>
                </div>
				{{-- <div class="product-wrap">
					<div class="zomr">
						<img src="{{asset('site/assets/images/1.jpg')}}" class="img-fluid img-thumbnail" alt="" />
						<a href="{{asset('site/assets/images/1.jpg')}}" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de p-4">
                        <h2>
                            Title
                        </h2>
                        <h4 class="price fa-2x">
                            Price:
                            $ 44.90
                        </h4>
                        <p>
                            Short Description
                        </p>
                        <hr>

						<span class="float-right">
                            <a href="#" class="btn btn-rounded cart-wishlist-btn cart-wishlist-btn-animation-1" title="Add to Cart">
                                <i class="fa fa-cart-plus"></i>
                            </a>
                            <a href="#" class="btn btn-rounded cart-wishlist-btn cart-wishlist-btn-animation-1 ml-1" title="Add to Wishlist">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="btn btn-rounded cart-wishlist-btn cart-wishlist-btn-animation-1 ml-1" title="See Details">
                                <i class="fa fa-info"></i>
                            </a>
                        </span>
					</div>
				</div> --}}
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="{{asset('site/assets/images/7.jpg')}}" class="img-fluid" alt="" />
						<a href="assets/images/7.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de p-4">
                        <span class="price">$ 44.90</span>

						<span class="addtocart float-right">
                            <a href="#" class="btn btn-rounded cart-wishlist-btn cart-wishlist-btn-animation-1" title="Add to Cart">
                                <i class="fa fa-cart-plus"></i>
                            </a>
                            <a href="#" class="btn btn-rounded cart-wishlist-btn cart-wishlist-btn-animation-1 ml-1" title="Add to Wishlist">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="btn btn-rounded cart-wishlist-btn cart-wishlist-btn-animation-1 ml-1" title="See Details">
                                <i class="fa fa-info"></i>
                            </a>
                        </span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/27.jpg" class="img-fluid" alt="" />
						<a href="assets/images/27.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 44.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/4.jpg" class="img-fluid" alt="" />
						<a href="assets/images/4.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 44.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3 mt-5">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/8.jpg" class="img-fluid" alt="" />
						<a href="assets/images/8.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 44.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row move">
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/36.jpg" class="img-fluid" alt="" />
						<a href="assets/images/36.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 20.00</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/37.jpg" class="img-fluid" alt="" />
						<a href="assets/images/37.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 20.00</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/38.jpg" class="img-fluid" alt="" />
						<a href="assets/images/38.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 20.00</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/39.jpg" class="img-fluid" alt="" />
						<a href="assets/images/39.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 20.00</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/40.jpg" class="img-fluid" alt="" />
						<a href="assets/images/40.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 20.00</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row move">
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/31.jpg" class="img-fluid" alt="" />
						<a href="assets/images/31.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/32.jpg" class="img-fluid" alt="" />
						<a href="assets/images/32.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/33.jpg" class="img-fluid" alt="" />
						<a href="assets/images/33.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/34.jpg" class="img-fluid" alt="" />
						<a href="assets/images/34.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/35.jpg" class="img-fluid" alt="" />
						<a href="assets/images/35.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
		</div>

		<div class="row move">
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/26.jpg" class="img-fluid" alt="" />
						<a href="assets/images/26.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 34.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/2.jpg" class="img-fluid" alt="" />
						<a href="assets/images/2.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 34.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/5.jpg" class="img-fluid" alt="" />
						<a href="assets/images/5.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 34.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/9.jpg" class="img-fluid" alt="" />
						<a href="assets/images/9.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 34.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/10.jpg" class="img-fluid" alt="" />
						<a href="assets/images/10.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 34.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
		</div>

        <div class="row move">
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/16.jpg" class="img-fluid" alt="" />
						<a href="assets/images/16.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/19.jpg" class="img-fluid" alt="" />
						<a href="assets/images/19.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 38.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/20.jpg" class="img-fluid" alt="" />
						<a href="assets/images/20.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/3.jpg" class="img-fluid" alt="" />
						<a href="assets/images/3.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 44.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/15.jpg" class="img-fluid" alt="" />
						<a href="assets/images/15.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 38.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row move">
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/11.jpg" class="img-fluid" alt="" />
						<a href="assets/images/11.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/17.jpg" class="img-fluid" alt="" />
						<a href="assets/images/17.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 38.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/18.jpg" class="img-fluid" alt="" />
						<a href="assets/images/18.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 38.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/12.jpg" class="img-fluid" alt="" />
						<a href="assets/images/12.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 34.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/13.jpg" class="img-fluid" alt="" />
						<a href="assets/images/13.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 38.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
		</div>
        <div class="row move">
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/6.jpg" class="img-fluid" alt="" />
						<a href="assets/images/6.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 79.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/14.jpg" class="img-fluid" alt="" />
						<a href="assets/images/14.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/28.jpg" class="img-fluid" alt="" />
						<a href="assets/images/28.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 38.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/29.jpg" class="img-fluid" alt="" />
						<a href="assets/images/29.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 29.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/30.jpg" class="img-fluid" alt="" />
						<a href="assets/images/30.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 44.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--
<div class="howwestarted">
	<div class="container">
		<div class="row">
			<div class="col-md-3 condens">
			<h4>How We Started</h4>
				<p>We started<br />
				this business few<br />
				years ago, we help our<br />
				customers to get their custom<br />
				soccer ball, which is only<br />
				design for them.
				</p>
				<ul class="socials-icos">
					<li><a href="javascript:;" target="blank"><i class="fa fa-facebook-f"></i></a></li>
					<li><a href="javascript:;" target="blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="javascript:;" target="blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="javascript:;" target="blank"><i class="fa fa-google"></i></a></li>
					<li><a href="javascript:;" target="blank"><i class="fa fa-vimeo"></i></a></li>
					<li><a href="javascript:;" target="blank"><i class="fa fa-rss"></i></a></li>
				</ul>
			</div>
			<div class="col-md-5 italc">
				<p>I (Allen Nunn) am the founder of soccerballshop.com also a soccer coach,
Here at soccerballshop.com we have created an innovative and fresh new look on soccer balls,
our quality training balls and match balls is outstanding and they are produce in Pakastan the soccer
ball capital of the world. we are only company which provide not other brands ball we help you to grow.</p>

				<p>I have dedicated 25 years of service working with our youth, I loves to teach and develop youth soccer players on the field.</p>
				<p>we have decided to become the pioneer in th soccer industry and help customers to get their custome match ball, traning ball and Accessories</p>
			</div>
			<div class="col-md-4">
				<div class="video">
					<img src="assets/images/video.jpg" class="img-fluid" alt="" />
					<a href="assets/images/webvideo.mp4" data-fancybox="bigbuckbunny" class="sprite clck"></a>
					<a href="javascript:;" class="sprite plus"></a>
					<a href="javascript:;" class="sprite minus"></a>
				</div>
			</div>
		</div>
	</div>
</div>-->

<div class="products">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading-wrap">
					<h2>
						Coach's Products
					</h2>
					<div class="line"></div>
				</div>
			</div>
		</div>
		<div class="row move">
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/21.jpg" class="img-fluid" alt="" />
						<a href="assets/images/21.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">$ 44.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/22.jpg" class="img-fluid" alt="" />
						<a href="assets/images/22.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">4 MatchBalls $ 159.90</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/23.jpg" class="img-fluid" alt="" />
						<a href="assets/images/23.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">Set of 12 Balls $ 510.00</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/25.jpg" class="img-fluid" alt="" />
						<a href="assets/images/25.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">Ball Flate Pump $14.95</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-wrap">
					<div class="zomr">
						<img src="assets/images/24.jpg" class="img-fluid" alt="" />
						<a href="assets/images/24.jpg" data-fancybox=""  class="sprite zom"></a>
					</div>
					<div class="product-de">
						<span class="price">3 Needle $5.95</span>
						<span class="addtocart"><a href="javascript:;" class="sprite wlist"></a><a href="javascript:;" class="sprite addcart"></a></span>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<div class="strip">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<p><strong>Sign up</strong> for exclusive sales and product news</p>
			</div>
			<div class="col-md-5">
				<form>
					<input type="email" required placeholder="YOUREMAIL@Email.com" />
					<button type="submit">sign up</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
