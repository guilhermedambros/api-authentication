<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    /**
     *
     * @return all users
     */
    public function users()
    {
        return response()->json(User::all());
    }
}
