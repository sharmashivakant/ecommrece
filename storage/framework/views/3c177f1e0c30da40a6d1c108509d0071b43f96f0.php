<!-- ===============  Topbar area start =============== -->
<div class="topbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 ">
                <ul class="topbar-social-icons d-flex align-items-center">
                    <li class="follow-text">Follow Us</li>
                    <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                    <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
                    <!-- <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li> -->
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-lg-center">
                <div class="topbar-mobil-contact">
                    <a href="tel:+8801761111456">Hot Line : +91 172 1111 4567</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <ul class="topbar-right d-flex align-items-center justify-content-end">
                    <li class="order-track">
                        <a href="#"><i class="flaticon-pin"></i> Track Order</a>
                    </li>
                    <li>
                        <select class="languege-select" aria-label="Default select example">
                            <option selected>INR</option>
                            <option value="1">USD</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ===============  Topbar area end =============== -->
<!-- ===============  header area start =============== -->
<header>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo d-flex justify-content-between align-items-center h-100">
                        <a href="/" ><img src="<?php echo e(asset('assets/images/logo.png')); ?>"  alt="logo"></a>

                        <div class="mobile-menu d-flex ">

                            <ul class="d-flex mobil-nav-icons align-items-center">
                                <li class="search-icon global-top"><a href="javascript:void(0)"><i
                                            class="flaticon-search-1"></i></a></li>
                                <li><a href="<?php echo e(route('account.login')); ?>"><i class="flaticon-user"></i></a></li>
                                <li class="category-icon"><a href="javascript:void(0)"><i
                                            class="flaticon-menu"></i></a></li>
                                <li class="cart-icon"><a href="javascript:void(0)"><i
                                            class="flaticon-shopping-cart"></i></a>
                                    <div class="has-count"><?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart.count')->html();
} elseif ($_instance->childHasBeenRendered('QpEavo4')) {
    $componentId = $_instance->getRenderedChildComponentId('QpEavo4');
    $componentTag = $_instance->getRenderedChildComponentTagName('QpEavo4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QpEavo4');
} else {
    $response = \Livewire\Livewire::mount('cart.count');
    $html = $response->html();
    $_instance->logRenderedChild('QpEavo4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>
                                </li>
                            </ul>
                            <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                <span class="h-top"></span>
                                <span class="h-middle"></span>
                                <span class="h-bottom"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-8 col-md-8 col-sm-6 col-xs-6">

                    <nav class="main-nav">
                        <div class="inner-logo d-xl-none">
                            <a href="index.html">
                                <img src="<?php echo e(asset('assets/images/logo-v2.png')); ?>" alt="">
                            </a>
                        </div>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/contact-us">Contact Us</a></li>
                        </ul>

                        <ul class="inner-social-icons d-xl-none d-flex flex-wrap">
                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                            <!-- <li><a href="#"><i class="flaticon-twitter-1"></i></a></li> -->
                            <li><a href="#"><i class="flaticon-instagram-2"></i></a></li>
                            <!-- <li><a href="#"><i class="flaticon-pinterest-1"></i></a></li> -->
                        </ul>
                    </nav>
                </div>

                <div class="col-xl-3 col-2 d-none d-xl-block ">
                    <div class="nav-right h-100 d-flex align-items-center justify-content-end">
                        <ul class="d-flex nav-icons">
                            <li class="search-icon"><a href="javascript:void(0)"><i
                                        class="flaticon-search-1"></i></a></li>
                            <li><a href="<?php echo e(route('account.login')); ?>"><i class="flaticon-user"></i></a></li>
                            <li class="category-icon"><a href="javascript:void(0)"><i class="flaticon-menu"></i></a>
                            </li>
                            <li class="cart-icon"><a href="javascript:void(0)"><i
                                        class="flaticon-shopping-cart"></i></a>
                                <div class="has-count"><?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart.count')->html();
} elseif ($_instance->childHasBeenRendered('TNobgbI')) {
    $componentId = $_instance->getRenderedChildComponentId('TNobgbI');
    $componentTag = $_instance->getRenderedChildComponentTagName('TNobgbI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TNobgbI');
} else {
    $response = \Livewire\Livewire::mount('cart.count');
    $html = $response->html();
    $_instance->logRenderedChild('TNobgbI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- ===============  header area end =============== -->
<?php /**PATH D:\work\tallnpreety\resources\views/shared/header.blade.php ENDPATH**/ ?>