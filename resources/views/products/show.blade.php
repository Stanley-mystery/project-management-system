@extends('layouts.app')

@section('content')



    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="sticky-md-top product-sticky">
                  <div id="carouselExampleCaptions" class="carousel slide ecomm-prod-slider" data-bs-ride="carousel">
                    <div class="carousel-inner bg-light rounded position-relative">
                      <div class="card-body position-absolute end-0 top-0">
                        <div class="form-check prod-likes">
                          <input type="checkbox" class="form-check-input" />
                          <i class="bi {{ in_array($product->id, $favoriteProductIds) ? 'text-danger bi-heart-fill' : 'bi-heart' }} prod-likes-icon"></i>
                        </div>
                      </div>
                      <div class="card-body position-absolute bottom-0 end-0">
                        <ul class="list-inline ms-auto mb-0 prod-likes">
                          <li class="list-inline-item m-0">
                            <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                              <i class="ti ti-zoom-in f-18"></i>
                            </a>
                          </li>
                          <li class="list-inline-item m-0">
                            <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                              <i class="ti ti-zoom-out f-18"></i>
                            </a>
                          </li>
                          <li class="list-inline-item m-0">
                            <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                              <i class="ti ti-rotate-clockwise f-18"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="carousel-item active">
                        <img src="{{ asset('images/img-prod-1.png') }}" class="d-block w-100" alt="Product images" />
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('images/img-prod-2.png') }}" class="d-block w-100" alt="Product images" />
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('images/img-prod-3.png') }}" class="d-block w-100" alt="Product images" />
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('images/img-prod-4.png') }}" class="d-block w-100" alt="Product images" />
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('images/img-prod-5.png') }}" class="d-block w-100" alt="Product images" />
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('images/img-prod-6.png') }}" class="d-block w-100" alt="Product images" />
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('images/img-prod-7.png') }}" class="d-block w-100" alt="Product images" />
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('images/img-prod-8.png') }}" class="d-block w-100" alt="Product images" />
                      </div>
                    </div>
                    <ol class="list-inline carousel-indicators position-relative product-carousel-indicators my-sm-3 mx-0">
                      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="list-inline-item w-25 h-auto active">
                        <img src="{{ asset('images/img-prod-1.png') }}" class="d-block wid-50 rounded" alt="Product images" />
                      </li>
                      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="list-inline-item w-25 h-auto">
                        <img src="{{ asset('images/img-prod-2.png') }}" class="d-block wid-50 rounded" alt="Product images" />
                      </li>
                      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="list-inline-item w-25 h-auto">
                        <img src="{{ asset('images/img-prod-3.png') }}" class="d-block wid-50 rounded" alt="Product images" />
                      </li>
                      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" class="list-inline-item w-25 h-auto">
                        <img src="{{ asset('images/img-prod-4.png') }}" class="d-block wid-50 rounded" alt="Product images" />
                      </li>
                      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" class="list-inline-item w-25 h-auto">
                        <img src="{{ asset('images/img-prod-5.png') }}" class="d-block wid-50 rounded" alt="Product images" />
                      </li>
                      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" class="list-inline-item w-25 h-auto">
                        <img src="{{ asset('images/img-prod-6.png') }}" class="d-block wid-50 rounded" alt="Product images" />
                      </li>
                      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" class="list-inline-item w-25 h-auto">
                        <img src="{{ asset('images/img-prod-7.png') }}" class="d-block wid-50 rounded" alt="Product images" />
                      </li>
                      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" class="list-inline-item w-25 h-auto">
                        <img src="{{ asset('images/img-prod-8.png') }}" class="d-block wid-50 rounded" alt="Product images" />
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              @php
              $averageRating = $product->reviews->avg('rating'); 
              $averageRating = is_null($averageRating) ? 0 : round($averageRating, 1); 
              $averageRating = number_format($averageRating, 1); 
              @endphp
              <div class="col-md-6">
                <span class="badge bg-success f-14">{{ $product->category->name }}</span>
                <h5 class="my-3">Apple Watch SE Smartwatch (GPS, 40mm) (Heart Rate Monitoring)</h5>
                <div class="star f-18 mb-3">
                  <!-- Full Stars -->
                @for ($i = 0; $i < floor($averageRating); $i++)
                    <i class="fas fa-star text-warning"></i>
                @endfor

                <!-- Half Star -->
                @if ($averageRating - floor($averageRating) >= 0.5)
                    <i class="fas fa-star-half-alt text-warning"></i>
                @endif

                <!-- Empty Stars -->
                @for ($i = 0; $i < (5 - ceil($averageRating)); $i++)
                    <i class="far fa-star text-muted"></i>
                @endfor
                  <span class="text-sm text-muted">
                  ( {{ $averageRating }} )
                </span>
                </div>
              
                <h5 class="mt-4 mb-sm-3 mb-2 f-w-500">About this item</h5>
                <ul>
                  <li class="mb-2">Care Instructions: Hand Wash Only</li>
                  <li class="mb-2">Fit Type: Regular</li>
                  <li class="mb-2">Dark Blue Regular Women Jeans</li>
                  <li class="mb-2">Fabric : 100% Cotton</li>
                </ul>
                <div class="mb-3 row">
                  <label class="col-form-label col-lg-3 col-sm-12">Colors <span class="text-danger">*</span></label>
                  <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center">
                    <div class="form-check form-check-inline color-checkbox mb-0">
                      <input class="form-check-input" type="radio" name="product_color" checked />
                      <i class="fas fa-circle text-primary"></i>
                    </div>
                    <div class="form-check form-check-inline color-checkbox mb-0">
                      <input class="form-check-input" type="radio" name="product_color" />
                      <i class="fas fa-circle text-secondary"></i>
                    </div>
                    <div class="form-check form-check-inline color-checkbox mb-0">
                      <input class="form-check-input" type="radio" name="product_color" />
                      <i class="fas fa-circle text-danger"></i>
                    </div>
                    <div class="form-check form-check-inline color-checkbox mb-0">
                      <input class="form-check-input" type="radio" name="product_color" />
                      <i class="fas fa-circle text-dark"></i>
                    </div>
                  </div>
                </div>
            
              
                <h3 class="mb-4"
                  ><b>{{ $product->price }}</b><span class="mx-2 f-16 text-muted f-w-400 text-decoration-line-through">{{ $product->old_price }}</span></h3
                >
                <div class="row">
                  <div class="col-6">
                    <div class="d-grid">
                      <button type="button" data-bs-toggle="tooltip"  data-bs-title="Checkout" class="btn btn-primary">Buy Now</button>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid">
                      <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip"  data-bs-title="Negotiate Price with Seller">Negotiate Price</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header pb-0">
            <ul class="nav nav-tabs profile-tabs mb-0" id="myTab" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="ecomtab-tab-1"
                  data-bs-toggle="tab"
                  href="#ecomtab-1"
                  role="tab"
                  aria-controls="ecomtab-1"
                  aria-selected="true"
                  >Features
                </a>
              </li>
             
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="ecomtab-tab-3"
                  data-bs-toggle="tab"
                  href="#ecomtab-3"
                  role="tab"
                  aria-controls="ecomtab-3"
                  aria-selected="true"
                  >Overview
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="ecomtab-tab-4"
                  data-bs-toggle="tab"
                  href="#ecomtab-4"
                  role="tab"
                  aria-controls="ecomtab-4"
                  aria-selected="true"
                  >Reviews<span class="badge bg-light-primary rounded-pill px-2 ms-2">  {{ $product->reviews->count() > 10 ? '10+' : $product->reviews->count() }} </span>
                </a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane show active" id="ecomtab-1" role="tabpanel" aria-labelledby="ecomtab-tab-1">
                <div class="table-responsive">
                  <table class="table table-borderless mb-0">
                    <tbody>
                      <tr>
                        <td class="text-muted py-1">Band :</td>
                        <td class="py-1">Smart Band</td>
                      </tr>
                      <tr>
                        <td class="text-muted py-1">Compatible Devices :</td>
                        <td class="py-1">Smartphones</td>
                      </tr>
                      <tr>
                        <td class="text-muted py-1">Ideal For :</td>
                        <td class="py-1">Unisex</td>
                      </tr>
                      <tr>
                        <td class="text-muted py-1">Lifestyle :</td>
                        <td class="py-1">Fitness | Indoor | Sports | Swimming | Outdoor</td>
                      </tr>
                      <tr>
                        <td class="text-muted py-1">Basic Features :</td>
                        <td class="py-1">Calendar | Date & Time | Timer/Stop Watch</td>
                      </tr>
                      <tr>
                        <td class="text-muted py-1">Health Tracker :</td>
                        <td class="py-1">Heart Rate | Exercise Tracker</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            
              <div class="tab-pane" id="ecomtab-3" role="tabpanel" aria-labelledby="ecomtab-tab-3">
                <div class="table-responsive">
                  <p class="text-muted"
                    >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s,
                    <strong class="text-body"
                      >“When an unknown printer took a galley of type and scrambled it to make a type specimen book.”</strong
                    >
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially
                    unchanged. It was popularized in the 1960s with the release of Lestrade sheets containing Lorem Ipsum passages, and
                    more recently with desktop publishing software like PageMaker including versions of Lorem Ipsum.
                  </p>
                  <p class="text-muted mb-0"
                    >It was popularized in the 1960s with the release of Learjet sheets containing Lorem Ipsum passages, and more
                    recently with desktop publishing software like PageMaker including versions of Lorem Ipsum.</p
                  >
                </div>
              </div>
              <div class="tab-pane" id="ecomtab-4" role="tabpanel" aria-labelledby="ecomtab-tab-4">
                <div class="card">
                  <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-xxl-4 col-xl-5">
                        <h2 class="mb-3"
                          ><b>3.5<small class="text-muted f-18">/5</small></b></h2
                        >
                        <p class="mb-2 text-muted">Based on 275 reviews</p>
                        <div class="star mb-3 f-20">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star-half-alt text-warning"></i>
                          <i class="far fa-star text-muted"></i>
                        </div>
                      </div>
                      <div class="col-xxl-4 col-xl-5">
                        <div class="d-flex align-items-center">
                          <div class="w-100">
                            <div class="row align-items-center my-2">
                              <div class="col">
                                <div class="progress" style="height: 4px">
                                  <div class="progress-bar bg-warning" style="width: 30%"></div>
                                </div>
                              </div>
                              <div class="col-auto">
                                <p class="mb-0 text-muted">5 Stars</p>
                              </div>
                            </div>
                            <div class="row align-items-center my-2">
                              <div class="col">
                                <div class="progress" style="height: 4px">
                                  <div class="progress-bar bg-warning" style="width: 60%"></div>
                                </div>
                              </div>
                              <div class="col-auto">
                                <p class="mb-0 text-muted">4 Stars</p>
                              </div>
                            </div>
                            <div class="row align-items-center my-2">
                              <div class="col">
                                <div class="progress" style="height: 4px">
                                  <div class="progress-bar bg-warning" style="width: 75%"></div>
                                </div>
                              </div>
                              <div class="col-auto">
                                <p class="mb-0 text-muted">3 Stars</p>
                              </div>
                            </div>
                            <div class="row align-items-center my-2">
                              <div class="col">
                                <div class="progress" style="height: 4px">
                                  <div class="progress-bar bg-warning" style="width: 40%"></div>
                                </div>
                              </div>
                              <div class="col-auto">
                                <p class="mb-0 text-muted">2 Stars</p>
                              </div>
                            </div>
                            <div class="row align-items-center">
                              <div class="col">
                                <div class="progress" style="height: 4px">
                                  <div class="progress-bar bg-warning" style="width: 55%"></div>
                                </div>
                              </div>
                              <div class="col-auto">
                                <p class="mb-0 text-muted">1 Stars</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start">
                      <div class="flex-shrink-0">
                        <div class="chat-avtar">
                          <img class="img-radius img-fluid wid-40" src="../assets/images/user/avatar-1.jpg" alt="User image" />
                          <div class="bg-success chat-badge"></div>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1">Harriet Wilson</h6>
                        <p class="text-muted text-sm mb-1">2 hour ago</p>
                        <div class="star">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star-half-alt text-warning"></i>
                          <i class="far fa-star text-muted"></i>
                        </div>
                        <p class="mb-0 text-muted mt-1"
                          >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                          industry's standard dummy text ever since the 1500.</p
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-start">
                      <div class="flex-shrink-0">
                        <div class="chat-avtar">
                          <img class="img-radius img-fluid wid-40" src="../assets/images/user/avatar-2.jpg" alt="User image" />
                          <div class="bg-success chat-badge"></div>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1">Lou Olson</h6>
                        <p class="text-muted text-sm mb-1">2 hour ago</p>
                        <div class="star">
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star text-warning"></i>
                          <i class="fas fa-star-half-alt text-warning"></i>
                          <i class="far fa-star text-muted"></i>
                          <i class="far fa-star text-muted"></i>
                        </div>
                        <p class="mb-2 text-muted mt-1"
                          >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                          industry's standard dummy text ever since the 1500.</p
                        >
                        <a href="#" class="link-primary mb-1">https://phoenixcoded.net/</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center mt-3">
                  <button class="btn btn-link-primary">View more comments</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Related Product</h5>
          </div>
          <div class="card-body">
            <div class="row gy-3">

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
          <div class="col-sm-6 col-xxl-3 col-xl-4">
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
                    <i class="bi {{ in_array($product->id, $favoriteProductIds) ? 'text-danger bi-heart-fill' : 'bi-heart' }}   prod-likes-icon" 
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
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip"  data-bs-title="Checkout" data-bs-dismiss="modal">Buy Now</button>
                                            <button type="button" data-bs-toggle="tooltip"  data-bs-title="Negotiate Price with Seller" class="btn btn-sm btn-secondary">Negotiate Price</button>
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

    <!-- JavaScript to dynamically adjust the star rating -->
