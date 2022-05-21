<div>
    <select name="<?php echo e($name); ?>" class="<?php echo e($class); ?>">
        <?php $__currentLoopData = $countryList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($key); ?>" <?php if($selected === $key): ?> selected <?php endif; ?>><?php echo e($country); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH D:\work\tallnpreety\resources\views/components/countries.blade.php ENDPATH**/ ?>