<?php

namespace App\Http\Livewire;

use App\Models\NfcOrders;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class NfcOrdersTable extends LivewireTableComponent
{
    public $paginationTheme = 'bootstrap-5';

    // public string $primaryKey = 'plan_id';

    public string $defaultSortColumn = 'created_at';

    // public string $defaultSortDirection = 'desc';

    // protected $listeners = ['refresh' => '$refresh', 'resetPageTable'];

    protected string $pageName = 'nfcOrders-table';

    public function query(): Builder
    {
        return NfcOrders::with(['user', 'vcardname'])->select('nfc_orders.*');
    }

    // public function render()
    // {
    //     return view('livewire-tables::'.config('livewire-tables.theme').'.datatable')
    //         ->with([
    //             'columns' => $this->columns(),
    //             'rowView' => $this->rowView(),
    //             'filtersView' => $this->filtersView(),
    //             'customFilters' => $this->filters(),
    //             'rows' => $this->rows,
    //             'modalsView' => $this->modalsView(),
    //             'bulkActions' => $this->bulkActions,
    //             'componentName' => 'sadmin.plans.add-button',
    //         ]);
    // }

    public function columns(): array
    {
        return [
            Column::make(__('USER'), 'name')
                ->sortable()->searchable(),
            Column::make(__('NFC CARD TYPE'), 'price')
                ->sortable()->searchable()->addClass('d-flex justify-content-end'),
            Column::make(__('VCARD NAME'), 'frequency')
                ->sortable()->searchable()->addClass('duration-center'),
            Column::make(__('ORDER STATUS'), 'is_default')
                ->sortable(),
                Column::make(__('PAYMENT STATUS'), 'is_default')
                ->sortable(),
                Column::make(__('CREATED AT'), 'is_default')
                ->sortable(),
            Column::make(__('messages.common.action'))->addClass('w-100px justify-content-center d-flex'),
            
        ];
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.nfcOrders_table';
    }

    public function resetPageTable($pageName = 'nfcOrders-table')
    {
        $this->customResetPage($pageName);
    }
}
