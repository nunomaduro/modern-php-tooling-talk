<?php

namespace App\Http\Controllers;

class UserController extends Controller
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
}
