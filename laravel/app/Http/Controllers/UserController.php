<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    private int $id;

    private string $name;

    /**
     * @param  int  $id
     * @param  string  $name
     * @return int|float
     */
    public function listUserScore($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $baseScore = $this->id * 1.5;
        $nameMultiplier = strlen($this->name) / 10;

        if ($nameMultiplier < 1) {
            return (int) $baseScore;
        }

        return $baseScore * $nameMultiplier;
    }

    public function index()
    {
        $result = array();

        switch (request()->type) {
            case 'admin':
                $result = array(1, 2, 3);
                break;
            case 'user':
                $result = array(4, 5, 6);
                break;
        }

        return $result;
    }
}
