
<ul class="products-grid row products-grid--max-3-col last odd" id="products-grid">
    @foreach ($product as $products)
        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
            {{-- <input type="text" id="pid" name="pid" value="{{ $products->id }}"> --}}
            <div class="category-products-grid">
                <div class="images-container">
                    <div class="product-hover">
                        {{-- <span class="sticker top-left"><span class="labelnew">New</span></span> --}}
                        <a href="/products/{{ $products->url }}" title="{{ $products->name }}"
                            class="product-image">
                            <img id="product-collection-image-8" class="img-responsive"
                                src="/public/main_images/{{ $products->image }}" alt="" height="355" width="278">
                            <span class="product-img-back"> <img class="img-responsive"
                                    src="/public/main_images/{{ $products->image }}" alt="" height="355" width="278">
                            </span>
                        </a>
                    </div>
                    <div class="actions-no hover-box">
                        <div class="actions">
                            <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i
                                        class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                            <ul class="add-to-links pull-left">
                                <li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i
                                            class="icon-heart icons"></i>Add to Wishlist</a></li>
                                <li class="pull-left"><a href="#" title="Add to Compare" class="link-compare"><i
                                            class="icon-bar-chart icons"></i>Add to Compare</a></li>
                                <li class="link-view pull-left"> <a title="Quick View" href="#"
                                        class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-info products-textlink clearfix">
                    <h2 class="product-name"><a href="/products/{{ $products->url }}"
                            title="{{ $products->name }}">{{ $products->name }}</a></h2>
                    <div class="price-box"> <span class="regular-price"> <span
                                class="price">{{ $products->price }}</span> </span></div>
                    {{-- <div class="ratings">
                    <div class="rating-box">
                        <div class="rating" style="width:80%"></div>
                    </div>
                    <span class="amount"><a href="#">1 Review(s)</a></span>
                </div> --}}
                </div>
            </div>
        </li>
    @endforeach
</ul>
