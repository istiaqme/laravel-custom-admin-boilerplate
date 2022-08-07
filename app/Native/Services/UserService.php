<?php 
namespace App\Native\Services;
use App\Native\Repositories\UserRepository;

class UserService
{
    private $userRepository;


    function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    /* 
        @gets all user
        @no condition
    */
    public function users(){
        return $this->userRepository->loadAllUsers();
    }
}


