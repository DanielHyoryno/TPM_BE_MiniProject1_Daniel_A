 <!-- Extend the layouts.app layout -->

<?php $__env->startSection('title', 'Home'); ?> <!-- Set the page title to "Home" -->

<?php $__env->startSection('content'); ?> <!-- Define the content section specific to the home page -->
    <div class="container">
        <h1 class="text-center mb-4">TOKO BANGUNAN AHYONG!</h1>
        <p class="lead text-center">Browse our wide range of products and enjoy great deals.</p>

        <div class="text-center">
            <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary">Browse Products</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\TMP - Projects\TPM-Project1\laravel\resources\views/home.blade.php ENDPATH**/ ?>