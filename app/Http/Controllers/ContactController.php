<?php

use App\Business\ContactBusiness;

class ContactController extends BaseController
{
    private $contact;

    public function __construct(ContactBusiness $contact)
    {
        $this->contact = $contact;
    }

    public function allContacts(){
        $this->contact->allContacts();
    }

    public function getContact ($id){
        $this->contact->getContact($id);
    }

    public function saveContact(){
        $this->contact->saveContact();
    }

    public function updateContact($id) {
        $this->contact->updateContact($id);
    }

    public function deleteContacts($id) {
        $this->contact->deleteContacts($id);
    }
}