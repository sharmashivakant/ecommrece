<div>
    <select name="state" class="<?php echo e($class); ?>">
    <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>" <?php if($key == $selected): ?> selected <?php endif; ?>><?php echo e($state); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH D:\work\tallnpreety\resources\views/components/states.blade.php ENDPATH**/ ?>