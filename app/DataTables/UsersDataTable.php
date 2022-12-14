<?php

namespace App\DataTables;

use App\Models\User;
use Database\Seeders\roles;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action',
                '<a href="#" class="btn btn-sm btn-primary" id="edit-subscriber" data-id="{{$id}}"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-sm btn-danger" id="delete-subscriber" data-id="{{$id}}"><i class="fa fa-trash"></i></a>'
            );
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        $search = $this->request()->get('search')['value'];
        //get user data with country with search
        return $model->newQuery()->select('users.*', 'countries.name as country_name')
            ->leftJoin('countries', 'users.country_id', '=', 'countries.id')
            ->where('users.id', '!=', 1);

    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('users-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('country_name', 'country')
                ->title('Country')
                ->searchable(false)
                ->orderable(false),
            //add action column for edit and delete
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(180)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }
}
