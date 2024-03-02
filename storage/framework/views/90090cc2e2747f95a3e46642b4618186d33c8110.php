<?php if($offlineIndicator): ?>
    <div wire:offline.class.remove="d-none" class="d-none">
        <div class="alert alert-danger d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" style="width:1.3em;height:1.3em;" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>

            <span class="d-inline-block ms-2"><?php echo app('translator')->get('You are not connected to the internet.'); ?></span>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Nfc-vcard\resources\views/vendor/livewire-tables/bootstrap-5/includes/offline.blade.php ENDPATH**/ ?>