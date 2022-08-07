<?php 
namespace App\Native\Repositories;
use App\Models\User;

class UserRepository
{
    
    private $userModel;

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }
    /* 
        @gets all user
        @no condition
    */
    public function loadAllUsers(){
        return $this->userModel->get();
    }
}


