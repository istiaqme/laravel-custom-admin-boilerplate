<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Native\Services\TestService;
use App\Native\DataModels\AppRequired;
use Exception;

class TestController extends Controller
{
    private $testService;
    
    function __construct(TestService $testService){
        $this->testService = $testService;
    }

    public function index(Request $request){
        try{
            /* 
                As no real request, auth & session object found
                below is the test purpose
            */
            $testRequestObject = (object) ['permission' => 'Can create bugs!!!'];
            $testAuthObject = (object) ['user_token' => 'UserUUID'];
            $testSessionObject = (object) ['token' => 'SessionUUID'];

            $appRequired = new AppRequired($testRequestObject, $testAuthObject, $testSessionObject);
            $appRequired->add([
                'newKey' => 'newValue',
                'anotherNewKey' => 'anotherNewValue'
            ]);

            /* 
                As no real object found
                below is the test purpose
            */
            $testMethodRequired = (object) ['userToken' => $appRequired->userToken];
            $singleUser = $this->testService->singleUser($appRequired, $testMethodRequired);
            dd($singleUser);
        }
        catch( \Exception $e){
            dd($e->getMessage());
        }
    }

}
