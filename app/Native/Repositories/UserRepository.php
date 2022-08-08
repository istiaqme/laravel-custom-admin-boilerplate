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
        @get single user by email
        @condition email
    */
    public function singleUserByEmail($email){
        return $this->userModel->where('email', $email)->first();
    }
    /* 
        @get single user by token
        @condition token
    */
    public function singleUserByToken($token){
        return $this->userModel->where('token', $token)->first();
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
    /* 
        @updates a  user with regular data
    */
    public function regularUpdate($token, $name, $email, $kind){
        $user = $this->userModel->where('token', $token)->first();
        $user->name = $name;
        $user->email = $email;
        $user->kind = $kind;
        $user->save();
        return $user;
    }
}


