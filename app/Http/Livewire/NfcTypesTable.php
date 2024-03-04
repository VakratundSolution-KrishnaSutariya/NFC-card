<?php

namespace App\Http\Livewire;

use App\Models\SubscriptionProduct;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class NfcTypesTable extends LivewireTableComponent
{
    public $paginationTheme = 'bootstrap-5';

    protected $listeners = ['refresh' => '$refresh', 'changeFilter'];

    public string $primaryKey = 'id';

    protected string $pageName = 'nfc-types-table';

    public string $defaultSortColumn = 'product_title';

    public string $defaultSortDirection = 'desc';



    public function render()
    {
        return view('livewire-tables::'.config('livewire-tables.theme').'.datatable')
            ->with([
                'columns' => $this->columns(),
                'rowView' => $this->rowView(),
                'filtersView' => $this->filtersView(),
                'customFilters' => $this->filters(),
                'rows' => $this->rows,
                'modalsView' => $this->modalsView(),
                'bulkActions' => $this->bulkActions,
                'componentName' => 'sadmin.nfcCardTypes.add-button',
            ]);
    }

    public function columns(): array
{
    return [
        Column::make(__('messages.common.name'), 'product_title')->sortable()->searchable()->addClass('col-4'),
        Column::make(__('PRODUCT QUANTITY'), 'product_quantity')->sortable()->searchable()->addClass('col-4'),
        Column::make(__('PRICE'), 'product_price')->sortable()->searchable()->addClass('col-4'),
        Column::make(__('messages.common.action'))->addClass('w-150px justify-content-center d-flex'),

    ];
}


    public function query(): Builder
    {
        return SubscriptionProduct::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.nfctypes_table';
    }

    public function resetPageTable($pageName = 'Nfc-types-table')
    {
        $this->customResetPage($pageName);
    }
}
