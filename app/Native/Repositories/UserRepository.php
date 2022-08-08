<?php 
namespace App\Native\Repositories;
use App\Models\User;

class UserRepository
{
    
    private $userModel;
    private $defaultOrder = 'id';

    function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }
    /* 
        @gets all user
        @no condition
    */
    public function loadAllUsers(){
        return $this->userModel->orderBy($this->defaultOrder, 'DESC')->get();
    }
    /* 
        @creates new user
    */
    public function create($data){
        $newRow = new User();
        $newRow->token = $data->token;
        $newRow->name = $data->name;
        $newRow->email = $data->email;
        $newRow->password = $data->password;
        $newRow->kind = $data->kind;
        $newRow->save();
        return $newRow;
    }
}


