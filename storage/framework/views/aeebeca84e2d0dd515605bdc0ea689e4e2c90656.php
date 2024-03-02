
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Sell NFC Cards')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="d-flex flex-column table-striped">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('nfc-types-table', [])->html();
} elseif ($_instance->childHasBeenRendered('6qcMA5F')) {
    $componentId = $_instance->getRenderedChildComponentId('6qcMA5F');
    $componentTag = $_instance->getRenderedChildComponentTagName('6qcMA5F');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6qcMA5F');
} else {
    $response = \Livewire\Livewire::mount('nfc-types-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('6qcMA5F', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Nfc-vcard\resources\views/sadmin/nfcCardTypes/index.blade.php ENDPATH**/ ?>