

<?php $__env->startSection('title', 'Peserta - Siswa'); ?>

<?php $__env->startSection('plugins.Datatables', true); ?>
<?php $__env->startSection('plugins.DatatablesPlugins', true); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Peserta Siswa</h1>
<?php $__env->stopSection(); ?>

<?php 
    $heads  = [
        [
            'label' => 'NIS', 'width' => 20
        ],
        'Nama',
        [
            'label' => 'Kelas', 'width' => 10
        ],
        [
            'label' => 'Voting Osis', 'width' => 15
        ]
    ];

    $config = [
        'processing' => true,
        'serverSide' => true,
        'ajax' => [
            'headers' => [
                'X-CSRF-TOKEN' => csrf_token()
            ],
            'url'     => route('admin.ajax.datatables.siswa'),
            'type'    => 'POST'
        ],
        'columns' => [
            [
                'name' => 'uuid',
                'data' => 'uuid'
            ],
            [
                'name' => 'name',
                'data' => 'name'
            ],
            [
                'name' => 'kelas',
                'data' => 'kelas'
            ],
            [
                'name'       => 'voting_osis',
                'data'       => 'voting_osis',
                'sClass'     => 'text-center',
            ]
        ]
    ];
?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($component)) { $__componentOriginal0016fe8f62f0dc60d54a606049e169e1ae7c8127 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Widget\Card::class, ['title' => 'Daftar Peserta','theme' => 'info']); ?>
<?php $component->withName('adminlte-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal07fd598d67a9f344ba4b0a77ed63c2052b910f24 = $component; } ?>
<?php $component = $__env->getContainer()->make(JeroenNoten\LaravelAdminLte\View\Components\Tool\Datatable::class, ['id' => 'table1','heads' => $heads,'headTheme' => 'light','theme' => 'info','config' => $config,'striped' => true,'bordered' => true,'compressed' => true,'hoverable' => true,'withButtons' => true]); ?>
<?php $component->withName('adminlte-datatable'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07fd598d67a9f344ba4b0a77ed63c2052b910f24)): ?>
<?php $component = $__componentOriginal07fd598d67a9f344ba4b0a77ed63c2052b910f24; ?>
<?php unset($__componentOriginal07fd598d67a9f344ba4b0a77ed63c2052b910f24); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0016fe8f62f0dc60d54a606049e169e1ae7c8127)): ?>
<?php $component = $__componentOriginal0016fe8f62f0dc60d54a606049e169e1ae7c8127; ?>
<?php unset($__componentOriginal0016fe8f62f0dc60d54a606049e169e1ae7c8127); ?>
<?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pilketos\resources\views/admin/peserta/siswa.blade.php ENDPATH**/ ?>