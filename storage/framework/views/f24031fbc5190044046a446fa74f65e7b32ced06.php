<!DOCTYPE html>
<html lang="en">

<head>
    <title>Academics &mdash; Website by Colorlib</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/cssHeader.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/cssContent.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/cssFooter.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/cssBody.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/cssDonvitructhuoc.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/cssTintuc.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/bodyChitieu.css')); ?>" type="text/css">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    

</head>
<div class="container-fluid bg-secondary">
    <?php echo $__env->make('block.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('slibar'); ?>
    <?php echo $__env->yieldContent('donvitructhuoc'); ?>
    <?php echo $__env->yieldContent('bodychitieu'); ?>
    <?php echo $__env->yieldContent('tintuc'); ?>
        <div id="content" style="min-height: 700px">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    <?php echo $__env->make('block.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>




</body>

</html>
<?php /**PATH C:\Users\dragon\Desktop\phattrienweb\resources\views/index.blade.php ENDPATH**/ ?>