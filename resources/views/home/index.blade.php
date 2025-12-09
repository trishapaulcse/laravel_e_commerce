@extends('backendMaster')

@section('slider')
    @include('component.slider')
@endsection

@section('mainContent')
<!-- Category -->
    <section class="section-popular mb-[100px] max-[1200px]:mb-[70px]" data-aos="fade-up" data-aos-duration="2000">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full px-[12px]">
                <div class="title-2 mb-[30px] w-full flex justify-between items-center hidden">
                    <h2>Categories</h2>
                </div>
                <div class="category-slider owl-carousel">
                    <div class="category-block mt-[30px] bg-[#f7f7f8] rounded-[15px] border-[1px] border-solid border-[#eee]">
                        <div class="category-icon w-[80px] h-[80px] mt-[-40px] mx-auto mb-[0] flex items-center justify-center rounded-[50%] border-[10px] border-solid border-[#fff] icon-1 bg-[#ffeae9]">
                            <i class="fi fi-tr-shirt-long-sleeve text-[30px] leading-[30px]"></i>
                        </div>
                        <div class="category-title pb-[15px] text-center">
                            <h4 class="mt-[15px] mb-[5px] mx-[0] text-[16px] text-[#2b2b2d] leading-[1.2] font-medium"><a href="shop-left-sidebar.html">Shirt</a></h4>
                            <p class="font-Poppins text-[12px] text-[#777] mb-[0] leading-[1.75]">(67 Items)</p>
                        </div>
                    </div>
                    <div class="category-block mt-[30px] bg-[#f7f7f8] rounded-[15px] border-[1px] border-solid border-[#eee]">
                        <div class="category-icon w-[80px] h-[80px] mt-[-40px] mx-auto mb-[0] flex items-center justify-center rounded-[50%] border-[10px] border-solid border-[#fff] icon-2 bg-[#fff6ec]">
                            <i class="fi fi-tr-hat-cowboy-side text-[30px] leading-[30px]"></i>
                        </div>
                        <div class="category-title pb-[15px] text-center">
                            <h4 class="mt-[15px] mb-[5px] mx-[0] text-[16px] text-[#2b2b2d] leading-[1.2] font-medium"><a href="shop-left-sidebar.html">Hats</a></h4>
                            <p class="font-Poppins text-[12px] text-[#777] mb-[0] leading-[1.75]">(81 Items)</p>
                        </div>
                    </div>
                    <div class="category-block mt-[30px] bg-[#f7f7f8] rounded-[15px] border-[1px] border-solid border-[#eee]">
                        <div class="category-icon w-[80px] h-[80px] mt-[-40px] mx-auto mb-[0] flex items-center justify-center rounded-[50%] border-[10px] border-solid border-[#fff] icon-3 bg-[#e2fde2]">
                            <i class="fi fi-tr-boot-heeled text-[30px] leading-[30px]"></i>
                        </div>
                        <div class="category-title pb-[15px] text-center">
                            <h4 class="mt-[15px] mb-[5px] mx-[0] text-[16px] text-[#2b2b2d] leading-[1.2] font-medium"><a href="shop-left-sidebar.html">Boot</a></h4>
                            <p class="font-Poppins text-[12px] text-[#777] mb-[0] leading-[1.75]">(32 Items)</p>
                        </div>
                    </div>
                    <div class="category-block mt-[30px] bg-[#f7f7f8] rounded-[15px] border-[1px] border-solid border-[#eee]">
                        <div class="category-icon w-[80px] h-[80px] mt-[-40px] mx-auto mb-[0] flex items-center justify-center rounded-[50%] border-[10px] border-solid border-[#fff] icon-4 bg-[#ffeae9]">
                            <i class="fi fi-tr-shirt-tank-top text-[30px] leading-[30px]"></i>
                        </div>
                        <div class="category-title pb-[15px] text-center">
                            <h4 class="mt-[15px] mb-[5px] mx-[0] text-[16px] text-[#2b2b2d] leading-[1.2] font-medium"><a href="shop-left-sidebar.html">Tops</a></h4>
                            <p class="font-Poppins text-[12px] text-[#777] mb-[0] leading-[1.75]">(78 Items)</p>
                        </div>
                    </div>
                    <div class="category-block mt-[30px] bg-[#f7f7f8] rounded-[15px] border-[1px] border-solid border-[#eee]">
                        <div class="category-icon w-[80px] h-[80px] mt-[-40px] mx-auto mb-[0] flex items-center justify-center rounded-[50%] border-[10px] border-solid border-[#fff] icon-5 bg-[#fde1f5]">
                            <i class="fi fi-tr-vest text-[30px] leading-[30px]"></i>
                        </div>
                        <div class="category-title pb-[15px] text-center">
                            <h4 class="mt-[15px] mb-[5px] mx-[0] text-[16px] text-[#2b2b2d] leading-[1.2] font-medium"><a href="shop-left-sidebar.html">Vest</a></h4>
                            <p class="font-Poppins text-[12px] text-[#777] mb-[0] leading-[1.75]">(64 Items)</p>
                        </div>
                    </div>
                    <div class="category-block mt-[30px] bg-[#f7f7f8] rounded-[15px] border-[1px] border-solid border-[#eee]">
                        <div class="category-icon w-[80px] h-[80px] mt-[-40px] mx-auto mb-[0] flex items-center justify-center rounded-[50%] border-[10px] border-solid border-[#fff] icon-6 bg-[#ecf0ff]">
                            <i class="fi fi-tr-socks text-[30px] leading-[30px]"></i>
                        </div>
                        <div class="category-title pb-[15px] text-center">
                            <h4 class="mt-[15px] mb-[5px] mx-[0] text-[16px] text-[#2b2b2d] leading-[1.2] font-medium"><a href="shop-left-sidebar.html">Socks</a></h4>
                            <p class="font-Poppins text-[12px] text-[#777] mb-[0] leading-[1.75]">(24 Items)</p>
                        </div>
                    </div>
                    <div class="category-block mt-[30px] bg-[#f7f7f8] rounded-[15px] border-[1px] border-solid border-[#eee]">
                        <div class="category-icon w-[80px] h-[80px] mt-[-40px] mx-auto mb-[0] flex items-center justify-center rounded-[50%] border-[10px] border-solid border-[#fff] icon-7 bg-[#f9f9d9]">
                            <i class="fi fi-tr-sunglasses text-[30px] leading-[30px]"></i>
                        </div>
                        <div class="category-title pb-[15px] text-center">
                            <h4 class="mt-[15px] mb-[5px] mx-[0] text-[16px] text-[#2b2b2d] leading-[1.2] font-medium"><a href="shop-left-sidebar.html">Sunglasses</a></h4>
                            <p class="font-Poppins text-[12px] text-[#777] mb-[0] leading-[1.75]">(46 Items)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Products -->
    <section class="section-product pb-[100px] max-[1200px]:pb-[70px]" data-aos="fade-up" data-aos-duration="2000">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="title-2 w-full flex justify-between items-center max-[992px]:flex-col max-[992px]:items-start mb-[30px]">
                        <div class="title-box max-[992px]:mr-[30px] max-[992px]:mb-[15px]">
                            <div class="cr-banner mb-[5px] text-center">
                                <h2 class="font-Manrope font-bold text-[#2b2b2d] leading-[1.2] m-[0] text-left text-[25px]">New Arrivals</h2>
                            </div>
                            <div class="cr-banner-sub-title w-full">
                                <p class="font-Poppins w-full m-[0] text-left max-w-[600px] text-[14px] leading-[22px] text-[#7a7a7a]">Browse The Collection of Top Products.</p>
                            </div>
                        </div>
                        <div id="dealend" class="dealend-timer"></div>
                    </div>
                </div>
            </div>
            <div class="new-product-slider owl-carousel px-[12px] mb-[-24px]">
                <div class="product-card-2 mb-[24px]">
                    <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                        <div class="cr-pro-image-outer">
                            <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/18.jpg" alt="Product">
                                    <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/19.jpg" alt="Product">
                                </a>
                                <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                    <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">50% Sale</span>
                                </span>
                                <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                    <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                        <i class="ri-eye-line text-[14px]"></i>
                                    </a>
                                    <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                        <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                        <i class="ri-shopping-cart-line text-[14px]"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                        <i class="ri-heart-line text-[14px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cr-pro-content p-[15px]">
                            <div class="cr-info mb-[10px] flex justify-between items-center">
                                <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Women Topssajdasjdasjdhasjdh</a>
                                <div class="cr-pro-rating flex">
                                    <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                    <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                    <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                    <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                    <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                </div>
                            </div>
                            <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] hover:text-[#64b496] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Colorful top for women</a>
                            </h5>
                            <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$6.00</span>
                                <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$9.00</span>
                            </span>
                            <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                <div class="cr-pro-color">
                                    <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                        <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                            <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                            </a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                            <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cr-pro-size">
                                    <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                        <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                            <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                            <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                        </li>
                                        <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                            <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section-services relative pb-[100px] max-[1200px]:pb-[70px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="cr-services-border" data-aos="fade-up" data-aos-duration="2000">
                        <div class="cr-service-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cr-services p-[24px] bg-[#f7f7f8] rounded-[5px] border-[1px] border-solid border-[#e9e9e9] flex flex-col max-[768px]:justify-center">
                                        <div class="cr-services-image mx-auto mt-auto mb-[12px] max-[768px]:p-[0]">
                                            <i class="ri-red-packet-line text-[43px] leading-[40px] text-[#64b496]"></i>
                                        </div>
                                        <div class="cr-services-contain max-[768px]:text-center">
                                            <h4 class="font-Poppins mb-[5px] text-[18px] text-[#2b2b2d] font-semibold leading-[1.667] text-center max-[1400px]:text-[17px] max-[768px]:text-[15px]">Product Packing</h4>
                                            <p class="text-[14px] leading-[22px] font-light text-center font-Poppins text-[#7a7a7a] mb-[0]">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services p-[24px] bg-[#f7f7f8] rounded-[5px] border-[1px] border-solid border-[#e9e9e9] flex flex-col max-[768px]:justify-center">
                                        <div class="cr-services-image mx-auto mt-auto mb-[12px] max-[768px]:p-[0]">
                                            <i class="ri-customer-service-2-line text-[43px] leading-[40px] text-[#64b496]"></i>
                                        </div>
                                        <div class="cr-services-contain max-[768px]:text-center">
                                            <h4 class="font-Poppins mb-[5px] text-[18px] text-[#2b2b2d] font-semibold leading-[1.667] text-center max-[1400px]:text-[17px] max-[768px]:text-[15px]">24X7 Support</h4>
                                            <p class="text-[14px] leading-[22px] font-light text-center font-Poppins text-[#7a7a7a] mb-[0]">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services p-[24px] bg-[#f7f7f8] rounded-[5px] border-[1px] border-solid border-[#e9e9e9] flex flex-col max-[768px]:justify-center">
                                        <div class="cr-services-image mx-auto mt-auto mb-[12px] max-[768px]:p-[0]">
                                            <i class="ri-truck-line text-[43px] leading-[40px] text-[#64b496]"></i>
                                        </div>
                                        <div class="cr-services-contain max-[768px]:text-center">
                                            <h4 class="font-Poppins mb-[5px] text-[18px] text-[#2b2b2d] font-semibold leading-[1.667] text-center max-[1400px]:text-[17px] max-[768px]:text-[15px]">Delivery in 5 Days</h4>
                                            <p class="text-[14px] leading-[22px] font-light text-center font-Poppins text-[#7a7a7a] mb-[0]">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services p-[24px] bg-[#f7f7f8] rounded-[5px] border-[1px] border-solid border-[#e9e9e9] flex flex-col max-[768px]:justify-center">
                                        <div class="cr-services-image mx-auto mt-auto mb-[12px] max-[768px]:p-[0]">
                                            <i class="ri-money-dollar-box-line text-[43px] leading-[40px] text-[#64b496]"></i>
                                        </div>
                                        <div class="cr-services-contain max-[768px]:text-center">
                                            <h4 class="font-Poppins mb-[5px] text-[18px] text-[#2b2b2d] font-semibold leading-[1.667] text-center max-[1400px]:text-[17px] max-[768px]:text-[15px]">Payment Secure</h4>
                                            <p class="text-[14px] leading-[22px] font-light text-center font-Poppins text-[#7a7a7a] mb-[0]">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Deal -->
    <!-- <section class="section-deal pb-[100px] max-[1200px]:pb-[70px]">
        <div class="bg-banner-deal w-full h-[700px] relative bg-no-repeat bg-center bg-cover max-[992px]:h-[500px] max-[360px]:h-[450px]">
            <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div class="w-full px-[12px]">
                        <div class="cr-deal-rightside w-full h-[700px] flex flex-col justify-center max-[992px]:h-[500px] max-[360px]:h-[450px]">
                            <div class="cr-deal-content max-w-[500px] p-[24px] bg-[#ffffff38] rounded-[5px] text-left max-[992px]:max-w-[400px] max-[768px]:bg-[#f7f7f8e6] max-[768px]:max-w-full max-[576px]:text-center max-[390px]:p-[15px]" data-aos="fade-up" data-aos-duration="2000">
                                <span class="font-Poppins text-[16px] font-normal"><code class="text-[26px] font-black leading-[1.2] text-[#64b496] max-[576px]:text-[22px]">40%</code> OFF</span>
                                <h4 class="cr-deal-title mt-[12px] mb-[15px] font-Manrope text-[28px] font-bold leading-[1.2] text-[#2b2b2d] max-[992px]:text-[22px]">Great deal on Womens Fashion.</h4>
                                <p class="mb-[0] text-[14px] font-Poppins font-light text-[#7a7a7a] leading-[1.75]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do maecenas accumsan
                                    lacus vel facilisis. </p>
                                <div id="timer" class="cr-counter mt-[20px] flex justify-start max-[576px]:justify-center">
                                    <div class="cr-counter-inner py-[12px] px-[24px] flex border-[1px] border-solid border-[#eee] rounded-[5px]">
                                        <h4 class="w-[45px] m-[0] relative grid font-Poppins text-[14px] leading-[1.2] font-normal text-[#7a7a7a] text-center max-[390px]:text-[12px]">
                                            <span id="days" class="font-Poppins text-[20px] font-bold leading-[1.2] text-[#2b2b2d] max-[992px]:text-[18px] max-[390px]:text-[16px]"></span>
                                            Days
                                        </h4>
                                        <h4 class="w-[45px] m-[0] relative grid font-Poppins text-[14px] leading-[1.2] font-normal text-[#7a7a7a] text-center max-[390px]:text-[12px] ml-[20px] max-[390px]:ml-[5px]">
                                            <span id="hours" class="font-Poppins text-[20px] font-bold leading-[1.2] text-[#2b2b2d] max-[992px]:text-[18px] max-[390px]:text-[16px]"></span>
                                            Hrs
                                        </h4>
                                        <h4 class="w-[45px] m-[0] relative grid font-Poppins text-[14px] leading-[1.2] font-normal text-[#7a7a7a] text-center max-[390px]:text-[12px] ml-[20px] max-[390px]:ml-[5px]">
                                            <span id="minutes" class="font-Poppins text-[20px] font-bold leading-[1.2] text-[#2b2b2d] max-[992px]:text-[18px] max-[390px]:text-[16px]"></span>
                                            Min
                                        </h4>
                                        <h4 class="w-[45px] m-[0] relative grid font-Poppins text-[14px] leading-[1.2] font-normal text-[#7a7a7a] text-center max-[390px]:text-[12px] ml-[20px] max-[390px]:ml-[5px]">
                                            <span id="seconds" class="font-Poppins text-[20px] font-bold leading-[1.2] text-[#2b2b2d] max-[992px]:text-[18px] max-[390px]:text-[16px]"></span>
                                            Sec
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Product banner -->
    <!-- <section class="section-product-banner relative pb-[100px] max-[1200px]:pb-[70px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="cr-banner-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-product-banner-image relative">
                                    <img src="assets/img/product-banner/4.jpg" alt="product-banner" class="w-full rounded-[5px]">
                                    <div class="cr-product-banner-contain p-[24px] absolute top-[0] left-[0] right-[0] text-left h-full flex flex-col items-baseline justify-center">
                                        <h5 class="mb-[15px] font-Manrope text-[20px] font-bold leading-[1.2] capitalize text-[#2b2b2d] max-[1400px]:text-[18px] max-[992px]:text-[16px] max-[768px]:text-[20px] max-[520px]:text-[18px] max-[360px]:text-[16px] max-[360px]:text-[16px]">Womens <br> Summer Fashion</h5>
                                        <p class="font-Poppins mb-[15px] text-[14px] leading-[1.2] text-[#777] max-[360px]:mb-[10px]"><span class="percent font-Poppins leading-[1.2] mr-[5px] text-[20px] font-bold text-[#64b496]">25%</span> Off <span class="text font-Poppins text-[14px] leading-[1.2] text-[#777] max-[992px]:hidden">on first order</span></p>
                                        <div class="cr-product-banner-buttons">
                                            <a href="shop-left-sidebar.html" class="cr-button h-[40px] font-bold transition-all duration-[0.3s] ease-in-out py-[8px] px-[22px] text-[14px] font-Manrope capitalize leading-[1.2] bg-[#64b496] text-[#fff] border-[1px] border-solid border-[#64b496] rounded-[5px] flex items-center justify-center hover:bg-[#000] hover:border-[#000] max-[992px]:h-[32px] max-[992px]:py-[8px] max-[992px]:px-[10px]">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-product-banner-image relative">
                                    <img src="assets/img/product-banner/5.jpg" alt="product-banner" class="w-full rounded-[5px]">
                                    <div class="cr-product-banner-contain p-[24px] absolute top-[0] left-[0] right-[0] text-left h-full flex flex-col items-baseline justify-center">
                                        <h5 class="mb-[15px] font-Manrope text-[20px] font-bold leading-[1.2] capitalize text-[#2b2b2d] max-[1400px]:text-[18px] max-[992px]:text-[16px] max-[768px]:text-[20px] max-[520px]:text-[18px] max-[360px]:text-[16px] max-[360px]:text-[16px]">Cotton <br>Jacket for mens</h5>
                                        <p class="font-Poppins mb-[15px] text-[14px] leading-[1.2] text-[#777] max-[360px]:mb-[10px]"><span class="percent font-Poppins leading-[1.2] mr-[5px] text-[20px] font-bold text-[#64b496]">33%</span> Off <span class="text font-Poppins text-[14px] leading-[1.2] text-[#777] max-[992px]:hidden">on first order</span></p>
                                        <div class="cr-product-banner-buttons">
                                            <a href="shop-left-sidebar.html" class="cr-button h-[40px] font-bold transition-all duration-[0.3s] ease-in-out py-[8px] px-[22px] text-[14px] font-Manrope capitalize leading-[1.2] bg-[#64b496] text-[#fff] border-[1px] border-solid border-[#64b496] rounded-[5px] flex items-center justify-center hover:bg-[#000] hover:border-[#000] max-[992px]:h-[32px] max-[992px]:py-[8px] max-[992px]:px-[10px]">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-product-banner-image relative">
                                    <img src="assets/img/product-banner/6.jpg" alt="product-banner" class="w-full rounded-[5px]">
                                    <div class="cr-product-banner-contain p-[24px] absolute top-[0] left-[0] right-[0] text-left h-full flex flex-col items-baseline justify-center">
                                        <h5 class="mb-[15px] font-Manrope text-[20px] font-bold leading-[1.2] capitalize text-[#2b2b2d] max-[1400px]:text-[18px] max-[992px]:text-[16px] max-[768px]:text-[20px] max-[520px]:text-[18px] max-[360px]:text-[16px] max-[360px]:text-[16px]">Children <br> Latest Fashion</h5>
                                        <p class="font-Poppins mb-[15px] text-[14px] leading-[1.2] text-[#777] max-[360px]:mb-[10px]"><span class="percent font-Poppins leading-[1.2] mr-[5px] text-[20px] font-bold text-[#64b496]">15%</span> Off <span class="text font-Poppins text-[14px] leading-[1.2] text-[#777] max-[992px]:hidden">on first order</span></p>
                                        <div class="cr-product-banner-buttons">
                                            <a href="shop-left-sidebar.html" class="cr-button h-[40px] font-bold transition-all duration-[0.3s] ease-in-out py-[8px] px-[22px] text-[14px] font-Manrope capitalize leading-[1.2] bg-[#64b496] text-[#fff] border-[1px] border-solid border-[#64b496] rounded-[5px] flex items-center justify-center hover:bg-[#000] hover:border-[#000] max-[992px]:h-[32px] max-[992px]:py-[8px] max-[992px]:px-[10px]">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Top Collection Area Start -->
    <!-- <section class="cr-product-tab cr-products pb-[100px] max-[1200px]:pb-[70px] wow fadeInUp">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full" data-aos="fade-up" data-aos-duration="2000">
                <div class="w-full px-[12px]">
                    <div class="title-2 w-full flex justify-between items-center max-[992px]:flex-col max-[992px]:items-start mb-[30px]">
                        <div class="title-box max-[992px]:mr-[30px] max-[992px]:mb-[15px]">
                            <div class="cr-banner mb-[5px] text-center">
                                <h2 class="font-Manrope font-bold text-[#2b2b2d] leading-[1.2] m-[0] text-left text-[25px]">Top Collection</h2>
                            </div>
                            <div class="cr-banner-sub-title w-full">
                                <p class="font-Poppins w-full m-[0] text-left max-w-[600px] text-[14px] leading-[22px] text-[#7a7a7a]">Shop online for top collection and get free shipping!</p>
                            </div>
                        </div>
                        <div class="cr-pro-tab">
                            <ul class="cr-pro-tab-nav nav flex flex-wrap m-[-2px]" id="mycollectionTab">
                                <li class="nav-item m-[2px]"><a href="#all" class="border-[1px] border-solid border-[#eee] rounded-[5px] text-[#2b2b2d] bg-[#fff] block py-[0.5rem] px-[1rem]">All</a></li>
                                <li class="nav-item m-[2px]"><a href="#womens" class="border-[1px] border-solid border-[#eee] rounded-[5px] text-[#2b2b2d] bg-[#fff] block py-[0.5rem] px-[1rem]">Womens</a></li>
                                <li class="nav-item m-[2px]"><a href="#mens" class="border-[1px] border-solid border-[#eee] rounded-[5px] text-[#2b2b2d] bg-[#fff] block py-[0.5rem] px-[1rem]">Mens</a></li>
                                <li class="nav-item m-[2px]"><a href="#kids" class="border-[1px] border-solid border-[#eee] rounded-[5px] text-[#2b2b2d] bg-[#fff] block py-[0.5rem] px-[1rem]">Kids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New Product -->
            <div class="flex flex-wrap w-full mb-[-24px]" data-aos="fade-up" data-aos-duration="2000">
                <div class="w-full max-w-full">
                    <div class="tab-content" id="myTabContent">
                        <!-- 1st Product tab start -->
                        <!-- <div class="tab-collection-pane" id="all">
                            <div class="flex flex-wrap w-full">
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/33.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/34.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">50% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Women Tops</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Pink T-shirt for women</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$7.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$9.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#85ffeb]"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/30.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/31.jpg" alt="Product">
                                                    </a>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Blue T-Shirt for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$125.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$250.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/30.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/31.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/53.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/53.jpg" alt="Product">
                                                    </a>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Jacket</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Jacket for boy</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$65.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$95.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/24.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/25.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/39.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/40.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Tops</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Flower top for women</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$44.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$60.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/39.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/46.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/45.jpg" alt="Product">
                                                    </a>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Jacket</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Leather jacket for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$255.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$299.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/46.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/58.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/59.jpg" alt="Product">
                                                    </a>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-Shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Pink T-shirt for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$75.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$86.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/42.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/43.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="trending flex bg-[#7d76ff] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">Trending</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Red T-shirt for women</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$26.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$35.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/28.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/30.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/31.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/51.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/52.jpg" alt="Product">
                                                    </a>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Blue T-shirt for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$76.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$82.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/28.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/30.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/27.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/26.jpg" alt="Product">
                                                    </a>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-Shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">White T-shirt for boys</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$50.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$60.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/27.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/26.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] max-[1200px]:hidden max-[768px]:block">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/22.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/23.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Black T-Shirt for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$71.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$98.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/22.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="tab-collection-pane" id="womens">
                            <div class="flex flex-wrap w-full">
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/33.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/34.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">50% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Women Tops</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Pink T-shirt for women</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$7.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$9.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#85ffeb]"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/35.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/36.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Flower T-Shirt for women</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$22.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$25.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/35.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/36.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/37.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/38.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">15% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Red shirt for women</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$26.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$33.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/37.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/38.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/39.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/40.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Tops</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Flower top for women</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$44.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$60.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/39.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/41.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/41.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Top</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Feather top for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$52.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$72.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/41.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/18.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/19.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">50% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-Shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Colorful T-shirt for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$52.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$82.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/42.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/43.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="trending flex bg-[#7d76ff] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">Trending</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Red T-shirt for women</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$26.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$35.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/28.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/30.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/31.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/24.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/25.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">15% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Pink T-Shirt for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$15.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$20.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/25.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/24.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/20.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/21.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Shorts</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Girl nightdress shorts</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$39.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$99.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/32.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] max-[1200px]:hidden max-[768px]:block">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/22.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/23.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Black T-Shirt for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$71.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$98.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/22.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="tab-collection-pane" id="mens">
                            <div class="flex flex-wrap w-full">
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/28.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/29.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">50% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Black T-Shirt for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$152.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$200.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/30.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/31.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="trending flex bg-[#7d76ff] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">Trending</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Blue T-Shirt for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$125.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$250.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/30.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/31.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/27.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/26.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-Shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">T-Shirt for boys</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$99.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$120.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/26.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/44.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/45.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">15% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Jacket</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Jacket for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$180.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$199.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/45.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/44.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/46.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/45.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Jacket</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Leather jacket for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$255.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$299.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/46.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/47.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/48.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Suits</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Blue suit for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$500.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$600.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/47.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/50.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/50.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">50% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Suits</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Blue suit for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$175.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$190.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/51.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/52.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="trending flex bg-[#7d76ff] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">Trending</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Blue T-shirt for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$76.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$82.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/28.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]"> 
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/30.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/26.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/27.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">15% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Pink T-shirt for boy</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$15.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$20.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/25.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/26.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] max-[1200px]:hidden max-[768px]:block">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/31.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/30.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Yellow T-shirt for men</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$65.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$80.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/31.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-collection-pane" id="kids">
                            <div class="flex flex-wrap w-full">
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/24.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/25.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">50% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Pink T-shirt for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$63.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$85.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/26.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/27.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="trending flex bg-[#7d76ff] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">Trending</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Pink T-shirt for boy</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$28.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$65.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/30.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/31.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/53.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/53.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">15% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Jacket</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Jacket for boy</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$65.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$95.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/24.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/25.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/54.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/55.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Jacket</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Jacket for girls</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$36.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$64.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/32.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/56.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/57.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Frock</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Frock for girls</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$34.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$95.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/22.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/58.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/59.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">50% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-Shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Pink T-shirt for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$75.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$86.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#f39fab]"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/60.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/61.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="trending flex bg-[#7d76ff] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">Trending</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Jacket</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Cotton jacket for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$63.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$85.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/60.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/61.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/25.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/24.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="sale flex bg-[#64b496] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">15% Sale</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-Shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Round t-shirt for girl</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$25.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$45.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/25.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/24.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$22.00" data-new="$17.00" data-tooltip="Medium">M</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px]">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/27.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/26.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="trending flex bg-[#7d76ff] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1px]">Trending</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">T-Shirt</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">White T-shirt for boys</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$50.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$60.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/27.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/26.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[1200px]:w-[20%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] max-[1200px]:hidden">
                                    <div class="product-card-2 mb-[24px]">
                                        <div class="cr-product-inner border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden bg-[#fff]">
                                            <div class="cr-pro-image-outer">
                                                <div class="cr-pro-image relative border-b-[1px] border-solid border-[#eee] overflow-hidden p-[12px]">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image border-[1px] border-solid border-[#eee] w-full rounded-[5px]" src="assets/img/product/62.jpg" alt="Product">
                                                        <img class="hover-image transition-all duration-[0.3s] ease-in-out absolute top-[0] left-[0] right-[0] bottom-[0] opacity-0 block w-full" src="assets/img/product/63.jpg" alt="Product">
                                                    </a>
                                                    <span class="flags absolute z-[8] top-[12px] right-auto left-[12px] flex flex-col">
                                                        <span class="new flex bg-[#ff5b5b] mb-[3px] text-[11px] leading-[20px] px-[8px] text-center items-center justify-center text-[#fff] tracking-[1]">New</span>
                                                    </span>
                                                    <div class="cr-pro-actions transition-all duration-[0.3s] ease-in-out w-[calc(100%-24px)] flex justify-center absolute left-auto right-auto bottom-[-30px] opacity-0 max-[992px]:bottom-[-1] max-[992px]:opacity-[1]">
                                                        <a class="model-oraganic-product cr-modal-toggle cursor-pointer transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-eye-line text-[14px]"></i>
                                                        </a>
                                                        <a href="compare.html" class="cr-btn-group compare transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Compare">
                                                            <i class="mdi mdi-vector-arrange-below text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Add To Cart" class="add-to-cart cr-shopping-bag transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]">
                                                            <i class="ri-shopping-cart-line text-[14px]"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="cr-btn-group wishlist transition-all duration-[0.3s] ease-in-out w-[30px] h-[30px] mx-[1px] flex items-center justify-center bg-[#fff] text-[#2b2b2d] rounded-[5px] border-[1px] border-solid border-[#eee]" title="Wishlist">
                                                            <i class="ri-heart-line text-[14px]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cr-pro-content p-[15px]">
                                                <div class="cr-info mb-[10px] flex justify-between items-center">
                                                    <a href="shop-left-sidebar.html" class="text-[#999] text-[14px] tracking-[0.03rem]">Jacket</a>
                                                    <div class="cr-pro-rating flex">
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                        <i class="ri-star-line fill text-[#fd576d] ml-[2px] text-[14px]"></i>
                                                    </div>
                                                </div>
                                                <h5 class="cr-pro-title mb-[15px] text-[1.25rem] leading-[1.2]">
                                                    <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[#2b2b2d] block text-[14px] leading-[22px] tracking-[0.85px] capitalize">Jacket for girls</a>
                                                </h5>
                                                <span class="cr-price mb-[15px] text-[16px] flex items-center justify-left text-[#777] leading-[16px]">
                                                    <span class="new-price text-[#2b2b2d] text-[15px] font-semibold font-Manrope">$65.00</span>
                                                    <span class="old-price text-[13px] ml-[10px] line-through text-[#777]">$94.00</span>
                                                </span>
                                                <div class="cr-pro-option transition-all duration-[0.3s] ease-in-out w-full mt-[5px] flex flex-row justify-between items-center opacity-[0.7]">
                                                    <div class="cr-pro-color">
                                                        <ul class="cr-opt-swatch cr-change-img transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <span class="transition-all duration-[0.3s] ease-in-out w-[20px] h-[20px] block cursor-pointer rounded-[5px] bg-[#74c7ff]"></span>
                                                                </a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out w-[24px] h-[24px] p-[1px] mr-[5px] flex cursor-pointer opacity-[0.8] rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-clr-img">
                                                                    <img src="assets/img/product/22.jpg" alt="product">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="cr-pro-size">
                                                        <ul class="cr-opt-size transition-all duration-[0.3s] ease-in-out m-[0] p-[0] flex flex-row">
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px] active">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$25.00" data-new="$20.00" data-tooltip="Large">L</a>
                                                            </li>
                                                            <li class="transition-all duration-[0.3s] ease-in-out h-[24px] mr-[5px] p-[1px] flex cursor-pointer opacity-[0.8] border-[1px] border-solid border-transparent rounded-[5px]">
                                                                <a href="javascript:void(0)" class="cr-opt-sz transition-all duration-[0.3s] ease-in-out min-w-[20px] h-[20px] py-[3px] px-[5px] cursor-pointer flex items-center justify-center text-[12px] leading-[24px] bg-[#e7e7e7] text-[#777] rounded-[5px]" data-old="$27.00" data-new="$22.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
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
            </div>
        </div>
    </section> -->

    <!-- Blog -->
    <!-- <section class="section-blog relative pb-[100px] max-[1200px]:pb-[70px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="mb-[30px]" data-aos="fade-up" data-aos-duration="2000">
                        <div class="cr-banner mb-[15px] text-center">
                            <h2 class="font-Manrope text-[32px] font-bold leading-[1.2] text-[#2b2b2d] max-[1200px]:text-[28px] max-[992px]:text-[25px] max-[768px]:text-[22px]">Latest News</h2>
                        </div>
                        <div class="cr-banner-sub-title w-full">
                            <p class="max-w-[600px] m-auto font-Poppins text-[14px] text-[#212529] leading-[22px] text-center max-[1200px]:w-[80%] max-[992px]:w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap w-full" data-aos="fade-up" data-aos-duration="2000">
                <div class="w-full px-[12px]">
                    <div class="cr-blog-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-blog bg-[#fff] rounded-[5px] border-[1px] border-solid border-[#e9e9e9] overflow-hidden">
                                    <div class="cr-blog-image relative overflow-hidden">
                                        <img src="assets/img/blog/4.jpg" alt="blog-2" class="transition-all duration-[0.3s] ease-in-out w-full">
                                        <div class="cr-blog-date p-[15px] absolute bottom-[12px] right-[12px] bg-[#000000b3] rounded-[5px] z-[2] max-[992px]:bottom-[15px] max-[992px]:right-[15px]">
                                            <span class="font-Manrope text-[23px] text-[#fff] font-bold leading-[1.1] grid text-center max-[992px]:text-[17px]">
                                                10
                                                <code class="text-[17px] font-normal text-[#fff] max-[992px]:text-[15px] break-words">oct</code>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cr-blog-content p-[24px] text-left">
                                        <span class="font-Poppins text-[14px] font-normal leading-[2] text-[#7a7a7a]"><code class="font-Poppins text-[14px] font-normal text-[#777]">By Admin</code> | <a href="blog-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out relative font-Manrope text-[14px] font-light leading-[1.875] text-[#777]">Snacks</a></span>
                                        <h5 class="mt-[5px] mb-[0.5rem] font-Poppins text-[17px] font-semibold leading-[24px] text-[#2b2b2d] max-[1200px]:text-[16px] max-[992px]:text-[15px] max-[768px]:text-[14px] max-[576px]:text-[18px]">Urna pretium elit mauris cursus at elit Vestibulum.</h5>
                                        <a class="read transition-all duration-[0.3s] ease-in-out relative font-Manrope text-[14px] font-bold leading-[1.875] text-[#64b496]" href="blog-detail-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-blog bg-[#fff] rounded-[5px] border-[1px] border-solid border-[#e9e9e9] overflow-hidden">
                                    <div class="cr-blog-image relative overflow-hidden">
                                        <img src="assets/img/blog/5.jpg" alt="blog-1" class="transition-all duration-[0.3s] ease-in-out w-full">
                                        <div class="cr-blog-date p-[15px] absolute bottom-[12px] right-[12px] bg-[#000000b3] rounded-[5px] z-[2] max-[992px]:bottom-[15px] max-[992px]:right-[15px]">
                                            <span class="font-Manrope text-[23px] text-[#fff] font-bold leading-[1.1] grid text-center max-[992px]:text-[17px]">
                                                09<code class="text-[17px] font-normal text-[#fff] max-[992px]:text-[15px] break-words">sep</code>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cr-blog-content p-[24px] text-left">
                                        <span class="font-Poppins text-[14px] font-normal leading-[2] text-[#7a7a7a]"><code class="font-Poppins text-[14px] font-normal text-[#777]">By Admin</code> | <a href="blog-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out relative font-Manrope text-[14px] font-light leading-[1.875] text-[#777]">Food</a></span>
                                        <h5 class="mt-[5px] mb-[0.5rem] font-Poppins text-[17px] font-semibold leading-[24px] text-[#2b2b2d] max-[1200px]:text-[16px] max-[992px]:text-[15px] max-[768px]:text-[14px] max-[576px]:text-[18px]">Best guide to Shopping for organic ingredients.</h5>
                                        <a class="read transition-all duration-[0.3s] ease-in-out relative font-Manrope text-[14px] font-bold leading-[1.875] text-[#64b496]" href="blog-detail-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-blog bg-[#fff] rounded-[5px] border-[1px] border-solid border-[#e9e9e9] overflow-hidden">
                                    <div class="cr-blog-image relative overflow-hidden">
                                        <img src="assets/img/blog/6.jpg" alt="blog-2" class="transition-all duration-[0.3s] ease-in-out w-full">
                                        <div class="cr-blog-date p-[15px] absolute bottom-[12px] right-[12px] bg-[#000000b3] rounded-[5px] z-[2] max-[992px]:bottom-[15px] max-[992px]:right-[15px]">
                                            <span class="font-Manrope text-[23px] text-[#fff] font-bold leading-[1.1] grid text-center max-[992px]:text-[17px]">
                                                12
                                                <code class="text-[17px] font-normal text-[#fff] max-[992px]:text-[15px] break-words">oct</code>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cr-blog-content p-[24px] text-left">
                                        <span class="font-Poppins text-[14px] font-normal leading-[2] text-[#7a7a7a]"><code class="font-Poppins text-[14px] font-normal text-[#777]">By Admin</code> | <a href="blog-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out relative font-Manrope text-[14px] font-light leading-[1.875] text-[#777]">Snacks</a></span>
                                        <h5 class="mt-[5px] mb-[0.5rem] font-Poppins text-[17px] font-semibold leading-[24px] text-[#2b2b2d] max-[1200px]:text-[16px] max-[992px]:text-[15px] max-[768px]:text-[14px] max-[576px]:text-[18px]">Cursus at elit vestibulum urna pretium elit mauris.</h5>
                                        <a class="read transition-all duration-[0.3s] ease-in-out relative font-Manrope text-[14px] font-bold leading-[1.875] text-[#64b496]" href="blog-detail-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                <div class="cr-blog bg-[#fff] rounded-[5px] border-[1px] border-solid border-[#e9e9e9] overflow-hidden">
                                    <div class="cr-blog-image relative overflow-hidden">
                                        <img src="assets/img/blog/7.jpg" alt="blog-3" class="transition-all duration-[0.3s] ease-in-out w-full">
                                        <div class="cr-blog-date p-[15px] absolute bottom-[12px] right-[12px] bg-[#000000b3] rounded-[5px] z-[2] max-[992px]:bottom-[15px] max-[992px]:right-[15px]">
                                            <span class="font-Manrope text-[23px] text-[#fff] font-bold leading-[1.1] grid text-center max-[992px]:text-[17px]">
                                                22
                                                <code class="text-[17px] font-normal text-[#fff] max-[992px]:text-[15px] break-words">jan</code>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cr-blog-content p-[24px] text-left">
                                        <span class="font-Poppins text-[14px] font-normal leading-[2] text-[#7a7a7a]"><code class="font-Poppins text-[14px] font-normal text-[#777]">By Admin</code> | <a href="blog-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out relative font-Manrope text-[14px] font-light leading-[1.875] text-[#777]">Vegetable</a></span>
                                        <h5 class="mt-[5px] mb-[0.5rem] font-Poppins text-[17px] font-semibold leading-[24px] text-[#2b2b2d] max-[1200px]:text-[16px] max-[992px]:text-[15px] max-[768px]:text-[14px] max-[576px]:text-[18px]">Condimentum Nam enim bestMorbi odio sodales.</h5>
                                        <a class="read transition-all duration-[0.3s] ease-in-out relative font-Manrope text-[14px] font-bold leading-[1.875] text-[#64b496]" href="blog-detail-left-sidebar.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Instagram -->
    <!-- <section class="section-insta pb-[100px] max-[1200px]:pb-[70px]" data-aos="fade-up" data-aos-duration="2000">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1600px]:max-w-[1500px] min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full px-[12px]">
                <h2 class="hidden">@Instagram</h2>
                <div class="cr-insta swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="cr-insta-image">
                                <img src="assets/img/insta/9.jpg" alt="insta" class="w-full">
                                <div class="insta-overlay transition-all duration-[0.3s] ease-in-out rounded-[5px] w-full h-full absolute top-[0] left-[0]"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="cr-insta-image">
                                <img src="assets/img/insta/10.jpg" alt="insta" class="w-full">
                                <div class="insta-overlay transition-all duration-[0.3s] ease-in-out rounded-[5px] w-full h-full absolute top-[0] left-[0]"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="cr-insta-image">
                                <img src="assets/img/insta/11.jpg" alt="insta" class="w-full">
                                <div class="insta-overlay transition-all duration-[0.3s] ease-in-out rounded-[5px] w-full h-full absolute top-[0] left-[0]"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="cr-insta-image">
                                <img src="assets/img/insta/12.jpg" alt="insta" class="w-full">
                                <div class="insta-overlay transition-all duration-[0.3s] ease-in-out rounded-[5px] w-full h-full absolute top-[0] left-[0]"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="cr-insta-image">
                                <img src="assets/img/insta/13.jpg" alt="insta" class="w-full">
                                <div class="insta-overlay transition-all duration-[0.3s] ease-in-out rounded-[5px] w-full h-full absolute top-[0] left-[0]"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="cr-insta-image">
                                <img src="assets/img/insta/14.jpg" alt="insta" class="w-full">
                                <div class="insta-overlay transition-all duration-[0.3s] ease-in-out rounded-[5px] w-full h-full absolute top-[0] left-[0]"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="cr-insta-image">
                                <img src="assets/img/insta/15.jpg" alt="insta" class="w-full">
                                <div class="insta-overlay transition-all duration-[0.3s] ease-in-out rounded-[5px] w-full h-full absolute top-[0] left-[0]"></div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="cr-insta-image">
                                <img src="assets/img/insta/16.jpg" alt="insta" class="w-full">
                                <div class="insta-overlay transition-all duration-[0.3s] ease-in-out rounded-[5px] w-full h-full absolute top-[0] left-[0]"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection