<!-- =============== cart sidebar start=============== -->
<div class="cart-sidebar-wrappper">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart.view')->html();
} elseif ($_instance->childHasBeenRendered('t06lStL')) {
    $componentId = $_instance->getRenderedChildComponentId('t06lStL');
    $componentTag = $_instance->getRenderedChildComponentTagName('t06lStL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('t06lStL');
} else {
    $response = \Livewire\Livewire::mount('cart.view');
    $html = $response->html();
    $_instance->logRenderedChild('t06lStL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<!-- =============== cart sidebar end=============== -->
<?php /**PATH C:\xampp\htdocs\tallnpreety\resources\views/shared/sidecart.blade.php ENDPATH**/ ?>