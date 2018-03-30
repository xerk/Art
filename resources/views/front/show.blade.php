@section('title', 'Store')
@extends('index')
@section('content')
<div class="container">
        <div class="nk-gap-4"></div>
        <div class="nk-store-product">
            <div class="row vertical-gap">
                <div class="col-md-6">

                    <!-- START: Product Photos Carousel -->
                    <div class="nk-product-carousel">
                        <div class="nk-product-carousel-thumbs">
                            <div>
                                
                                    <div class="active"><img src="/assets/images/product-7-1-sm.jpg" alt=""></div>
                                
                                    <div><img src="/assets/images/product-7-2-sm.jpg" alt=""></div>
                                
                                    <div><img src="/assets/images/product-7-3-sm.jpg" alt=""></div>
                                
                                    <div><img src="/assets/images/product-7-4-sm.jpg" alt=""></div>
                                
                                    <div><img src="/assets/images/product-7-5-sm.jpg" alt=""></div>
                                
                            </div>
                        </div>
                        <div class="nk-carousel-3" data-size="1">
                            <div class="nk-carousel-inner nk-popup-gallery">
                                
                                    <div><div>
                                        <a href="/assets/images/product-7-1.jpg" class="nk-gallery-item" data-size="700x800"><img src="/assets/images/product-7-1-md.jpg" alt=""></a>
                                    </div></div>
                                
                                    <div><div>
                                        <a href="/assets/images/product-7-2.jpg" class="nk-gallery-item" data-size="700x800"><img src="/assets/images/product-7-2-md.jpg" alt=""></a>
                                    </div></div>
                                
                                    <div><div>
                                        <a href="/assets/images/product-7-3.jpg" class="nk-gallery-item" data-size="700x800"><img src="/assets/images/product-7-3-md.jpg" alt=""></a>
                                    </div></div>
                                
                                    <div><div>
                                        <a href="/assets/images/product-7-4.jpg" class="nk-gallery-item" data-size="700x800"><img src="/assets/images/product-7-4-md.jpg" alt=""></a>
                                    </div></div>
                                
                                    <div><div>
                                        <a href="/assets/images/product-7-5.jpg" class="nk-gallery-item" data-size="700x800"><img src="/assets/images/product-7-5-md.jpg" alt=""></a>
                                    </div></div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- END: Product Photos Carousel -->

                </div>
                <div class="col-md-6">

                    <!-- START: Title + Rating -->
                    <div class="nk-product-category">
                        In <a href="#">Unisex Watches</a>
                    </div>
                    <h2 class="nk-product-title">Welder by U-Boat K32</h2>
                    <a class="nk-product-rating" data-rating="4.5" href="#tab-reviews"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i></a> <small>(3)</small>
                    <!-- END: Title + Rating -->

                    <div class="nk-product-description">
                        <p>The inspiration behind the creativity of Welder watch was how travelling through space-time would become reality by the year 2075. Most watch brands project their past into the present. Welder is the opposite. It aims to project the future into the present.</p>
                        <p>Mineral. Durable mineral crystal protects watch from scratches. Quartz Movement. Case Diameter: 53mm. Water Resistant To 99 Feet.</p>
                    </div>

                    <!-- START: Add to Cart -->
                    <form action="#" class="nk-form nk-form-style-1 nk-product-addtocart">
                        <div class="nk-product-price">$680.00</div>
                        <div class="input-group">
                            <button class="nk-btn nk-btn-color-dark-1"><span class="icon"><span class="ion-bag"></span></span> Add to Cart</button>
                            <div class="nk-form-control-number">
                                <input type="number" min="1" max="21" name="quantity" value="1" class="form-control">
                            </div>
                        </div>
                    </form>
                    <!-- END: Add to Cart -->
                </div>
            </div>

            <div class="nk-gap-2"></div>
            
        </div>
        <div class="nk-gap-4"></div>
@endsection