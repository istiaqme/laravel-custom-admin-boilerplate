<?php 
namespace App\Native\Repositories;
use App\Models\User;

class UserRepository
{
    /* 
        @gets all user
        @no condition
    */
    public function loadAllUsers(){
        return User::get();
    }
}


