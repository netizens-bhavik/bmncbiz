<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SubscribersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */

    //get start value from request

    public $i = 1;
    public function dataTable($query)
    {

        $app_url = env('APP_URL');

        $this->i = $this->request()->get('start') + 1;

        return datatables()
            ->eloquent($query)
            ->addColumn('#', function ($query) {
                return $this->i++;
            })
            ->addColumn('action',
                '<a href=' . $app_url . 'management/user-projects/{{$id}} class="btn btn-sm btn-primary" id="edit-subscriber" data-id="{{$id}}">
                <i class="fa fa-briefcase"></i>
                </a>
                <a href="#" class="btn btn-sm btn-primary edit-subscriber" id="edit-subscriber" data-id="{{$id}}"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-sm btn-danger delete-subscriber" id="delete-subscriber" data-id="{{$id}}"><i class="fa fa-trash"></i></a>'
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
        return $model->newQuery()->select('users.*')
            ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->where('model_has_roles.role_id', 4)
            ->where('users.is_deleted',0);

    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('subscribers-table')
            ->columns($this->getColumns())
            ->responsive(true)
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
            Column:: make('#')->title('No.')->searchable(false)->orderable(false),
            //Column::make('id'),
            Column::make('name'),
            Column::make('email'),
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
        return 'Subscribers_' . date('YmdHis');
    }
}
