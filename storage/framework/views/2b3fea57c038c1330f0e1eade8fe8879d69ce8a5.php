
<?php $__env->startSection('slibar'); ?>
    <?php echo $__env->make('block.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('donvitructhuoc'); ?>
    <?php echo $__env->make('block.donvitructhuoc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodychitieu'); ?>
    <?php echo $__env->make('block.bodychitieu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tintuc'); ?>
    <?php echo $__env->make('block.tintuc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/homePage.blade.php ENDPATH**/ ?>