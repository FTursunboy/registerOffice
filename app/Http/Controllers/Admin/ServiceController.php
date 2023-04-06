<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\region;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $services = Services::get();
        return view('admin.services', compact('services'));
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required'
        ]);

        Services::create([
            'name' => $data['name'],
        ]);

        return redirect()->route('services.index')->with('mess', 'Успешно создано');
    }

    public function update(Request $request, $id){
        $service = Services::find($id);

        $data = $request->validate([
            'name' => 'required',
        ]);

        $service->update([
            'name' => $data['name']
        ]);

        return redirect()->route('services.index')->with('mess', 'Успешно обновлено');
    }

}
