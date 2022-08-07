<?php

namespace App\Native\Special;
use Error;

trait PermissionServiceTrait
{
    
    public function resolvePermission(string $userToken, string $permission) : bool {
        return $this->attempt($userToken, $permission);
    }

    private function attempt(string $userToken, string $permision) : bool {
        $permitted = true;
        // @check permission for this perticular user in database respository
        // test purpose return true
        if($permitted){
            return true;
        } else {
            throw new Error('Permission Not Granted');
        }
    }

}