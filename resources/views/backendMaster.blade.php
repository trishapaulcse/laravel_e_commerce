
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ecommerce, market, shop, mart, cart, deal, multipurpose, marketplace">
    <meta name="description" content="Carrot - Multipurpose eCommerce Tailwind CSS Template.">
    <meta name="author" content="ashishmaraviya">
    <title>Carrot - Multipurpose eCommerce Tailwind CSS Template</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/img/logo/favicon.png">

    <!-- Icon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="assets/css/vendor/flaticons.css">

    <!-- Vendor -->
    <link rel="stylesheet" href="assets/css/vendor/animate.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.min.css">
    <link rel="stylesheet" href="assets/css/vendor/range-slider.css">
    <link rel="stylesheet" href="assets/css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery.slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/owl.carousel.min.css">

    <!-- Tailwind CSS -->
    <script src="assets/js/vendor/tailwindcss-4.1.4.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/demo-2.css">

</head>

<body class="body-bg-6">

    <!-- Loader -->
    <!-- <div id="cr-overlay" class="w-full h-full fixed top-[0] right-[0] left-[0] bottom-[0] bg-[#fff] flex items-center justify-center z-[99]">
        <span class="loader w-[10px] h-[10px] rounded-[50%] inline-block relative text-[#64b496] left-[-100px]"></span>
    </div> -->

    <!-- Header -->
    @include('component.header')

    <!-- Mobile menu -->
    <!-- <div class="cr-sidebar-overlay w-full h-screen hidden fixed top-[0] left-[0] bg-[#000000b3] z-[21]"></div> -->
    <!-- <div id="cr_mobile_menu" class="cr-side-cart cr-mobile-menu transition-all duration-[0.5s] ease h-full p-[15px] fixed top-[0] bg-[#fff] z-[22] overflow-auto w-[400px] left-[-400px] max-[576px]:w-[300px] max-[576px]:left-[-300px] max-[420px]:w-[250px] max-[420px]:left-[-250px]">
        <div class="cr-menu-title w-full mb-[10px] pb-[10px] flex flex-wrap justify-between border-b-[2px] border-solid border-[#e9e9e9]">
            <span class="menu-title text-[18px] font-semibold text-[#64b496]">My Menu</span>
            <button type="button" class="cr-close relative border-[0] text-[30px] leading-[1] text-[#999] bg-[#fff]">×</button>
        </div>
        <div class="cr-menu-inner">
            <div class="cr-menu-content">
                <ul>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="menu-toggle h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="javascript:void(0)" class="dropdown-list py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Home</a>
                        <ul class="sub-menu w-full mb-[0] p-[0] hidden min-w-auto opacity-[1]">
                            <li class="relative leading-[28px]">
                                <a href="index.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Grocery</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="demo-2.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Fashion</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="menu-toggle h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="javascript:void(0)" class="dropdown-list py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Category</a>
                        <ul class="sub-menu w-full mb-[0] p-[0] hidden min-w-auto opacity-[1]">
                            <li class="relative leading-[28px]">
                                <a href="shop-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Shop Left sidebar</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="shop-right-sidebar.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Shop Right sidebar</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="shop-full-width.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Full Width</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="menu-toggle h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="javascript:void(0)" class="dropdown-list py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">product</a>
                        <ul class="sub-menu w-full mb-[0] p-[0] hidden min-w-auto opacity-[1]">
                            <li class="relative leading-[28px]">
                                <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">product Left sidebar</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="product-right-sidebar.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">product Right sidebar</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="product-full-width.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Product Full Width </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="menu-toggle h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="javascript:void(0)" class="dropdown-list py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Pages</a>
                        <ul class="sub-menu w-full mb-[0] p-[0] hidden min-w-auto opacity-[1]">
                            <li class="relative leading-[28px]">
                                <a href="about.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">About Us</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="contact-us.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Contact Us</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="cart.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Cart</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="checkout.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Checkout</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="track-order.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Track Order</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="wishlist.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Wishlist</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="faq.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Faq</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="login.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Login</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="register.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Register</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="policy.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Policy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="menu-toggle h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="javascript:void(0)" class="dropdown-list py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Blog</a>
                        <ul class="sub-menu w-full mb-[0] p-[0] hidden min-w-auto opacity-[1]">
                            <li class="relative leading-[28px]">
                                <a href="blog-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Left Sidebar</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="blog-right-sidebar.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Right Sidebar</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="blog-full-width.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Full Width</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="blog-detail-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Detail Left Sidebar</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="blog-detail-right-sidebar.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Detail Right Sidebar</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="blog-detail-full-width.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Detail Full Width</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list relative leading-[28px]">
                        <span class="menu-toggle h-[48px] absolute top-[0] right-[0] z-[-1] flex justify-center items-center cursor-pointer bg-transparent"></span>
                        <a href="javascript:void(0)" class="dropdown-list py-[12px] block capitalize text-[15px] font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Element</a>
                        <ul class="sub-menu w-full mb-[0] p-[0] hidden min-w-auto opacity-[1]">
                            <li class="relative leading-[28px]">
                                <a href="elements-products.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Products</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="elements-typography.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Typography</a>
                            </li>
                            <li class="relative leading-[28px]">
                                <a href="elements-buttons.html" class="transition-all duration-[0.3s] ease-in-out pl-[20px] opacity-[0.8] text-[14px] py-[12px] block capitalize font-medium text-[#444] border-b-[1px] border-solid border-[#e9e9e9]">Buttons</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->

    <!-- Hero slider -->
    @yield('slider')


    @yield('mainContent')
    

    <!-- Footer -->
    @include('component.footer')

    <!-- Tab to top -->
    <a href="#Top" class="back-to-top result-placeholder h-[38px] w-[38px] hidden fixed right-[15px] bottom-[15px] z-[10] cursor-pointer rounded-[20px] bg-[#fff] text-[#64b496] border-[1px] border-solid border-[#64b496] text-center text-[22px] leading-[1.6] hover:transition-all hover:duration-[0.3s] hover:ease-in-out">
        <i class="ri-arrow-up-line text-[20px]"></i>
        <div class="back-to-top-wrap">
            <svg viewBox="-1 -1 102 102" class="w-[36px] h-[36px] fixed right-[16px] bottom-[16px]">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" class="fill-transparent stroke-[#64b496] stroke-[5px]" />
            </svg>
        </div>
    </a>

    <!-- Quick View Model -->
    <div class="cr-modal-overlay w-full h-screen hidden fixed top-0 left-0 z-[10] bg-[#000000b3]"></div>
    <div class="cr-modal max-[576px]:w-full fixed top-[50%] left-[50%] z-[30] max-[768px]:w-full hidden max-[768px]:max-h-full max-[768px]:overflow-y-auto">
        <div class="cr-modal-dialog h-full my-[0%] mx-auto max-w-[900px] w-[900px] max-[992px]:max-w-[650px] max-[992px]:w-[650px] max-[768px]:h-auto max-[768px]:m-[0] max-[768px]:py-[35px] max-[768px]:mx-auto max-[576px]:w-[90%] transition-transform duration-[0.3s] ease-out cr-fadeOutUp">
            <div class="modal-content p-[30px] relative bg-[#fff] rounded-[5px]">
                <div class="cr-close-modal absolute top-[10px] right-[10px] leading-[18px]">
                    <i class="ri-close-line text-[18px] font-extrabold text-[#ca4141] cursor-pointer"></i>
                </div>
                <div class="modal-body mx-[-12px] max-[768px]:mx-[0]">
                    <div class="w-full flex flex-wrap w-full">
                        <div class="min-[768px]:w-[41.66%] px-[12px] max-[768px]:px-[0] w-full">
                            <div class="zoom-image-hover modal-border-image border-[1px] border-solid border-[#e9e9e9] h-full flex items-center text-center bg-[#f7f7f8] rounded-[5px] crosshair">
                                <img src="assets/img/product/tab-1.jpg" alt="product-tab-2" class="product-image w-full block m-auto">
                            </div>
                        </div>
                        <div class="min-[768px]:w-[58.33%] px-[12px] max-[768px]:px-[0] w-full">
                            <div class="cr-size-and-weight-contain border-b-[1px] border-solid border-[#e9e9e9] pb-[20px] max-[768px]:mt-[24px]">
                                <h2 class="heading mb-[15px] block text-[#2b2b2d] text-[22px] leading-[1.5] font-medium max-[1400px]:text-[26px] max-[992px]:text-[20px]">Peach Seeds Of Change Oraganic Quinoa, Brown fruit</h2>
                                <p class="mb-[0] font-Poppins text-[#7a7a7a] text-[14px] leading-[1.75]">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1900s,</p>
                            </div>
                            <div class="cr-size-and-weight pt-[20px]">
                                <div class="cr-review-star flex">
                                    <div class="cr-star mr-[10px]">
                                        <i class="ri-star-fill text-[16px] text-[#f5885f]"></i>
                                        <i class="ri-star-fill text-[16px] text-[#f5885f]"></i>
                                        <i class="ri-star-fill text-[16px] text-[#f5885f]"></i>
                                        <i class="ri-star-fill text-[16px] text-[#f5885f]"></i>
                                        <i class="ri-star-fill text-[16px] text-[#f5885f]"></i>
                                    </div>
                                    <p class="mb-[0] text-[15px] font-Poppins text-[#7a7a7a] leading-[1.75] max-[380px]:hidden">( 75 Review )</p>
                                </div>
                                <div class="cr-product-price pt-[20px]">
                                    <span class="new-price font-Poppins text-[24px] font-semibold leading-[1.167] text-[#64b496] max-[768px]:text-[22px] max-[576px]:text-[20px]">$120.25</span>
                                    <span class="old-price font-Poppins text-[16px] line-through leading-[1.75] text-[#7a7a7a]">$123.25</span>
                                </div>
                                <div class="cr-size-weight flex items-center pt-[20px] max-[380px]:flex-col max-[380px]:justify-start max-[380px]:items-start">
                                    <h5 class="font-Poppins mb-[0] text-[16px] leading-[1.556] text-[#2b2b2d] max-[1200px]:min-w-[100px] max-[1200px]:text-[14px]"><span>Size</span>/<span>Weight</span> :</h5>
                                    <div class="cr-kg pl-[10px] max-[380px]:pl-[0] max-[380px]:pt-[10px]">
                                        <ul class="w-full p-[0] m-[0] flex flex-wrap">
                                            <li class="transition-all duration-[0.3s] ease-in-out m-[2px] py-[5px] px-[10px] font-Poppins text-[12px] leading-[1] bg-[#fff] text-[#777] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] cursor-pointer max-[1200px]:mr-[5px] active-color">500gm</li>
                                            <li class="transition-all duration-[0.3s] ease-in-out m-[2px] py-[5px] px-[10px] font-Poppins text-[12px] leading-[1] bg-[#fff] text-[#777] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] cursor-pointer max-[1200px]:mr-[5px]">1kg</li>
                                            <li class="transition-all duration-[0.3s] ease-in-out m-[2px] py-[5px] px-[10px] font-Poppins text-[12px] leading-[1] bg-[#fff] text-[#777] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] cursor-pointer max-[1200px]:mr-[5px]">2kg</li>
                                            <li class="transition-all duration-[0.3s] ease-in-out m-[2px] py-[5px] px-[10px] font-Poppins text-[12px] leading-[1] bg-[#fff] text-[#777] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] cursor-pointer max-[1200px]:mr-[5px]">5kg</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cr-add-card flex pt-[20px]">
                                    <div class="cr-qty-main h-full flex relative">
                                        <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                            class="quantity h-[40px] w-[40px] mr-[5px] text-center border-[1px] border-solid border-[#e9e9e9] rounded-[5px]">
                                        <button type="button" id="add_model" class="plus h-[18px] w-[18px] p-[0] bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] leading-[0]">+</button>
                                        <button type="button" id="sub_model" class="minus h-[18px] w-[18px] p-[0] bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] leading-[0] absolute bottom-[0] right-[0]">-</button>
                                    </div>
                                    <div class="cr-add-button ml-[15px]">
                                        <button type="button" class="cr-button h-[40px] font-bold transition-all duration-[0.3s] ease-in-out py-[8px] px-[22px] max-[380px]:text-[13px] text-[14px] font-Manrope capitalize leading-[1.2] bg-[#64b496] text-[#fff] border-[1px] border-solid border-[#64b496] rounded-[5px] flex items-center justify-center hover:bg-[#000] hover:border-[#000] max-[1200px]:py-[8px] max-[1200px]:px-[15px]">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart -->
    <div class="cr-cart-overlay w-full h-screen hidden fixed z-[10] top-[0] left-[0] bg-[#000000b3]"></div>
    <div class="cr-cart-view h-full fixed top-[0] right-[-350px] z-[20] transition-all duration-[0.4s] ease text-[#000]">
        <div class="cr-cart-inner w-[350px] h-full m-[0] px-[20px] bg-[#fff] relative z-[9] flex flex-col justify-between max-[576px]:w-[300px] max-[360px]:w-[280px]">
            <div class="cr-cart-top">
                <div class="cr-cart-title mb-[15px] py-[15px] flex flex-row justify-between items-center border-b-[1px] border-solid border-[#e9e9e9]">
                    <h6 class="m-[0] text-[17px] font-bold text-[#2b2b2d] leading-[1.2]">My Cart</h6>
                    <button type="button" class="close-cart text-[#fb5555] text-[20px] font-extrabold bg-none border-[0]">×</button>
                </div>
                <ul class="crcart-pro-items">
                    <li class="mb-[20px] pb-[20px] flex overflow-hidden border-b-[1px] border-solid border-[#e9e9e9]">
                        <a href="product-left-sidebar.html" class="crside_pro_img m-auto grow-[1] basis-[20%]">
                            <img src="assets/img/product/4.jpg" alt="product-1" class="max-w-full rounded-[5px]">
                        </a>
                        <div class="cr-pro-content pl-[15px] relative grow-[1] basis-[70%] overflow-hidden">
                            <a href="product-left-sidebar.html" class="cart_pro_title w-full pr-[30px] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">Fresh Pomegranate</a>
                            <span class="cart-price mt-[5px] text-[14px] block"><span class="text-[#777] font-bold text-[16px]">$56.00</span> x 1kg</span>
                            <div class="cr-cart-qty mt-[5px]">
                                <div class="cart-qty-plus-minus m-[0] w-[80px] h-[30px] relative overflow-hidden flex bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] items-center justify-between">
                                    <button type="button" class="plus h-[25px] w-[25px] mt-[-2px] border-[0] bg-transparent flex justify-center items-center">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity w-[30px] m-[0] p-[0] text-[#444] float-left text-[14px] font-semibold leading-[38px] h-auto text-center outline-[0]">
                                    <button type="button" class="minus h-[25px] w-[25px] mt-[-2px] border-[0] bg-transparent flex justify-center items-center">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove py-[0] px-[9px] absolute top-[0] right-[0] text-[17px] leading-[15px] bg-[#fff] text-[#fb5555]">×</a>
                        </div>
                    </li>
                    <li class="mb-[20px] pb-[20px] flex overflow-hidden border-b-[1px] border-solid border-[#e9e9e9]">
                        <a href="product-left-sidebar.html" class="crside_pro_img m-auto grow-[1] basis-[20%]">
                            <img src="assets/img/product/2.jpg" alt="product-2" class="max-w-full rounded-[5px]">
                        </a>
                        <div class="cr-pro-content pl-[15px] relative grow-[1] basis-[70%] overflow-hidden">
                            <a href="product-left-sidebar.html" class="cart_pro_title w-full pr-[30px] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">Green Apples</a>
                            <span class="cart-price mt-[5px] text-[14px] block"><span class="text-[#777] font-bold text-[16px]">$75.00</span> x 1kg</span>
                            <div class="cr-cart-qty mt-[5px]">
                                <div class="cart-qty-plus-minus m-[0] w-[80px] h-[30px] relative overflow-hidden flex bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] items-center justify-between">
                                    <button type="button" class="plus h-[25px] w-[25px] mt-[-2px] border-[0] bg-transparent flex justify-center items-center">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity w-[30px] m-[0] p-[0] text-[#444] float-left text-[14px] font-semibold leading-[38px] h-auto text-center outline-[0]">
                                    <button type="button" class="minus h-[25px] w-[25px] mt-[-2px] border-[0] bg-transparent flex justify-center items-center">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove py-[0] px-[9px] absolute top-[0] right-[0] text-[17px] leading-[15px] bg-[#fff] text-[#fb5555]">×</a>
                        </div>
                    </li>
                    <li class="mb-[20px] pb-[20px] flex overflow-hidden border-b-[1px] border-solid border-[#e9e9e9]">
                        <a href="product-left-sidebar.html" class="crside_pro_img m-auto grow-[1] basis-[20%]">
                            <img src="assets/img/product/3.jpg" alt="product-3" class="max-w-full rounded-[5px]">
                        </a>
                        <div class="cr-pro-content pl-[15px] relative grow-[1] basis-[70%] overflow-hidden">
                            <a href="product-left-sidebar.html" class="cart_pro_title w-full pr-[30px] whitespace-normal overflow-hidden text-ellipsis block text-[15px] leading-[18px] font-normal">Watermelon - Small</a>
                            <span class="cart-price mt-[5px] text-[14px] block"><span class="text-[#777] font-bold text-[16px]">$48.00</span> x 5kg</span>
                            <div class="cr-cart-qty mt-[5px]">
                                <div class="cart-qty-plus-minus m-[0] w-[80px] h-[30px] relative overflow-hidden flex bg-[#fff] border-[1px] border-solid border-[#e9e9e9] rounded-[5px] items-center justify-between">
                                    <button type="button" class="plus h-[25px] w-[25px] mt-[-2px] border-[0] bg-transparent flex justify-center items-center">+</button>
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity w-[30px] m-[0] p-[0] text-[#444] float-left text-[14px] font-semibold leading-[38px] h-auto text-center outline-[0]">
                                    <button type="button" class="minus h-[25px] w-[25px] mt-[-2px] border-[0] bg-transparent flex justify-center items-center">-</button>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="remove py-[0] px-[9px] absolute top-[0] right-[0] text-[17px] leading-[15px] bg-[#fff] text-[#fb5555]">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cr-cart-bottom relative top-[-20px]">
                <div class="cart-sub-total mt-[20px] mb-[10px] pt-[0] pb-[8px] flex flex-wrap justify-between border-t-[1px] border-solid border-[#e9e9e9]">
                    <table class="table cart-table mt-[10px] w-full">
                        <tbody>
                            <tr>
                                <td class="text-left text-[16px] text-[#000] font-normal py-[7px]">Sub-Total :</td>
                                <td class="text-right text-[15px] text-[#000] font-bold py-[7px]">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left text-[16px] text-[#000] font-normal py-[7px]">VAT (20%) :</td>
                                <td class="text-right text-[15px] text-[#000] font-bold py-[7px]">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left text-[16px] text-[#000] font-normal py-[7px]">Total :</td>
                                <td class="text-right text-[15px] text-[#000] font-bold py-[7px]">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn flex justify-between">
                    <a href="cart.html" class="cr-button h-[40px] font-bold transition-all duration-[0.3s] ease-in-out py-[8px] px-[22px] text-[14px] font-Manrope capitalize leading-[1.2] bg-[#64b496] text-[#fff] border-[1px] border-solid border-[#64b496] rounded-[5px] flex items-center justify-center hover:bg-[#000] hover:border-[#000]">View Cart</a>
                    <a href="checkout.html" class="cr-btn-secondary h-[40px] font-bold transition-all duration-[0.3s] ease-in-out py-[8px] px-[22px] text-[14px] font-Manrope capitalize leading-[1.2] bg-[#fff] text-[#64b496] border-[1px] border-solid border-[#64b496] rounded-[5px] flex items-center justify-center hover:text-[#fff] hover:bg-[#64b496] hover:border-[#64b496]">Checkout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Side-tool -->
    <div class="cr-tool-overlay w-full h-screen hidden fixed z-[10] top-[0] left-[0] bg-[#000000b3]"></div>
    <div class="cr-tool transition-all duration-[0.4s] ease fixed top-[0] right-[-250px] z-[20] text-[#000]">
        <div class="cr-tool-btn flex text-[#000]">
            <a href="javascript:void(0)" class="btn-cr-tool result-placeholder transition-all duration-[0.3s] ease-in h-[43px] w-[43px] flex items-center justify-center absolute top-[30%] right-[250px] border-[0] bg-[#373840] text-[#fff] rounded-[5px]">
                <i class="ri-settings-line text-[22px]"></i>
            </a>
            <div class="color-variant w-[250px] h-screen p-[0] m-[0] bg-[#fff] overflow-auto">
                <div class="cr-bar-title mb-[15px] p-[15px] flex flex-row justify-between items-center border-b-[1px] border-solid border-[#e9e9e9] text-[#000]">
                    <h6 class="m-[0] text-[17px] font-bold text-[#2b2b2d] leading-[1.2]">Tools</h6>
                    <a href="javascript:void(0)" class="close-tools text-[17px] text-[#fb5555]">
                        <i class="ri-close-line text-[22px]"></i>
                    </a>
                </div>
                <div class="cr-tools-detail px-[15px] pb-[15px] border-b-[1px] border-solid border-[#e9e9e9]">
                    <div class="heading py-[15px]">
                        <h2 class="m-[0] font-Poppins text-[14px] font-semibold text-[#2b2b2d] leading-[1.2]">Select Color</h2>
                    </div>
                    <ul class="cr-color">
                        <li class="colors cursor-pointer bg-[#64b496] c1 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative active-colors">
                        </li>
                        <li class="colors cursor-pointer bg-[#f5885f] c2 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative">
                        </li>
                        <li class="colors cursor-pointer bg-[#ae8d62] c3 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative">
                        </li>
                        <li class="colors cursor-pointer bg-[#3f51b5] c4 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative">
                        </li>
                        <li class="colors cursor-pointer bg-[#f44336] c5 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative">
                        </li>
                        <li class="colors cursor-pointer bg-[#e91e4c] c6 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative">
                        </li>
                        <li class="colors cursor-pointer bg-[#607d8b] c7 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative">
                        </li>
                        <li class="colors cursor-pointer bg-[#5392d2] c8 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative">
                        </li>
                        <li class="colors cursor-pointer bg-[#03492f] c9 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative">
                        </li>
                        <li class="colors cursor-pointer bg-[#9655ca] c10 h-[36px] w-[36px] m-[5px] inline-block align-middle relative rounded-[5px] relative">
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail px-[15px] pb-[15px] border-b-[1px] border-solid border-[#e9e9e9]">
                    <div class="heading py-[15px]">
                        <h2 class="m-[0] font-Poppins text-[14px] font-semibold text-[#2b2b2d] leading-[1.2]">Dark mode</h2>
                    </div>
                    <ul class="dark-mode">
                        <li class="dark bg-[#000] text-[#fff] h-[85px] w-[85px] m-[5px] relative inline-block align-middle rounded-[5px] cursor-pointer">
                        </li>
                        <li class="white bg-[#fff] text-[#000] h-[85px] w-[85px] m-[5px] relative inline-block align-middle rounded-[5px] cursor-pointer active-dark-mode">
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail px-[15px] pb-[15px] border-b-[1px] border-solid border-[#e9e9e9]">
                    <div class="heading py-[15px]">
                        <h2 class="m-[0] font-Poppins text-[14px] font-semibold text-[#2b2b2d] leading-[1.2]">RTL mode</h2>
                    </div>
                    <ul class="rtl-mode">
                        <li class="rtl m-[5px] relative inline-block align-middle cursor-pointer rounded-[5px]">
                            <img src="assets/img/tool/rtl.png" alt="rtl" class="h-[85px] w-[85px] rounded-[5px]">
                        </li>
                        <li class="ltr m-[5px] relative inline-block align-middle cursor-pointer rounded-[5px] active-rtl-mode">
                            <img src="assets/img/tool/ltr.png" alt="ltr" class="h-[85px] w-[85px] rounded-[5px]">
                        </li>
                    </ul>
                </div>
                <div class="cr-tools-detail px-[15px] pb-[15px] border-b-[1px] border-solid border-[#e9e9e9]">
                    <div class="heading py-[15px]">
                        <h2 class="m-[0] font-Poppins text-[14px] font-semibold text-[#2b2b2d] leading-[1.2]">Backgrounds</h2>
                    </div>
                    <ul class="bg-panel">
                        <li class="bg-1 h-[85px] w-[85px] m-[5px] inline-block align-middle relative rounded-[5px] cursor-pointer">
                            <img src="assets/img/shape/bg-shape-1.png" alt="bg-shape-1" class="w-[85px] h-[85px] border-[1px] border-solid border-[#e9e9e9] rounded-[5px]">
                        </li>
                        <li class="bg-2 h-[85px] w-[85px] m-[5px] inline-block align-middle relative rounded-[5px] cursor-pointer">
                            <img src="assets/img/shape/bg-shape-2.png" alt="bg-shape-2" class="w-[85px] h-[85px] border-[1px] border-solid border-[#e9e9e9] rounded-[5px]">
                        </li>
                        <li class="bg-3 h-[85px] w-[85px] m-[5px] inline-block align-middle relative rounded-[5px] cursor-pointer">
                            <img src="assets/img/shape/bg-shape-3.png" alt="bg-shape-3" class="w-[85px] h-[85px] border-[1px] border-solid border-[#e9e9e9] rounded-[5px]">
                        </li>
                        <li class="bg-4 h-[85px] w-[85px] m-[5px] inline-block align-middle relative rounded-[5px] cursor-pointer">
                            <img src="assets/img/shape/bg-shape-4.png" alt="bg-shape-4" class="w-[85px] h-[85px] border-[1px] border-solid border-[#e9e9e9] rounded-[5px]">
                        </li>
                        <li class="bg-5 h-[85px] w-[85px] m-[5px] inline-block align-middle relative rounded-[5px] cursor-pointer">
                            <img src="assets/img/shape/bg-shape-5.png" alt="bg-shape-5" class="w-[85px] h-[85px] border-[1px] border-solid border-[#e9e9e9] rounded-[5px]">
                        </li>
                        <li class="bg-6 h-[85px] w-[85px] m-[5px] inline-block align-middle relative rounded-[5px] cursor-pointer active-bg-panel">
                            <img src="assets/img/shape/bg-shape-6.png" alt="bg-shape-6" class="w-[85px] h-[85px] border-[1px] border-solid border-[#e9e9e9] rounded-[5px]">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Custom -->
    <script src="assets/js/vendor/jquery-3.6.4.min.js"></script>
    <script src="assets/js/vendor/jquery.zoom.min.js"></script>
    <script src="assets/js/vendor/mixitup.min.js"></script>
    <script src="assets/js/vendor/range-slider.js"></script>
    <script src="assets/js/vendor/aos.min.js"></script>
    <script src="assets/js/vendor/swiper-bundle.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/owl.carousel.min.js"></script>
    <script src="assets/js/vendor/countdownTimer.js"></script>
    <link rel="stylesheet" href="assets/css/color-3.css" id="add_class">

    <!-- Main Custom -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demo-2.js"></script>

</body>

</html>