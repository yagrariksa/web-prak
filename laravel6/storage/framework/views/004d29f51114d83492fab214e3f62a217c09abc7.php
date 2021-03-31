<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <?php echo $__env->yieldContent('head'); ?>
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <a href="<?php echo e(route('admin.home')); ?>" id="sidebar-logo">
                <img src="<?php echo e(url('assets/image/logo.png')); ?>" alt="">
            </a>

            <div id="sidebar-menu">
                <a href="<?php echo e(route('book.index')); ?>" class="menu <?php echo e($page == 'game' ? 'active' : ''); ?>">
                    <?php if($page == 'game'): ?>
                        <img src="<?php echo e(url('assets/image/game-active')); ?>.png" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(url('assets/image/game')); ?>.png" alt="">
                    <?php endif; ?>
                </a>

                <a href="<?php echo e(route('book.index')); ?>" class="menu <?php echo e($page == 'book' ? 'active' : ''); ?>">
                    <?php if($page == 'book'): ?>
                        <img src="<?php echo e(url('assets/image/book-active')); ?>.png" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(url('assets/image/book')); ?>.png" alt="">
                    <?php endif; ?>
                </a>

                <a href="<?php echo e(route('book.index')); ?>" class="menu">
                    <img src="<?php echo e(url('assets/image/movie.png')); ?>" alt="">
                </a>

                <a href="<?php echo e(route('book.index')); ?>" class="menu">
                    <img src="<?php echo e(url('assets/image/music.png')); ?>" alt="">
                </a>
            </div>

            <a href="#" id="sidebar-profile">
                <img src="<?php echo e(url('assets/image/profile.png')); ?>" alt="">
            </a>
        </div>

        <div class="content">
            <div id="page-title">
                <?php echo $__env->yieldContent('page-title'); ?>
            </div>

            <div id="content-inner">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH /home/yagrariksa/Documents/KULIAH/WEB_PRAK/laravel6/resources/views/admin/template/admin.blade.php ENDPATH**/ ?>