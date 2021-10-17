<?php

namespace App\Http\Controllers;

use App\DataTables\CustomerDataTable;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerDatatableController extends Controller
{
    public function index(CustomerDataTable $dataTable)
    {
        return $dataTable->render('data_table');
    }
}
