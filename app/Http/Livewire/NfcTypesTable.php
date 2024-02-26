<?php

namespace App\Http\Livewire;

use App\Models\NfcTypes;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;

class NfcTypesTable extends LivewireTableComponent
{
public $paginationTheme = 'bootstrap-5';

    protected $listeners = ['refresh' => '$refresh', 'changeFilter'];

    public string $primaryKey = 'id';

    protected string $pageName = 'NfcTypes-table';

    public string $defaultSortColumn = 'name';

    public string $defaultSortDirection = 'desc';

    public function columns(): array
    {
        

        return [
            Column::make(__('messages.common.name'), 'name')
                ->sortable()->searchable()->addClass('col-4'),
                Column::make(__('ORDERS COUNT'), 'orders_count') // Adjust column name if necessary
                ->sortable()->searchable()->addClass('col-4'),
            Column::make(__('PRICE'), 'price') // Adjust column name if necessary
                ->sortable()->searchable()->addClass('col-4'),
            Column::make(__('messages.common.action'))->addClass('w-150px justify-content-center d-flex'),
        ];
    }

    public function query(): Builder
    {
       //return NfcTypes::with(['vcards', 'media'])->select('nfc_types.*');
       
       return NfcTypes::query();

    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.nfctypes_table';
    }
}
