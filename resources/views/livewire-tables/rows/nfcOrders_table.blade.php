<style>
    .duration-center div {
        justify-content: center !important;
    }
</style>
<x-livewire-tables::bs5.table.cell>
    {{$row->name}}
</x-livewire-tables::bs5.table.cell>

<x-livewire-tables::bs5.table.cell class="text-end">
{{ $row->currency->currency_icon . ' ' . number_format($row->price) }}
    {{ currencyFormat($row->price,0,$row->currency->currency_code) }}
</x-livewire-tables::bs5.table.cell>






<x-livewire-tables::bs5.table.cell>
	<div class="form-check form-switch">
		<input class="form-check-input" type="checkbox" id="planStatus" name="is_active"
		       {{ $row->status == 1 ? 'disabled checked' : ''}} data-id="{{$row->id}}"
		       data-tenant="{{$row->tenant_id}}">
	</div>
</x-livewire-tables::bs5.table.cell>

<x-livewire-tables::table.cell>
    <span class="badge bg-secondary me-2">
       {{ Carbon\Carbon::parse($row->created_at)->isoFormat('Do MMM, YYYY') }}
    </span>
</x-livewire-tables::table.cell>


<x-livewire-tables::bs5.table.cell>
	<div class="justify-content-center d-flex">
		<a title="{{ __('messages.common.view') }}" href="javascript:void(0)"
		   data-id="{{ $row->id }}" class="btn px-1 text-info fs-3 subscribed-user-plan-view-btn">
			<i class="fa-solid fa-eye"></i>
		</a>
        </div>
</x-livewire-tables::bs5.table.cell>



