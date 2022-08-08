<?php 
namespace App\Native\Repositories;
use App\Models\UserSession;

class UserSessionRepository
{
    
    private $userSession;
    private $defaultOrder = 'id';

    function __construct(UserSession $userSession)
    {
        $this->userSession = $userSession;
    }
    /* 
        @gets all sessions
        @no condition
    */
    public function loadAllSessions(){
        return $this->userSession->withTrashed()->orderBy($this->defaultOrder, 'DESC')->get();
    }
    /* 
        @destroy session
    */
    public function destroy($sessionToken){
        return $this->userSession->where('token', $sessionToken)->first()->delete();
    }
}
