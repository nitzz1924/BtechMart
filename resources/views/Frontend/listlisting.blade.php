@extends('frontend.website')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">


                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ All Property ================================== -->
    <section class="over-top micler gray-simple">

        <div class="container">

            <div class="row">

                <!-- property Sidebar -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="page-sidebar p-0">
                        <a class="filter_links" data-bs-toggle="collapse" href="#fltbox" role="button"
                            aria-expanded="false" aria-controls="fltbox">Open Advance Filter<i
                                class="fa fa-sliders-h ml-2"></i></a>
                        <div class="collapse" id="fltbox">
                            <!-- Find New Property -->
                            <div class="sidebar-widgets p-4">

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Neighborhood">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Location">
                                </div>

                                <div class="form-group">
                                    <select id="city" class="select-normal">
                                        <option value="0">Choose City</option>
                                        <option value="1">California</option>
                                        <option value="2">Denver</option>
                                        <option value="3">New York</option>
                                        <option value="4">Washington</option>
                                        <option value="5">Canada</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select id="status" class="select-normal">
                                        <option value="0">Property Types</option>
                                        <option value="1">Apartment</option>
                                        <option value="2">Condo</option>
                                        <option value="3">Houses</option>
                                        <option value="4">Villa</option>
                                        <option value="5">Land</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="select-normal">
                                        <option value="0">Min Bedrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select id="bathrooms" class="select-normal">
                                        <option value="0">Min Bathrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select id="garage" class="select-normal">
                                        <option value="0">Garage Choose</option>
                                        <option value="1">Any Type</option>
                                        <option value="2">Yes</option>
                                        <option value="3">No</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select id="built" class="select-normal">
                                        <option value="0">Built Year</option>
                                        <option value="1">2010</option>
                                        <option value="2">2011</option>
                                        <option value="3">2012</option>
                                        <option value="4">2013</option>
                                        <option value="5">2014</option>
                                        <option value="6">2015</option>
                                        <option value="7">2016</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="simple-input">
                                                <input type="text" class="form-control" placeholder="Min Area">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="simple-input">
                                                <input type="text" class="form-control" placeholder="Max Area">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
                                        <h6>Choose Price</h6>
                                        <div class="rg-slider">
                                            <input type="text" class="js-range-slider" name="my_range" value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                                        <h6>Advance Features</h6>
                                        <ul class="row p-0 m-0">
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-1" class="form-check-input" name="ao-1"
                                                        type="checkbox">
                                                    <label for="ao-1" class="form-check-label">Air Condition</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-2" class="form-check-input" name="ao-2"
                                                        type="checkbox">
                                                    <label for="ao-2" class="form-check-label">Bedding</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-3" class="form-check-input" name="ao-3"
                                                        type="checkbox">
                                                    <label for="ao-3" class="form-check-label">Heating</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-4" class="form-check-input" name="ao-4"
                                                        type="checkbox">
                                                    <label for="ao-4" class="form-check-label">Internet</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-5" class="form-check-input" name="ao-5"
                                                        type="checkbox">
                                                    <label for="ao-5" class="form-check-label">Microwave</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-6" class="form-check-input" name="ao-6"
                                                        type="checkbox">
                                                    <label for="ao-6" class="form-check-label">Smoking Allow</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-7" class="form-check-input" name="ao-7"
                                                        type="checkbox">
                                                    <label for="ao-7" class="form-check-label">Terrace</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-8" class="form-check-input" name="ao-8"
                                                        type="checkbox">
                                                    <label for="ao-8" class="form-check-label">Balcony</label>
                                                </div>
                                            </li>
                                            <li class="col-lg-6 col-md-6 p-0">
                                                <div class="form-check form-check-inline">
                                                    <input id="ao-9" class="form-check-input" name="ao-9"
                                                        type="checkbox">
                                                    <label for="ao-9" class="form-check-label">Icon</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                                        <button class="btn btn-primary rounded full-width font--medium">Submit
                                            Search</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Sidebar End -->
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-12 col-md-12">
                            <div class="item-shorting-box">
                                <div class="item-shorting clearfix">
                                    <div class="left-column">
                                        <h4 class="m-0"><span>207</span> Results Found of 612</h4>
                                    </div>
                                </div>
                                <div class="item-shorting-box-right">
                                    <div class="shorting-by">
                                        <select>
                                            <option value="0">Shorting By:</option>
                                            <option value="1">Low Price</option>
                                            <option value="2">High Price</option>
                                            <option value="3">Most Popular</option>
                                        </select>
                                    </div>
                                    <ul class="shorting-list">
                                        <li><a href="grid-listing"><i class="fas fa-table-cells-large"></i></a></li>
                                        <li><a href="list-listing" class="active"><i class="fas fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start All List -->
                    <div class="row gx-3 gy-4">

                        <!-- Single Property -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="veshm-list-prty">
                                <div class="veshm-list-prty-figure">
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-11.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-2.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-3.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-4.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-prty-caption">
                                    <div class="veshm-list-kygf">
                                        <div class="veshm-list-kygf-flex">
                                            <div class="veshm-list-typess rent"><span>For Rent</span></div>
                                            <h5 class="rlhc-title-name verified"><a href="/singleproperty"
                                                    class="prt-link-detail">Agile Real Estate Group</a></h5>
                                            <div class="vesh-aget-rates">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <span class="resy-98">322 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>
                                    <div class="veshm-list-middle">
                                        <div class="veshm-list-icons">
                                            <ul>
                                                <li><i class="fa-solid fa-bed"></i><span>3 Bed</span></li>
                                                <li><i class="fa-solid fa-bath"></i><span>2 Ba</span></li>
                                                <li><i class="fa-solid fa-vector-square"></i><span>2200 Sqft</span></li>
                                                <li><i class="fa-solid fa-calendar-days"></i><span>Built 2017</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="veshm-list-footers">
                                        <div class="veshm-list-ftr786">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹7,549<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                        </div>
                                        <div class="veshm-list-ftr1707">
                                            <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#offer"
                                                class="btn btn-md btn-primary font--medium">Send Offer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Property -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="veshm-list-prty">
                                <div class="veshm-list-prty-figure">
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-12.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-6.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-7.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-8.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-prty-caption">
                                    <div class="veshm-list-kygf">
                                        <div class="veshm-list-kygf-flex">
                                            <div class="veshm-list-typess rent"><span>For Rent</span></div>
                                            <h5 class="rlhc-title-name verified"><a href="/singleproperty"
                                                    class="prt-link-detail">Hearthstone Real Property</a></h5>
                                            <div class="vesh-aget-rates">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <span class="resy-98">210 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>
                                    <div class="veshm-list-middle">
                                        <div class="veshm-list-icons">
                                            <ul>
                                                <li><i class="fa-solid fa-bed"></i><span>4 Bed</span></li>
                                                <li><i class="fa-solid fa-bath"></i><span>2 Ba</span></li>
                                                <li><i class="fa-solid fa-vector-square"></i><span>3200 Sqft</span></li>
                                                <li><i class="fa-solid fa-calendar-days"></i><span>Built 2020</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="veshm-list-footers">
                                        <div class="veshm-list-ftr786">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹10,590<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                        </div>
                                        <div class="veshm-list-ftr1707">
                                            <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#offer"
                                                class="btn btn-md btn-primary font--medium">Send Offer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Property -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="veshm-list-prty">
                                <div class="veshm-list-prty-figure">
                                    <div class="veshm-list-img-slide">
                                        <div class="veshm-list-click">
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-13.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-7.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-2.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                            <div><a href="/singleproperty"><img
                                                        src="{{ asset('assets/frontend-assets/img/prt-9.png') }}"
                                                        class="img-fluid mx-auto" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veshm-list-prty-caption">
                                    <div class="veshm-list-kygf">
                                        <div class="veshm-list-kygf-flex">
                                            <div class="veshm-list-typess rent"><span>For Rent</span></div>
                                            <h5 class="rlhc-title-name verified"><a href="/singleproperty"
                                                    class="prt-link-detail">The Goldfinch Real Property</a></h5>
                                            <div class="vesh-aget-rates">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <span class="resy-98">452 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="veshm-list-head-flex">
                                            <button class="btn btn-like active" type="button"><i
                                                    class="fa-solid fa-heart-circle-check"></i></button>
                                        </div>
                                    </div>
                                    <div class="veshm-list-middle">
                                        <div class="veshm-list-icons">
                                            <ul>
                                                <li><i class="fa-solid fa-bed"></i><span>3 Bed</span></li>
                                                <li><i class="fa-solid fa-bath"></i><span>3 Ba</span></li>
                                                <li><i class="fa-solid fa-vector-square"></i><span>2100 Sqft</span></li>
                                                <li><i class="fa-solid fa-calendar-days"></i><span>Built 2021</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="veshm-list-footers">
                                        <div class="veshm-list-ftr786">
                                            <div class="rlhc-price">
                                                <h4 class="rlhc-price-name theme-cl">₹8,999<span
                                                        class="monthly">/Months</span></h4>
                                            </div>
                                        </div>
                                        <div class="veshm-list-ftr1707">
                                            <a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#offer"
                                                class="btn btn-md btn-primary font--medium">Send Offer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="JavaScript:Void(0);" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">5</a></li>
                                    <li class="page-item"><a class="page-link" href="JavaScript:Void(0);">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="JavaScript:Void(0);" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ============================ All Property ================================== -->
@endsection
