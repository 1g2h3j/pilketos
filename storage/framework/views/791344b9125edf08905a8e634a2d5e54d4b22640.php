

<?php $__env->startSection('headscript'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="row row-cols-1 row-cols-md-3 g-4">
  <!-- card-paslon -->
  <?php $__currentLoopData = $kandidat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col d-flex justify-content-center">
    <div class="card h-100 card-paslon d-flex align-items-center text-center" style="width: 18rem">
      <div class="no-paslon"><?php echo e($row->paslon_no); ?></div>
      <img src="<?php echo e(asset($row->gambar)); ?>" alt="photo-profile" width="120" class="pt-4 rounded-circle" />
      <div class="card-body">
        <h5 class="card-title fst-italic m-0">Ketua</h5>
        <p class="card-text fw-bold"><?php echo e($row->ketua); ?></p>
        <h5 class="card-title fst-italic m-0">Wakil Ketua</h5>
        <p class="card-text fw-bold"><?php echo e($row->wakil); ?></p>
        <div class="row gap-2 d-flex justify-content-center">
          <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal" data-bs-target="#visi"
            data-bs-visi="<?php echo $row->visi; ?>">VISI</button>
          <button type="button" class="btn btn-primary col-5" data-bs-toggle="modal"
            data-bs-target="#misi">MISI</button>
          <button data-bs-toggle="modal" data-bs-target="#modalVoteKandidat" data-bs-ketua="<?php echo e($row->ketua); ?>"
            data-bs-wakil="<?php echo e($row->wakil); ?>" data-bs-kandidat="<?php echo e($row->id); ?>" type="button"
            class="btn btn-primary">PILIH</button>
        </div>
      </div>
    </div>
  </div>
  <!--end card-paslon -->
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="modal fade" id="modalVoteKandidat" tabindex="-1" aria-labelledby="modalVoteKandidatLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalVoteKandidatLabel">Konfirmasi Pemilihan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4 fst-italic" <p class="lead">Dengan ini dengan penuh kesadaran dan dengan tanpa paksaan
        saya memilih <b><span id="paslon"></span></b> sebagai calon ketua dan wakil ketua OSIS
        <?php echo e(ConfigVoting::getConfig()->title_prefix); ?> untuk periode <?php echo e(ConfigVoting::getConfig()->periode); ?>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          <form action="<?php echo e(route('vote.osis')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" id="kandidat-id" name="kandidat_id">
            <button type="submit" class="btn btn-primary">Konfirmasi Pemilihan</button>
          </form>
        </button>
      </div>
    </div>
  </div>
</div>

<?php $__currentLoopData = $kandidat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- modal visi -->
<div class="modal fade" id="visi" tabindex="-1" aria-labelledby="visiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="visiLabel"><strong>VISI</strong></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4 fst-italic">
        <p><?php echo e($row->visi); ?></p>
      </div>
    </div>
  </div>
</div>
<!--end modal visi -->

<!-- modal misi -->
<div class="modal fade" id="misi" tabindex="-1" aria-labelledby="misiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="misiLabel"><strong>MISI</strong></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4 fst-italic"><?php echo $row->misi; ?></div>

    </div>
  </div>
</div>
<!--end modal misi -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<style scoped>
  .no-paslon {
    position: absolute;
    /* padding: 30px 15px 8px 30px; */
    padding: 65px 25px 15px 76px;
    border-radius: 50%;
    font-size: 1.5rem;
    color: white;
    background-color: #0d6dfc;
    left: -60px;
    top: -55px;
    box-shadow: 0 8px 32px 0 rgba(6, 6, 6, 0.3);
  }

  .card {
    border: none !important;
  }

  .card {
    color: whitesmoke;
    background: rgba(200, 200, 200, 0.37);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.18);
  }

  .card .card-paslon {
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.05);
  }

  .modal-body p {
    margin-bottom: 0.5rem;
    /* letter-spacing: 0.5px; */
    font-weight: 200 !important;
  }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footscript'); ?>
<script>
<?php $__errorArgs = ['voting'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
  swal({
    icon: 'error',
    title: 'Error!',
    text: '<?php echo e($message); ?>'
  });
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

  <?php if(session() -> has('message')): ?>
  swal({
    icon: 'info',
    title: 'Welcome',
    text: '<?php echo e(session("message")); ?>'
  });
  <?php endif; ?>

  <?php if(session() -> has('welcome')): ?>
  swal({
    icon: 'success',
    text: 'Selamat memilih!'
  });
  <?php endif; ?>
  $(document).ready(function () {
    $('#modalVisiMisi').on('show.bs.modal', function (e) {
      var modal = $(this);
      var button = $(e.relatedTarget);

      modal.find('#visi').text(button.data('visi'));
      modal.find('#misi').html(button.data('misi'));
    });

    $('#modalVisiMisi').on('hide.bs.modal', function (e) {
      var modal = $(this);
      var button = $(e.relatedTarget);

      modal.find('#visi').text('');
      modal.find('#misi').html('');
    });

    $('#modalVoteKandidat').on('show.bs.modal', function (e) {
      var modal = $(this);
      var button = $(e.relatedTarget);

      modal.find('#kandidat-id').val(button.data('kandidat'));
      modal.find('#paslon').text(button.data('ketua') + ' & ' + button.data('wakil'));
    });

    <?php $__errorArgs = ['voting'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    swal({
      icon: 'error',
      title: 'Error!',
      text: '<?php echo e($message); ?>'
    });
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <?php if(session() -> has('message')): ?>
    swal({
      icon: 'info',
      title: 'Welcome',
      text: '<?php echo e(session("message")); ?>'
    });
    <?php endif; ?>

    <?php if(session() -> has('welcome')): ?>
    swal({
      icon: 'success',
      text: 'Selamat memilih!'
    });
    <?php endif; ?>
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pilketos\resources\views/voting_osis.blade.php ENDPATH**/ ?>