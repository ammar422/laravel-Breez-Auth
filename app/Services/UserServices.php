<?php

namespace App\Services;

use App\Models\User;

class UserServices
{
    public function selectUser($id){
    return User::where('id',$id);
    }
}
