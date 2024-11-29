<?php $__env->startSection('content'); ?>
    <h1 class="text-center mb-4">Daftar Produk Toko Bangunan</h1>

    <table class="table table-bordered table-striped">

        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Produk
        </a>

        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Gambar</th> 
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e(Str::limit($product->description, 100)); ?></td>
                    <td>Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                    <td><?php echo e($product->stock); ?></td>
                    <td><?php echo e($product->category->name); ?></td>

                    <td>
                        <div class="showPhoto">
                            <div id="imagePreview">
                                <img src="<?php echo e(asset($product->image)); ?>" alt="<?php echo e($product->name); ?>" width="100">
                            </div>
                        </div>
                    </td>




                    <td class="d-flex justify-content-around">
                        <!-- Edit and Delete buttons -->
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>

                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\TMP - Projects\TPM-Project1\laravel\resources\views/products/index.blade.php ENDPATH**/ ?>