<?php

namespace App\Native\DataModels;

class AppRequired
{
    public $userToken;
    public $userSession;
    public $permission;
    
    function __construct($request, $auth, $session) {
        $this->userToken = $auth->user_token;
        $this->userSession = $session->token;
        $this->permission = $request->permission;
    }
    
    public function add($keyValuePairs){
        foreach($keyValuePairs as $key => $value){
            $this->$key = $value;
        }
        return $this;
    }
}