<?php

namespace App\Http\Controllers;

use App\Airport;
use App\Unit;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    // public function index()
    // {
    //   $airports = Airport::all();
    //   return view('airportindex', compact('airports'));
    // }

    public function create()
    {
      return view('airportcreate');
    }

    public function store(Request $request)
    {
      $airport = new Airport();
      $airport->name = $request->get('name');

      $airport->save();

      return redirect('/')->with('success', 'Airport has been added.');
    }

    public function edit($id)
    {
      $airport = Airport::find($id);
      return view('airportedit',compact('airport','id'));
    }


    public function update(Request $request, $id)
    {
        $airport = Airport::find($id);
        $airport->name = $request->get('name');
        $airport->save();
        return redirect('/')->with('success', 'Airport has been updated.');
    }

    public function destroy($id)
    {
        $airport = Airport::find($id);
        $airport->delete();
        return redirect('/')->with('success','Airport has been deleted');
    }



    public function index() {
        $airports = Airport::all();
        return view('pages.airports.index', compact('airports'));
    }
    //
    // public function create() {
    //
    // }
    //
    // public function store(Request $request) {
    //     $this->validate($request, [
    //         'name' => 'required|string',
    //     ]);
    //     Airport::create([
    //         'name' => $request->input('name'),
    //     ]);
    //
    //     return redirect()->route('airport.index');
    // }
    //
    // public function update(Request $request, $id) {
    //     $airport = Airport::find($id);
    //     $airport->name = $request->get('name');
    //
    //     $airport->save();
    //
    //     return redirect('')
    // }
    //
    // public function show(Airport $airport) {
    //     return view('pages.airports', compact('airport'));
    // }
    //
    public function details($airportId) {
        $airport = Airport::find($airportId);
        $units = Unit::where('airport_id', $airportId)->get();

        return view('pages.airports.details', compact('airport', 'units'));
    }
    //
    // public function log($airportId, $productId) {
    //     return view('pages.airports.log');
    // }
    //
    // public function logReport($airportId, $productId) {
    //     return view('pages.airports.log-report');
    // }
    //
    // public function product($airportId, $productId) {
    //     return view('pages.airports.product');
    // }
    //
    // public function warningEvent($airportId, $productId) {
    //     return view('pages.airports.warning-event');
    // }
}
