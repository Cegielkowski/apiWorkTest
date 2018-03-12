<?php
/**
 * Created by PhpStorm.
 * User: Cegielkowski
 * Date: 27/02/2018
 * Time: 23:39
 */

namespace App\Repositories;

use App\Business\DuplicateFieldBusiness;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
class CustomerRepository
{
    /**
     * CustomerRepository constructor.
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }
    public function listAll()
    {
        $query = Customer::select('*');

        return $query->get();
    }

    public function find($id)
    {
        return $this->customer->find($id);
    }

    public function findBy($att, $column)
    {
        return $this->customer->where($att, $column);
    }

}