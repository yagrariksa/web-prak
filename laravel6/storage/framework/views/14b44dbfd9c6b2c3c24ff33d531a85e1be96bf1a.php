<?php $__env->startSection('title'); ?>
    Craete Book
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Create Product - Book
<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(url('assets/css/form.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('book.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <input class="form-field" type="text" id="exampleOne" placeholder="Book Name">
        <label for="#exampleOne">Book Name</label>
    </div>
    <div class="form-group">
        <select name="" id="exampleTwo" class="form-field">
            <option value="satu">satu</option>
            <option value="dua">dua</option>
            <option value="tiga">tiga</option>
        </select>
        <label for="#exampleTwo">Book Author</label>
    </div>
    <div class="form-group">
        <textarea name="" id="example3" class="form-field"></textarea>
        <label for="#example3">Book Desc</label>
    </div>
    <div class="form-group">
        <input class="form-field" type="number" id="example4" placeholder="Book Price">
        <label for="#example4">Book Price</label>
    </div>

    <div class="form-group">
        <input class="custom-file-input form-field" type="file" id="docpicker" accept=".jpg,.jpeg,.png">
        <label for="#dicoucker">Upload</label>
    </div>

    <div class="form-group submit">
        <button type="submit" class="btn btn-submit">Submit</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/yagrariksa/Documents/KULIAH/WEB_PRAK/laravel6/resources/views/admin/book/create.blade.php ENDPATH**/ ?>