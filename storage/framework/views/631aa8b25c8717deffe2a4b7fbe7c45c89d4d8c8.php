<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('shared.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ===============  Feature area start =============== -->
    <div class="features-area mt-96">
        <div class="container">
            <div class="row features-row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-box">
                        <div class="feature-timeline">
                            <span>01</span>
                        </div>

                        <div class="single-feature">
                            <div class="feature-icon">
                                <i class="flaticon-shipping"></i>
                                <span>Our Quality</span>
                            </div>
                            <h5>Most Advanced Features</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-box">
                        <div class="feature-timeline">
                            <span>02</span>
                        </div>

                        <div class="single-feature">
                            <div class="feature-icon">
                                <i class="flaticon-price-tag"></i>
                                <span>Our Price</span>
                            </div>
                            <h5>Very Reasonable Price</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-box">
                        <div class="feature-timeline">
                            <span>03</span>
                        </div>

                        <div class="single-feature">
                            <div class="feature-icon">
                                <i class="flaticon-puzzle"></i>
                                <span>Our Delivery</span>
                            </div>
                            <h5>Product Frist Delivery</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-box">
                        <div class="feature-timeline">
                            <span>04</span>
                        </div>

                        <div class="single-feature">
                            <div class="feature-icon">
                                <i class="flaticon-headphones"></i>
                                <span>Our Support</span>
                            </div>
                            <h5>24/7 Live Support</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ===============  Feature area end =============== -->

    <!-- =============== Product area start =============== -->
    <div class="product-area mt-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header">
                        <h2><?php echo e(date('F Y')); ?> Collection</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content product-tab" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="row">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-card-l">
                                            <div class="product-img custom">
                                                <a href="<?php echo e(route('collection.view',$product->slug)); ?>">
                                                    <img src="<?php echo e(asset('uploads/product/images/' . $product->picture[0])); ?>"
                                                        alt="">
                                                </a>
                                                <div class="product-lavels">
                                                </div>
                                                <div class="product-actions">
                                                    

                                                </div>

                                            </div>
                                            <div class="product-body">
                                                
                                                <h3 class="product-title"><a href="<?php echo e(route('collection.view',$product->slug)); ?>"><?php echo e($product->name); ?></a></h3>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8377; <?php echo e($product->price); ?></ins>
                                                </div>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart.add',['pid' => $product->id ])->html();
} elseif ($_instance->childHasBeenRendered('1GFPqeq')) {
    $componentId = $_instance->getRenderedChildComponentId('1GFPqeq');
    $componentTag = $_instance->getRenderedChildComponentTagName('1GFPqeq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1GFPqeq');
} else {
    $response = \Livewire\Livewire::mount('cart.add',['pid' => $product->id ]);
    $html = $response->html();
    $_instance->logRenderedChild('1GFPqeq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== Product area end =============== -->

    <!-- ===============  Wide banner area start =============== -->
    <div class="wide-banner-area mt-120">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-xxl-6">
                    <div class="banner-content">
                        <h5>Offering the best price</h5>
                        <h2 class="banner-title">TallnPretty's Footwear Collection Can Help You Find the Perfect Shoe.
                            Shop Now. </h2>
                        <div class="banner-btn">
                            <a href="<?php echo e(route('collection.list')); ?>" class="primary-btn-md">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===============  Wide banner area end =============== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tallnpreety\resources\views/pages/frontend/home.blade.php ENDPATH**/ ?>