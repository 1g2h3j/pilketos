
<?php $__env->startSection('headscript'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
            <div class="card">
                <div class="card-body d-flex flex-column align-items-center justify-content-center py-4">
                    <h2><strong>Pemilihan Ketua & Wakil Ketua Osis</strong></h2>
                    <img src="<?php echo e(asset('images/static/logosmk.png')); ?>" class="text-center py-3" alt="Logo" width="180">
                    <h2 class="mb-3"><strong> SMK Negeri 1 Bawang </strong></h2>

                    <form method="post" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-2 pt-2 d-flex flex-colummn">
                                <div class="row d-flex flex-colummn gap-3">
                                    <div class="btn btn-primary rounded-4" disabled><i class="fas fa-user pt"></i>
                                    </div>
                                    <div class="btn btn-primary rounded-4" disabled><i class="fas fa-key pt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="form-floating my-2">
                                    <input type="text" name="uuid" class="form-control rounded-4" autocomplete="off"
                                        id="inputNIS" value="<?php echo e(old('uuid')); ?>" placeholder="NIS" required="required">
                                    <label for="inputNIS">Masukkan NIS/NIP</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="token" class="form-control rounded-4" autocomplete="off"
                                        id="inputToken" value="" placeholder="Token" required="required">
                                    <label for="inputToken">Masukkan Token</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4 login_container">
                            <button type="submit" class="btn btn-primary rounded-pill px-5 py-2">MASUK</button>
                        </div>
                    </form>

                </div>
            </div>

<style scoped>
    .card {
        color: whitesmoke;
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border-radius: 25px;
        border: none;
    }
    label{
        color: grey;
    }
    .pt {
        padding-top: 11px;
    }

    /* .form-control{
            width: 130%
        } */
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footscript'); ?>

<script>
    <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        swal({
            icon: 'error',
            title: 'Login Gagal!',
            text: '<?php echo e($message); ?>'
        });
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <?php if(session() -> has('voting')): ?>
        swal({
            icon: 'success',
            text: '<?php echo e(session('voting')); ?>'
        });
        <?php endif; ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pilketos\resources\views/login.blade.php ENDPATH**/ ?>