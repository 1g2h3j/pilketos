

<?php $__env->startSection('title', 'Kandidat - Osis - Detail Kandidat '); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Paslon #<?php echo e($osis->paslon_no); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <?php if (isset($component)) { $__componentOriginal0016fe8f62f0dc60d54a606049e169e1ae7c8127 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Card::class, ['theme' => 'info','themeMode' => 'outline']); ?>
<?php $component->withName('adminlte-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="min-height: 325px">
                        <div class="card-body">
                            <div class="img-thumbnail">
                                <img class="img-fluid" src="<?php echo e(asset($osis->gambar)); ?>" alt="" id="previewGambar">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="min-height: 408px">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Paslon No</label>
                                <input class="form-control" value="<?php echo e($osis->paslon_no); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Ketua</label>
                                <input class="form-control" value="<?php echo e(\App\Models\User::find($osis->ketua)->name); ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label>Wakil</label>
                                <input class="form-control" value="<?php echo e(\App\Models\User::find($osis->wakil)->name); ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p class="text-center mb-0"><label>Visi</label></p>
                                        <textarea disabled name="visi" class="form-control" cols="30" rows="10"><?php echo e($osis->visi); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p class="text-center mb-0"><label>Misi</label></p>
                                        <textarea disabled name="misi" class="form-control" cols="30" rows="10"><?php echo strip_tags($osis->misi); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0016fe8f62f0dc60d54a606049e169e1ae7c8127)): ?>
<?php $component = $__componentOriginal0016fe8f62f0dc60d54a606049e169e1ae7c8127; ?>
<?php unset($__componentOriginal0016fe8f62f0dc60d54a606049e169e1ae7c8127); ?>
<?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pilketos\resources\views/admin/kandidat/osis_detail.blade.php ENDPATH**/ ?>