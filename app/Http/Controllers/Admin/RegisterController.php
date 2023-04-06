<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index($id) {
        $register = register::where('otdel_id', $id)->first();
        return view('admin.registers', compact('register'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'manager' => 'required',
            'zam-director' => 'required',
            'otdel_id' => 'required',
            'phone' => 'requried',
            'sec_phone' => 'required',
            'email' => 'required',
            'index' => 'required',
            'region' => 'required',
            'street' => 'required',
            'street_number' => 'nullable',
            'status' => true,
        ]);

        register::create([
            'manager' => $data['manager'],
            'zam-director' => $data['zam-director'],
            'otdel_id' => $data['otdel_id'],
            'phone' => $data['phone'],
            'sec_phone' => $data['sec_phone'],
            'index' => $data['index'],
            'region' => $data['region'],
            'street' => $data['street'],
            'street_number' => $data['street_number'],
            'status' => $data['status']
        ]);

        return back()->with('mess', 'Бомуваффакият сабт шуд');

    }
}
