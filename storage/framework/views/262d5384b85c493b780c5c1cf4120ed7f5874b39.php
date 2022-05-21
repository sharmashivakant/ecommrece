<div>
    <div class="spinner-border spinner-border-sm text-primary" role="status" wire:loading>
        <span class="visually-hidden">Adding to Cart...</span>
    </div>
    <?php if(!$rows): ?>
        <a wire:click="addToCart" wire:loading.remove href="javascript:void(0)" title="Add to Cart">
            
            <span class="btn btn-danger" style="color: white;">Add To Cart</span>
        </a>
    <?php else: ?>
        <a class="btn btn-dark">Already Added</a>
    <?php endif; ?>
</div>
<?php /**PATH D:\work\tallnpreety\resources\views/livewire/cart/add.blade.php ENDPATH**/ ?>