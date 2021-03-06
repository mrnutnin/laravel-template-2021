@extends('layouts-ecommerce.app')

@section('css')

@endsection

@section('content')

<div class="nav-container fixed-top nav-sticky">
	<nav class="sub-navbar bg-white d-flex">
		<div class="d-flex align-items-center mr-auto">
			<div class="list-select">
				<div class="inner-select">
					<div class="selected pt-1">
						<img src="{{ URL::asset('/assets/dist/images/flags/uk.svg') }}" width="18" alt="">
					</div>
					<ul>
						<li>
							<a href="index.html">
								<img src="{{ URL::asset('/assets/dist/images/flags/uk.svg') }}" width="18" alt="">
							</a>
						</li>
						<li>
							<a href="rtl/">
								<img src="{{ URL::asset('/assets/dist/images/flags/sa.svg') }}" width="18" alt="">
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="list-select">
				<div class="inner-select">
					<div class="selected"><i class="bx bx-dollar"></i></div>
					<ul>
						<li><a href="#!"><i class="bx bx-dollar"></i></a></li>
						<li><a href="#!"><i class="bx bx-bitcoin"></i></a></li>
						<li><a href="#!"><i class="bx bx-euro"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<ul class="nav list-inline ml-auto">
			<li>
				<a href="#!" class="px-2">My account</a>
			</li>
			<li>
				<a href="wishlist.html" class="px-2">My Wishlist</a>
			</li>
		</ul>
	</nav><!-- /.sub-navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img src="{{ URL::asset('/assets/dist/images/logo.png') }}" alt="Sham Theme">
			</a>

			<ul class="nav navbar-icons ml-auto order-lg-2">
				<li class="nav-item mr-3 shopping-cart">
					<a href="#!" class="li-icon" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
						<i class="bx bx-shopping-bag"></i>
						<span class="badge badge-secondary rounded-circle">4</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right border-0 shadow">
						<ul class="dropdown-wrap position-relative" data-slimscroll="true">
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/2.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Bag Dark Beige</a>
									</p>
									<p class="product-price text-muted">
										<ins>
											<span class="amount">$66.50</span>
										</ins>
									</p>
								</div>
							</li>
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/24.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Shoes Maroon</a>
									</p>
									<div class="product-price text-muted">$80.99</div>
								</div>
							</li>
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/3.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Unisex Cap</a>
									</p>
									<div class="product-price text-muted">$99.99</div>
								</div>
							</li>
							<li class="d-flex">
								<a href="product.html">
									<img src="{{ URL::asset('/assets/dist/images/products/12.jpg') }}" class="img-fluid product-img" alt="">
								</a>
								<div class="ml-3 product-details">
									<p class="product-title font-weight-bold text-uppercase mb-2">
										<a href="product.html">Twill Silk Scarf</a>
									</p>
									<div class="product-price text-muted">$49.99</div>
								</div>
							</li>

							<li class="dropdown-footer p-0 text-center text-uppercase font-weight-bold">
								<a href="cart.html" class="p-3 d-block">View Cart</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a href="#!" class="li-icon" id="trigger-overlay"><i class="bx bx-search"></i></a>
				</li>
			</ul>

			<button
					class="navbar-toggler ml-0 ml-sm-3 order-lg-3"
					type="button"
					data-toggle="collapse"
					data-target="#navbar"
					aria-controls="navbar"
					aria-expanded="false"
					aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navbar" class="collapse navbar-collapse mr-auto">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="index.html" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
						>
							Home
						</a>
						<ul class="dropdown-menu">
							<li class="dropdown-item active"><a class="nav-link" href="#">Default</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{ route('index2') }}">Default Slider</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{ route('index3') }}">Overlay Products</a></li>
							<li class="dropdown-item"><a class="nav-link" href="{{ route('index4') }}">Instagram section</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Shop
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="{{ route('products') }}">Full Width Shop</a></li>
							<li><a class="nav-link" href="{{ route('products-with-filter') }}">Shop With Filter</a></li>
							<li><a class="nav-link" href="{{ route('products-sidebar-left') }}">Sidebar Left</a></li>
							<li><a class="nav-link" href="{{ route('products-sidebar-right') }}">Sidebar Right</a></li>
							<li><a class="nav-link" href="{{ route('product') }}">Simple Product</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							eCommerce Pages
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="{{ route('wishlist') }}">Wishlist</a></li>
							<li><a class="nav-link" href="{{ route('cart') }}">Cart</a></li>
							<li><a class="nav-link" href="{{ route('checkout') }}">Checkout</a></li>
							<li><a class="nav-link" href="{{ route('order-received') }}">Order Received</a></li>
							<li><a class="nav-link" href="{{ route('order-tracking') }}">Order Tracking</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button"
						   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pages
						</a>
						<ul class="dropdown-menu">
							<li><a class="nav-link" href="{{ route('page') }}">Page Default</a></li>
							<li><a class="nav-link" href="{{ route('login-register') }}">Login / Register</a></li>
							<li><a class="nav-link" href="{{ route('Error404') }}">Not Found (404)</a></li>
							<li><a class="nav-link" href="{{ route('faqs') }}">FAQ'S</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container -->
	</nav>
