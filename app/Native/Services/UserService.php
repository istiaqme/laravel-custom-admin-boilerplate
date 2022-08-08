<?php 
namespace App\Native\Services;

use App\Exceptions\AppResourceFoundError;
use App\Exceptions\AppResourceNotFoundError;
use App\Native\Repositories\UserRepository;
use App\Native\Special\ServiceHelperTrait;
use Illuminate\Support\Facades\Hash;

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
        if($this->userRepository->singleUserByEmail(($methodRequired->email))){
            throw new AppResourceFoundError('User already exists.');
        }
        $methodRequired->token = $this->makeToken();
        $methodRequired->password = Hash::make($methodRequired->password);

        return $this->userRepository->create($methodRequired);
    }
    /* 
        @updates a user with regular data
    */
    public function regularUpdate($appRequired, $methodRequired){
        if(!$this->userRepository->singleUserByToken(($methodRequired->token))){
            throw new AppResourceNotFoundError('User does not exist.');
        }
        
        return $this->userRepository->regularUpdate(
            $methodRequired->token, 
            $methodRequired->name, 
            $methodRequired->email, 
            $methodRequired->kind
        );
    }
}


