<div>
    <select name="city" class="<?php echo e($class); ?>">
    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>" <?php if($key == $selected): ?> selected <?php endif; ?>><?php echo e($state); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH C:\xampp\htdocs\tallnpreety\resources\views/components/cities.blade.php ENDPATH**/ ?>