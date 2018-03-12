<?php
namespace App\Business;
use App\Model;
use App\Repositories\CustomerRepository;

Class CustomerBusiness
{

    /**
     * CustomerBusiness constructor.
     */
    public function __construct( CustomerRepository $customer)
    {
        $this->customer = $customer;
    }

    public function allCustomers(){
        return $this->customer->listAll();
    }

    public function getCustomer ($id){

    }

    public function saveCustomer(){

    }

    public function updateCustomer($id) {

    }

    public function deleteCustumers($id) {

    }

}