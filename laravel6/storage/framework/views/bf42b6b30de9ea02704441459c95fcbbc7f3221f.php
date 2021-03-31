<?php $__env->startSection('title'); ?>
    welcome
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Details Product - Book
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(url('assets/css/details.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(url('assets/js/details.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="image-preview">
        <img class="preview" src="../assets/image/dump-image.png" alt="">
        <div class="img-thumb-list">
            <img src="../assets/image/dump-image.png" alt="" class="thumb">
            <img src="../assets/image/dump-image.png" alt="" class="thumb">
            <img src="../assets/image/dump-image.png" alt="" class="thumb">
            <img src="../assets/image/dump-image.png" alt="" class="thumb">
            <img src="../assets/image/dump-image.png" alt="" class="thumb">
            <img src="../assets/image/dump-image.png" alt="" class="thumb">
        </div>
    </div>

    <div class="text-details">
        <div class="title">Lord of The Rings</div>

        <div class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum voluptatibus quae
            nihil voluptate magni repellendus eaque accusantium fuga impedit incidunt debitis dolorum
            numquam culpa id voluptas recusandae animi ducimus et, distinctio dicta consequatur tempore est
            saepe? Consequatur, natus. Nihil, ullam minus quos perferendis est beatae sequi odit et
            perspiciatis fuga?</div>

        <div class="price">PRICE : Rp 100.000 ,00</div>

        <div class="button-list">
            <a href="form.html" class="button edit">edit</a>
            <a href="list.html" class="button delete">delete</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yagrariksa/Documents/KULIAH/WEB_PRAK/laravel6/resources/views/admin/book/details.blade.php ENDPATH**/ ?>