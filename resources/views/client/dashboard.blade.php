@extends('layouts.app')

@section('content')
<!-- [ Main Content ] start -->
<div class="row">
  <!-- [ sample-page ] start -->
  <div class="col-sm-12">
    <div class="ecom-wrapper">
      <div class="offcanvas-xxl offcanvas-start ecom-offcanvas" tabindex="-1" id="offcanvas_mail_filter">
        <div class="offcanvas-body p-0 sticky-xxl-top">
          <div id="ecom-filter" class="show collapse collapse-horizontal">
            <div class="ecom-filter">
              <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Filter</h5>
                  <a
                    href="#"
                    class="avtar avtar-s btn-link-danger btn-pc-default"
                    data-bs-dismiss="offcanvas"
                    data-bs-target="#offcanvas_mail_filter"
                  >
                  <i class="bi bi-x-lg"></i>
                  </a>
                </div>
                <div class="scroll-block">
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item border-0 px-0 py-2">
                        <a class="btn border-0 px-0 text-start w-100 pb-0" data-bs-toggle="collapse" href="#filtercollapse1">
                          <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                          Gender
                        </a>
                        <div class="collapse show" id="filtercollapse1">
                          <div>
                            <div class="form-check my-2">
                              <input class="form-check-input" type="checkbox" id="genderfilter1" value="option1" />
                              <label class="form-check-label" for="genderfilter1">Male</label>
                            </div>
                            <div class="form-check my-2">
                              <input class="form-check-input" type="checkbox" id="genderfilter2" value="option2" />
                              <label class="form-check-label" for="genderfilter2">Female</label>
                            </div>
                            <div class="form-check my-2">
                              <input class="form-check-input" type="checkbox" id="genderfilter3" value="option3" />
                              <label class="form-check-label" for="genderfilter3">Kids</label>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-2">
                        <a class="btn border-0 px-0 text-start w-100 pb-0" data-bs-toggle="collapse" href="#filtercollapse2">
                          <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                          Categories
                        </a>
                        <div class="collapse show" id="filtercollapse2">
                          <div>
                            <div class="form-check my-2">
                              <input class="form-check-input" type="checkbox" id="categoryfilter1" value="option1" />
                              <label class="form-check-label" for="categoryfilter1">All</label>
                            </div>
                            <div class="form-check my-2">
                              <input class="form-check-input" type="checkbox" id="categoryfilter2" value="option2" />
                              <label class="form-check-label" for="categoryfilter2">Electronics</label>
                            </div>
                            <div class="form-check my-2">
                              <input class="form-check-input" type="checkbox" id="categoryfilter3" value="option3" />
                              <label class="form-check-label" for="categoryfilter3">Fashion</label>
                            </div>
                            <div class="form-check my-2">
                              <input class="form-check-input" type="checkbox" id="categoryfilter4" value="option1" />
                              <label class="form-check-label" for="categoryfilter4">Kitchen</label>
                            </div>
                            <div class="form-check my-2">
                              <input class="form-check-input" type="checkbox" id="categoryfilter5" value="option2" />
                              <label class="form-check-label" for="categoryfilter5">Books</label>
                            </div>
                            <div class="form-check my-2">
                              <input class="form-check-input" type="checkbox" id="categoryfilter6" value="option3" />
                              <label class="form-check-label" for="categoryfilter6">Toys</label>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-2">
                        <a class="btn border-0 px-0 text-start w-100 pb-2" data-bs-toggle="collapse" href="#filtercollapse3">
                          <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                          Colors
                        </a>
                        <div class="collapse show" id="filtercollapse3">
                          <div>
                            <div class="form-check form-check-inline color-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="fas fa-circle text-primary"></i>
                            </div>
                            <div class="form-check form-check-inline color-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="fas fa-circle text-secondary"></i>
                            </div>
                            <div class="form-check form-check-inline color-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="fas fa-circle text-danger"></i>
                            </div>
                            <div class="form-check form-check-inline color-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="fas fa-circle text-success"></i>
                            </div>
                            <div class="form-check form-check-inline color-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="fas fa-circle text-warning"></i>
                            </div>
                            <div class="form-check form-check-inline color-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="fas fa-circle text-info"></i>
                            </div>
                            <div class="form-check form-check-inline color-checkbox">
                              <input class="form-check-input" type="checkbox" />
                              <i class="fas fa-circle text-dark"></i>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-2">
                        <a class="btn border-0 px-0 text-start w-100 pb-0" data-bs-toggle="collapse" href="#filtercollapse4">
                          <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                          Price
                        </a>
                        <div class="collapse show" id="filtercollapse4">
                          <div class="row">
                            <div class="col-6">
                              <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="price" id="pricefilter1" value="option1" />
                                <label class="form-check-label" for="pricefilter1">Below $10</label>
                              </div>
                              <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="price" id="pricefilter2" value="option2" />
                                <label class="form-check-label" for="pricefilter2">$50 - $100</label>
                              </div>
                              <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="price" id="pricefilter3" value="option3" />
                                <label class="form-check-label" for="pricefilter3">$150 - $200</label>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="price" id="pricefilter4" value="option1" />
                                <label class="form-check-label" for="pricefilter4">$10 - $50</label>
                              </div>
                              <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="price" id="pricefilter5" value="option2" />
                                <label class="form-check-label" for="pricefilter5">$100 - $150</label>
                              </div>
                              <div class="form-check my-2">
                                <input class="form-check-input" type="radio" name="price" id="pricefilter6" value="option3" />
                                <label class="form-check-label" for="pricefilter6">Over $200</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-2">
                        <a class="btn border-0 px-0 text-start w-100 pb-2" data-bs-toggle="collapse" href="#filtercollapse5">
                          <div class="float-end"><i class="ti ti-chevron-down"></i></div>
                          Rating
                        </a>
                        <div class="collapse show" id="filtercollapse5">
                          <div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="chkratt1" />
                              <label class="form-check-label" for="chkratt1">4★ &amp; above</label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="chkratt2" />
                              <label class="form-check-label" for="chkratt2">3★ &amp; above</label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="chkratt3" />
                              <label class="form-check-label" for="chkratt3">2★ &amp; above</label>
                            </div>
                            <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" value="" id="chkratt4" />
                              <label class="form-check-label" for="chkratt4">1★ &amp; above</label>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-2">
                        <a href="#" class="btn btn-light-primary w-100">Filter</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="ecom-content">
        <div class="d-sm-flex align-items-center mb-4">
          <ul class="list-inline me-auto my-1">
            <li class="list-inline-item">
              <form class="form-search">
                <i class="ph-duotone ph-magnifying-glass icon-search"></i>
                <input type="search" class="form-control" placeholder="Search Products" />
              </form>
            </li>
          </ul>
          <ul class="list-inline ms-auto my-1">
            <li class="list-inline-item align-bottom">
              <a
                href="#"
                class="d-xxl-none btn btn-link-secondary"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvas_mail_filter"
              >
               <i class="bi bi-filter fs-4"></i>Filter
              </a>
              <a
                href="#"
                class="d-none d-xxl-inline-flex btn btn-link-secondary"
                data-bs-toggle="collapse"
                data-bs-target="#ecom-filter"
              >
                <i class="ti ti-filter f-16"></i> Filter
              </a>
            </li>
          </ul>
        </div>
        <div class="row">
        @if($products->isEmpty())
            <div class="col-12">
                <p class="text-center">No products found</p>
            </div>
        @else
         @foreach ($products as $product)
          @php
            // Calculate the discount percentage
            $discountPercentage = 0;
            if ($product->old_price > 0) {
                $discountPercentage = round((($product->old_price - $product->price) / $product->old_price) * 100);
            }
          @endphp
          <div class="col-sm-6 col-xl-4">
            <div class="card product-card">
              <div class="card-img-top">
                <a href="../application/ecom_product-details.html">
                  <img src="{{ asset('images/img-prod-1.png') }}" alt="image" class="img-prod img-fluid" />
                </a>
                <div class="card-body position-absolute end-0 top-0">
                  <div class="form-check prod-likes">
                    <input 
                      type="checkbox" 
                      class="form-check-input" 
                      id="favoriteCheckbox_{{ $product->id }}" 
                      {{ in_array($product->id, $favoriteProductIds) ? 'checked' : '' }} 
                    />
                    <i class="bi {{ in_array($product->id, $favoriteProductIds) ? 'text-danger bi-heart-fill' : 'bi-heart' }} prod-likes-icon" 
                       id="favoriteIcon_{{ $product->id }}" 
                       data-product-id="{{ $product->id }}"
                       onclick="toggleLike({{ $product->id }}, this)">
                    </i>
                  </div>
                </div>
                <div class="card-body position-absolute start-0 top-0">
                  @if ($discountPercentage > 0)
                    <span class="badge bg-danger badge-prod-card">{{ $discountPercentage }}%</span>
                  @endif
                </div>
              </div>
              <div class="card-body">
                <a href="../application/ecom_product-details.html">
                    <p class="prod-content mb-0 text-muted">{{ $product->name }}</p>
                </a>
                <span class="badge bg-success">{{ $product->category->name }}</span>
                <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                    <h4 class="mb-0 text-truncate">
                        <b>$ {{ $product->price }}</b> 
                        <span class="text-sm f-w-400 text-decoration-line-through">$ {{ $product->old_price }}</span>
                    </h4>
                    <div class="d-inline-flex align-items-center">
                        <i class="bi bi-star-fill text-warning me-1"></i> <!-- Bootstrap Icon for Star -->
            
                        {{-- Calculate the average rating --}}
                        @php
                            $averageRating = $product->reviews->avg('rating'); 
                            $averageRating = is_null($averageRating) ? 0 : round($averageRating, 1); 
                        @endphp
            
                        {{ $averageRating }} <small class="text-muted">/ 5</small> <!-- Display the rating -->
                    </div>
                </div>
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <a
                            href="{{ route('products.show', $product->id) }}"
                            class="avtar avtar-s btn-link-secondary btn-prod-card"
                            {{--  data-bs-toggle="offcanvas"
                            data-bs-target="#productOffcanvas"
                            data-product-id="{{ $product->id }}"
                            data-product-name="{{ $product->name }}"
                            data-product-price="{{ $product->price }}"
                            data-product-image="{{ asset('images/img-prod-1.png') }}"
                            data-product-description="{{ $product->description }}"
                            onclick="updateOffcanvasContent(this)"  --}}
                        >
                            <i class="bi bi-eye f-18"></i> 
                        </a>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <div class="d-grid">
                            <button class="btn btn-link-secondary btn-prod-card" data-bs-toggle="modal" data-bs-target="#purchaseModal">
                                <i class="bi bi-cart-plus"></i> Purchase
                            </button>
            
                            <!--purchase Modal -->
                            <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-footer d-flex align-items-center justify-content-center">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Buy Now</button>
                                            <button type="button" class="btn btn-sm btn-secondary">Negotiate Price</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
          </div>
         @endforeach
        @endif
  
        </div>
      </div>
    </div>
  </div>
  <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->

