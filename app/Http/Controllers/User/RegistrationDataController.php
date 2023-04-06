<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationDataController extends Controller
{
    public function index() {
        return view('user.registrate');
    }

    public function store(RegistrationDataRequest $request) {
        dd(1);
    }
}
