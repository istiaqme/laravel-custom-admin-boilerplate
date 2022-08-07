<?php

namespace App\Http\Controllers\App;
use App\Http\Controllers\Controller;

use App\Native\Services\UserService;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;
    function __construct(UserService $userService){
        $this->userService = $userService;
    }
    /* 
        @loads private user list page view
    */
    public function privateUserListPage(){
        $users = $this->userService->users();
        return view('dashboard/pages/private/UserList', [
            'users' => $users,
            'pageData' => []
        ]);
    }
}
