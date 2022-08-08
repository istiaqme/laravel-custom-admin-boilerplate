<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use Exeception;

use App\Http\Controllers\Controller;

use App\Native\Services\UserService;
use App\Native\DataModels\AppRequired;


class UserController extends Controller
{
    private $userService;
    
    function __construct(UserService $userService){
        $this->userService = $userService;
    }
    /* 
        @loads private user list page view - GET
    */
    public function privateUserListPage(){
        
        try {
            $users = $this->userService->users();
            return view('dashboard/pages/private/UserList', [
                'users' => $users,
                'pageData' => [
                    'title'=> 'User List',
                    'pageTitle' => 'User List'
                ]
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    /* 
        @create private user action  - POST
    */
    public function privateUserCreateAction(Request $request){
        
        try {
            $appRequired = new AppRequired($request);
            $this->userService->create($appRequired, $request);
            return redirect()->back()->with([
                'appMessage' => 'A new user has been created.',
                'appMessageType' => 'success'
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    /* 
        @update private user update action  - POST
    */
    public function privateUserUpdateAction(Request $request){
        
        try {
            $appRequired = new AppRequired($request);
            $this->userService->regularUpdate($appRequired, $request);
            return redirect()->back()->with([
                'appMessage' => 'User has been updated successfully.',
                'appMessageType' => 'primary'
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    /* 
        @update private user password update action  - POST
    */
    public function privateUserPasswordUpdateAction(Request $request){
        
        try {
            $appRequired = new AppRequired($request);
            $updatedRow = $this->userService->passwordUpdate($appRequired, $request);
            return redirect()->back()->with([
                'appMessage' => "Password has been updated successfully for $updatedRow->name",
                'appMessageType' => 'info'
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    /* 
        @delete private user action - GET
    */
    public function privateUserDiscardAction(Request $request){
        
        try {
            $appRequired = new AppRequired($request);
            $updatedRow = $this->userService->discard($appRequired, $request);
            return redirect()->back()->with([
                'appMessage' => "User has been discarded from storage.",
                'appMessageType' => 'warning'
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    
}
