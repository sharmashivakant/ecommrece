<!-- =============== cart sidebar start=============== -->
<div class="cart-sidebar-wrappper">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart.view')->html();
} elseif ($_instance->childHasBeenRendered('2W5ZHYG')) {
    $componentId = $_instance->getRenderedChildComponentId('2W5ZHYG');
    $componentTag = $_instance->getRenderedChildComponentTagName('2W5ZHYG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2W5ZHYG');
} else {
    $response = \Livewire\Livewire::mount('cart.view');
    $html = $response->html();
    $_instance->logRenderedChild('2W5ZHYG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<!-- =============== cart sidebar end=============== -->
<?php /**PATH D:\work\tallnpreety\resources\views/shared/sidecart.blade.php ENDPATH**/ ?>