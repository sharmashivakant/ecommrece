<div>
    <div class="spinner-border spinner-border-sm text-primary" role="status" wire:loading>
        <span class="visually-hidden">Adding to Cart...</span>
    </div>
    @if(!$rows)
        <a wire:click="addToCart" wire:loading.remove href="javascript:void(0)" title="Add to Cart">
            {{-- <i class="flaticon-shopping-cart"></i> --}}
            <span class="btn btn-danger" style="color: white;">Add To Cart</span>
        </a>
    @else
        <a class="btn btn-dark">Already Added</a>
    @endif
</div>
