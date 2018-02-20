<?php

use App\Business\CustomerBusiness;

Class CustomerController extends BaseController
{
    private $customer;

    public function __construct(CustomerBusiness $customer)
    {
        $this->customer = $customer;
    }


    public function allCustomers(){
        $this->customer->allCustomers();
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