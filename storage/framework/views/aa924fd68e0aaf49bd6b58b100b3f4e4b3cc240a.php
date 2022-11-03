home.blade.php



<?php $__env->startSection('title', 'Blade Feature'); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <?php for($i = 1; $i <= 15; $i++): ?>
            <?php if($i < 15 ): ?>
               <p> <?php echo e($i); ?> STEP : Do Believe in ourselves  <p>
            <?php elseif($i == 15): ?>
                <p> RESULT : WE DID IT !!! </p>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\agoras\resources\views/home.blade.php ENDPATH**/ ?>