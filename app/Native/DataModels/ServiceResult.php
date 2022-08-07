<?php

namespace App\Native\DataModels;

class ServiceResult
{
    public function schema(array $data) : ServiceResult {
        foreach($data as $key => $item){
            $this->$key = $item;
        }
        return $this;
    }

}