<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index() {
        $manag = Management::get();
        return view('admin.management', compact('manag'));
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Management::create([
            'name' => $data['name'],
            'description' => $data['description']
        ]);

        return redirect()->route('management.index')->with('mess', 'Успешно создано');
    }

    public function update(Request $request, $id){
        $management = Management::find($id);

        $data = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $management->update([
            'name' => $data['name'],
            'description' => $data['description']
        ]);

        return redirect()->route('management.index')->with('mess', 'Успешно обновлено');
    }
}
