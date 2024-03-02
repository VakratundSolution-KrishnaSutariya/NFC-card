<footer class="border-top w-100 pt-4 mt-7">
    <div class="d-flex justify-content-between">
        <p class="fs-6 text-gray-600">All Rights Reserved ©<?php echo e(\Carbon\Carbon::now()->year); ?>

            <a href="#" class="text-decoration-none"><?php echo e(getAppName()); ?></a>
        </p>
        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', App\Models\Role::ROLE_SUPER_ADMIN)): ?>
            <div class="fs-6 text-gray-600">v<?php echo e(getCurrentVersion()); ?></div>
        <?php endif; ?>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\Nfc-vcard\resources\views/layouts/footer.blade.php ENDPATH**/ ?>