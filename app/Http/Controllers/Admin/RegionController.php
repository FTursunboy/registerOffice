<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index() {
        $regions = region::get();
        return view('admin.region.index', compact('regions'));
    }
    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required'
        ]);

        region::create([
            'name' => $data['name'],
        ]);

        return redirect()->route('region.index')->with('mess', 'Успешно создано');
    }

    public function update(Request $request, $id){
        $region = region::find($id);

        $data = $request->validate([
            'name' => 'required',
        ]);

        $region->update([
            'name' => $data['name'],
        ]);

        return redirect()->route('region.index')->with('mess', 'Успешно обновлено');
    }
    public function delete($id){
        $region = region::find($id);
        $region->delete();
        return back()->with('mess', 'Успешно удалено');
    }
}
