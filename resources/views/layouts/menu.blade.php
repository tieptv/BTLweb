<nav class="colorlib-nav" role="navigation">
	<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="colorlib-logo"><a href="{{route('homePage')}}">Beauty Shop</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="home">Home</a></li>
						<li class="has-dropdown">
							<a href="{{route('shop')}}">Shop</a>
							<ul class="dropdown">
								<li><a href="{{route('cart')}}">Shipping Cart</a></li>
								<li><a href="{{route('checkout')}}">Checkout</a></li> 
								<li><a href="source/order-complete.html">Order Complete</a></li>
								<li><a href="source/add-to-wishlist.html">Wishlist</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="{{route('shop')}}">Menu</a>
							<ul class="dropdown">
								@foreach($category as $cate)
								<li><a href="{{route('product_type',$cate->id)}}">{{$cate->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="source/blog.html">Blog</a></li>
						<li><a href="{{route('about')}}">About</a></li>
						<li><a href="{{route('contact')}}">Contact</a></li>
						<li><a href="{{route('cart')}}"><i class="icon-shopping-cart"></i> Cart [${{Cart::Subtotal()}}]</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>