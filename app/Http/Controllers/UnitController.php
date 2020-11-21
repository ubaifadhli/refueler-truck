<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
      $units = Unit::all();
      return view('unitindex', compact('units'));
    }

    public function create()
    {
      return view('unitcreate');
    }

    public function store(Request $request)
    {
      $unit = new Unit();
      $unit->name = $request->get('name');
      $unit->airport_id = $request->get('airport_id');

      $unit->save();

      return redirect('/')->with('success', 'Unit has been added.');
    }

    public function edit($id)
    {
      $unit = Unit::find($id);
      return view('unitedit',compact('unit','id'));
    }


    public function update(Request $request, $id)
    {
        $unit= Unit::find($id);
        $unit->name = $request->get('name');
        $unit->airport_id = $request->get('airport_id');

        $unit->save();
        return redirect('/')->with('success', 'Unit has been updated.');
    }

    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        return redirect('/')->with('success','Unit has been deleted');
    }

      // public function index()
      // {
      //     return view('pages.units');
      // }
}
