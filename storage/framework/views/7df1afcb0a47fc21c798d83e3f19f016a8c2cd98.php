<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', App\Models\Role::ROLE_SUPER_ADMIN)): ?>
<li class="nav-item <?php echo e(Request::is('sadmin/dashboard*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('sadmin.dashboard')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fa-solid fa-circle-dot"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.dashboard')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/admins*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('admins.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-house-user"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.admins')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/users*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('users.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-users"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.vcard.user')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/vcard*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('sadmin.vcards.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-id-card"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.vcards')); ?></span>
    </a>
</li>


<!-- new start -->

<li class="nav-item <?php echo e(Request::is('sadmin/nfcCardTypes*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('sadmin.nfcCardTypes.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-id-card"></i></span>
        <span class="aside-menu-title"><?php echo e(__('Sell NFC Cards')); ?></span>
    </a>
</li>

<!-- new end -->

<li class="nav-item <?php echo e(Request::is('sadmin/templates*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('sadmin.templates.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fa fa-address-card"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.vcard.template')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/planSubscription*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('subscription.cash')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fa fa-money-bill"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.cash_payment')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/subscribedPlan*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('subscription.user.plan')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fa fa-paper-plane"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.subscribed_user')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/plans*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('plans.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-columns"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.plans')); ?></span>
    </a>
</li>


<li class="nav-item <?php echo e(Request::is('sadmin/affiliate-users*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page"
       href="<?php echo e(route('sadmin.affiliate-user.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-users"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.vcard.affiliate_user')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/affiliation-transactions*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page"
       href="<?php echo e(route('sadmin.affiliation-transaction.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-coins"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.affiliation.affiliation_transaction')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/withdraw-transactions*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page"
       href="<?php echo e(route('sadmin.withdraw-transactions')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-receipt"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.setting.withdraw_transactions')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/currencies*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('currencies.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-dollar-sign"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.currency.currencies')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/countries*', 'sadmin/states*', 'sadmin/cities*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('countries.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-globe-americas"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.country.countries')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/languages*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('languages.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fa fa-language"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.languages.languages')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/settings*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('setting.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-cogs"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.settings')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/front-cms*') || Request::is('sadmin/email-subscription*') || Request::is('sadmin/features*') ||
     Request::is('sadmin/about-us*') || Request::is('sadmin/frontTestimonial*') || Request::is('sadmin/contactUs*') ? 'active' : ''); ?>">
	<a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('setting.front.cms')); ?>">
		<span class="aside-menu-icon pe-3"><i class="fa fa-home"></i></span>
		<span class="aside-menu-title"><?php echo e(__('messages.front_cms.front_cms')); ?></span>
	</a>
</li>

<li class="nav-item <?php echo e(Request::is('sadmin/coupon-codes*') ? 'active' : ''); ?>">
	<a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('coupon-codes.index')); ?>">
		<span class="aside-menu-icon pe-3"><i class="fa-solid fa-tags"></i></span>
		<span class="aside-menu-title"><?php echo e(__('messages.coupon_code.coupon_codes')); ?></span>
	</a>
</li>
<?php endif; ?>


<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', App\Models\Role::ROLE_ADMIN)): ?>
<li class="nav-item <?php echo e(Request::is('admin/dashboard*') ? 'active' : ''); ?>">
	<a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('admin.dashboard')); ?>">
		<span class="aside-menu-icon pe-3"><i class="fas fa-chart-pie"></i></span>
		<span class="aside-menu-title"><?php echo e(__('messages.dashboard')); ?></span>
	</a>
</li>

<li class="nav-item <?php echo e(Request::is('admin/vcard*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('vcards.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-id-card"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.vcards')); ?></span>
    </a>
</li>


<li class="nav-item <?php echo e(Request::is('admin/enquiries*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('enquiries.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-info-circle"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.contact_us.contact_us')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('admin/appointments*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('appointments.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-calendar"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.vcard.appointments')); ?></span>
    </a>
</li>

<li class="nav-item <?php echo e(Request::is('admin/user-setting*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page" href="<?php echo e(route('user.setting.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-cog"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.settings')); ?></span>
    </a>
</li>
<?php if(checkFeature('affiliation')): ?>
<li class="nav-item <?php echo e(Request::is('admin/affiliations*') ? 'active' : ''); ?>">
    <a class="nav-link d-flex align-items-center py-3" aria-current="page"
       href="<?php echo e(route('user.affiliation.index')); ?>">
        <span class="aside-menu-icon pe-3"><i class="fas fa-coins"></i></span>
        <span class="aside-menu-title"><?php echo e(__('messages.plan.affiliation')); ?></span>
    </a>
</li>
<?php endif; ?>
<?php endif; ?>





<?php /**PATH C:\xampp\htdocs\Nfc-vcard\resources\views/layouts/menu.blade.php ENDPATH**/ ?>