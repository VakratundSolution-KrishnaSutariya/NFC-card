<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.plan.new_plan')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('header_toolbar'); ?>
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-5">
            <h1 class="mb-0"><?php echo e(__('messages.plan.new_plan')); ?></h1>
            <div class="text-end mt-4 mt-md-0">
                <a class="btn btn-outline-primary float-end"
                   href="<?php echo e(route('plans.index')); ?>"><?php echo e(__('messages.common.back')); ?></a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="col-12">
                <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="card">
                <div class="card-body">
                    <?php echo Form::open(['route' => 'plans.store', 'id' => 'planForm']); ?>

                    <?php echo $__env->make('sadmin.plans.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Nfc-vcard\resources\views/sadmin/plans/create.blade.php ENDPATH**/ ?>