<script>
    // Get the rating value from your backend, e.g., from the PHP variable
    const rating = {{ $product->reviews_rating }}; // Dynamic value from backend

    // Get the star elements
    const stars = [
        document.getElementById('star1'),
        document.getElementById('star2'),
        document.getElementById('star3'),
        document.getElementById('star4'),
        document.getElementById('star5')
    ];

    // Function to display stars based on the rating
    function displayStars(rating) {
        const fullStars = Math.floor(rating);
        const halfStar = rating % 1 >= 0.5 ? 1 : 0;
        const emptyStars = 5 - fullStars - halfStar;

        // Set full stars
        for (let i = 0; i < fullStars; i++) {
            stars[i].classList.add('text-warning');
            stars[i].classList.remove('text-muted');
        }

        // Set half star
        if (halfStar === 1) {
            stars[fullStars].classList.add('text-warning');
            stars[fullStars].classList.remove('text-muted');
        }

        // Set empty stars
        for (let i = fullStars + halfStar; i < 5; i++) {
            stars[i].classList.add('text-muted');
            stars[i].classList.remove('text-warning');
        }

        // Set the rating text
        document.getElementById('rating-text').textContent = `(${rating})`;
    }

    // Display the stars when the page loads
    displayStars(rating);
</script>


@endsection