{{--  product details offcanvas  --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="productOffcanvas" aria-labelledby="productOffcanvasLabel">
  <div class="offcanvas-header align-items-center justify-content-between">
    <h5 class="offcanvas-title" id="productOffcanvasLabel">Product Details</h5>
    <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas">
      <i class="ti ti-x f-20"></i>
    </a>
  </div>
  <div class="offcanvas-body">
    <div class="card product-card shadow-none border-0">
      <div class="card-img-top p-0">
        <a href="../application/ecom_product-details.html">
          <img src="../assets/images/application/img-prod-4.jpg" alt="image" class="img-prod img-fluid" />
        </a>
      </div>
    </div>
    <h5>Glitter gold Mesh Walking Shoes</h5>
    <p class="text-muted">Description goes here</p>
    <ul class="list-group list-group-flush">
      <li class="list-group-item px-0">
        <div class="d-inline-flex align-items-center justify-content-between w-100">
          <p class="mb-0 text-muted me-1">Price</p>
          <h4 class="mb-0"><b>$299.00</b><span class="mx-2 f-14 text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
        </div>
      </li>
      <li class="list-group-item px-0">
        <div class="d-inline-flex align-items-center justify-content-between w-100">
          <p class="mb-0 text-muted me-1">Categories</p>
          <h6 class="mb-0">Shoes</h6>
        </div>
      </li>
      <li class="list-group-item px-0">
        <div class="d-inline-flex align-items-center justify-content-between w-100">
          <p class="mb-0 text-muted me-1">Status</p>
          <h6 class="mb-0"><span class="badge bg-warning rounded-pill">Process</span></h6>
        </div>
      </li>
    </ul>
  </div>
</div>


<script>
  function updateOffcanvasContent(element) {
    // Get product data from the clicked element (the eye icon)
    var productId = $(element).data('product-id');
    var productName = $(element).data('product-name');
    var productPrice = $(element).data('product-price');
    var productImage = $(element).data('product-image');
    var productDescription = $(element).data('product-description');
  
    // Update the offcanvas content
    $('#productOffcanvas .offcanvas-title').text('Product Details');
    $('#productOffcanvas .card-img-top img').attr('src', productImage);
    $('#productOffcanvas .card-img-top img').attr('alt', productName);
    $('#productOffcanvas h5').text(productName);
    $('#productOffcanvas .text-muted').text(productDescription);
    $('#productOffcanvas .list-group-item .d-inline-flex .mb-0').text('$' + productPrice);
  }
</script>
@endsection
