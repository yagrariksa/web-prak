<?php $__env->startSection('title'); ?>
    welcome
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Selamat Datang
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(url('assets/css/dahsboard-admin.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-max" onclick="location.href='<?php echo e(route('book.index')); ?>';">
            <img id="ico-game" src="<?php echo e(url('assets/image/ico/Vector-1.png')); ?>" alt="">
            <span class="text-dashboard">Game</span>
        </div>
        <div class="col-max" onclick="location.href='<?php echo e(route('book.index')); ?>';">
            <img id="ico-movie" src="<?php echo e(url('assets/image/ico/Vector-2.png')); ?>" alt="">
            <span class="text-dashboard">Movie</span>
        </div>
    </div>
    <div class="row">
        <div class="col-max" onclick="location.href='<?php echo e(route('book.index')); ?>';">
            <img id="ico-book" src="<?php echo e(url('assets/image/ico/Vector-3.png')); ?>" alt="">
            <span class="text-dashboard">Book</span>
        </div>
        <div class="col-max" onclick="location.href='<?php echo e(route('book.index')); ?>';">
            <img id="ico-music" src="<?php echo e(url('assets/image/ico/Vector.png')); ?>" alt="">
            <span class="text-dashboard">Music</span>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yagrariksa/Documents/KULIAH/WEB_PRAK/laravel6/resources/views/admin/welcome.blade.php ENDPATH**/ ?>