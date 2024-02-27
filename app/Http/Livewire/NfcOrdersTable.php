<?php

namespace App\Http\Livewire;

use App\Models\NfcOrders;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class NfcOrdersTable extends LivewireTableComponent
{
    public $paginationTheme = 'bootstrap-5';

    public string $primaryKey = 'plan_id';

    public string $defaultSortColumn = 'created_at';

    public string $defaultSortDirection = 'desc';

    protected $listeners = ['refresh' => '$refresh', 'resetPageTable'];

    protected string $pageName = 'nfcOrders-table';

    public function query(): Builder
    {
        // return NfcOrders::with(['user', 'vcardname'])->select('nfc_orders.*');
        return NfcOrders::query();
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
            Column::make(__('USER'), 'user')
                ->sortable()->searchable(),
                Column::make(__('NFC CARD TYPE'), 'nfc_card_type')
                ->sortable()->searchable(),
                Column::make(__('VCARD NAME'), 'vcard_name')
                ->sortable()->searchable(),
                Column::make(__('ORDER STATUS'), 'order_status')
                ->sortable()->searchable(),
                Column::make(__('messages.common.status'), 'status'),
                Column::make(__('messages.subscription.start_date'), 'starts_at')
                ->sortable(),
                // Column::make(__('messages.common.action'))->addClass('justify-content-center d-flex'),
            // Column::make(__('NFC CARD TYPE'), 'nfc_card_type')
            //     ->sortable()->searchable()->addClass('d-flex justify-content-end'),
            // Column::make(__('VCARD NAME'), 'vcard_name')
            //     ->sortable()->searchable()->addClass('duration-center'),
            // Column::make(__('ORDER STATUS'), 'order_status')
            //     ->sortable()->searchable()->addClass('duration-center'),
            //     Column::make(__('PAYMENT STATUS'), 'payment_status')
            //     ->sortable()->searchable()->addClass('duration-center'),
            //     Column::make(__('CREATED AT'), 'created_at')
            //     ->sortable()->searchable()->addClass('duration-center'),
            // Column::make(__('messages.common.action'))->addClass('w-100px justify-content-center d-flex'),
            
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
