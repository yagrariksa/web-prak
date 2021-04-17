<?php $__env->startSection('title'); ?>
    Craete Author
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Create Author - Book
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(url('assets/css/form.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('assets/css/table.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table-owner">
        <thead>
            <tr>
                <th>#</th>
                <th>Author Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Eko</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Booyah</td>
            </tr>
        </tbody>
    </table>
    <form action="<?php echo e(route('book.author.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <input class="form-field" type="text" id="exampleOne" placeholder="Book Name">
            <label for="#exampleOne">Author Name</label>
        </div>

        <div class="form-group submit">
            <button type="submit" class="btn btn-submit">Submit</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yagrariksa/Documents/KULIAH/WEB_PRAK/laravel6/resources/views/admin/book/create-author.blade.php ENDPATH**/ ?>