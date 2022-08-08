<?php

namespace App\Native\DataModels;

class AppRequired
{
    public $userToken;
    public $userSession;
    public $permissions;
    
    function __construct($request) {
        $this->userToken = $request->session()->get('userToken');
        $this->userSession = $request->session()->get('sessionToken');
        $this->permissions = $request->session()->get('permissions');
    }
    
    public function add($keyValuePairs){
        foreach($keyValuePairs as $key => $value){
            $this->$key = $value;
        }
        return $this;
    }
}