<?php

namespace App\Repositories;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerRepository extends BaseRepository
{
    protected $modelName = Customer::class;

    public function searchQueryBulder($filter = [])
    {
        $query = DB::table('customers')
                   ->select( 
                        'id',      
                        'first_name',
                        'last_name',
                        'phone',
                        'email',
                        'age',
                        'gender',
                        'address'
                   );

        if (!empty($filter['id'])) {

            $query->where('customers.id', $filter['id']);
        }

        if (!empty($filter['first_name'])) {

            $query->where('customers.first_name', $filter['first_name']);
        }

        if (!empty($filter['last_name'])) {

            $query->where('customers.last_name', $filter['last_name']);
        }
        return $query->get();
    }
}
