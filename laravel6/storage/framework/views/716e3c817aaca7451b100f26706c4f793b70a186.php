<?php $__env->startSection('title'); ?>
    welcome
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(url('/assets/css/list.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <span>
        List Product - Book
    </span>
    <span>
        <a href="<?php echo e(route('book.create')); ?>" class="btn-add" style="margin: 0 10px;">
            + Create New Book
        </a>
        <a href="<?php echo e(route('book.author')); ?>" class="btn-add">
            + Create Author
        </a>
    </span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <a class="card" href="<?php echo e(route('book.show',2)); ?>">
        <img src="" alt="" class="card-image">
        <div class="card-body">
            <div class="card-title">Lord of The Rings</div>
            <div class="card-subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere
                asperiores temporibus aliquam, cum sunt eum quibusdam repudiandae nesciunt fugit ipsum!
            </div>
        </div>
    </a>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(url('assets/js/list.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yagrariksa/Documents/KULIAH/WEB_PRAK/laravel6/resources/views/admin/book/index.blade.php ENDPATH**/ ?>