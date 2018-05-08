@extends('master')

@section('content')
        <aside id="colorlib-hero">
            <div class="flexslider">
                <ul class="slides">
                @foreach($slide as $sl)
                <li style="background-image: url(source/images/{{$sl->image}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <h1 class="head-1">{{$sl->name}}</h1>
                                        <h2 class="head-2">{{$sl->content}}</h2>
                                        <h2 class="head-3">Collection</h2>
                                        <p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
               @endforeach
                </ul>
            </div>
        </aside>

        <?php
        $product1= $product->shift();

        ?>

        <div id="colorlib-featured-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="shop.html" class="f-product-1" style="background-image: url(source/images/{{$product1->image_link}});">
                            <div class="desc">
                                <h2>Fahion <br>for <br>men</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            @foreach($product as $pro)
                            <div class="col-md-6">
                                <a href="" class="f-product-2" style="background-image: url(source/images/{{$pro->image_link}});">
                                    <div class="desc">
                                        <h2>New <br>Arrival <br>Dress</h2>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="colorlib-shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                        <h2><span>Most views</span></h2>
                        <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($product as $v)
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(source/images/{{$v->image_link}});">
                                <p class="tag"><span class="new">New</span></p>
                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="product/{{$v->id}}">Floral Dress</a></h3>
                                <p class="price"><span>${{$v->price}}</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <div id="colorlib-intro" class="colorlib-intro" style="background-image: url(source/images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro-desc">
                            <div class="text-salebox">
                                <div class="text-lefts">
                                    <div class="sale-box">
                                        <div class="sale-box-top">
                                            <h2 class="number">45</h2>
                                            <span class="sup-1">%</span>
                                            <span class="sup-2">Off</span>
                                        </div>
                                        <h2 class="text-sale">Sale</h2>
                                    </div>
                                </div>
                                <div class="text-rights">
                                    <h3 class="title">Just hurry up limited offer!</h3>
                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    <p><a href="shop.html" class="btn btn-primary">Shop Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                        <h2><span>Our Products</span></h2>
                        <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(source/images/item-9.jpg);">
                                <p class="tag"><span class="sale">Sale</span></p>
                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="shop.html">Floral Dress</a></h3>
                                <p class="price"><span>$199.00</span> <span class="sale">$300.00</span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(source/images/item-10.jpg);">
                                <p class="tag"><span class="new">New</span></p>
                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="shop.html">Floral Dress</a></h3>
                                <p class="price"><span>$300.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(source/images/item-11.jpg);">
                                <p class="tag"><span class="new">New</span></p>
                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="shop.html">Floral Dress</a></h3>
                                <p class="price"><span>$300.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(source/images/item-12.jpg);">
                                <p class="tag"><span class="new">New</span></p>
                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="shop.html">Floral Dress</a></h3>
                                <p class="price"><span>$300.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(source/images/item-13.jpg);">
                                <p class="tag"><span class="new">New</span></p>
                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="shop.html">Floral Dress</a></h3>
                                <p class="price"><span>$300.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(source/images/item-14.jpg);">
                                <p class="tag"><span class="new">New</span></p>
                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="shop.html">Floral Dress</a></h3>
                                <p class="price"><span>$300.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(source/images/item-15.jpg);">
                                <p class="tag"><span class="new">New</span></p>
                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="shop.html">Floral Dress</a></h3>
                                <p class="price"><span>$300.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(source/images/item-16.jpg);">
                                <p class="tag"><span class="new">New</span></p>
                                <div class="cart">
                                    <p>
                                        <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                        <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                        <span><a href="#"><i class="icon-heart3"></i></a></span>
                                        <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3><a href="shop.html">Floral Dress</a></h3>
                                <p class="price"><span>$300.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-testimony" class="colorlib-light-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                        <h2><span>Our Satisfied Customer says</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">                      
                        <div class="owl-carousel2">
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="background-image: url(source/images/person1.jpg);"></span>
                                    <span class="user">Alysha Myers</span>
                                    <small>Miami Florida, USA</small>
                                    <blockquote>
                                        <p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="background-image: url(source/images/person2.jpg);"></span>
                                    <span class="user">James Fisher</span>
                                    <small>New York, USA</small>
                                    <blockquote>
                                        <p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="background-image: url(source/images/person3.jpg);"></span>
                                    <span class="user">Jacob Webb</span>
                                    <small>Athens, Greece</small>
                                    <blockquote>
                                        <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <div class="colorlib-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
                        <h2>Recent Blog</h2>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <article class="article-entry">
                            <a href="blog.html" class="blog-img" style="background-image: url(source/images/blog-1.jpg);"></a>
                            <div class="desc">
                                <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                                <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                <h2><a href="blog.html">Openning Branches</a></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="article-entry">
                            <a href="blog.html" class="blog-img" style="background-image: url(source/images/blog-2.jpg);"></a>
                            <div class="desc">
                                <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                                <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                <h2><a href="blog.html">Openning Branches</a></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="article-entry">
                            <a href="blog.html" class="blog-img" style="background-image: url(source/images/blog-3.jpg);"></a>
                            <div class="desc">
                                <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                                <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                <h2><a href="blog.html">Openning Branches</a></h2>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        


@endsection
