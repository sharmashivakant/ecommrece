<?php if($errors->count()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo e($message); ?></strong>
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><!-- alert -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success mt-20" role="alert">
        <strong><?php echo e(session('success')); ?></strong>
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    </div><!-- alert -->
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert--danger  mt-20" role="alert">
        <strong><?php echo e(session('error')); ?></strong>
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    </div><!-- alert -->
<?php endif; ?>


<?php /**PATH D:\work\tallnpreety\resources\views/components/validation.blade.php ENDPATH**/ ?>