<?php if(
    $bulkActionsEnabled &&
    count($this->bulkActions) &&
    (
        (
            $paginationEnabled && (
                ($selectPage && $rows->total() > $rows->count()) ||
                count($selected)
            )
        ) ||
        count($selected)
    )
): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-tables::bootstrap-5.components.table.row','data' => ['wire:key' => 'row-message']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-tables::bs5.table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'row-message']); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-tables::bootstrap-5.components.table.cell','data' => ['colspan' => ''.e($colspan).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-tables::bs5.table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => ''.e($colspan).'']); ?>
            <?php if((!$paginationEnabled && $selectPage) || (count($selected) && $paginationEnabled && !$selectAll && !$selectPage)): ?>
                <div>
                    <span>
                        <?php echo app('translator')->get('You have selected'); ?>
                        <strong><?php echo e(count($selected)); ?></strong>
                        <?php echo app('translator')->get(count($selected) === 1 ? 'row' : 'rows'); ?>.
                    </span>

                    <button
                            wire:click="resetBulk"
                            wire:loading.attr="disabled"
                            type="button"
                            class="btn btn-primary btn-sm"
                    >
                        <?php echo app('translator')->get('Unselect All'); ?>
                    </button>
                </div>
            <?php elseif($selectAll): ?>
                <div>
                    <span>
                        <?php echo app('translator')->get('You are currently selecting all'); ?>
                        <strong><?php echo e(number_format($rows->total())); ?></strong>
                        <?php echo app('translator')->get('rows'); ?>.
                    </span>

                    <button
                            wire:click="resetBulk"
                            wire:loading.attr="disabled"
                            type="button"
                            class="btn btn-primary btn-sm"
                    >
                        <?php echo app('translator')->get('Unselect All'); ?>
                    </button>
                </div>
            <?php else: ?>
                <?php if($rows->total() === count($selected)): ?>
                    <div>
                        <span>
                            <?php echo app('translator')->get('You have selected'); ?>
                            <strong><?php echo e(count($selected)); ?></strong>
                            <?php echo app('translator')->get(count($selected) === 1 ? 'row' : 'rows'); ?>.
                        </span>

                        <button
                                wire:click="resetBulk"
                                wire:loading.attr="disabled"
                                type="button"
                                class="btn btn-primary btn-sm"
                        >
                            <?php echo app('translator')->get('Unselect All'); ?>
                        </button>
                    </div>
                <?php else: ?>
                    <div>
                        <span>
                            <?php echo app('translator')->get('You have selected'); ?>
                            <strong><?php echo e($rows->count()); ?></strong>
                            <?php echo app('translator')->get('rows, do you want to select all'); ?>
                            <strong><?php echo e(number_format($rows->total())); ?></strong>?
                        </span>

                        <button
                                wire:click="selectAll"
                                wire:loading.attr="disabled"
                                type="button"
                                class="btn btn-primary btn-sm"
                        >
                            <?php echo app('translator')->get('Select All'); ?>
                        </button>

                        <button
                                wire:click="resetBulk"
                                wire:loading.attr="disabled"
                                type="button"
                                class="btn btn-primary btn-sm"
                        >
                            <?php echo app('translator')->get('Unselect All'); ?>
                        </button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Nfc-vcard\resources\views/vendor/livewire-tables/bootstrap-5/includes/bulk-select-row.blade.php ENDPATH**/ ?>