<?php

namespace App\Native\Special;
use Error;
use Ramsey\Uuid\Uuid;

trait ServiceHelperTrait
{
    
    public function makeToken() {
        return str_replace('-', '', Uuid::uuid4());
    }

}