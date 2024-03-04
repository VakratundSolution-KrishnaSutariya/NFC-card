<!-- Image and Product Title -->
<x-livewire-tables::bs5.table.cell>
    <div class="d-flex flex-column">
        <div class="image me-3">
            <img src="{{ asset($row->product_thumb_image) }}" alt="product thumbnail" class="product-thumbnail rounded" style="width: 150px; height: auto;">
        </div>
        <div>
            <span class="mb-1 text-decoration-none fs-6">{{ $row->product_title }}</span>
        </div>
    </div>
</x-livewire-tables::bs5.table.cell>




<!-- Product Quantity -->
<x-livewire-tables::bs5.table.cell>
    <span class="badge badge-circle bg-info">{{ $row->product_quantity }}</span>
</x-livewire-tables::bs5.table.cell>

<!-- Product Price (Aligned to the Start) -->
<x-livewire-tables::bs5.table.cell> <!-- Align the price to the start -->
    {{ currencyFormat($row->product_price) }}
</x-livewire-tables::bs5.table.cell>

<!-- Buttons (Aligned to the Start) -->
<!-- <x-livewire-tables::bs5.table.cell>
    <div class="d-flex">
        <a href="{{ route('products.edit', $row->id) }}" title="{{ __('messages.common.edit') }}"
           class="btn px-1 text-primary fs-3">
            <i class="fa-solid fa-pen-to-square"></i>
        </a>
        <form action="{{ route('products.destroy', $row->id) }}" method="POST" class="plan-delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" title="{{ __('messages.common.delete') }}"
                    class="btn px-1 text-danger fs-3" data-turbolinks="false">
                <i class="fa-solid fa-trash"></i>
            </button>
        </form>
    </div>
</x-livewire-tables::bs5.table.cell> -->


<x-livewire-tables::bs5.table.cell>
    <div class="d-flex">
        <a href="{{ route('products.edit', $row->id) }}" title="{{ __('messages.common.edit') }}"
           class="btn px-1 text-primary fs-3">
            <i class="fa-solid fa-pen-to-square"></i>
        </a>
        <form action="{{ route('products.destroy', $row->id) }}" method="POST" class="plan-delete-form">
            @csrf
            @method('DELETE')
            <button type="button" title="{{ __('messages.common.delete') }}"
                    class="btn px-1 text-danger fs-3 delete-btn" data-turbolinks="false">
                <i class="fa-solid fa-trash"></i>
            </button>
        </form>
    </div>
</x-livewire-tables::bs5.table.cell>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const confirmation = confirm('Are you sure you want to delete this product?');
                if (confirmation) {
                    this.closest('form').submit();
                }
            });
        });
    });
</script>