</div><!-- /.nav-container -->

<div class="page-head">
	<div class="container">
		<div class="d-flex flex-column flex-md-row">
			<ol class="breadcrumb p-0 bg-transparent mx-auto mx-md-0 mr-md-auto mb-0">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">Faq's</li>
			</ol>
		</div>
	</div><!-- /.container -->
</div><!-- /.page-head -->

<div class="page-wrapper">
	<section class="section" id="page-faqs">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="title">General Questions</h2>
					<div class="custom-accordion flex-column" id="faqs" role="tablist" aria-multiselectable="true">
						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-1" aria-expanded="true">
								<h4 class="h4 mb-0">
									Is account registration required?
								</h4>
							</div>
							<div id="faq-1" class="card-collapse collapse show" data-parent="#faqs">
								<div class="card-body">
									Account registration at Sham is only required if you will be shopping. This ensures a valid
									communication channel for all parties involved in any transactions.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2" aria-expanded="true">
								<h4 class="h4 mb-0">
									What is the currency used for all transactions?
								</h4>
							</div>
							<div id="faq-2" class="card-collapse collapse" data-parent="#faqs">
								<div class="card-body">
									All prices for products and other items, including each seller's or buyer's account balance are in
									USD.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-3" aria-expanded="true">
								<h4 class="h4 mb-0">
									What are the payment options?
								</h4>
							</div>
							<div id="faq-3" class="card-collapse collapse" data-parent="#faqs">
								<div class="card-body">
									The best way to transfer funds is via Paypal. This secure platform ensures timely payments and a
									secure environment.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-4" aria-expanded="true">
								<h4 class="h4 mb-0">
									Lorem Ipsum is simply dummy text
								</h4>
							</div>
							<div id="faq-4" class="card-collapse collapse" data-parent="#faqs">
								<div class="card-body">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
									standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								</div>
							</div>
						</div>
					</div><!-- /.accordion -->
				</div>

				<div class="col-md-6">
					<h2 class="title">Users Questions</h2>
					<div class="custom-accordion flex-column" id="faqs-2" role="tablist" aria-multiselectable="true">
						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2-1"
							     aria-expanded="true">
								<h4 class="h4 mb-0">
									Is account registration required?
								</h4>
							</div>
							<div id="faq-2-1" class="card-collapse collapse show" data-parent="#faqs-2">
								<div class="card-body">
									Account registration at Sham is only required if you will be shopping. This ensures a valid
									communication channel for all parties involved in any transactions.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2-2"
							     aria-expanded="true">
								<h4 class="h4 mb-0">
									What is the currency used for all transactions?
								</h4>
							</div>
							<div id="faq-2-2" class="card-collapse collapse" data-parent="#faqs-2">
								<div class="card-body">
									All prices for products and other items, including each seller's or buyer's account balance are in
									USD.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2-3"
							     aria-expanded="true">
								<h4 class="h4 mb-0">
									What are the payment options?
								</h4>
							</div>
							<div id="faq-2-3" class="card-collapse collapse" data-parent="#faqs-2">
								<div class="card-body">
									The best way to transfer funds is via Paypal. This secure platform ensures timely payments and a
									secure environment.
								</div>
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header cursor-pointer" data-toggle="collapse" data-target="#faq-2-4"
							     aria-expanded="true">
								<h4 class="h4 mb-0">
									Lorem Ipsum is simply dummy text
								</h4>
							</div>
							<div id="faq-2-4" class="card-collapse collapse" data-parent="#faqs-2">
								<div class="card-body">
									Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
									standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								</div>
							</div>
						</div>
					</div><!-- /.accordion -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section><!-- #page-faqs -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')

@stop

