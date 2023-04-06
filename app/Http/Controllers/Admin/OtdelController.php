<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\otdel;
use App\Models\region;
use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtdelController extends Controller
{
    public function index() {
        $otdels = DB::table('otdels as o')
            ->join('regions as r', 'r.id', 'o.region_id')
            ->select('r.name as region', 'o.*')
            ->get();
        $regions = region::get();
        return view('admin.otdel', compact('otdels', 'regions'));

    }
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'region_id' => 'required'
        ]);


        otdel::create([
            'name' => $data['name'],
            'region_id' => $data['region_id']
        ]);

        return redirect()->route('otdel.index')->with('mess', 'Бомуваффакият илова карда шуд');

    }
    public function update(Request $request, $id){
        $otdel = otdel::find($id);
        $data = $request->validate([
            'name' => 'required',
            'region_id' => 'required'
        ]);
        $otdel = $otdel->update([
            'name' => $data['name'],
            'region_id' => $data['region_id']
        ]);

        return back()->with('mess', 'Иваз карда шуд');
    }
    public function delete($id) {
        $otdel = otdel::find($id);
        $otdel->delete();
        return back()->with('mess', 'Бомуваффакият хорич карда шуд');
    }




}
