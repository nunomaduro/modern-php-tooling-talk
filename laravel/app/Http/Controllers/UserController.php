<?php

namespace App\Http\Controllers;

use App\Models\User;

/**
class UserController
{
    public function index()
    {
        $result = array();

        switch (request()->type) {
            case 'admin':
                $result = array(1, 2, 3);
                break;
            case 'customer':
                $result = array(4, 5, 6);
                break;
        }

        return $result;
    }

    public function show(User $user): User
    {
        if (true) {
            $user = $user;
        }

        return $user;
    }
}
*/
