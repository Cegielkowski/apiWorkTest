<?php

use App\Business\CustomerBusiness;
use App\Http\Controllers\Controller;

Class CustomerController extends Controller
{
    private $customer;

    public function __construct(CustomerBusiness $customer)
    {
        $this->customer = $customer;
    }

    public function allCustomers(){

        $this->customer->allCustomers();
        return 'Oi';
    }

    public function getCustomer ($id){
        $this->customer->getCustomer($id);
    }

    public function saveCustomer(){
        $this->customer->saveCustomer();
    }

    public function updateCustomer($id) {
        $this->customer->updateCustomer($id);
    }

    public function deleteCustumers($id) {
        $this->customer->deleteCustumers($id);
    }

}