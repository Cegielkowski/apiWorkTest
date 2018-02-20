<?php

use App\Business\UserBusiness;

class UserController extends BaseController
{
    private $user;

    public function __construct(UserBusiness $user)
    {
        $this->user = $user;
    }


    public function allUsers(){
        $this->user->allUsers();
    }

    public function getUser ($id){
        $this->user->getUser($id);
    }

    public function saveUser(){
        $this->user->saveUser();
    }

    public function updateUser($id) {
        $this->user->saveUser($id);
    }

    public function deleteUsers($id) {
        $this->user->deleteUsers($id);
    }
}