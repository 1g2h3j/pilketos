

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<h1><?php echo e(ConfigVoting::getConfig()->title); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-md-12">
		<?php if (isset($component)) { $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Callout::class, []); ?>
<?php $component->withName('adminlte-callout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Howdy <?php echo e(Auth::user()->name); ?> ! <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62)): ?>
<?php $component = $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62; ?>
<?php unset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62); ?>
<?php endif; ?>
	</div>

	<div class="col-md-3">
		<?php if (isset($component)) { $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Callout::class, ['theme' => 'info','title' => 'Current Voting']); ?>
<?php $component->withName('adminlte-callout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
			<span class="badge badge-pill badge-info"><?php echo e(strtoupper(ConfigVoting::getConfig()->voting)); ?></span>
		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62)): ?>
<?php $component = $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62; ?>
<?php unset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62); ?>
<?php endif; ?>
	</div>
	<div class="col-md-3">
		<?php if (isset($component)) { $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Callout::class, ['theme' => 'info','title' => 'Peserta Siswa (+DPK)']); ?>
<?php $component->withName('adminlte-callout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
			<?php echo e($siswa); ?>

		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62)): ?>
<?php $component = $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62; ?>
<?php unset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62); ?>
<?php endif; ?>
	</div>
	<div class="col-md-3">
		<?php if (isset($component)) { $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Callout::class, ['theme' => 'info','title' => 'Peserta Guru']); ?>
<?php $component->withName('adminlte-callout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
			<?php echo e($guru); ?>

		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62)): ?>
<?php $component = $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62; ?>
<?php unset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62); ?>
<?php endif; ?>
	</div>
	<div class="col-md-3">
		<?php if (isset($component)) { $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Callout::class, ['theme' => 'info','title' => 'Peserta Dpk (Siswa)']); ?>
<?php $component->withName('adminlte-callout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
			<?php echo e($dpk); ?>

		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62)): ?>
<?php $component = $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62; ?>
<?php unset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62); ?>
<?php endif; ?>
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<?php if (isset($component)) { $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Callout::class, ['theme' => 'info','title' => 'Peserta Golput / Belum']); ?>
<?php $component->withName('adminlte-callout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
			<?php echo e($golput); ?>

		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62)): ?>
<?php $component = $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62; ?>
<?php unset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62); ?>
<?php endif; ?>
	</div>
	<div class="col-md-3">
		<?php if (isset($component)) { $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Callout::class, ['theme' => 'info','title' => 'Siswa Telah Memilih']); ?>
<?php $component->withName('adminlte-callout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
			<?php echo e($vote_siswa); ?>

		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62)): ?>
<?php $component = $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62; ?>
<?php unset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62); ?>
<?php endif; ?>
	</div>
	<div class="col-md-3">
		<?php if (isset($component)) { $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Callout::class, ['theme' => 'info','title' => 'Guru Telah Memilih']); ?>
<?php $component->withName('adminlte-callout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
			<?php echo e($vote_guru); ?>

		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62)): ?>
<?php $component = $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62; ?>
<?php unset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62); ?>
<?php endif; ?>
	</div>
	<div class="col-md-3">
		<?php if (isset($component)) { $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Callout::class, ['theme' => 'info','title' => 'Dpk Telah Memilih']); ?>
<?php $component->withName('adminlte-callout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
			<?php echo e($vote_dpk); ?>

		 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62)): ?>
<?php $component = $__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62; ?>
<?php unset($__componentOriginald4eaa7d50c9a38ea504d56c2c2f22775c77b7f62); ?>
<?php endif; ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pilketos\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>