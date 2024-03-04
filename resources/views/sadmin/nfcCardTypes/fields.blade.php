@php
    // Retrieve color options from your database or any other data source
    $colors = \App\Models\SubscriptionProduct::pluck('product_color')->flatten()->unique(); // Assuming 'product_color' field stores an array of colors
    // If you're using Eloquent and have a SubscriptionProduct model, you can replace 'product_color' with your actual column name
    
    // Filter out any invalid values
    $colorOptions = $colors->reject(function ($color) {
        // Filter out any invalid colors here
        return !is_string($color) || empty($color);
    })->toArray(); 
@endphp

<div class="row">
    <div class="col-lg-6 mb-7">
        {{ Form::label('product_title', __('Product Title').':', ['class' => 'form-label required']) }}
        {{ Form::text('product_title', isset($subscriptionProduct) ? $subscriptionProduct->product_title : null, ['class' => 'form-control', 'placeholder' => __('Enter product title'), 'required']) }}
    </div>
    <div class="col-lg-6 mb-7">
        {{ Form::label('product_description', __('Product Description').':', ['class' => 'form-label required']) }}
        {{ Form::textarea('product_description', isset($subscriptionProduct) ? $subscriptionProduct->product_description : null, ['class' => 'form-control', 'placeholder' => __('Enter product description'), 'required']) }}
    </div>
    <div class="col-lg-6 mb-7">
        {{ Form::label('product_price', __('Product Price').':', ['class' => 'form-label required']) }}
        {{ Form::number('product_price', isset($subscriptionProduct) ? $subscriptionProduct->product_price : null, ['class' => 'form-control', 'min' => '0', 'step' => '0.01', 'placeholder' => __('Enter product price'), 'required']) }}
    </div>
    <div class="col-lg-6 mb-7">
        {{ Form::label('product_tag', __('Product Tag').':', ['class' => 'form-label']) }}
        {{ Form::text('product_tag', isset($subscriptionProduct) ? $subscriptionProduct->product_tag : null, ['class' => 'form-control', 'placeholder' => __('Enter product tag')]) }}
    </div>
    <div class="col-lg-6 mb-7">
        {{ Form::label('product_quantity', __('Product Quantity').':', ['class' => 'form-label']) }}
        {{ Form::number('product_quantity', isset($subscriptionProduct) ? $subscriptionProduct->product_quantity : null, ['class' => 'form-control', 'min' => '0', 'placeholder' => __('Enter product quantity')]) }}
    </div>

    <div class="col-lg-6 mb-7">
        <label class="form-label">{{ __('Product Color') }}:</label>
        <div id="colorInputs">
            @if(isset($subscriptionProduct) && !empty($subscriptionProduct->product_color))
                @foreach($subscriptionProduct->product_color as $color)
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="product_color[]" value="{{ $color }}">
                        <button class="btn btn-outline-secondary remove-color" type="button">Remove</button>
                    </div>
                @endforeach
            @else
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="product_color[]">
                    <button class="btn btn-outline-secondary remove-color" type="button">Remove</button>
                </div>
            @endif
        </div>
        <button class="btn btn-outline-primary" type="button" id="addColor">Add Color</button>
    </div>

    <div class="col-lg-6 mb-7">
        {{ Form::label('product_sku', __('Product SKU').':', ['class' => 'form-label']) }}
        {{ Form::text('product_sku', isset($subscriptionProduct) ? $subscriptionProduct->product_sku : null, ['class' => 'form-control', 'placeholder' => __('Enter product SKU')]) }}
    </div>
    <div class="col-lg-6 mb-7">
        {{ Form::label('product_category', __('Product Category').':', ['class' => 'form-label']) }}
        {{ Form::text('product_category', isset($subscriptionProduct) ? $subscriptionProduct->product_category : null, ['class' => 'form-control', 'placeholder' => __('Enter product category')]) }}
    </div>
    <div class="col-lg-6 mb-7">
        @if(isset($subscriptionProduct) && $subscriptionProduct->product_thumb_image)
            <img src="{{ asset($subscriptionProduct->product_thumb_image) }}" alt="Product Thumbnail">
        @endif
        {{ Form::label('product_thumb_image', __('Product Thumbnail Image').':', ['class' => 'form-label']) }}
        {{ Form::file('product_thumb_image', ['class' => 'form-control', 'accept' => 'image/*']) }}
    </div>

    <div class="col-lg-6 mb-7">
        @if(isset($subscriptionProduct) && $subscriptionProduct->product_gallery)
            @foreach(explode(',', $subscriptionProduct->product_gallery) as $image)
                <img src="{{ asset($image) }}" alt="Product Gallery Image">
            @endforeach
        @endif
        {{ Form::label('product_gallery', __('Product Gallery Images').':', ['class' => 'form-label']) }}
        {{ Form::file('product_gallery[]', ['class' => 'form-control', 'multiple' => true, 'accept' => 'image/*']) }}
    </div>
    
    <!-- Add other fields here according to your requirements -->

    <div class="col-lg-12 mb-7"> <!-- This div should cover the entire row -->
        {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-3', 'id' => 'productFormSubmit']) }}
        <a href="{{ route('sadmin.nfcCardTypes.index') }}" class="btn btn-secondary">{{ __('messages.common.discard') }}</a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addColorButton = document.getElementById('addColor');
        const colorInputs = document.getElementById('colorInputs');

        addColorButton.addEventListener('click', function() {
            const inputGroup = document.createElement('div');
            inputGroup.classList.add('input-group', 'mb-3');

            const inputField = document.createElement('input');
            inputField.setAttribute('type', 'text');
            inputField.classList.add('form-control');
            inputField.setAttribute('name', 'product_color[]');

            const removeButton = document.createElement('button');
            removeButton.classList.add('btn', 'btn-outline-secondary', 'remove-color');
            removeButton.setAttribute('type', 'button');
            removeButton.textContent = 'Remove';

            inputGroup.appendChild(inputField);
            inputGroup.appendChild(removeButton);

            colorInputs.appendChild(inputGroup);
        });

        colorInputs.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-color')) {
                event.target.closest('.input-group').remove();
            }
        });
    });
</script>
