<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use Exeception;

use App\Http\Controllers\Controller;

use App\Native\Services\UserService;


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
        
        try {
            $users = $this->userService->users();
            return view('dashboard/pages/private/UserList', [
                'users' => $users,
                'pageData' => []
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
