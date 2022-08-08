<?php 
namespace App\Native\Services;
use App\Native\Repositories\UserRepository;
use App\Native\Special\ServiceHelperTrait;

class UserService
{
    use ServiceHelperTrait;
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
    /* 
        @creates new user
    */
    public function create($appRequired, $methodRequired){
        $methodRequired->token = $this->makeToken();
        return $this->userRepository->create($methodRequired);
    }
}


