<?php

namespace App\DataTables;

use App\Models\Customer;
use App\Repositories\CustomerRepository;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;


class CustomerDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Customer $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(CustomerRepository $customerRepository)
    {
        return $customerRepository->searchQueryBulder([
            'id'             => $this->request()->get('id'),
            'first_name'     => $this->request()->get('first_name'),
            'last_name'      => $this->request()->get('last_name'),
        ]);
        // return $model->newQuery()->select(  
        //     'id',      
        //     'first_name',
        //     'last_name',
        //     'phone',
        //     'email',
        //     'age',
        //     'gender',
        //     'address'
        // );
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->parameters([
                        'searching'  => false,
                        'buttons'    => [],
                        "aaSorting"  => [],
                        "lengthMenu" => [[50, 100, 200], [50, 100, 200]],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title(__('User ID')),
            Column::make('first_name')->title(__('First Name')),
            Column::make('last_name')->title(__('Last Name')),
            Column::make('phone')->title(__('Phone')),
            Column::make('email')->title(__('Email')),
            Column::make('gender')->title(__('Gender')),
            Column::make('age')->title(__('age')),
            Column::make('address')->title(__('Address')),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Customer_' . date('YmdHis');
    }

    
}
