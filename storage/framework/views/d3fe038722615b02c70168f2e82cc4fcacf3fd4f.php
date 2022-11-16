

<?php $__env->startSection('title', 'Kandidat - Osis'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Kandidat Osis</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Kandidat</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <?php $__currentLoopData = $osis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-hashtag"></i> PASLON <?php echo e($row->paslon_no); ?></h3>
                            </div>
                            <div class="card-body">
                                <div class="img-thumbnail">
                                    <img id="kandidat" class="card-img" src="<?php echo e(asset($row->gambar)); ?>" alt="kandidat-image">
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?php echo e(route('admin.kandidat.osis.detail', [ 'id' => $row->id ])); ?>" class="btn btn-primary btn-block">
                                            <i class="fas fa-user-edit"></i> DETAIL KANDIDAT
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pilketos\resources\views/admin/kandidat/osis.blade.php ENDPATH**/ ?>