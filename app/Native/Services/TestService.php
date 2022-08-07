<?php

namespace App\Native\Services;

use App\Native\DataModels\ServiceResult;
use App\Native\Special\PermissionServiceTrait;

class TestService
{
    use PermissionServiceTrait;
    public function singleUser(object $appRequired, object $methodRequired) : ServiceResult {

        $this->resolvePermission($appRequired->userToken, $appRequired->permission);
        
        return (new ServiceResult())->schema([
            'userFound' => true,
            'userToken' => $methodRequired->userToken,
            'name' => "Istiaq Hasan",
            'email' => "istiaq.me@gmail.com",
            'sessionToken' => $appRequired->userSession,
        ]);
    }
}