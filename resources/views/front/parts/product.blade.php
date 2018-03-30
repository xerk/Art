<div class="col-sm-6 col-md-4">
    <!-- START: Product -->
    <div class="nk-product">
        <a href="/products/{{ $product->slug }}" class="nk-product-image" style="background-image: url('{{ asset(Voyager::image($product->image)) }}');">
            <img src="{{ asset(Voyager::image($product->image)) }}" alt="Metal CH Data Line" class="nk-img-stretch">
        </a>
        <div class="nk-product-category">
            In
            <a href="/products/{{ $product->slug }}">{{ $product->type }}</a>
        </div>
        <h2 class="nk-product-title h5">
            <a href="/products/{{ $product->slug }}">{{ $product->title }}</a>
        </h2>
        <div class="nk-product-rating" data-rating="4.5">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
        </div>
        <div class="nk-product-price">${{ $product->price }}</div>

        <div class="nk-product-button">
            <div>
                <a href="/products/{{ $product->slug }}" class="nk-product-quick-view">
                    <span class="icon">
                        <i class="ion-eye"></i>
                    </span>
                </a>
                <a href="/products/{{ $product->slug }}">
                    <span class="icon">
                        <i class="ion-bag"></i>
                    </span> Add to Cart
                </a>
            </div>
        </div>
    </div>
    <!-- END: Product -->
</div>
