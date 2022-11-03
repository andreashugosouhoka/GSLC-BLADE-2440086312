welcome.blade.php

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    

    <?php $__env->startSection('title', 'Click Home to see something..'); ?>

    <?php $__env->startSection('content'); ?>
        <head>
                

                <nav class="navbar navbar-expand-lg navbar-primary bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">Home
        </div>
      </nav>
        </body>
    <?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\agoras\resources\views/welcome.blade.php ENDPATH**/ ?>