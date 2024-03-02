
<?php $__env->startSection('title'); ?>
    <?php echo e(__('NFC Card Orders')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="d-flex flex-column table-striped">
            <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('nfc-orders-table', [])->html();
} elseif ($_instance->childHasBeenRendered('i8mlFGV')) {
    $componentId = $_instance->getRenderedChildComponentId('i8mlFGV');
    $componentTag = $_instance->getRenderedChildComponentTagName('i8mlFGV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('i8mlFGV');
} else {
    $response = \Livewire\Livewire::mount('nfc-orders-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('i8mlFGV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Nfc-vcard\resources\views/sadmin/nfcCardTypes/nfcCardOrders/index.blade.php ENDPATH**/ ?>