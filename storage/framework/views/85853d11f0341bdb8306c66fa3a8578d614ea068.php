    <!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(getAppName()); ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(getFaviconUrl()); ?>" type="image/png">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!-- General CSS Files -->

        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/third-party.css')); ?>">


	<?php if(!getLogInUser()->theme_mode): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/plugins.css')); ?>">
	<?php else: ?>
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/plugins.dark.css')); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.dark.css')); ?>">

	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(mix('assets/css/page.css')); ?>">

	<?php echo \Livewire\Livewire::styles(); ?>


	<script src="<?php echo e(asset('vendor/livewire/livewire.js')); ?>"></script>
	<?php echo $__env->make('layouts.livewire-turbo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
	        data-turbolinks-eval="false" data-turbo-eval="false"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="https://checkout.razorpay.com/v1/checkout.js" data-turbolinks-eval="false"
	        data-turbo-eval="false"></script>
	<script src="<?php echo e(asset('assets/js/third-party.js')); ?>"></script>

	<script data-turbo-eval="false">
        let stripe = ''
		<?php if(getSelectedPaymentGateway('stripe_key')): ?>
            stripe = Stripe('<?php echo e(getSelectedPaymentGateway('stripe_key')); ?>')
		<?php endif; ?>
        let appUrl = "<?php echo e(config('app.url')); ?>"
        let noData = "<?php echo e(__('messages.no_data')); ?>"
        let utilsScript = "<?php echo e(asset('assets/js/inttel/js/utils.min.js')); ?>"
        let defaultProfileUrl = "<?php echo e(asset('web/media/avatars/150-26.jpg')); ?>"
        let defaultTemplate = "<?php echo e(asset('assets/images/default_cover_image.jpg')); ?>"
        let defaultServiceIconUrl = "<?php echo e(asset('assets/images/default_service.png')); ?>"
        let defaultCoverUrl = "<?php echo e(asset('assets/images/default_cover_image.jpg')); ?>"
        let defaultGalleryUrl = "<?php echo e(asset('assets/images/default_service.png')); ?>"
        let defaultAppLogoUrl = "<?php echo e(asset(getAppLogo())); ?>"
        let defaultFaviconUrl = "<?php echo e(getFaviconUrl()); ?>"
        let getLoggedInUserdata = "<?php echo e(getLogInUser()); ?>"
        window.getLoggedInUserLang = "<?php echo e(getCurrentLanguageName()); ?>"
        let lang = "<?php echo e(Illuminate\Support\Facades\Auth::user()->language ?? 'en'); ?>"
        let getCurrencyCode = "<?php echo e(getMaximumCurrencyCode($getIcon = true)); ?>"
        let sweetAlertIcon = "<?php echo e(asset('images/remove.png')); ?>"
        let sweetCompletedAlertIcon = "<?php echo e(asset('images/Alert.png')); ?>"
        let defaultCountryCodeValue = "<?php echo e(getSuperAdminSettingValue('default_country_code')); ?>"
        let getUniqueVcardUrlAlias = "<?php echo e(getUniqueVcardUrlAlias()); ?>"
        let currencyAfterAmount = "<?php echo e(getSuperAdminSettingValue('currency_after_amount')); ?>"
        let options = {
            'key': "<?php echo e(getSelectedPaymentGateway('razorpay_key')); ?>",
            'amount': 0, //  100 refers to 1
            'currency': 'INR',
            'name': "<?php echo e(getAppName()); ?>",
            'order_id': '',
            'description': '',
            'image': '<?php echo e(asset(getAppLogo())); ?>', // logo here
            'callback_url': "<?php echo e(route('razorpay.success')); ?>",
            'prefill': {
                'email': '', // recipient email here
                'name': '', // recipient name here
                'contact': '', // recipient phone here
            },
            'readonly': {
                'name': 'true',
                'email': 'true',
                'contact': 'true',
            },
            'theme': {
                'color': '#0ea6e9',
            },
            'modal': {
                'ondismiss': function () {
                    $('#paymentGatewayModal').modal('hide');
                    displayErrorMessage(Lang.get('messages.placeholder.payment_not_complete'));
                    setTimeout(function () {
                        Turbo.visit(window.location.href);
                    }, 1000);
                },
            },
        };
        $(document).ready(function(){
            $('[data-bs-toggle="tooltip"]').tooltip()
        })
    </script>
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    <script src="<?php echo e(asset('messages.js')); ?>"></script>
    <script src="<?php echo e(mix('assets/js/pages.js')); ?>"></script>
</head>
<body>
<div class="d-flex flex-column flex-root vh-100">
    <div class="d-flex flex-row flex-column-fluid">
        <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="wrapper d-flex flex-column flex-row-fluid">
            <div class='container-fluid d-flex align-items-stretch justify-content-between px-0'>
                <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class='content d-flex flex-column flex-column-fluid pt-7'>
                <?php echo $__env->yieldContent('header_toolbar'); ?>
                <div class='d-flex flex-wrap flex-column-fluid'>
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
            <div class='container-fluid'>
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('profile.changePassword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('profile.changelanguage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\Nfc-vcard\resources\views/layouts/app.blade.php ENDPATH**/ ?>